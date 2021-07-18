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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tim' => 'required',
            'prodi' => 'required',
            'semester' => 'required',
            'nama_ketua' => 'required',
            'nim_ketua' => 'required',
            'email' => 'required',
            'no_wa' => 'required',
            'nama_anggota' => 'required',
            'nim_anggota' => 'required',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'ktm' => 'required',
            'image_produk' => 'required',

        ]);

        $expo = new Expo();
        $expo->nama_tim = $request->nama_tim;
        $expo->prodi = $request->prodi;
        $expo->semester = $request->semester;
        $expo->nama_ketua = $request->nama_ketua;
        $expo->nim_ketua = $request->nim_ketua;
        $expo->email = $request->email;
        $expo->no_wa = $request->no_wa;
        $expo->nama_anggota = $request->nama_anggota;
        $expo->nim_anggota = $request->nim_anggota;
        $expo->nama_produk = $request->nama_produk;
        $expo->kategori = $request->kategori;
        $expo->deskripsi = $request->deskripsi;
        $expo->id = $request->id;

        $ktmPath = "";
        if ($request->hasFile('ktm')) {
            $ktm = $request->ktm;
            $ktmName = time() . $ktm->getClientOriginalName();
            $ktm->move('users/img/expo/ktm/', $ktmName);
            $ktmPath = 'users/img/expo/ktm/' . $ktmName;
        }
        $expo->ktm = $ktmPath;

        $imageProdukPath = "";
        if ($request->hasFile('image_produk')) {
            $imageProduk = $request->image_produk;
            $imageProdukName = time() . $imageProduk->getClientOriginalName();
            $imageProduk->move('users/img/expo/imageProduk/', $imageProdukName);
            $imageProdukPath = 'users/img/expo/imageProduk/' . $imageProdukName;
        }
        $expo->image_produk = $imageProdukPath;

        $expo->save();

        return redirect()->route('form.expo');
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
    public function destroy($id)
    {
        $expo = Expo::where('id', $id)->first();
        if (file_exists($expo->ktm, $expo->image_produk)) {
            unlink($expo->ktm, $expo->image_produk);
        }
        $expo->delete();
        return redirect()->route('list.expo');
    }
}
