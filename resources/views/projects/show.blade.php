@extends('projects.layout.app')

@section('title', 'Projeto')

@section('content')
<h1>{{$project->id}} - {{$project->name}}</h1>

{{$project->description}}
</br>
{{$project->status}}
</br>
{{$project->start_date}}
</br>
<form action="{{ route('projects.destroy', $project->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="button is-danger">Deletar</button>
</form>
</br>
<a href="{{ route('projects.index')}}" class="button">Voltar</a>
@endsection