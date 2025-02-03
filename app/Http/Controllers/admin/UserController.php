<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create() 
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'email' => 'required',
            'role' => 'required',
            ]);
            
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make(Str::random(8)), // Membuat password random 8 karakter // Enkripsi password
            ]);
        // atau jika seluruh data input akan dimasukkan langsung ke db bisa dengan perintah Medicine::create($request->all());
        return redirect()->route('admin.AdminUserIndex')->with('success', 'Berhasil menambahkan data Pengguna!');
    }

    public function edit($id) 
    {
        $users = User::find($id);

        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|min:5',
            'email' => 'required',
            'role' => 'required',
        ]);

        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make(Str::random(8)),
        ]);
        return redirect()->route('admin.AdminUserIndex')->with('success', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        // dicari (where) berdasarkan id, lalu hapus
        $users = User::where('id', $id)->delete();

        if ($users) {
            return redirect()->back()->with('success', 'Berhasil menghapus data Pengguna!');
        } else {
            return redirect()->back()->with('failed', 'Gagal menghapus data Pengguna!');
        }
    }
}
