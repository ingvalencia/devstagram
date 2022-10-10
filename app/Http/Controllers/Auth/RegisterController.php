<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store(Request $request) {
        //dd($request);
        //dd($request->get('name'));

        //validaciones con laravel
        $this->validate($request,[
            'name' => ['required','max:30'],
            'user' => ['required','unique:users','min:3','max:30'],
            'email' => ['required','unique:users','email','max:60'],
            'password' => ['required',],
            //'password_confirmation' => ['required',],
        ]);

    }
}
