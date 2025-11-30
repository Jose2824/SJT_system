<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente - São José Transportes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black">

    <!-- Header -->
    <header class="bg-[#0026FF] text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <h1 class="text-2xl font-bold tracking-wide">🏢 São José Transportes</h1>

            <nav class="space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-[#BFC4C9]">Início</a>
                <a href="{{ route('clientes.index') }}" class="hover:text-[#BFC4C9]">Voltar</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-[#E60000] font-semibold bg-transparent border-0">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="max-w-4xl mx-auto mt-10 px-6">
        <h2 class="text-3xl font-bold text-[#001C91] mb-6">Editar Cliente</h2>

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="bg-[#BFC4C9]/30 p-6 rounded-2xl shadow-md">
            @csrf
            @method('PUT')

            <!-- Linha 1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="font-semibold">Razão Social</label>
                    <input type="text" name="razaoSocial" value="{{ old('razaoSocial', $cliente->razaoSocial) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Nome Fantasia</label>
                    <input type="text" name="nomeFantasia" value="{{ old('nomeFantasia', $cliente->nomeFantasia) }}" class="w-full p-2 rounded border">
                </div>
            </div>

            <!-- Linha 2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="font-semibold">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" value="{{ old('cnpj', $cliente->cnpj) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Inscrição Estadual</label>
                    <input type="text" name="inscricao_estadual" value="{{ old('inscricao_estadual', $cliente->inscricao_estadual) }}" class="w-full p-2 rounded border">
                </div>
            </div>

            <!-- Linha 3 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="font-semibold">Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $cliente->telefone) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Email</label>
                    <input type="email" name="email" value="{{ old('email', $cliente->email) }}" class="w-full p-2 rounded border">
                </div>
            </div>

            <!-- Linha 4 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="font-semibold">Rua</label>
                    <input type="text" name="rua" value="{{ old('rua', $cliente->rua) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Número</label>
                    <input type="text" name="numero" value="{{ old('numero', $cliente->numero) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Bairro</label>
                    <input type="text" name="bairro" value="{{ old('bairro', $cliente->bairro) }}" class="w-full p-2 rounded border">
                </div>
            </div>

            <!-- Linha 5 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="font-semibold">Cidade</label>
                    <input type="text" name="cidade" value="{{ old('cidade', $cliente->cidade) }}" class="w-full p-2 rounded border">
                </div>

                <div>
                    <label class="font-semibold">Estado</label>
                    <input type="text" maxlength="2" name="estado" value="{{ old('estado', $cliente->estado) }}" class="w-full p-2 uppercase rounded border">
                </div>

                <div>
                    <label class="font-semibold">CEP</label>
                    <input type="text" id="cep" name="cep" value="{{ old('cep', $cliente->cep) }}" class="w-full p-2 rounded border">
                </div>
            </div>

            <button type="submit" class="mt-6 w-full bg-[#0026FF] hover:bg-[#001C91] text-white font-bold py-2 rounded-2xl">
                Salvar Alterações
            </button>

        </form>
    </main>

    <!-- Footer -->
    <footer class="mt-16 bg-[#001C91] text-white text-center py-4 text-sm">
        © {{ date('Y') }} São José Transportes — Desenvolvido por José Marcos Ferreira
    </footer>

</body>
</html>
