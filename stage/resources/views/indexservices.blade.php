
<!-- index.blade.php -->

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>nom-s</td>
          <td>description</td>
          <td>image</td>
          <td>Prix</td>
          <td>categorie</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($test as $test)
        <tr>
            <td>{{$test->id}}</td>
            <td>{{$test->nom_s}}</td>
            <td>{{$test->description}}</td>
            <td>{{$test->image}}</td>
            <td>{{$test->prix}}</td>
            <td>{{$test->categorie}}</td>
            <td><a href="{{ route('services.edit', $test->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('services.destroy', $test->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
