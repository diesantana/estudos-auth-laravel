<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    public function store(LoginRequest $request)
    {
        // Pega as credenciais validadas pelo LoginRequest
        $credentials = $request->validated();

        // Tenta autenticar o usuário
        if (Auth::attempt($credentials)) {
            // Sucesso! Regenera a sessão
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // redireciona para o dashboard.
        }

        // Exibe um erro genérico em caso de falha de autenticação por email ou senha.
        throw ValidationException::withMessages([
            'credentials' => 'E-mail ou senha inválidos. Verifique os dados e tente novamente.',
        ]);
    }

    /**
     * Faz o logout, finalizando a sessão do usuário
     */
    public function destroy(string $id)
    {
        //
    }
}
