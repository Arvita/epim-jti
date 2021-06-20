<?php

namespace App\Http\Controllers;

use App\Models\LombaIt;
use Illuminate\Http\Request;

class LombaItController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $data = LombaIt::latest()->get();

        return view('admin.pages.lomba_it.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lombaIt = LombaIt::all();
        return view('user.pages.lomba_it.index', compact('lombaIt'));
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
            'email' => 'required',
            'nama' => 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'no_wa' => 'required',
            'nama_pendamping' => 'required',
            'nip' => 'required',
            'no_wa_pendamping' => 'required',
            'foto_ketua' => 'required',
            'kartu_pelajar' => 'required',
            'foto_peserta1' => 'required',
            'foto_peserta2' => 'required',
            'foto_peserta3' => 'required',

        ]);

        $lombaIt = new LombaIt();
        $lombaIt->email = $request->email;
        $lombaIt->nis = $request->nis;
        $lombaIt->tempat_lahir = $request->tempat_lahir;
        $lombaIt->jenis_kelamin = $request->jenis_kelamin;
        $lombaIt->usia = $request->usia;
        $lombaIt->no_wa = $request->no_wa;
        $lombaIt->nama_pendamping = $request->nama_pendamping;
        $lombaIt->nip = $request->nip;
        $lombaIt->no_wa_pendamping = $request->no_wa_pendamping;
        $lombaIt->foto_peserta1 = $request->foto_peserta1;
        $lombaIt->foto_peserta2 = $request->foto_peserta2;
        $lombaIt->foto_peserta3 = $request->foto_peserta3;
        $lombaIt->id = $request->id;

        $fotoKetuaPath = "";
        if ($request->hasFile('foto_ketua')) {
            $fotoKetua = $request->foto_ketua;
            $fotoKetuaName = time() . $fotoKetua->getClientOriginalName();
            $fotoKetua->move('users/img/lombaIt/fotoKetua/', $fotoKetuaName);
            $fotoKetuaPath = 'users/img/lombaIt/fotoKetua/' . $fotoKetuaName;
        }
        $lombaIt->foto_ketua = $fotoKetuaPath;

        $fotoPeserta1Path = "";
        if ($request->hasFile('foto_peserta1')) {
            $fotoPeserta1 = $request->foto_peserta1;
            $fotoPeserta1Name = time() . $fotoPeserta1->getClientOriginalName();
            $fotoPeserta1->move('users/img/lombaIt/fotoPeserta/', $fotoPeserta1Name);
            $fotoPeserta1Path = 'users/img/lombaIt/fotoPeserta/' . $fotoPeserta1Name;
        }
        $lombaIt->foto_ketua = $fotoPeserta1Path;

        $fotoKetuaPath = "";
        if ($request->hasFile('foto_ketua')) {
            $fotoKetua = $request->foto_ketua;
            $fotoKetuaName = time() . $fotoKetua->getClientOriginalName();
            $fotoKetua->move('users/img/lombaIt/fotoKetua/', $fotoKetuaName);
            $fotoKetuaPath = 'users/img/lombaIt/fotoKetua/' . $fotoKetuaName;
        }
        $lombaIt->foto_ketua = $fotoKetuaPath;

        $fotoKetuaPath = "";
        if ($request->hasFile('foto_ketua')) {
            $fotoKetua = $request->foto_ketua;
            $fotoKetuaName = time() . $fotoKetua->getClientOriginalName();
            $fotoKetua->move('users/img/lombaIt/fotoKetua/', $fotoKetuaName);
            $fotoKetuaPath = 'users/img/lombaIt/fotoKetua/' . $fotoKetuaName;
        }
        $lombaIt->foto_ketua = $fotoKetuaPath;

        $lombaIt->save();

        return redirect()->route('form.expo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $lombaIt = LombaIt::where('id', $id)->first();
        if (file_exists(
            $lombaIt->foto_ketua,
            $lombaIt->foto_peserta1,
            $lombaIt->foto_peserta2,
            $lombaIt->foto_peserta3
        )) {
            unlink(
                $lombaIt->foto_ketua,
                $lombaIt->foto_peserta1,
                $lombaIt->foto_peserta2,
                $lombaIt->foto_peserta3
            );
        }
        $lombaIt->delete();
        return redirect()->route('list.lombaIt');
    }
}
