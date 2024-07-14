<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->id)
                                            ->first();
        $data_kategori = DB::table('organisasi_kategori')->get();


        $data_postingan = DB::table('postingan_pendaftaran')
                            ->where('organisasi_id', $request->id)
                            ->join('organisasi_kategori', 'postingan_pendaftaran.kategori_id', '=', 'organisasi_kategori.Kategori_id')
                            ->select('postingan_pendaftaran.*', 'organisasi_kategori.Nama_Kategori')
                            ->get();

        

        return view('dashboard.pendaftaran_anggota', compact('data_user','data_kategori','data_postingan'));
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
        
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|integer',
            'datePembukaan' => 'required|date',
            'datePenutupan' => 'required|date',
            'isi' => 'required|string',
            'organisasi_id' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('gambarPostingan', 'public');
        }


        try {
            // Simpan data ke dalam tabel postingan_pendaftaran
            DB::table('postingan_pendaftaran')->insert([
                'judul' => $validatedData['judul'],
                'kategori_id' => $validatedData['kategori'],
                'organisasi_id' => $validatedData['organisasi_id'],
                'tanggal_pembukaan_pendaftaran' => $validatedData['datePembukaan'],
                'tanggal_penutupan_pendaftaran' => $validatedData['datePenutupan'],
                'isi' => $validatedData['isi'],
                'url_gambar' => $validatedData['gambar'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            // Redirect atau berikan respon setelah berhasil menyimpan data
            return redirect('/postingan?id='. $validatedData['organisasi_id'])->with('success', 'Data berhasil disimpan.');
    
        } catch (\Exception $e) {
            // Jika ada kesalahan saat menyimpan data ke database
            return $e->getMessage();
        }

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
        $organisasi_id = DB::table('postingan_pendaftaran')->where('id', $id)->value('organisasi_id');


        DB::table('postingan_pendaftaran')->where('id', $id)->delete();
        DB::table('pendaftar')->where('organisasi_id', $organisasi_id)->delete();


        return redirect('/postingan?id='. $organisasi_id )->with('success', 'Postingan berhasil dihapus');
    }
}
