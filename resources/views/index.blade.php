<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">
 
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
 
                <div class="flex items-center space-x-8">
                    <a href="/" class="font-semibold text-lg text-gray-800">
                        {{ config('app.name', 'Laravel') }}
                    </a>
 
                    <a href="/livros" class="text-sm font-medium text-gray-500 hover:text-gray-800 transition">Livros</a>
                    <a href="/alugueis" class="text-sm font-medium text-gray-500 hover:text-gray-800 transition">Aluguéis</a>
                    <a href="/usuarios" class="text-sm font-medium text-gray-500 hover:text-gray-800 transition">Usuários</a>
 
                    @auth
                        @can('create', App\Models\Livro::class)
                            <a href="{{ route('livros.create') }}" class="text-sm font-medium text-gray-500 hover:text-gray-800 transition">
                                Cadastrar Livro
                            </a>
                        @endcan
                    @endauth
                </div>
 
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-sm text-gray-500">
                            Olá, {{ Auth::user()->name }}
                        </span>
 
                        <a href="{{ route('dashboard') }}"
                           class="text-sm font-medium text-gray-600 hover:text-gray-800 transition">
                            Dashboard
                        </a>
 
                        <form action="{{ route('usuarios.logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Sair da conta
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-sm font-medium text-gray-600 hover:text-gray-800 transition">
                            Entrar
                        </a>
 
                        <a href="{{ route('register') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Cadastrar
                        </a>
                    @endauth
                </div>
 
            </div>
        </div>
    </nav>
 
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-gray-800">
                @auth
                    Bem-vindo de volta, {{ Auth::user()->name }}!
                @else
                    Bem-vindo ao {{ config('app.name', 'Laravel') }}
                @endauth
            </h1>
 
            <p class="mt-4 text-gray-500">
                @auth
                    Explore os livros disponíveis ou acesse seus aluguéis.
                @else
                    Faça login ou cadastre-se para começar a alugar livros.
                @endauth
            </p>
        </div>
    </main>
 
</body>
</html>
 