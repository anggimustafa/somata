<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('first');
});

// ======== Authentikasi ========
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login_admin', [AuthController::class, 'showLoginFormAdmin'])->name('login_admin');
Route::post('/login_admin', [AuthController::class, 'login_admin'])->name('login_admin');


// ======== Mahasiswa ========
Route::get('/beranda', function (Request $request) {

    // Query ke database berdasarkan nim
    $user = DB::table('user_mahasiswa')
              ->where('NIM', $request->nim)
              ->first();

    $jurusan = DB::table('jurusan')->where('Jurusan_id', $user->Jurusan_id)
                                            ->first();

    $fakultas = DB::table('fakultas')->where('fakultas_id', $jurusan->Fakultas_id)
                                            ->first();

    $notifikasi = DB::table('notifikasi')->where('nim_mahasiswa', $request->nim)
                                        ->join('user_organisasi', 'notifikasi.organisasi_id', '=', 'user_organisasi.Organisasi_id')
                                        ->get();        
    
    // Kirim hasil query dan nim ke view
    return view('beranda', compact('user','jurusan','fakultas','notifikasi'));
});


Route::get('/daftar_keanggotaan', function (Request $request) {

    // Query ke database berdasarkan nim
    $user = DB::table('user_mahasiswa')
              ->where('NIM', $request->nim)
              ->first();

    $jurusan = DB::table('jurusan')->where('Jurusan_id', $user->Jurusan_id)
              ->first();

    $fakultas = DB::table('fakultas')->where('fakultas_id', $jurusan->Fakultas_id)
              ->first();

    $notifikasi = DB::table('notifikasi')->where('nim_mahasiswa', $request->nim)
                                        ->join('user_organisasi', 'notifikasi.organisasi_id', '=', 'user_organisasi.Organisasi_id')
                                        ->get();     

    $data_postingan = DB::table('postingan_pendaftaran')
              ->join('organisasi_kategori', 'postingan_pendaftaran.kategori_id', '=', 'organisasi_kategori.Kategori_id')
              ->select('postingan_pendaftaran.*', 'organisasi_kategori.Nama_Kategori')
              ->get();
          
    
    // Kirim hasil query dan nim ke view
    return view('daftar_keanggotaan', compact('user','jurusan','fakultas','data_postingan','notifikasi'));
});

Route::get('/terimakasih', function (Request $request) {

    // Query ke database berdasarkan nim
    $user = DB::table('user_mahasiswa')
              ->where('NIM', $request->nim)
              ->first();
    
    $jurusan = DB::table('jurusan')->where('Jurusan_id', $user->Jurusan_id)
                                            ->first();

    $fakultas = DB::table('fakultas')->where('fakultas_id', $jurusan->Fakultas_id)
                                            ->first();
    
    // Kirim hasil query dan nim ke view
    return view('terimakasih', compact('user','jurusan','fakultas'));
});


Route::get('/form_pendaftaran', function (Request $request) {

    
    // Query ke database berdasarkan nim
    $user = DB::table('user_mahasiswa')
              ->where('NIM', $request->nim)
              ->first();

    $jurusan = DB::table('jurusan')->where('Jurusan_id', $user->Jurusan_id)
              ->first();

    $fakultas = DB::table('fakultas')->where('fakultas_id', $jurusan->Fakultas_id)
              ->first();

    $notifikasi = DB::table('notifikasi')->where('nim_mahasiswa', $request->nim)
                                        ->join('user_organisasi', 'notifikasi.organisasi_id', '=', 'user_organisasi.Organisasi_id')
                                        ->get();  
    
    $postingan_id = $request->postingan_id;
    
    // Kirim hasil query dan nim ke view
    return view('pendaftaran', compact('user','jurusan','fakultas','postingan_id','notifikasi'));
});


// ========= Admin ============
Route::resource('/postingan', PostinganController::class);
Route::resource('/pendaftaran_anggota', PendaftaranController::class);
Route::resource('/notifikasi', NotifikasiController::class);



Route::get('/dashboard', function (Request $request) {
    $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->id)
                                            ->first();
    $pendaftar = DB::table('pendaftar')->where('organisasi_id', $request->id)->get();
    $pendaftars = $pendaftar->count();
    return view('dashboard.index', compact('data_user', 'pendaftars'));
});


