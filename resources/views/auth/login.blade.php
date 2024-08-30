@extends('layouts.visiteur')
@section('content')

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="('Mot de passe')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-black-600 dark:text-gray-400">{{ ('Se souvenir de moi') }}</span>
            </label>

        </div>

        <!-- Register Link & Login Button -->
        <div class="flex flex-col items-center justify-center mt-4 space-y-4">
            <!-- Se connecter button -->
            <x-dark-button>
                {{ ('Se connecter') }}
            </x-dark-button>
        </div>

        {{-- <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 dark:text-dark-400 hover:text-dark-900 dark:hover:text-dark-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                {{ ('S\'inscrire') }}
            </a> --}}

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-dark-400 hover:text-dark-900 dark:hover:text-dark-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ ('Mot de passe oublié?') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>

@endsection