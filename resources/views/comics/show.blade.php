@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="card" >
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}" >
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
              <a href="{{ route('comics.index')}}" class="btn btn-primary">Return to comics</a>
              <a href="{{ route('comics.edit', $comic)}}" class="btn btn-warning">Edit this comic</a>
              
            </div>
          </div>
    </div>
    
@endsection