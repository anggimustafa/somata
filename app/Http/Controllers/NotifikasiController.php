<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        try {
            DB::table('notifikasi')->insert([
                'nim_mahasiswa' => $request->nim,
                'organisasi_id' => $request->organisasi_id,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'grupWA' => $request->link,
                'langkah' => $request->langkah,
                'status' => $request->status,
                'tahap' => $request->tahap,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($request->status == 'diterima') {
                if ($request->tahap == 'administrasi') {
                    DB::table('pendaftar')
                    ->where('organisasi_id', $request->organisasi_id)
                    ->where('mahasiswa_nim', $request->nim)
                    ->update([
                        'tahap_administrasi' => false,
                        'tahap_wawancara' => true
                    ]);
                }
                
                if ($request->tahap == 'wawancara') {
                    DB::table('pendaftar')
                    ->where('organisasi_id', $request->organisasi_id)
                    ->where('mahasiswa_nim', $request->nim)
                    ->update([
                        'tahap_wawancara' => false,
                        'pendaftaran_selesai' => true,
                        'status' => 'Diterima'
                    ]);
                }
            }

            if ($request->status == 'ditolak') {
                DB::table('pendaftar')
                ->where('organisasi_id', $request->organisasi_id)
                ->where('mahasiswa_nim', $request->nim)
                ->update([
                    'tahap_administrasi' => false,
                    'tahap_wawancara' => false,
                    'pendaftaran_selesai' => false,
                    'status' => 'Ditolak'
                ]);
            }
    
} catch (\Exception $e) {
            // Jika ada kesalahan saat menyimpan data ke database
            return $e->getMessage();
        }

        return redirect('/tahap_administrasi?id='. $request->organisasi_id)->with('success', 'Data berhasil disimpan.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
