<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function prosesRegister(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'no_hp' => 'required|unique:users,no_hp',
            'password' => 'required',
            'password1' => 'required|same:password',
        ],[
            'nama' => 'Nama lengkap harus diisi!',
            'username.required' => 'Username harus diisi!',
            'username.unique' => 'Username sudah ada di dalam database!',
            'email.required' => 'Email harus diisi!',
            'email.unique' => 'Email sudah ada di dalam database!',
            'no_hp.required' => 'Nomor handphone harus diisi!',
            'no_hp.unique' => 'Nomor handphone sudah ada di dalam database!',
            'password' => 'Password harus diisi!',
            'password1.required' => 'Password konfirmasi harus diisi!',
            'password1.same' => 'Password konfirmasi tidak sama!',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['status'] = 'nonaktif';

        User::create($validatedData);
        return redirect('/')->with('info', 'Registrasi berhasil, silahkan login!');
    }

}
