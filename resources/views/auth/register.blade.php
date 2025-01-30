@extends('projects.layout.app')

@section('title', 'Ípsillon')

@section('content')

<img class="is-flex is-align-self-center" src="{{ asset('ipsillon-logo.png') }}" alt="Logo">


<div class="box is-white is-max-tablet">
    </br>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-text-input placeholder="Nome" id="name" class="input column is-4 is-offset-4  is-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input placeholder="Email" id="email" class="input column is-4 is-offset-4  is-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input placeholder="Senha" id="password" class="input column is-4 is-offset-4  is-white"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">

            <x-text-input placeholder="Confirmar senha" id="password_confirmation" class="input column is-4 is-offset-4  is-white"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="button is-white" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="button is-link">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>


@endsection