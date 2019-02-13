<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);

    }

    public function showLoginForm()
    {
        return view('login');

    }

    public function login(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return back()
        ->withErrors([$this->username() => 'Estas credenciales no coinciden con nuestros registros'])
        ->WithInput($request->only($this->username()));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function username() 
    {
        return 'email';
    }

}
