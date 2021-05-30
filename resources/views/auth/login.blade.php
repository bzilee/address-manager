<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
            <p class="text-2xl text-center text-bold ">Bienvenu dans votre <br/> Gestionnaire d'Adresses</p>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="mb-5 text-lg text-center">Veuillez saisir vos identifiants d'authentification</p>
            <div>
                <x-label for="email" value="{{ __('Adresse E-mail') }}" />
                <x-input id="email" class="block w-full mt-1 rounded-md active:" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <x-input id="password" class="block w-full mt-1 rounded-md" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Je reste connecté') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Connexion') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
