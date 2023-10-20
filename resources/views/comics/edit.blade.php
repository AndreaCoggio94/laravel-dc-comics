@extends('layouts.app')


@section('main-content')
    <div class="container">
         @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Fix the errors to continue:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                
                <div class="mb-3 col">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" value="{{$comic->title}}" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="description" class="form-label">description</label>
                    <input type="text" name="description" id="description" value="{{$comic->description}}" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="url" name="thumb" id="thumb" value="{{$comic->thumb}}" class="form-control">
                </div>
            </div>
            <div class="row">
                
                <div class="mb-3 col">
                    <label for="price" class="form-label">price</label>
                    <input type="number" name="price" id="price" value="{{$comic->price}}" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="series" class="form-label">series</label>
                    <input type="text" name="series" id="series" value="{{$comic->series}}" class="form-control" >
                </div>
                
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="type" class="form-label">type</label>
                    <input type="text" name="type" id="type" value="{{$comic->type}}" class="form-control">
                </div>

            </div>
            <button type="submit" class="btn btn-primary ">Edit</button>
                
        </form>
    </div>
@endsection
