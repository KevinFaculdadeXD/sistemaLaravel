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
<body class="font-sans antialiased bg-paper text-ink">
 
    <nav class="bg-forest border-b border-walnut">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
 
                <div class="flex items-center space-x-8">
                    <a href="/" class="font-semibold text-lg text-paper">
                        {{ config('app.name', 'Laravel') }}
                    </a>
 
                    @auth
                        <a href="{{ route('livros.index') }}" class="text-sm font-medium text-paper/70 hover:text-paper transition">Livros</a>
                        <a href="{{ route('alugueis.index') }}" class="text-sm font-medium text-paper/70 hover:text-paper transition">Aluguéis</a>

                        @can('viewAny', App\Models\User::class)
                            <a href="{{ route('usuarios.index') }}" class="text-sm font-medium text-paper/70 hover:text-paper transition">Usuários</a>
                        @endcan

                        @can('create', App\Models\Livro::class)
                            <a href="{{ route('livros.create') }}" class="text-sm font-medium text-paper/70 hover:text-paper transition">
                                Cadastrar Livro
                            </a>
                        @endcan
                    @endauth
                </div>
 
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-sm text-paper/70">
                            Olá, {{ Auth::user()->name }}
                        </span>
 
                        <a href="{{ route('dashboard') }}"
                           class="text-sm font-medium text-paper/80 hover:text-paper transition">
                            Dashboard
                        </a>
 
                        <form action="{{ route('usuarios.logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-garnet border border-transparent rounded-md font-semibold text-xs text-paper uppercase tracking-widest hover:bg-garnet/90 focus:outline-none focus:ring-2 focus:ring-brass focus:ring-offset-2 focus:ring-offset-paper transition ease-in-out duration-150">
                                Sair da conta
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-sm font-medium text-paper/80 hover:text-paper transition">
                            Entrar
                        </a>
 
                        <a href="{{ route('register') }}"
                           class="inline-flex items-center px-4 py-2 bg-garnet border border-transparent rounded-md font-semibold text-xs text-paper uppercase tracking-widest hover:bg-garnet/90 focus:outline-none focus:ring-2 focus:ring-brass focus:ring-offset-2 focus:ring-offset-paper transition ease-in-out duration-150">
                            Cadastrar
                        </a>
                    @endauth
                </div>
 
            </div>
        </div>
    </nav>
 
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-ink">
                @auth
                    Bem-vindo de volta, {{ Auth::user()->name }}!
                @else
                    Bem-vindo ao {{ config('app.name', 'Laravel') }}
                @endauth
            </h1>
 
            <p class="mt-4 text-ink/60">
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