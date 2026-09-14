<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Editar Livro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">
                <form action="{{ route('livros.update', $livro) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    @include('livros._form')

                    <div>
                        <x-primary-button>
                            {{ __('Salvar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">
                <h3 class="text-sm font-medium text-ink/80 mb-3">{{ __('Zona de perigo') }}</h3>
                <form action="{{ route('livros.destroy', $livro) }}" method="POST"
                      onsubmit="return confirm('{{ __('Tem certeza que deseja excluir este livro?') }}');">
                    @csrf
                    @method('DELETE')

                    <x-danger-button>
                        {{ __('Excluir Livro') }}
                    </x-danger-button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>