<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::defaults()],
            'password_confirmation' => ['required', 'same:password'],
        ];
    }

    /**
     * Define as mensagens de erro para as regras de validação definidas
     */
    public function messages(): array
    {
        return [
            // Mensagens mais genéricas
            'required' => 'O campo :attribute é obrigatório.',
            'string'   => 'O campo :attribute deve ser um texto.',
            'max'      => 'O campo :attribute não pode ter mais que :max caracteres.',
            'min'      => 'O campo :attribute não pode ter menos de :min caracteres.',
            'email'    => 'O campo :attribute deve ser um endereço de e-mail válido.',

            'email.unique'   => 'Este e-mail já está cadastrado. Tente fazer login.',
            'password_confirmation.same' => 'A confirmação de senha não confere.',
            'password_confirmation.required' => 'Confirme a senha.',
        ];
    }

    /**
     * Obtenha atributos personalizados para os erros do validador
     *
     * @return array<string, string>
     */
    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
        ];
    }
}
