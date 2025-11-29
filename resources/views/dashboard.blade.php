

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>São José Transportes</title>
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
                <a href="{{ route('welcome') }}" class="hover:text-[#BFC4C9]">Início</a>
                <a href="{{ route('motoristas.index') }}" class="hover:text-[#BFC4C9]">Motoristas</a>
                 <a href="{{ route('caminhoes.index') }}" class="hover:text-[#BFC4C9]">Caminhões</a>
                <a href="{{ route('veiculos.index') }}" class="hover:text-[#BFC4C9]">Veículos</a>
                <a href="{{ route('clientes.index') }}" class="hover:text-[#BFC4C9]">Clientes</a>
                <a href="{{ route('relatorios.index') }}" class="hover:text-[#BFC4C9]">Relatórios</a>
                <form method="POST" action="{{ route('logout') }}" class= "inline">
                @csrf
                <button type="submit" class="hover:text-[#E60000] font-semibold bg-transparent border-0">Sair</button>
                </form>

            </nav>
        </div>
    </header>

    <!-- Main -->
    <main class="max-w-7xl mx-auto mt-10 px-6">
        <h2 class="text-3xl font-bold text-[#001C91] mb-6">Painel de Controle</h2>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-[#BFC4C9] text-[#001C91] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">Motoristas</h3>
                <p>Gerencie o cadastro e informações dos motoristas.</p>
                <a href="{{ route('motoristas.index') }}" class="mt-4 inline-block bg-[#0026FF] text-white px-4 py-2 rounded-xl hover:bg-[#001C91] transition">
                    Acessar
                </a>
            </div>

            <div class="bg-[#BFC4C9] text-[#001C91] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">Veículos</h3>
                <p>Controle os veículos cadastrados na frota.</p>
                <a href="{{ route('veiculos.index') }}" class="mt-4 inline-block bg-[#0026FF] text-white px-4 py-2 rounded-xl hover:bg-[#001C91] transition">
                    Acessar
                </a>
            </div>

            <div class="bg-[#BFC4C9] text-[#001C91] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">Relatórios</h3>
                <p>Visualize relatórios e dados operacionais.</p>
                <a href="{{ route('relatorios.index') }}" class="mt-4 inline-block bg-[#E60000] text-white px-4 py-2 rounded-xl hover:bg-[#7B3F00] transition">
                    Acessar
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-16 bg-[#001C91] text-white text-center py-4 text-sm">
        © {{ date('Y') }} São José Transportes — Desenvolvido por José Marcos Ferreira
    </footer>

</body>
</html>

