@extends('layout')
@section('content')
<form method="post" action="{{route('categories.store')}}">
    @csrf
    <input type="text" name="nom"><br>
    <button type="submit">ajouter</button>

</form>
@endsection