<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Meus Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">

                @if ($livros->isEmpty())
                    <p class="text-ink/60">{{ __('Você ainda não cadastrou nenhum livro.') }}</p>
                @else
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($livros as $livro)
                            <div class="border border-walnut/30 rounded-lg p-4 shadow-sm hover:shadow-md transition">
                                <h3 class="font-semibold text-ink">{{ $livro->titulo }}</h3>
                                <p class="text-sm text-ink/60 mt-1">
                                    {{ __('Quantidade em estoque') }}: {{ $livro->quantidade_estoque }}
                                </p>
                                <div class="mt-3 flex items-center gap-3">
                                    <a href="{{ route('livros.show', $livro->id) }}"
                                       class="text-sm font-medium text-garnet hover:text-garnet/70">
                                        {{ __('Ver Detalhes') }}
                                    </a>
                                    <a href="{{ route('livros.edit', $livro) }}"
                                       class="text-sm font-medium text-ink/70 hover:text-ink">
                                        {{ __('Editar') }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>