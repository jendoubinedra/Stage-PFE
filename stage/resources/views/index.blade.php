@extends('layout')
@section('content')
<table class ="table table-striped">
    <thead>
       <tr>
       <td>Id</td> 
       <td>Nom</td>
       <td colspan="2">actions</td>
       </tr>
    </thead>
     <tbody>
         @foreach($categorie as $categorie)
        <tr>
        <td>{{$categorie->id}}</</td> 
        <td>{{$categorie->nom}}</td> 
        <td><a href="{{route('categories.edit',$categorie->id)}}"class="btn btn-primary"> modifier</a>
        </td> 
        <td>
        <form action="{{ route('categories.destroy', $categorie->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
        </td>
        </tr>
        @endforeach
     </tbody>

</table>
@endsection