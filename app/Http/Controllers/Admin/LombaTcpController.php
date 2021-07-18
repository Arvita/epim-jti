<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Models\TcpIt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LombaTcpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $data_lomba = TcpIt::latest()->get();
        $data_peserta = User::where('event', 'tcp_it')->get();
        $data_verified = TcpIt::where('status', 'verified')->get();
        $data_not_verified = TcpIt::where('status', 'not verified')->get();
        $data_pending = TcpIt::where('status', 'pending')->get();
        $data = [
            'data_admin' => $user,
            'data_lomba' => $data_lomba,
            'data_peserta' => $data_peserta,
            'data_verified' => $data_verified,
            'data_not_verified' => $data_not_verified,
            'data_pending' => $data_pending,
        ];


        // dd($data);
        return view('admin.pages.tcp.index', $data)->render();
    }

    /**
     * Update status verified
     *
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request)
    {
        $tcp_it = TcpIt::find($request->id);
        $tcp_it->status = $request->status;
        $tcp_it->save();
        return redirect()->back();
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tcpIt = TcpIt::all();
        return view('user.pages.tcp_it.index', compact('tcpIt'));
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
            'nama_tim' => 'required',
            'perguruan_tinggi' => 'required',
            'judul_proposal' => 'required',
            'nama_ketua' => 'required',
            'nama_anggota1' => 'required',
            'nama_anggota2' => 'required',
            'ktm' => 'required',
            'url_biodata' => 'required',
            'bmc' => 'required',

        ]);

        $tcpIt = new TcpIt();
        $tcpIt->email = $request->email;
        $tcpIt->nama_tim = $request->nama_tim;
        $tcpIt->perguruan_tinggi = $request->perguruan_tinggi;
        $tcpIt->judul_proposal = $request->judul_proposal;
        $tcpIt->nama_ketua = $request->email;
        $tcpIt->nama_anggota1 = $request->nama_anggota1;
        $tcpIt->nama_anggota2 = $request->nama_anggota2;
        $tcpIt->ktm = $request->ktm;
        $tcpIt->url_biodata = $request->url_biodata;
        $tcpIt->bmc = $request->bmc;
        $tcpIt->id = $request->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = TcpIt::find($request->id);
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
        //
    }
}
