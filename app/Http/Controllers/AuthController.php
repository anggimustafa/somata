<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showLoginFormAdmin()
    {
        return view('login_admin');
    }

    public function login(Request $request)
    {
    
        $user = DB::table('user_mahasiswa')->where('NIM', $request->nim)
                                            ->where('Password', $request->password)
                                            ->first();

        if (empty($user)) {
            return redirect()->back()->withErrors(['message' => 'NIM atau Password salah']);
        }


        if($user){
            $jurusan = DB::table('jurusan')->where('Jurusan_id', $user->Jurusan_id)
                                            ->first();

            $fakultas = DB::table('fakultas')->where('fakultas_id', $jurusan->Fakultas_id)
                                            ->first();
            return redirect('/beranda?nim=' . $user->NIM);
        }
    }

    public function login_admin(Request $request)
    {
        
        $user = DB::table('organization_passwords')->where('organisasi_id', $request->organisasi_id)
                                            ->where('password', $request->password)
                                            ->first();
                                            
        if (empty($user)) {
            return redirect()->back()->withErrors(['message' => 'Organisasi ID atau Password salah']);
        }

        if($user){
            $data_user = DB::table('user_organisasi')->where('Organisasi_id', $request->organisasi_id)
                                            ->first();

            return redirect('/dashboard?id=' . $request->organisasi_id);

        }
    }
}

