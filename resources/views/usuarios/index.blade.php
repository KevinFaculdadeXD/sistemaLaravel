<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if ($usuarios->isEmpty())
                    <p class="text-gray-500">{{ __('Nenhum usuário encontrado.') }}</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead>
                                <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <th class="py-2 pr-4">{{ __('Nome') }}</th>
                                    <th class="py-2 pr-4">{{ __('E-mail') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td class="py-2 pr-4 text-gray-800">{{ $usuario->name }}</td>
                                        <td class="py-2 pr-4 text-gray-500">{{ $usuario->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>