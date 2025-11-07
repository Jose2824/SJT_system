<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>São José Transportes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#BFC4C9] text-gray-900 min-h-screen flex flex-col">

    <!-- Cabeçalho -->
    <header class="bg-[#0026FF] text-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">🚛 São José Transportes</h1>
            <nav class="space-x-4">
                <a href="{{ route('veiculos.index') }}" class="hover:underline">Veículos</a>
            </nav>
        </div>
    </header>

    <!-- Conteúdo dinâmico -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-[#001C91] text-white text-center py-3 mt-auto">
        <p class="text-sm">© {{ date('Y') }} São José Transportes. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
