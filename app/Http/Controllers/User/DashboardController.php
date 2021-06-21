<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $event = Auth::user()->event;
        $data = [];
        if($event == 'lomba_it'){
            $data = [
                'title' => 'Lomba Konfigurasi Jaringan IT',
            ];
        }elseif($event == 'bisnis_tik'){
            $data = [
                'title' => 'Lomba Bisnis Jaringan TIK',
            ];
        }

        if(!empty($event)){
            return view('user.dashboard', $data)->render();
        }

        return view('user.pages.pilihan');
    }

    public function pilihan(Request $request)
    {
        $id = $request->session()->get('id');

        $user = User::find($id);
        $user->event = $request->event;
        $user->save();
        return redirect()->route('user.dashboard');
    }

    public function registrasi_bisnis(Request $request)
    {
        $id_user = Auth::user()->id;

        $user = User::find($id_user);
        $id_user = Auth::user()->id;

        $user = User::find($id_user);
        $user->event = 'bisnis_tik';
        $user->save();

        return \redirect()->route('user.dashboard');
    }

    public function registrasi_lomba(Request $request)
    {
        $id_user = Auth::user()->id;

        $user = User::find($id_user);
        $id_user = Auth::user()->id;

        $user = User::find($id_user);
        $user->event = 'lomba_it';
        $user->save();

        return \redirect()->route('user.dashboard');
    }
}
