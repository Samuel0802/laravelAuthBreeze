<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function testes(Request $request){

        //dados do id user autenticado
        $id = $request->user()->id;

        //Dados do email user autenticado
        $username = $request->user()->email;

        echo $id . '<br>';
        echo $username;

    }

    public function nova_pagina_publica() :View
    {
         return view('nova_pagina_publica');
    }

    public function destroy(Request $request){

        //fazer o logout sem POST - Limpando o usuario da sessão

        Auth::logout();

        // Encerra completamente a sessão atual do usuário
        $request->session()->invalidate();

        //Gera um novo token CSRF para a sessão
        $request->session()->regenerateToken();

        return redirect()->route('/');

    }

}
