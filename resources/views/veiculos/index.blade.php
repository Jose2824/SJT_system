<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos - São José Transportes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black">

    <!-- Header -->
    <header class="bg-[#0026FF] text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <h1 class="text-2xl font-bold tracking-wide">
                🚛 São José Transportes
            </h1>
            <nav class="space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-[#BFC4C9]">Início</a>
                <a href="{{ route('veiculos.create') }}" class="hover:text-[#BFC4C9] font-semibold">+ Novo Veículo</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-[#E60000] font-semibold bg-transparent border-0">Sair</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="max-w-7xl mx-auto mt-10 px-6">
        <h2 class="text-3xl font-bold text-[#001C91] mb-6">Lista de Veículos</h2>

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
                        <th class="p-3">Modelo</th>
                        <th class="p-3">Cor</th>
                        <th class="p-3">Ano</th>
                        <th class="p-3">Placa</th>
                        <th class="p-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($veiculos as $index => $vc)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3">{{ $vc->modelo }}</td>
                            <td class="p-3">{{ $vc->cor }}</td>
                            <td class="p-3">{{ $vc->ano }}</td>
                            <td class="p-3">{{ $vc->placa }}</td>
                            <td class="p-3 space-x-2">
                                <a href="{{ route('veiculos.edit', $vc->id) }}" class="text-blue-600 hover:underline">✏️ Editar</a>
                                <form action="{{ route('veiculos.destroy', $vc->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-[#E60000] hover:underline">🗑️ Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-600">Nenhum veículo cadastrado.</td>
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