Route::get('/tahap_administrasi', function (Request $request) {

    $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->id)
                                            ->first();

    $data_pendaftar = DB::table('pendaftar')->where('organisasi_id', $request->id)
                                            ->where('tahap_administrasi', true)
                                            ->get();

    $motivasi = $data_pendaftar->pluck('motivasi')->toArray();
    $mahasiswa_nims = $data_pendaftar->pluck('mahasiswa_nim')->toArray();

    $list_mahasiswa = DB::table('user_mahasiswa')
    ->whereIn('nim', $mahasiswa_nims)
    ->join('jurusan', 'user_mahasiswa.Jurusan_id', '=', 'jurusan.Jurusan_id')
    ->join('fakultas', 'jurusan.Fakultas_id', '=', 'fakultas.fakultas_id')
    ->select(
        'user_mahasiswa.NIM',
        'user_mahasiswa.Nama_Lengkap',
        'user_mahasiswa.Tanggal_Lahir',
        'user_mahasiswa.Jenis_Kelamin',
        'user_mahasiswa.Email',
        'user_mahasiswa.No_HP',
        'user_mahasiswa.Domisili',
        'user_mahasiswa.Angkatan',
        'user_mahasiswa.Jurusan_id',
        'user_mahasiswa.Status_Mahasiswa',
        'jurusan.Nama_jurusan as Jurusan',
        'fakultas.Nama_fakultas as Fakultas',
    )
    ->get();

    return view('dashboard.tahap_administrasi', compact('data_user','data_pendaftar','list_mahasiswa','motivasi'));
});

Route::get('/tahap_wawancara', function (Request $request) {
    $user = DB::table('organization_passwords')->where('organisasi_id', $request->id)
                                            ->where('password', $request->password)
                                            ->first();

    $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->id)
                                            ->first();

    $data_pendaftar = DB::table('pendaftar')->where('organisasi_id', $request->id)
                                            ->where('tahap_wawancara', true)
                                            ->get();

    $motivasi = $data_pendaftar->pluck('motivasi')->toArray();
    $mahasiswa_nims = $data_pendaftar->pluck('mahasiswa_nim')->toArray();

    $list_mahasiswa = DB::table('user_mahasiswa')
    ->whereIn('nim', $mahasiswa_nims)
    ->join('jurusan', 'user_mahasiswa.Jurusan_id', '=', 'jurusan.Jurusan_id')
    ->join('fakultas', 'jurusan.Fakultas_id', '=', 'fakultas.fakultas_id')
    ->select(
        'user_mahasiswa.NIM',
        'user_mahasiswa.Nama_Lengkap',
        'user_mahasiswa.Tanggal_Lahir',
        'user_mahasiswa.Jenis_Kelamin',
        'user_mahasiswa.Email',
        'user_mahasiswa.No_HP',
        'user_mahasiswa.Domisili',
        'user_mahasiswa.Angkatan',
        'user_mahasiswa.Jurusan_id',
        'user_mahasiswa.Status_Mahasiswa',
        'jurusan.Nama_jurusan as Jurusan',
        'fakultas.Nama_fakultas as Fakultas'
    )
    ->get();

    return view('dashboard.tahap_wawancara', compact('data_user','data_pendaftar','list_mahasiswa','motivasi'));
});

Route::get('/pendaftaran_selesai', function (Request $request) {

    $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->id)
                                            ->first();

    $data_pendaftar = DB::table('pendaftar')->where('organisasi_id', $request->id)
                                            ->where(function ($query) {
                                                $query->where('pendaftaran_selesai', true)
                                                      ->orWhere('status', 'Ditolak');
                                            })
                                            ->get();
                        

    $motivasi = $data_pendaftar->pluck('motivasi')->toArray();
    $status = $data_pendaftar->pluck('status')->toArray();
    $mahasiswa_nims = $data_pendaftar->pluck('mahasiswa_nim')->toArray();

    $list_mahasiswa = DB::table('user_mahasiswa')
    ->whereIn('nim', $mahasiswa_nims)
    ->join('jurusan', 'user_mahasiswa.Jurusan_id', '=', 'jurusan.Jurusan_id')
    ->join('fakultas', 'jurusan.Fakultas_id', '=', 'fakultas.fakultas_id')
    ->select(
        'user_mahasiswa.NIM',
        'user_mahasiswa.Nama_Lengkap',
        'user_mahasiswa.Tanggal_Lahir',
        'user_mahasiswa.Jenis_Kelamin',
        'user_mahasiswa.Email',
        'user_mahasiswa.No_HP',
        'user_mahasiswa.Domisili',
        'user_mahasiswa.Angkatan',
        'user_mahasiswa.Jurusan_id',
        'user_mahasiswa.Status_Mahasiswa',
        'jurusan.Nama_jurusan as Jurusan',
        'fakultas.Nama_fakultas as Fakultas'
    )
    ->get();

    return view('dashboard.pendaftaran_selesai', compact('data_user','data_pendaftar','list_mahasiswa','motivasi', 'status'));
});