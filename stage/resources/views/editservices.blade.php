@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier un service
  </div>

  <div class="card-body">

    <@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('services.update', $services->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="form-group">
              <label for="nom_s">nom_s:</label>
              <input type="text" class="form-control" name="nom_s" />
          </div>
          <div>
          <label for="description">description:</label>  
           <textarea  class="form-control" name="description"
              rows="5" cols="33">
           
           </textarea>
          </div>  
            <div class="form-group">
              <label for="image">image :</label>
              <input type="file" class="form-control" name="image"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="text" class="form-control" name="prix" />
          </div>
          <div class="form-group">
              <label for="categorie">categorie:</label>
              <input type="text" class="form-control" name="categorie"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection
