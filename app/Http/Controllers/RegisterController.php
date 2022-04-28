<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registrasi',
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:10', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // pakai validated data
        // $validateData['password'] = bcrypt($validateData['password']);

        // pakai hash
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/login')->with('status', 'Registration Succesfull!, Please Login....');
    }
}
