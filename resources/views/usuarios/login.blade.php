<x-guest-layout>
    <div class="mb-4 text-lg font-semibold text-ink">
        {{ __('Login') }}
    </div>

    @if ($errors->any())
        <div class="mb-4">
            <x-input-error :messages="$errors->all()" />
        </div>
    @endif

    <form method="POST" action="{{ route('authenticate') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end">
            <x-primary-button>
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>