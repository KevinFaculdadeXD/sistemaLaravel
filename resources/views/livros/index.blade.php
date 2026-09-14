<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Livros Disponíveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @can('create', App\Models\Livro::class)
                    <div class="mb-6 text-right">
                        <a href="{{ route('livros.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Cadastrar Livro') }}
                        </a>
                    </div>
                @endcan

                @if ($livros->isEmpty())
                    <p class="text-gray-500">{{ __('Nenhum livro cadastrado ainda.') }}</p>
                @else
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($livros as $livro)
                            <div class="border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition">
                                <h3 class="font-semibold text-gray-800">{{ $livro->titulo }}</h3>
                                <p class="text-sm text-gray-500 mt-1">
                                    {{ __('Quantidade em estoque') }}: {{ $livro->quantidade_estoque }}
                                </p>
                                <a href="{{ route('livros.show', $livro->id) }}"
                                   class="mt-3 inline-block text-sm font-medium text-indigo-600 hover:text-indigo-800">
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