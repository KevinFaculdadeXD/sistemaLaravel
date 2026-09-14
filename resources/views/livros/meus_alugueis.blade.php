<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Meus Livros Alugados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-4">

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

            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">
                @if($alugueis->isEmpty())
                    <p class="text-ink/60">{{ __('Você não possui livros alugados.') }}</p>
                @else
                    <div class="divide-y divide-walnut/30">
                        @foreach($alugueis as $aluguel)
                            <div class="py-4 flex items-center justify-between">
                                <div>
                                    <h3 class="font-semibold text-ink">{{ $aluguel->livro->titulo }}</h3>
                                    <p class="text-sm text-ink/60">
                                        <span class="font-medium">{{ __('Autor') }}:</span> {{ $aluguel->livro->autor }}
                                    </p>
                                    <p class="text-sm text-ink/60">
                                        <span class="font-medium">{{ __('Data do aluguel') }}:</span> {{ $aluguel->data_aluguel }}
                                    </p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <a href="{{ route('livros.show', $aluguel->livro) }}"
                                       class="text-sm font-medium text-garnet hover:text-garnet/70">
                                        {{ __('Ver Livro') }}
                                    </a>

                                    <form action="{{ route('alugueis.devolver', $aluguel) }}" method="POST">
                                        @csrf
                                        <x-secondary-button type="submit">
                                            {{ __('Devolver Livro') }}
                                        </x-secondary-button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>