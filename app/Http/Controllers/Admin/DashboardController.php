<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Hello World From Dashboard Controller',
        ];

        return view('admin.dashboard', $data)->render();
    }
}
