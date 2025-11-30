<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - São José Transportes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black">

    <!-- Header -->
    <header class="bg-[#0026FF] text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <h1 class="text-2xl font-bold tracking-wide">
                🏢 São José Transportes
            </h1>
            <nav class="space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-[#BFC4C9]">Início</a>
                <a href="{{ route('clientes.create') }}" class="hover:text-[#BFC4C9] font-semibold">Cadastrar Cliente</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-[#E60000] font-semibold bg-transparent border-0">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="max-w-7xl mx-auto mt-10 px-6">
        <h2 class="text-3xl font-bold text-[#001C91] mb-6">Lista de Clientes</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-[#BFC4C9]/30 rounded-2xl shadow-md">
            <table class="min-w-full border border-[#BFC4C9] text-left">
                <thead class="bg-[#BFC4C9] text-[#001C91]">
                    <tr>
                        <th class="p-3">#</th>
                        <th class="p-3">Razão Social</th>
                        <th class="p-3">Nome Fantasia</th>
                        <th class="p-3">CNPJ</th>
                        <th class="p-3">Inscr. Estadual</th>
                        <th class="p-3">Telefone</th>
                        <th class="p-3">E-mail</th>
                        <th class="p-3">Rua</th>
                        <th class="p-3">Nº</th>
                        <th class="p-3">Bairro</th>
                        <th class="p-3">Cidade</th>
                        <th class="p-3">UF</th>
                        <th class="p-3">CEP</th>
                        <th class="p-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientes as $index => $c)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3 max-w-xs truncate" title="{{ $c->razaoSocial }}">{{ $c->razaoSocial }}</td>
                            <td class="p-3 max-w-xs truncate" title="{{ $c->nomeFantasia }}">{{ $c->nomeFantasia }}</td>
                            <td class="p-3">{{ $c->cnpj }}</td>
                            <td class="p-3">{{ $c->inscricao_estadual }}</td>
                            <td class="p-3">{{ $c->telefone }}</td>
                            <td class="p-3 max-w-sm truncate" title="{{ $c->email }}">{{ $c->email }}</td>
                            <td class="p-3 max-w-sm truncate" title="{{ $c->rua }}">{{ $c->rua }}</td>
                            <td class="p-3">{{ $c->numero }}</td>
                            <td class="p-3 max-w-xs truncate" title="{{ $c->bairro }}">{{ $c->bairro }}</td>
                            <td class="p-3">{{ $c->cidade }}</td>
                            <td class="p-3">{{ $c->estado }}</td>
                            <td class="p-3">{{ $c->cep }}</td>
                            <td class="p-3 space-x-2">
                                <a href="{{ route('clientes.edit', $c->id) }}" class="text-blue-600 hover:underline">✏️ Editar</a>
                                <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" class="inline" onsubmit="return confirm('Confirma exclusão deste cliente?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#E60000] hover:underline">🗑️ Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="14" class="p-4 text-center text-gray-600">Nenhum cliente cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-16 bg-[#001C91] text-white text-center py-4 text-sm">
        © {{ date('Y') }} São José Transportes — Desenvolvido por José Marcos Ferreira
    </footer>

</body>
</html>
