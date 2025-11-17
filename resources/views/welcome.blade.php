<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - São José Transportes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#BFC4C9] text-[#000000] antialiased">

    <!-- Cabeçalho -->
    <header class="bg-[#0026FF] text-white shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/sjt.png') }}" alt="Logo São José Transportes" class="h-12 w-20 object-cover rounded-lg shadow-md">
                <h1 class="text-2xl font-bold tracking-wide">São José Transportes</h1>
            </div>

            <nav class="flex items-center space-x-6 text-lg">
                <a href="#" class="hover:text-[#BFC4C9] transition-colors">Início</a>
                <a href="#" class="hover:text-[#BFC4C9] transition-colors">Frota</a>
                <a href="#" class="hover:text-[#BFC4C9] transition-colors">Contato</a>

                @auth
                    <!-- Se estiver logado -->
                    <a href="{{ url('/dashboard') }}" class="bg-white text-[#0026FF] font-semibold py-2 px-4 rounded-lg hover:bg-[#BFC4C9] transition">
                        Dashboard
                    </a>
                @else
                    <!-- Se NÃO estiver logado -->
                    <a href="{{ route('login') }}" class="bg-white text-[#0026FF] font-semibold py-2 px-4 rounded-lg hover:bg-[#BFC4C9] transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-[#E60000] text-white font-semibold py-2 px-4 rounded-lg hover:bg-[#7B3F00] transition">
                        Registrar
                    </a>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative mt-[80px]">
        <img src="{{ asset('assets/DAF_xf_530.jpg') }}" alt="Caminhão DAF XF 530" class="w-full h-[380px] object-cover brightness-75">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
            <h2 class="text-5xl font-bold drop-shadow-lg">Eficiência que move o Brasil</h2>
            <p class="mt-4 text-lg max-w-2xl">Transporte rápido, seguro e confiável para qualquer destino.</p>
            <a href="#" class="mt-6 bg-[#E60000] hover:bg-[#7B3F00] text-white font-semibold py-3 px-8 rounded-lg transition-all">
                Conheça Nossa Frota
            </a>
        </div>
    </section>

    <!-- Sobre -->
    <section class="max-w-6xl mx-auto py-16 px-6 text-center">
        <h3 class="text-3xl font-bold text-[#0026FF] mb-4">Sobre Nós</h3>
        <p class="text-lg text-[#000000] leading-relaxed">
            A São José Transportes atua com excelência em transporte de produtos perigosos, 
            oferecendo soluções logísticas ágeis, seguras e personalizadas atuando no mercado desde 2024. 
            Com uma frota moderna e equipe qualificada, garantimos eficiência em cada entrega.
        </p>
    </section>

    <!-- Rodapé -->
    <footer class="bg-[#001C91] text-white py-6 mt-10">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-sm">&copy; {{ date('Y') }} São José Transportes. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
