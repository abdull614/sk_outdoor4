<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // page view
    public function showLoginForm (){
        return view ('auth.login');
    }
    
    public function showRegisForm (){
        return view ('auth.regis');
    }

    // login / cek nama & pwd
    public function loginProses(Request $request)
    {
        $user = User::where('name', $request->name)->first();

        if (!$user) {
            return back()->with('errorNama', 'Nama tidak ditemukan.');
        }

        if (!Hash::check($request->pwd, $user->password)) {
            return back()->with('errorPwd', 'Passwoed salah.');
        }


        Auth::login($user);

        return redirect()->route('beranda');
    }

    // regis / ambil data
    public function register(Request $request)
{
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Auth::login($user);

        return redirect()->route('beranda');
    } catch (\Exception $e) {
        Log::error('Error saving user: ' . $e->getMessage());
        return back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
    }
}



    // masuk dengan google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Cek apakah user sudah terdaftar
            $user = User::where('email', $googleUser->getEmail())->first();

            // Jika belum, buat user baru
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt('google_default_password'), // opsional
                ]);
                $user->role = 'customer';
                $user->save();
            }

            // Login user
            Auth::login($user);

            return redirect()->route('beranda');

            } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal login dengan Google.');
        }
    }
}
