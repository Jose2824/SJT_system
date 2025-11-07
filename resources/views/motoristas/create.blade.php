@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-8 border border-[#BFC4C9]">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Cadastrar Motorista</h1>
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('motoristas.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: José Marcos">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CPF</label>
            <input type="text" name="cpf" value="{{ old('cpf') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: 000.000.000-00">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CNH</label>
            <input type="text" name="cnh" value="{{ old('cnh') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: 00000000000">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento</label>
            <input type="date" name="datanasc" value="{{ old('datanasc') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: 28/01/2009">
        </div>

         <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Número para contato</label>
            <input type="text" name="numcont" value="{{ old('numcont') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex:+55 (88) 9 9924-4044">
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('motoristas.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-5 py-2 rounded-lg transition-all">Cancelar</a>
            <button type="submit" class="bg-[#0026FF] hover:bg-[#001C91] text-white font-semibold px-5 py-2 rounded-lg transition-all">Salvar</button>
        </div>
    </form>
</div>
@endsection
