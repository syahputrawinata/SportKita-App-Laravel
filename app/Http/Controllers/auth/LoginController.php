<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function formLogin()
    {
        //
        return view('auth.form');
    }
    /**
     * Display a listing of the resource.
     */
    public function loginAuth (Request $request)
    {
        // Cek tombol mana yang ditekan
        if ($request->has('login')) {
            // Proses Login
            $credentials = $request->validate([
                'username' => 'required|min:5',
                'email' => 'required|email:dns',
                'password' => 'required|min:8',
            ]);

            if (Auth::attempt($credentials)) {
                // Ambil user yang login
                $users = Auth::User();

                // Cek role dan arahkan ke halaman yang sesuai
                if ($users->role === 'admin') {
                    return redirect()->route('admin.index')->with('success', 'Anda telah login sebagai Admin!');
                } elseif ($users->role === 'user') {
                    return redirect()->route('user.index')->with('success', 'Anda telah login sebagai User!');
                }elseif ($users->role === 'cashier') {
                    return redirect()->route('cashier.index')->with('success', 'Anda telah login sebagai Kasir!');
                }
            }

            return redirect()->back()->with('failed', 'Username, Email atau password salah.'); // Jika login gagal
        }

        if ($request->has('register')) {
            // Proses Register
            $data = $request->validate([
                'username' => 'required|min:5',
                'email' => 'required|email:dns|unique:users,email',
                'password' => 'required|string|min:8',
                // 'role' => 'required|in:head_staff,staff,guest', // Pastikan role disertakan
            ]);

            // Buat user baru
            $users = User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                // 'role' => $data['role'], // Tentukan role
            ]);

            // Login user setelah registrasi
            Auth::login($users);

            return redirect()->route('user.index')->with('success', 'Akun terbuat!Anda telah login!');
        }

        return redirect()->back()->with('failregis', 'Gagal!. Mohon masukan data yang sesuai');
    }

    public function logout()
    {
        //
        Auth::logout();
        return redirect()->route('auth.form')->with('logout', 'Anda telah logout!');
    }
}
