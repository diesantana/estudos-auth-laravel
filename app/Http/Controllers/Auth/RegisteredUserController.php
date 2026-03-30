<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Lida com o cadastro de usuários
 */
class RegisteredUserController extends Controller
{

    /**
     * Exibe a view com o formulário de cadastro
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Salva o usuário na base de dados
     */
    public function store(RegisterRequest $request)
    {
        // Pega os dados validados do user
        $data = $request->validated();
        // Salva o user na base de dados
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>  Hash::make($data['password']),  // Criptografa a senha
        ]);

        Auth::login($user); // Faz o login automaticamente

        return redirect()->route('dashboard'); // redireciona para o dashboard
    }
}
