@extends('layouts.visiteur')
@section('content')


<x-guest-layout>
   <strong> <h1 class="text-center mb-4 ">Veillez vous inscrire</h1></strong>
    <form method="POST" action="{{ route('register') }}" >
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full bg-black text-white" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Prénom -->
        <div class="mt-4">
            <x-input-label for="prenom" :value="__('Prénom')" />
            <x-text-input id="prenom" class="block mt-1 w-full bg-black text-white" type="text" name="prenom" :value="old('prenom')" required autocomplete="prenom" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>

        <!-- Genre -->
        <div class="mt-4">
            <x-input-label for="genre" :value="__('Genre')" />
            <select id="genre" name="genre" class="block mt-1 w-full bg-black text-white" required>
                <option value="" selected disabled>-- Sélectionner --</option>
                <option value="homme">{{ __('Homme') }}</option>
                <option value="femme">{{ __('Femme') }}</option>
                <option value="autre">{{ __('Autre') }}</option>
            </select>
            <x-input-error :messages="$errors->get('genre')" class="mt-2" />
        </div>

        <!-- Nom d'utilisateur -->
        <div class="mt-4">
            <x-input-label for="nom_utilisateur" :value="__('Nom d\'utilisateur')" />
            <x-text-input id="nom_utilisateur" class="block mt-1 w-full bg-black text-white" type="text" name="nom_utilisateur" :value="old('nom_utilisateur')" required autocomplete="nom_utilisateur" />
            <x-input-error :messages="$errors->get('nom_utilisateur')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-black text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" class="block mt-1 w-full bg-black text-white" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-black text-white" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Deja un compte?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@endsection