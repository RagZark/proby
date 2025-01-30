@extends('projects.layout.app')

@section('title', 'Ípsillon')

@section('content')
<h1 class="is-size-1 is-justify-content-center is-align-items-center is-align-self-center is-flex">Bem vindo aos projetos <img class="is-large" src="{{ asset('ipsillon-logo.png') }}" alt="Logo"></h1>
</br>
<div>
    @if (Route::has('login'))
    <div class="container is-max-desktop">
        @auth
        <a class="button is-medium is-warning"
            href="{{ route('projects.index') }}">
            Acesse os Projetos
        </a>
        @else
        <a class="button is-medium is-link mgr-small"
            href="{{ route('login') }}">
            Entrar
        </a>

        @if (Route::has('register'))
        <a class="button is-medium is-danger mgl-small"
            href="{{ route('register') }}">
            Registrar
        </a>
        @endif
        @endauth
    </div>
    @endif
</div>

@endsection