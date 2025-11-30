@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-12 p-8 bg-white shadow-lg rounded-xl border border-gray-300">
    <h2 class="text-2xl font-bold mb-6 text-center text-[#0026FF]">Cadastro</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nome</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0026FF]">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0026FF]">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Senha -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Senha</label>
            <input id="password" type="password" name="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0026FF]">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirmar Senha -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmar Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0026FF]">
        </div>

        <!-- Botão -->
        <div class="flex justify-center">
            <button type="submit"
                class="bg-[#0026FF] text-white font-bold px-6 py-2 rounded-xl hover:bg-[#001C91] transition-colors">
                Cadastrar
            </button>
        </div>

        <p class="text-center text-gray-600 mt-4 text-sm">
            Já tem uma conta? 
            <a href="{{ route('login') }}" class="text-[#0026FF] font-semibold hover:underline">Login</a>
        </p>
    </form>
</div>
@endsection
