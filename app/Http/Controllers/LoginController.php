<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function entrar(Request $request)
    {

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Usuário e/ou senha inválidos']);
        }

        return redirect()->route('dashboard');
    }
}
