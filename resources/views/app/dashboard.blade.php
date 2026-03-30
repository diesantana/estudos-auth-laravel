@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <main class="bg-zinc-100 w-full h-dvh">
        <nav class="bg-blue-200 py-2.5 px-12 flex justify-between mb-8">
            <p class="text-slate-600">{{ Auth::user()->email }}</p>
            {{-- LOGOUT --}}
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sair
                    </button>
                </form>
            @endauth
        </nav>

        <h1 class="text-2xl text-center">Olá <span class="font-semibold">{{ Auth::user()->name }}</span>, Seja Bem vindo!
        </h1>

    </main>
@endsection
