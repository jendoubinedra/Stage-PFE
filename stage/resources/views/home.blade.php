@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
               <br><b><br>
                <button type="button" class="btn btn-success"><a href="{{route('addservices')}}">ajouter services</a></button> <button type="button" class="btn btn-success"><a href="">ajouter categories</a></button>
                <br><br><br><br>
  
            </div>
        </div>
    </div>
</div>
@endsection
