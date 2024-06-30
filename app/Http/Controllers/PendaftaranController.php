<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
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
        
        $organisasi_id = DB::table('postingan_pendaftaran')->where('id', $request->postingan_id)->value('organisasi_id');

        try {
            DB::table('pendaftar')->insert([
                'organisasi_id' => $organisasi_id,
                'mahasiswa_nim' => $request->nim,
                'motivasi' => $request->motivasi,
                'tahap_administrasi' => true,
                'tahap_wawancara' => false,
                'pendaftaran_selesai' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            // Jika ada kesalahan saat menyimpan data ke database
            return $e->getMessage();
        }

        return redirect('/terimakasih?nim='. $request->nim);
        
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
