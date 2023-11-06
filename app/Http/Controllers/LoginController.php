<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ],[
                'email.required' => 'Precisa preencher o E-mail',
                'email.email' => 'E-mail invalido',
                'password.required'=>'Precisa digitar a Senha',
            
        ]);
        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
            } else {
                return redirect()->back()->with('erro', 'Email ou Senha invalido!');
            }
    }
    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.home'));
    }
    public function create (){
        return view('login.create');
    }
}
