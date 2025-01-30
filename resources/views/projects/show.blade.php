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
<a href="{{ route('projects.index')}}" class="button">Voltar</a>
@endsection