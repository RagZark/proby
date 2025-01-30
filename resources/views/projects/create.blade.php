@extends('projects.layout.app')

@section('title', 'Criar novo projeto')

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


<form action="{{ route('projects.store') }}" method="POST">
    @csrf()
    <input type="text" name="name" placeholder="Nome">
    <textarea name="description" rows="5" cols="33"></textarea>
    <input type="date" name="start_date" pattern="\d{4}-\d{2}-\d{2}">
    <select name="status">
        @foreach(App\Enums\ProjectStatusEnum::values() as $key=>$value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>

@endsection