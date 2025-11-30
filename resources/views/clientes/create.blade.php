@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-8 border border-[#BFC4C9]">
    <h1 class="text-2xl font-bold text-[#001C91] mb-6 text-center">Cadastrar Cliente</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Razão Social -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Razão Social</label>
            <input type="text" name="razaoSocial" value="{{ old('razaoSocial') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: Transportes Silva LTDA">
        </div>

        <!-- Nome Fantasia -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nome Fantasia</label>
            <input type="text" name="nomeFantasia" value="{{ old('nomeFantasia') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: TS Transportes">
        </div>

        <!-- CNPJ -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CNPJ</label>
            <input type="text" name="cnpj" value="{{ old('cnpj') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: 00.000.000/0001-00">
        </div>

        <!-- Inscrição Estadual -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Inscrição Estadual</label>
            <input type="text" name="inscricao_estadual" value="{{ old('inscricao_estadual') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: 123456789">
        </div>

        <!-- Telefone -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
            <input type="text" name="telefone" value="{{ old('telefone') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: (88) 99999-9999">
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: contato@empresa.com">
        </div>

        <!-- Rua -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Rua</label>
            <input type="text" name="rua" value="{{ old('rua') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: Avenida Principal">
        </div>

        <!-- Número -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Número</label>
            <input type="text" name="numero" value="{{ old('numero') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: 1200">
        </div>

        <!-- Bairro -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Bairro</label>
            <input type="text" name="bairro" value="{{ old('bairro') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: Centro">
        </div>

        <!-- Cidade -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cidade</label>
            <input type="text" name="cidade" value="{{ old('cidade') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: Fortaleza">
        </div>

        <!-- Estado -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Estado (UF)</label>
            <input type="text" name="estado" value="{{ old('estado') }}"
                   maxlength="2"
                   class="w-full border border-gray-300 rounded-lg p-2 uppercase focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: CE">
        </div>

        <!-- CEP -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CEP</label>
            <input type="text" name="cep" value="{{ old('cep') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#0026FF]"
                   placeholder="Ex: 60000-000">
        </div>

        <!-- Botões -->
        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('clientes.index') }}"
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
    