<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ $livro->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-4">

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 text-sm rounded-md p-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-700 text-sm rounded-md p-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6 space-y-3">
                <p class="text-sm text-ink/60">
                    {{ __('Tema') }}: <span class="font-medium text-ink">{{ $livro->tema->nome }}</span>
                </p>
                <p class="text-sm text-ink/60">
                    {{ __('Autor') }}: <span class="font-medium text-ink">{{ $livro->autor }}</span>
                </p>
                <p class="text-sm text-ink/60">
                    {{ __('Quantidade em estoque') }}: <span class="font-medium text-ink">{{ $livro->quantidade_estoque }}</span>
                </p>
                <p class="text-ink/80 pt-2">{{ $livro->descricao }}</p>

                <div class="flex items-center gap-4 pt-4">
                    @if($livro->quantidade_estoque > 0)
                        <form action="{{ route('livros.alugar', $livro) }}" method="POST">
                            @csrf
                            <x-primary-button>
                                {{ __('Alugar Livro') }}
                            </x-primary-button>
                        </form>
                    @else
                        <p class="text-sm text-red-600">{{ __('Livro indisponível para aluguel.') }}</p>
                    @endif

                    @can('update', $livro)
                        <a href="{{ route('livros.edit', $livro) }}"
                           class="text-sm font-medium text-garnet hover:text-garnet/70">
                            {{ __('Editar Livro') }}
                        </a>
                    @endcan
                </div>
            </div>

        </div>
    </div>
</x-app-layout>