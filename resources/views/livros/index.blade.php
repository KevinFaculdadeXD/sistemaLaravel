<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Livros Disponíveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">

                @can('create', App\Models\Livro::class)
                    <div class="mb-6 text-right">
                        <a href="{{ route('livros.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-garnet border border-transparent rounded-md font-semibold text-xs text-paper uppercase tracking-widest hover:bg-garnet/90 focus:outline-none focus:ring-2 focus:ring-brass focus:ring-offset-2 focus:ring-offset-paper transition ease-in-out duration-150">
                            {{ __('Cadastrar Livro') }}
                        </a>
                    </div>
                @endcan

                @if ($livros->isEmpty())
                    <p class="text-ink/60">{{ __('Nenhum livro cadastrado ainda.') }}</p>
                @else
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($livros as $livro)
                            <div class="border border-walnut/30 rounded-lg p-4 shadow-sm hover:shadow-md transition">
                                <h3 class="font-semibold text-ink">{{ $livro->titulo }}</h3>
                                <p class="text-sm text-ink/60 mt-1">
                                    {{ __('Quantidade em estoque') }}: {{ $livro->quantidade_estoque }}
                                </p>
                                <a href="{{ route('livros.show', $livro->id) }}"
                                   class="mt-3 inline-block text-sm font-medium text-garnet hover:text-garnet/70">
                                    {{ __('Ver Detalhes') }} &rarr;
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>