<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <a href="/"class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-20 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Logo_UDO.svg/401px-Logo_UDO.svg.png" alt="Workflow">
          <img class="hidden lg:block h-20 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Logo_UDO.svg/401px-Logo_UDO.svg.png" alt="Workflow">
        </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Problemas para recordar tu contraseña? No te preocupes. Solo ingresa tu correo electronico y te envieremos un reset link para que escogas uno nuevo') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
