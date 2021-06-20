<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Hello From Dashboard User'
        ];

        return view('user.dashboard', $data)->render();
    }
}
