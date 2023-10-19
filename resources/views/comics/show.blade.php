@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="card" >
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}" >
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
              <div class="d-flex">

                <a href="{{ route('comics.index')}}" class="btn btn-primary mx-1">Return to comics</a>
                <a href="{{ route('comics.edit', $comic)}}" class="btn btn-warning mx-1">Edit this comic</a>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger mx-1" type="submit" value="delete">
                </form>
              </div>
            </div>
            </div>
    </div>
    
@endsection