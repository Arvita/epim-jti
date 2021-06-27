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
        if (empty($event)) {
            return view('user.pages.pilihan');
        }
        $data = [];
        if ($event == 'lomba_it') {
            $data = [
                'title' => 'Lomba Konfigurasi Jaringan IT',
            ];
        } elseif ($event == 'tcp_it') {
            $data = [
                'title' => 'Lomba Bisnis TIK',
            ];
        } else {
            $data = [
                'title' => '',
            ];
        }
        return view('user.dashboard', $data)->render();
    }


    // TCP IT
    public function list_proposal()
    {

        if (Auth::user()->event != 'tcp_it') {
            return \abort(404);
        }
        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $data = [
            'proposal' => $user->tcp_its
        ];

        // \dd($user->tcp_its);
        return view('user.pages.tcp.index', $data)->render();
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

        if ($request->submit == 'lomba_it') {
            $this->register_lomba_it($request);
            $user->event = 'lomba_it';
        }

        if ($request->submit == 'tcp_it') {
            $this->register_tcp_it($request);
            $user->event = 'tcp_it';
        }


        $user->save();

        return \redirect()->route('user.dashboard');
    }

    public function register_tcp_it(Request $request)
    {
        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $email = $user->email;
        // \dd($request);

        $request->validate(
            [
                'email_t'               => 'required|email',
                'nama_tim_t'            => 'required',
                'perguruan_tinggi_t'    => 'required|min:8',
                'judul_proposal_t'      => 'required|min:8',
                'nama_ketua_t'          => 'required',
                'proposal_t'            => 'required|mimes:pdf|max:20000',
                'biodata_t'             => 'required|mimes:pdf|max:1024',
                'bukti_pembayaran_t'    => 'required|mimes:pdf,jpg,jpeg,png|max:1024',
                'twibbon_t'             => 'required|max:1024|mimes:jpg,jpeg,png',
            ],
            [
                'email_t.required'              => 'Email wajib di isi',
                'email_t.email'                 => 'Format email yang anda masukkan salah',
                'nama_tim_t.required'           => 'Nama tim wajib di isi',
                'perguruan_tinggi_t.required'   => 'Perguruan tinggi wajib di isi',
                'perguruan_tinggi_t.min'        => 'Harap mengisi perguruan tinggi minimal 8 karakter',
                'judul_proposal_t.required'     => 'Judul proposal wajib di isi',
                'judul_proposal_t.min'          => 'Harap mengisi judul minimal 8 karakter',
                'nama_ketua_t.required'         => 'Nama ketua tim wajib di isi',
                'proposal_t.required'           => 'Proposal wajib di isi',
                'proposal_t.mimes'              => 'Proposal harus berformat .pdf',
                'proposal_t.max'                => 'Ukuruan proposal maksimal 20MB',
                'biodata_t.required'            => 'Biodata tim wajib di isi',
                'biodata_t.mimes'               => 'Biodata tim harus berformat .pdf',
                'biodata_t.max'                 => 'Ukuran biodata tim maksimal 1MB',
                'bukti_pembayaran_t.required'   => 'Bukti pembayaran wajib di isi',
                'bukti_pembayaran_t.mimes'      => 'Bukti pembayaran harus berformat .pdf .jpg .jpeg .png',
                'bukti_pembayaran_t.max'        => 'Ukuran Bukti pembayaran maksimal 1MB',
                'twibbon_t.required'            => 'Bukti upload twibbon wajib di isi',
                'twibbon_t.required'            => 'Ukuran Bukti upload twibbon maksimal 1MB',
                'twibbon_t.required'            => 'Bukti upload twibbon harus berformat .jpg .jpeg .png',
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
        $tcp_it->status = 'pending';

        // FileName
        $proposal_t = time() . '.' . $request->proposal_t->extension();
        $bukti_pembayaran_t = time() . '.' . $request->bukti_pembayaran_t->extension();
        $biodata_t = time() . '.' . $request->biodata_t->extension();
        $twibbon_t = time() . '.' . $request->twibbon_t->extension();

        // Save To Folder
        $request->bukti_pembayaran_t->move(public_path('/upload/tcp/' . $email), $bukti_pembayaran_t);
        $request->proposal_t->move(public_path('/upload/tcp/' . $email), $proposal_t);
        $request->biodata_t->move(public_path('/upload/tcp/' . $email), $biodata_t);
        $request->twibbon_t->move(public_path('/upload/tcp/' . $email), $twibbon_t);

        //Save To DB
        $tcp_it->proposal = 'tcp/' . $email . '/' . $proposal_t;
        $tcp_it->bukti_pembayaran = 'tcp/' . $email . '/' . $bukti_pembayaran_t;
        $tcp_it->biodata = 'tcp/' . $email . '/' . $biodata_t;
        $tcp_it->twibbon = 'tcp/' . $email . '/' . $twibbon_t;




        foreach ($request->ktm_t as $ktm) {
            $ktm_t = time() . '.' . $ktm->extension();
            $ktm->move(public_path('/upload/tcp/' . $email), $ktm_t);
            $foto_ktm[] = 'tcp/' . $email . '/' . $ktm_t;
        }
        $tcp_it->ktm = $foto_ktm;
        $tcp_it->save();

        if (request()->is('peserta/proposal')) {
            return \redirect()->back();
        }
    }
    public  function register_lomba_it(Request $request)
    {
        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $email = $user->email;

        $request->validate([
            'email_l'               => 'required|email',
            'nama_peserta_l'        => 'required|min:4',
            'nis_l'                 => 'required',
            'tempat_lahir_l'        => 'required',
            'tanggal_lahir_l'       => 'required',
            'jenis_kelamin_l'       => 'required',
            'usia_l'                => 'required|numeric',
            'no_wa_peserta_l'       => 'required|min:10',
            'nama_pendamping_l'     => 'required',
            'nip_l'                 => 'required|numeric|digits_between:18,18',
            'no_wa_pendamping_l'    => 'required|min:10',
            'foto_peserta_l'        => 'required|max:300|mimes:jpg,jpeg,png',
            'kartu_pelajar_l'       => 'required|max:300|mimes:pdf,jpg,jpeg,png',
            'surat_pernyataan_l'    => 'required|max:1024|mimes:pdf',
            'bukti_pembayaran_l'    => 'required|max:1024|mimes:pdf',
            'lampiran_guru_l'       => 'required|max:1024|mimes:pdf',
            'twibbon_l'             => 'required|max:1024|mimes:jpg,jpeg,png',
        ], [
            'email_l.required'              => 'Email wajib di isi',
            'email_l.email'                 => 'Format email yang anda masukkan salah',
            'nama_peserta_l.required'       => 'Nama peserta wajib di isi',
            'nama_peserta_l.min'            => 'Harap mengisi nama peserta minimal 4 karakter',
            'nis_l.required'                => 'NIS wajib di isi',
            'tempat_lahir_l.required'       => 'Tempat lahir wajib di isi',
            'tanggal_lahir_l.required'      => 'Tanggal lahir wajib di isi',
            'jenis_kelamin_l.required'      => 'Jenis kelamin wajib di isi',
            'usia_l.required'               => 'Usia wajib di isi',
            'usia_l.numeric'                => 'Harap mengisi usia dengan angka!',
            'no_wa_peserta_l.required'      => 'Nomor WhatsApp peserta wajib di isi',
            'no_wa_peserta_l.min'           => 'Harap mengisi nomor WhatsApp peserta minimal 10 karakter',
            'nama_pendamping_l.required'    => 'Nama pendamping wajib di isi',
            'nip_l.required'                => 'NIP pendamping wajib di isi',
            'nip_l.digits_between'          => 'NIP harus 18 digit',
            'nip_l.numeric'                 => 'Harap masukkan NIP pendamping dengan angka!',
            'no_wa_pendamping_l.required'   => 'Nomor WhatsApp pendamping wajib di isi',
            'no_wa_pendamping_l.min'        => 'Harap mengisi nomor WhatsApp pendamping minimal 10 karakter',
            'foto_peserta_l.required'       => 'Foto peserta wajib di isi',
            'foto_peserta_l.required'       => 'Foto peserta harus berformat .jpg .jpeg .png',
            'foto_peserta_l.mimes'          => 'Foto peserta harus berformat .jpg .jpeg .png',
            'kartu_pelajar_l.required'      => 'Kartu pelajar wajib di isi',
            'kartu_pelajar_l.mimes'         => 'Kartu pelajar harus berformat .pdf .jpg .jpeg .png',
            'surat_pernyataan_l.required'   => 'Surat pernyataan wajib di isi',
            'surat_pernyataan_l.max'        => 'Ukuran Surat pernyataan maksimal 1MB',
            'surat_pernyataan_l.mimes'      => 'Surat pernyataan harus berformat .pdf',
            'bukti_pembayaran_l.required'   => 'Bukti pembayaran wajib di isi',
            'bukti_pembayaran_l.max'        => 'Ukuran Bukti pembayaran maksimal 1MB',
            'bukti_pembayaran_l.mimes'      => 'Bukti pembayaran harus berformat .pdf',
            'lampiran_guru_l.required'      => 'Lampiran Guru wajib di isi',
            'lampiran_guru_l.max'           => 'Ukuran Lampiran Guru maksimal 1MB',
            'lampiran_guru_l.mimes'         => 'Lampiran Guru harus berformat .pdf',
            'twibbon_l.required'            => 'Bukti upload twibbon wajib di isi',
            'twibbon_l.max'                 => 'Ukuran Bukti upload twibbon maksimal 1MB',
            'twibbon_l.mimes'               => 'Bukti upload twibbon harus berformat .jpg .jpeg .png',
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
        $lomba_it->twibbon = $request->twibbon_l;

        //Set status to proses at first time data added
        $lomba_it->status = 'pending';

        // FileName
        $foto_peserta_l = time() . '.' . $request->foto_peserta_l->extension();
        $kartu_pelajar_l = time() . '.' . $request->kartu_pelajar_l->extension();
        $surat_pernyataan_l = time() . '.' . $request->surat_pernyataan_l->extension();
        $bukti_pembayaran_l = time() . '.' . $request->bukti_pembayaran_l->extension();
        $lampiran_guru_l = time() . '.' . $request->lampiran_guru_l->extension();
        $twibbon_l = time() . '.' . $request->twibbon_l->extension();

        // Save To Folder
        $request->foto_peserta_l->move(public_path('/upload/lomba/' . $email), $foto_peserta_l);
        $request->kartu_pelajar_l->move(public_path('/upload/lomba/' . $email), $kartu_pelajar_l);
        $request->surat_pernyataan_l->move(public_path('/upload/lomba/' . $email), $surat_pernyataan_l);
        $request->bukti_pembayaran_l->move(public_path('/upload/lomba/' . $email), $bukti_pembayaran_l);
        $request->lampiran_guru_l->move(public_path('/upload/lomba/' . $email), $lampiran_guru_l);
        $request->twibbon_l->move(public_path('/upload/lomba/' . $email), $twibbon_l);

        //Save To DB
        $lomba_it->foto_peserta = 'lomba/' . $email . '/' . $foto_peserta_l;
        $lomba_it->kartu_pelajar = 'lomba/' . $email . '/' . $kartu_pelajar_l;
        $lomba_it->surat_pernyataan = 'lomba/' . $email . '/' . $surat_pernyataan_l;
        $lomba_it->bukti_pembayaran = 'lomba/' . $email . '/' . $bukti_pembayaran_l;
        $lomba_it->lampiran_guru = 'lomba/' . $email . '/' . $lampiran_guru_l;
        $lomba_it->twibbon = 'lomba/' . $email . '/' . $twibbon_l;
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


    public function tambah_proposal(Request $request)
    {
        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $email = $user->email;
        // \dd($request);

        $request->validate(
            [
                'email_t'               => 'required|email',
                'nama_tim_t'            => 'required',
                'perguruan_tinggi_t'    => 'required|min:8',
                'judul_proposal_t'      => 'required|min:8',
                'nama_ketua_t'          => 'required',
                'proposal_t'            => 'required|mimes:pdf|max:20000',
                'biodata_t'             => 'required|mimes:pdf|max:1024',
                'bukti_pembayaran_t'    => 'required|mimes:pdf|max:1024',
            ],
            [
                'email_t.required'              => 'Email wajib di isi ',
                'email_t.email'                 => 'Format Email yang anda masukkan salah',
                'nama_tim_t.required'           => 'Nama tim wajib di isi',
                'perguruan_tinggi_t.required'   => 'Nama perguruan tinggi wajib di isi',
                'perguruan_tinggi_t.min'        => 'Harap mengisi perguruan tinggi minimal 8 karakter',
                'judul_proposal_t.required'     => 'Judul proposal wajib di isi',
                'judul_proposal_t.min'          => 'Harap mengisi judul minimal 8 karakter',
                'nama_ketua_t.required'         => 'Nama ketua tim wajib di isi',
                'proposal_t.required'           => 'Proposal wajib di isi',
                'proposal_t.mimes'              => 'Proposal harus berformat .pdf',
                'proposal_t.max'                => 'Ukuruan proposal maksimal 20MB',
                'biodata_t.required'            => 'Biodata tim wajib di isi',
                'biodata_t.mimes'               => 'Biodata tim harus berformat .pdf',
                'biodata_t.max'                 => 'Ukuran biodata tim maksimal 1MB',
                'bukti_pembayaran_t.required'   => 'Bukti pembayaran wajib di isi',
                'bukti_pembayaran_t.mimes'      => 'Bukti pembayaran harus berformat .pdf .jpg .jpeg .png',
                'bukti_pembayaran_t.max'        => 'Ukuran Bukti pembayaran maksimal 1MB',
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
        $tcp_it->status = 'pending';

        // FileName
        $proposal_t = time() . '.' . $request->proposal_t->extension();
        $bukti_pembayaran_t = time() . '.' . $request->bukti_pembayaran_t->extension();
        $biodata_t = time() . '.' . $request->biodata_t->extension();


        // Save To Folder
        $request->bukti_pembayaran_t->move(public_path('/upload/tcp/' . $email), $bukti_pembayaran_t);
        $request->proposal_t->move(public_path('/upload/tcp/' . $email), $proposal_t);
        $request->biodata_t->move(public_path('/upload/tcp/' . $email), $biodata_t);


        //Save To DB
        $tcp_it->proposal = 'tcp/' . $email . '/' . $proposal_t;
        $tcp_it->bukti_pembayaran = 'tcp/' . $email . '/' . $bukti_pembayaran_t;
        $tcp_it->biodata = 'tcp/' . $email . '/' . $biodata_t;

        $twibbon_db = TcpIt::select('twibbon')->where('user_id', Auth::user()->id)->get();
        $tcp_it->twibbon = $twibbon_db[0]->twibbon;




        foreach ($request->ktm_t as $ktm) {
            $ktm_t = time() . '.' . $ktm->extension();
            $ktm->move(public_path('/upload/tcp/' . $email), $ktm_t);
            $foto_ktm[] = 'tcp/' . $email . '/' . $ktm_t;
        }
        $tcp_it->ktm = $foto_ktm;
        $tcp_it->save();

        if (request()->is('peserta/proposal')) {
            return \redirect()->back();
        }
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        return response()->json(['success' => $imageName]);
    }
}
