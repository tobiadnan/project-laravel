<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'title' => 'Registration',
            'active' => 'registration'
        ]);
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //password encription
        $validateDate['password'] = Hash::make($validateDate['password']);

        //entering data to table
        User::Create($validateDate);

        //sedning msg
        $request->session()->flush('berhasil', 'Registrasi Berhasil, Silahkan Login !!');

        return redirect('/login');
    }
}
