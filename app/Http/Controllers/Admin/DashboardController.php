<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExpoIt;
use App\Models\LombaIt;
use App\Models\TcpIt;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $peserta_expo = User::where('event', 'expo_it')->get();
        $peserta_expo = ExpoIt::all()->count();
        // $peserta_tcp = User::where('event', 'tcp_it')->get();
        $peserta_tcp = TcpIt::all()->count();
        // $peserta_lomba = User::where('event', 'lomba_it')->get();
        $peserta_lomba = LombaIt::all()->count();
        $all_peserta = $peserta_expo + $peserta_lomba + $peserta_tcp;


        $data = [
            'peserta_expo' => $peserta_expo,
            'peserta_tcp' => $peserta_tcp,
            'peserta_lomba' => $peserta_lomba,
            'all_peserta' => $all_peserta,
            'title' => 'Admin Dashboard',

        ];
        return view('admin.dashboard', $data)->render();
    }


}
