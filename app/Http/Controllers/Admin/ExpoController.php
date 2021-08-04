<?php

namespace App\Http\Controllers\Admin;
use App\Models\Expo;

use App\Models\User;
use App\Models\ExpoIt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $data_lomba = ExpoIt::latest()->get();
        $data_peserta = User::where('event', 'expo_it')->get();
        $data_verified = ExpoIt::where('status', 'verified')->get();
        $data_not_verified = ExpoIt::where('status', 'not verified')->get();
        $data_pending = ExpoIt::where('status', 'pending')->get();


        $data = [
            'data_admin' => $user,
            'data_lomba' => $data_lomba,
            'data_peserta' => $data_peserta,
            'data_verified' => $data_verified,
            'data_not_verified' => $data_not_verified,
            'data_pending' => $data_pending,
        ];
        // dd($data);
        return view('admin.pages.expo.index', $data)->render();
    }

    public function updateEvent(Request $request)
    {
        $expo_it = ExpoIt::find($request->id);
        $expo_it->status = $request->status;
        $expo_it->save();
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expo = Expo::all();
        return view('user.pages.expo.index', compact('expo'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = ExpoIt::find($request->id);
        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $expo = ExpoIt::where('id', $request->id)->first();
        $folder_path = User::select('email')->where('id', $expo->user_id)->first();
        $path = 'upload/expo/'.$folder_path['email'];
        if (\File::exists(public_path($path))) \File::deleteDirectory(public_path($path));
        $expo->delete();
        return redirect()->refresh();
    }
}
