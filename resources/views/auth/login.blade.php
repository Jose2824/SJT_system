@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#BFC4C9]"> <!-- fundo da página cinza metálico -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <!-- Título -->
        <h2 class="text-3xl font-bold text-[#001C91] text-center mb-6">São José Transportes</h2>
        <p class="text-gray-600 text-center mb-8">Faça login para continuar</p>

        <!-- Formulário -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#0026FF] focus:border-[#0026FF]">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Senha -->
            <div>
                <label for="password" class="block text-gray-700 font-medium">Senha</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#0026FF] focus:border-[#0026FF]">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Lembrar-me -->
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-700">Lembrar-me</label>
            </div>

            <!-- Botão login -->
            <div>
                <button type="submit"
                    class="w-full bg-[#0026FF] text-white font-bold py-2 px-4 rounded-lg shadow hover:bg-[#001C91] transition">
                    Entrar
                </button>
            </div>

            <!-- Links extras -->
            <div class="flex justify-between text-sm mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[#0026FF] hover:text-[#001C91]">
                        Esqueceu a senha?
                    </a>
                @endif
                <a href="{{ route('register') }}" class="text-[#0026FF] hover:text-[#001C91]">
                    Criar conta
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
