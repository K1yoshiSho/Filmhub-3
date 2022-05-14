<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a class="navbar-brand" href="/index"><img class="logo" src="{{asset('img/Filmhub.jpg')}}" alt="" id="logoInNav" width="180" height="60"></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __("Forgot your password? Don't worry, enter your email address and we'll send you a link to reset your password.") }}
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
