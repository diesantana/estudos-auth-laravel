@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <main class="bg-zinc-100 w-full flex justify-center items-center p-4 md:p-10">
        {{-- =================================================================== --}}
        {{-- FORM  --}}
        {{-- =================================================================== --}}
        <form action="/login" method="POST"
            class="bg-white flex justify-center items-center flex-col py-6 md:py-12 px-6 md:px-18 gap-8 w-full max-w-xl shadow-[40px_40px_60px_0px_rgba(228,230,234,0.74)] rounded-[20px]">
            @csrf

            {{-- título --}}
            <h1 class="text-[28px] font-semibold text-gray-900">Faça login na sua conta</h1>

            {{-- exibição de erros genéricos --}}
            @if ($errors->has('credentials'))
                <div class="p-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                    <span class="font-medium">Ops!</span>
                    {{ $errors->first('credentials') }}
                </div>
            @endif

            {{-- email --}}
            <div class="flex flex-col w-full gap-3 text-slate-700">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite o seu email"
                    @class([
                        'py-3 px-4 rounded-lg border-2 border-solid text-sm text-gray-400
                            focus:border-[#D1E9FF] focus:border-2 focus:border-solid focus:outline-none',
                        'border-red-400' => $errors->has('email'),
                        'border-[#D0D5DD]' => !$errors->has('email'),
                    ])>
                {{-- Bloco de erros --}}
                @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- password --}}
            <div class="flex flex-col w-full gap-3 text-slate-700">
                {{-- Container para a label e o link forgot --}}
                <div class="flex justify-between">
                    <label for="password">Senha</label>
                    <a href="#" class="text-blue-600 hover:underline">Esqueci?</a>
                </div>

                {{-- Container para o INPUT --}}
                <div class="relative w-full">
                    <!-- Div que posiciona o ícone -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                        <x-heroicon-o-eye class="h-5 w-5 text-gray-400" />
                    </div>

                    <!-- input -->
                    <input type="password" name="password" id="password" placeholder="Digite a sua senha"
                        @class([
                            'w-full rounded-lg border-2 border-solid
                                py-3 pl-4 text-sm text-gray-400 focus:border-[#D1E9FF]
                                focus:border-2 focus:border-solid focus:outline-none pr-10',
                            'border-red-400' => $errors->has('password'),
                            'border-[#D0D5DD]' => !$errors->has('password'),
                        ])>

                </div>
                {{-- Bloco de erros --}}
                @error('password')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- BTN --}}
            <div class="w-full">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-500  w-full p-4 text-gray-50 cursor-pointer
                    rounded-lg font-semibold shadow-lg">Entrar</button>
            </div>

            {{-- LINK CADASTRAR --}}
            <div class="text-gray-400 flex justify-center">
                <p>Ainda não tem uma conta? <a href="{{ route('register') }}"
                        class="text-blue-600 hover:underline ml-2">Cadastrar-se</a></p>
            </div>
        </form>
        {{-- =================================================================== --}}
        {{-- FIM FORM  --}}
        {{-- =================================================================== --}}
    </main>
@endsection
