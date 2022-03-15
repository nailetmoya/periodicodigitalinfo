<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <a href="/"class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-20 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Logo_UDO.svg/401px-Logo_UDO.svg.png" alt="Workflow">
          <img class="hidden lg:block h-20 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Logo_UDO.svg/401px-Logo_UDO.svg.png" alt="Workflow">
        </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
