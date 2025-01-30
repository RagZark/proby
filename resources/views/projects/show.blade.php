@extends('projects.layout.app')

@section('title', 'Projeto')

@section('content')
<div class="box is-white is-max-tablet">
    <h1 class="is-size-1" style="font-weight: 600;"">{{$project->id}} - {{$project->name}}</h1>

{{$project->description}}
</br>
{{$project->status}}
</br>
{{$project->start_date}}


</br>

<form action=" {{ route('projects.destroy', $project->id)}}" method="post">
        @csrf
        @method('delete')
        </br>
        <button type="submit" class="button is-danger">Deletar</button>
        </form>
        </br>
        <a href="{{ route('projects.index')}}" class="button column is-2 is-offset-5 is-link">Voltar</a>
        </br>
</div>
@endsection