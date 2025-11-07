@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Editar Veículo</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium text-gray-700">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo', $veiculo->modelo) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('modelo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">Cor</label>
            <input type="text" name="cor" value="{{ old('cor', $veiculo->cor) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('cor')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">Ano</label>
            <input type="number" name="ano" value="{{ old('ano', $veiculo->ano) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('ano')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium text-gray-700">Placa</label>
            <input type="text" name="placa" value="{{ old('placa', $veiculo->placa) }}"
                class="border-gray-300 rounded-lg w-full px-3 py-2 focus:border-[#0026FF] focus:ring-[#0026FF]">
            @error('placa')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between pt-4">
            <a href="{{ route('veiculos.index') }}"
                class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition">
                Cancelar
            </a>

            <button type="submit"
                class="bg-[#0026FF] text-white px-4 py-2 rounded-lg shadow hover:bg-[#001C91] transition">
                Atualizar Veículo
            </button>
        </div>
    </form>
</div>
@endsection
