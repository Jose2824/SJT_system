@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Editar Motorista</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('motoristas.update', $motorista->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium text-gray-700">Nome</label>
            <input type="text" name="nome" value="{{ old('nome', $motorista->nome) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">Data de Nascimento</label>
            <input type="date" name="datanasc" value="{{ old('datanasc', $motorista->datanasc) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('datanasc')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">CPF</label>
            <input type="text" name="cpf" value="{{ old('cpf', $motorista->cpf) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('cpf')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">CNH</label>
            <input type="text" name="cnh" value="{{ old('cnh', $motorista->cnh) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('cnh')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">Número de Contato</label>
            <input type="text" name="numcont" value="{{ old('numcont', $motorista->numcont) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('numcont')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between pt-4">
            <a href="{{ route('motoristas.index') }}"
                class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition">
                Cancelar
            </a>

            <button type="submit"
                class="bg-[#0026FF] text-white px-4 py-2 rounded-lg shadow hover:bg-[#001C91] transition">
                Atualizar Motorista
            </button>
        </div>
    </form>
</div>
@endsection
