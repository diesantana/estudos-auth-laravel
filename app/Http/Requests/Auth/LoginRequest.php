<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Logica de validação de login
 */
class LoginRequest extends FormRequest
{
    /**
     * Define se o usuário tem autorização para fazer esta requisição
     */
    public function authorize(): bool
    {
        return true; // Altere para 'false' se precisar de regras de autorização
    }

    /**
     * Define as regras de validação
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    /**
     * Define as mensagens de erro
     */
    public function messages(): array
    {
        return [
            'email.required'    => 'Por favor, informe o seu e-mail.',
            'email.email'       => 'Por favor, informe um endereço de e-mail válido.',
            'password.required' => 'Por favor, informe a sua senha.',
            'password.min'      => 'A senha deve ter no mínimo :min caracteres.',
        ];
    }
}
