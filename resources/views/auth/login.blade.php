@extends('projects.layout.app')

@section('title', 'Ípsillon')

@section('content')

<img width="300" class="is-align-self-center" src="{{ asset('ipsillon-logo.png') }}" alt="Logo">

</br>
<div class="box is-white is-max-tablet">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="main">
            </br>
            <div class="columns">
                <div class="field column is-half is-offset-one-quarter">
                    <p class="control has-icons-left has-icons-right">
                        <x-text-input id="email" class="input is-white" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
            </div>
            <div class="columns">
                <div class="field column is-half is-offset-one-quarter">
                    <p class="control has-icons-left">

                        <x-text-input id="password" placeholder="Senha" class="input is-white"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>

                </div>
            </div>


            </br>

            <button class="button is-link">
                {{ __('Log in') }}
                <button>
        </div>
    </form>

</div>
@endsection