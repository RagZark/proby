@extends('projects.layout.app')

@section('title', 'Listagem dos Projetos')

@section('content')

<h1>Usuários</h1>

<a href="{{ route('projects.create') }}">Novo Projeto</a>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    <tbody>
        <tr>
            @forelse ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td><a href="{{ route('projects.show', $project->id )}}" class="button is-info">Vizualizar</a></td>
            <td><a href="{{ route('projects.edit', $project->id )}}" class="button is-warning">Editar</a></td>
            <td><a href="?" class="button is-danger">Deletar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="100">Nenhum projeto no banco.</td>
        </tr>
        @endforelse
        </tr>
    </tbody>
    </thead>
</table>

{{$projects->links()}}

@endsection