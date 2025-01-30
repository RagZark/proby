@extends('projects.layout.app')

@section('title', 'Editar Projeto')

@section('content')
<h1>Novo Projeto</h1>

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
    <input type="text" name="name" placeholder="Nome" value="{{ $project->name }}">
    <textarea name="description" rows="5" cols="33">{{$project->description}}</textarea>
    <input type="date" name="start_date" pattern="\d{4}-\d{2}-\d{2}">
    <select name="status">
        @foreach(App\Enums\ProjectStatusEnum::values() as $key=>$value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>

@endsection