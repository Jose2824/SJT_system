<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - São José Transportes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black">

    <header class="bg-[#0026FF] text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <h1 class="text-2xl font-bold tracking-wide">
                📊 São José Transportes — Relatórios
            </h1>
            <nav class="space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-[#BFC4C9]">Início</a>
                <a href="{{ route('relatorios.create') }}" class="hover:text-[#BFC4C9] font-semibold">+ Cadastrar Relatório</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-[#E60000] font-semibold bg-transparent border-0">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="max-w-7xl mx-auto mt-10 px-6">
        <h2 class="text-3xl font-bold text-[#001C91] mb-6">Relatórios de Custos</h2>

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
                        <th class="p-3">Veículo (Placa)</th>
                        <th class="p-3">Descrição</th>
                        <th class="p-3">Valor</th>
                        <th class="p-3">Data</th>
                        <th class="p-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($relatorios as $index => $r)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3 font-semibold">{{ $r->veiculo }}</td>
                            <td class="p-3">{{ $r->descricao }}</td>
                            <td class="p-3">R$ {{ number_format($r->valor, 2, ',', '.') }}</td>
                            <td class="p-3">{{ \Carbon\Carbon::parse($r->data)->format('d/m/Y') }}</td>
                            <td class="p-3 space-x-2">
                                <a href="{{ route('relatorios.edit', $r->id) }}" class="text-blue-600 hover:underline">✏️ Editar</a>
                                <form action="{{ route('relatorios.destroy', $r->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#E60000] hover:underline">🗑️ Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-600">Nenhum relatório cadastrado.</td>
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
