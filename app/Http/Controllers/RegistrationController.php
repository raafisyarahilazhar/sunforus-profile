<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index() {
        return view('registration.index', [
            'title' => 'registration',
        ]);
    }

    public function store(Request $request) {
        // Validasi registrasi
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:8|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        // Enskripsi Password
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        $request->session()->flash('succes', 'Registration Succes!');
        return redirect('/login');
    }
}

