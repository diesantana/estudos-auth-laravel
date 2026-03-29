@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <main class="bg-zinc-100 w-full flex justify-center items-center p-8">
        {{-- =================================================================== --}}
        {{-- FORM  --}}
        {{-- =================================================================== --}}
        <form action=""
            class="bg-white flex justify-center items-center flex-col py-12 px-18 gap-8 w-full max-w-xl shadow-[40px_40px_60px_0px_rgba(228,230,234,0.74)] rounded-[20px]">
            @csrf

            {{-- título --}}
            <h1 class="text-[28px] font-semibold text-gray-900 mb-8">Faça login na sua conta</h1>

            {{-- email --}}
            <div class="flex flex-col w-full gap-3 text-slate-700">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite o seu email"
                    class="py-3 px-4 rounded-lg border-2 border-[#D0D5DD] border-solid text-[14px] text-gray-400
                    focus:border-[#D1E9FF] focus:border-2 focus:border-solid focus:outline-none">
            </div>

            {{-- password --}}
            {{-- <div class="flex flex-col w-full gap-3 text-slate-700">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite a sua senha"
                    class="py-3 px-4 rounded-lg border-2 border-[#D0D5DD] border-solid text-[14px] text-gray-400
                    focus:border-[#D1E9FF] focus:border-2 focus:border-solid focus:outline-none">
                <a href="#">Esqueci</a>
            </div> --}}
            <div class="flex flex-col w-full gap-3 text-slate-700">
                <label for="password">Senha</label>

                <div class="relative w-full"> {{-- Removido max-w-xs para ocupar a largura total do pai --}}

                    <!-- Div que posiciona o ícone -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                        <x-heroicon-o-eye class="h-5 w-5 text-gray-400" />
                    </div>

                    <!-- O seu input -->
                    <input type="password" name="password" id="password" placeholder="Digite a sua senha"
                        class="block w-full rounded-lg border-2 border-[#D0D5DD] border-solid
                        py-3 pl-4 text-sm text-gray-900 placeholder:text-gray-400 focus:border-[#D1E9FF]
                        focus:border-2 focus:border-solid focus:outline-none pr-10">
                </div>
                <a href="#" class="text-sm self-end">Esqueci</a> {{-- Adicionado self-end para alinhar à direita --}}
            </div>

            {{-- BTN --}}
            <div>
                <button type="submit">Entrar</button>
            </div>

            {{-- LINK CADASTRAR --}}
            <div>
                <a href="#">Ainda não tem uma conta? <span>Cadastrar-se</span></a>
            </div>
        </form>
        {{-- =================================================================== --}}
        {{-- FIM FORM  --}}
        {{-- =================================================================== --}}
    </main>
@endsection
