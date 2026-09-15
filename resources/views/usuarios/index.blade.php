<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ink leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-paper overflow-hidden shadow-sm border border-walnut/20 sm:rounded-lg p-6">

                @if ($usuarios->isEmpty())
                    <p class="text-ink/60">{{ __('Nenhum usuário encontrado.') }}</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-walnut/30 text-sm">
                            <thead>
                                <tr class="text-left text-xs font-medium text-ink/60 uppercase tracking-wider">
                                    <th class="py-2 pr-4">{{ __('Nome') }}</th>
                                    <th class="py-2 pr-4">{{ __('E-mail') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-walnut/20">
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td class="py-2 pr-4 text-ink">{{ $usuario->name }}</td>
                                        <td class="py-2 pr-4 text-ink/60">{{ $usuario->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $usuarios->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>