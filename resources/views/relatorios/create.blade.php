@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-8 border border-[#BFC4C9]">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Cadastrar Relatório de Custo</h1>

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('relatorios.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Veículo (Placa)</label>
            <input type="text" name="veiculo" value="{{ old('veiculo') }}" 
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" 
                placeholder="Ex: OXA-5588">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
            <textarea name="descricao" 
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" 
                placeholder="Descreva o gasto">{{ old('descricao') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Valor (R$)</label>
            <input type="text" name="valor" value="{{ old('valor') }}" 
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]" 
                placeholder="Ex: 150.50">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Data</label>
            <input type="date" name="data" value="{{ old('data') }}" 
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]">
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('relatorios.index') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-5 py-2 rounded-lg transition-all">
               Cancelar
            </a>
            <button type="submit" 
                class="bg-[#0026FF] hover:bg-[#001C91] text-white font-semibold px-5 py-2 rounded-lg transition-all">
                Salvar
            </button>
        </div>
    </form>
</div>
@endsection
