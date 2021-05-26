@extends('shared.base')
@section('content')
<form method="POST" action="{{route('editor.store')}}" enctype="multipart/form-data">
    @csrf
    <input name="name" />
    <textarea name="editor" id="editor"></textarea>
    <button type="submit">Salvar</button>
</form>
@endsection