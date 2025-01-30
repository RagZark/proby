@extends('projects.layout.app')

@section('title', 'Editar Projeto')

@section('content')
<div class="box is-white is-max-tablet">
    <h1 class="is-size-1" style="font-weight: 600;">Editar Projeto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf()
        @method('put')
        <div class="is-flex is-justify-content-space-between">
            <input class="input column is-5 is-white" type="text" name="name" placeholder="Nome" value="{{$project->name}}">
            <input class="input column is-5 is-white" type="date" name="start_date" pattern="\d{4}-\d{2}-\d{2}">
            <div class="select is-white">
                <select name="status">
                    @foreach(App\Enums\ProjectStatusEnum::values() as $key=>$value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </br>
        <textarea style="resize: none;" class="textarea is-white" name="description" placeholder="Descrição">{{$project->description}}</textarea>
        </br>
        <button class="button is-link" type="submit">Editar</button>
    </form>

</div>




@endsection