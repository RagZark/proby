@extends('projects.layout.app')

@section('title', 'Listagem dos Projetos')

@section('headerContent')
<nav class="navbar-end">
    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link is-link">
            {{ Auth::user()->name }}
        </a>

        <div class="navbar-dropdown">
            <a class="navbar-item">{{ Auth::user()->email }}</a>
            <a class="navbar-item is-link" href="{{ route('profile.edit') }}">
                Editar {{ __('Profile') }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" class="is-link"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
    </div>
</nav>
@endsection

@section('content')

<h1 class="is-size-1 ">Projetos</h1>

</br>
<a href="{{ route('projects.create') }}" class="button is-medium">Novo Projeto + </a>
</br>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    <tbody>
        @forelse ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td><a href="{{ route('projects.show', $project->id )}}" class="button is-info">Vizualizar</a></td>
            <td><a href="{{ route('projects.edit', $project->id )}}" class="button is-warning">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="100">Nenhum projeto no banco.</td>
        </tr>
        @endforelse
    </tbody>
    </thead>
</table>

{{$projects->links()}}

@endsection