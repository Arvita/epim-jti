<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\TcpIt;
use App\Models\LombaIt;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $event = Auth::user()->event;
        if(empty($event)){
            return view('user.pages.pilihan');
        }
        $data = [];
        if($event == 'lomba_it'){
            $data = [
                'title' => 'Lomba Konfigurasi Jaringan IT',
            ];
        }elseif($event == 'tcp_it'){
            $data = [
                'title' => 'Lomba Bisnis Jaringan TIK',
            ];
        }else{
            $data = [
                'title' => '',
            ];
        }
        return view('user.dashboard', $data)->render();

    }


    // TCP IT
    public function list_proposal(){

        if(Auth::user()->event != 'tcp_it'){
            return \abort(404);
        }
        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $data = [
            'proposal' => $user->tcp_its
        ];

        // \dd($user->tcp_its);
        return view('user.pages.tcp.index',$data)->render();

    }




    public function pilihan(Request $request)
    {
        $id = $request->session()->get('id');

        $user = User::find($id);
        $user->event = $request->event;
        $user->save();
        return redirect()->route('user.dashboard');
    }

    public function registrasi_lomba(Request $request)
    {

        $id_user = Auth::user()->id;

        $user = User::find($id_user);

        if($request->submit == 'lomba_it'){
            $this->register_lomba_it($request);
            $user->event = 'lomba_it';
        }

        if($request->submit == 'tcp_it'){
            $this->register_tcp_it($request);
            $user->event = 'tcp_it';
        }


        $user->save();

        return \redirect()->route('user.dashboard');
    }

    public function register_tcp_it(Request $request){
        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $email = $user->email;
        // \dd($request);

        $request->validate([
            'email_t' => 'required|email',
            'nama_tim_t' => 'required',
            'perguruan_tinggi_t' => 'required|min:8',
            'judul_proposal_t' => 'required|min:8',
            'nama_ketua_t' => 'required',
            'proposal_t' => 'required|mimes:pdf|max:20000',
            'biodata_t' => 'required|mimes:pdf|max:1024',
                ],
                [
                    'email_t.required' => 'Harap mengisi email terlebih dahulu',
                    'nama_tim_t.required' => 'Harap mengisi nama tim terlebih dahulu',
                    // dan seterusnya
                ]
            );

        $tcp_it = new TcpIt();
        $tcp_it->user_id = $user->id;
        $tcp_it->email = $request->email_t;
        $tcp_it->nama_tim = $request->nama_tim_t;
        $tcp_it->perguruan_tinggi = $request->perguruan_tinggi_t;
        $tcp_it->judul_proposal = $request->judul_proposal_t;
        $tcp_it->nama_ketua = $request->nama_ketua_t;
        $tcp_it->nama_anggota1 = $request->nama_anggota1_t;
        $tcp_it->nama_anggota2 = $request->nama_anggota2_t;

        //Set status to not verified at first time data added
        $tcp_it->status = 'not verified';

        // FileName
        $proposal_t = time().'.'.$request->proposal_t->extension();
        $biodata_t = time().'.'.$request->biodata_t->extension();

        // Save To Folder
        $request->proposal_t->move(public_path('/upload/tcp/'.$email), $proposal_t);
        $request->biodata_t->move(public_path('/upload/tcp/'.$email), $biodata_t);

        //Save To DB
        $tcp_it->proposal = 'tcp/'.$email.'/'.$proposal_t;
        $tcp_it->biodata = 'tcp/'.$email.'/'.$biodata_t;




        foreach ($request->ktm_t as $ktm) {
            $ktm_t = time().'.'.$ktm->extension();
            $ktm->move(public_path('/upload/tcp/'.$email), $ktm_t);
            $foto_ktm[] = 'tcp/'.$email.'/'.$ktm_t;
        }
        $tcp_it->ktm = $foto_ktm;
        $tcp_it->save();

        if( request()->is('peserta/proposal') ){
            return \redirect()->back();
        }

    }
    public  function register_lomba_it(Request $request)
    {
        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $email = $user->email;

        $request->validate([
            'email_l' => 'required|email',
            'nama_peserta_l' => 'required|min:4',
            'nis_l' => 'required',
            'tempat_lahir_l' => 'required',
            'tanggal_lahir_l' => 'required',
            'jenis_kelamin_l' => 'required',
            'usia_l' => 'required|numeric',
            'no_wa_peserta_l' => 'required|min:10',
            'nama_pendamping_l' => 'required',
            'nip_l' => 'required|numeric',
            'no_wa_pendamping_l' => 'required|min:10',
            'foto_peserta_l' => 'required|max:300|mimes:jpg,jpeg,png',
            'kartu_pelajar_l' => 'required|max:300|mimes:pdf',
            'surat_pernyataan_l' => 'required|max:1024|mimes:pdf',
            'bukti_pembayaran_l' => 'required|max:1024|mimes:pdf',
            'lampiran_guru_l' => 'required|max:1024|mimes:pdf',
        ],[
            'email_l.required' => 'Harap mengisi email terlebih dahulu',
            'nama_peserta_l.required' => 'Harap mengisi nama peserta terlebih dahulu',
            // dan seterusnya
        ]);




        $lomba_it = new LombaIt();
        $lomba_it->user_id = $user->id;
        $lomba_it->email = $request->email_l;
        $lomba_it->nama_peserta = $request->nama_peserta_l;
        $lomba_it->nis = $request->nis_l;
        $lomba_it->tempat_lahir = $request->tempat_lahir_l;
        $lomba_it->tanggal_lahir = $request->tanggal_lahir_l;
        $lomba_it->jenis_kelamin = $request->jenis_kelamin_l;
        $lomba_it->usia = $request->usia_l;
        $lomba_it->no_wa_peserta = $request->no_wa_peserta_l;
        $lomba_it->nama_pendamping = $request->nama_pendamping_l;
        $lomba_it->nip = $request->nip_l;
        $lomba_it->no_wa_pendamping = $request->no_wa_pendamping_l;

        //Set status to proses at first time data added
        $lomba_it->status = 'not verified';

        // FileName
        $foto_peserta_l = time().'.'.$request->foto_peserta_l->extension();
        $kartu_pelajar_l = time().'.'.$request->kartu_pelajar_l->extension();
        $surat_pernyataan_l = time().'.'.$request->surat_pernyataan_l->extension();
        $bukti_pembayaran_l = time().'.'.$request->bukti_pembayaran_l->extension();
        $lampiran_guru_l = time().'.'.$request->lampiran_guru_l->extension();

        // Save To Folder
        $request->foto_peserta_l->move(public_path('/upload/lomba/'.$email), $foto_peserta_l);
        $request->kartu_pelajar_l->move(public_path('/upload/lomba/'.$email), $kartu_pelajar_l);
        $request->surat_pernyataan_l->move(public_path('/upload/lomba/'.$email), $surat_pernyataan_l);
        $request->bukti_pembayaran_l->move(public_path('/upload/lomba/'.$email), $bukti_pembayaran_l);
        $request->lampiran_guru_l->move(public_path('/upload/lomba/'.$email), $lampiran_guru_l);

        //Save To DB
        $lomba_it->foto_peserta = 'lomba/'.$email.'/'.$foto_peserta_l;
        $lomba_it->kartu_pelajar = 'lomba/'.$email.'/'.$kartu_pelajar_l;
        $lomba_it->surat_pernyataan = 'lomba/'.$email.'/'.$surat_pernyataan_l;
        $lomba_it->bukti_pembayaran = 'lomba/'.$email.'/'.$bukti_pembayaran_l;
        $lomba_it->lampiran_guru = 'lomba/'.$email.'/'.$lampiran_guru_l;
        $lomba_it->save();

    }


    // public function dropzone()
    // {
    //     $files = scandir(public_path('images'));
    //     $data = [];
    //     foreach ($files as $row) {
    //         if ($row != '.' && $row != '..') {
    //             $data[] = [
    //                 'name' => explode('.', $row)[0],
    //                 'url' => asset('images/' . $row)
    //             ];
    //         }
    //     }
    //     return view('welcome', compact('data'));
    // }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        return response()->json(['success'=> $imageName]);
    }
}

