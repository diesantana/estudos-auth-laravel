<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Exibe a view com o formulário de login
     */
    public function create()
    {
        return view('login');
    }

    /**
     *  Faz a autenticação do usuário
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Faz o logout, finalizando a sessão do usuário
     */
    public function destroy(string $id)
    {
        //
    }
}
