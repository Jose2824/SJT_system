@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-8 border border-[#BFC4C9]">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Cadastrar Veículo</h1>
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('veiculos.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: Buggy Classic">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cor</label>
            <input type="text" name="cor" value="{{ old('cor') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: Vermelho">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ano</label>
            <input type="text" name="ano" value="{{ old('ano') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: 2024">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Placa</label>
            <input type="text" name="placa" value="{{ old('placa') }}" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" placeholder="Ex: ABC-1234">
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('veiculos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-5 py-2 rounded-lg transition-all">Cancelar</a>
            <button type="submit" class="bg-[#0026FF] hover:bg-[#001C91] text-white font-semibold px-5 py-2 rounded-lg transition-all">Salvar Carro</button>
        </div>
    </form>
</div>
@endsection
