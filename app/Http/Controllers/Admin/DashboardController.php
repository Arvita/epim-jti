<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $peserta_expo = User::where('event', 'expo_it')->get();
        $peserta_tcp = User::where('event', 'tcp_it')->get();
        $peserta_lomba = User::where('event', 'lomba_it')->get();
        $all_peserta = User::where('event', 'expo_it')->orWhere('event', 'tcp_it')->orWhere('event', 'lomba_it')->get();


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
