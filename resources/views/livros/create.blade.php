<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Publicar Livro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">
                <form action="{{ route('livros.store') }}" method="POST" class="space-y-6">
                    @csrf

                    @include('livros._form')

                    <div>
                        <x-primary-button>
                            {{ __('Publicar Livro') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>