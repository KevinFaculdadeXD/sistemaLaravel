<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if($alugueis->isEmpty())
                    <p class="text-gray-500">{{ __('Você não possui livros alugados.') }}</p>
                @else
                    <div class="divide-y divide-gray-200">
                        @foreach($alugueis as $aluguel)
                            <div class="py-4 flex items-center justify-between">
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ $aluguel->livro->titulo }}</h3>
                                    <p class="text-sm text-gray-500">
                                        <span class="font-medium">{{ __('Autor') }}:</span> {{ $aluguel->livro->autor }}
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        <span class="font-medium">{{ __('Data do aluguel') }}:</span> {{ $aluguel->data_aluguel }}
                                    </p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <a href="{{ route('livros.show', $aluguel->livro) }}"
                                       class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
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