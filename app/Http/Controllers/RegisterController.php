<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $request) {
        $validatedata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);
        User::create($validatedata);

        return redirect('/');
    }
}
