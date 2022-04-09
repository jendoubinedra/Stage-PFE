@extends('layout')
@section('content')
<form action="{{route('categories.update', $categorie->id)}}" method="post">
  @csrf 
  @method('Patch')
  <label>nom</label>
<input type="text" name="nom" value="{{$categorie->nom}}">
<button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection