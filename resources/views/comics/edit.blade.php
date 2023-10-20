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
                    <label for="title" class="form-label @error('title') is-invalid @enderror">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') ?? $comic->title }}" class="form-control">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">description</label>
                    <input type="text" name="description" id="description" value="{{ old('description') ?? $comic->description }}" class="form-control">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">thumb</label>
                    <input type="url" name="thumb" id="thumb" value="{{ old('thumb') ?? $comic->thumb }}" class="form-control">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                
                <div class="mb-3 col">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">price</label>
                    <input type="number" name="price" id="price" value="{{ old('price') ?? $comic->price }}" class="form-control">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">series</label>
                    <input type="text" name="series" id="series" value="{{ old('series') ?? $comic->series }}" class="form-control" >
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">sale date</label>
                    <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}" class="form-control">
                    @error('number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 col">
                    <label for="type" class="form-label @error('type') is-invalid @enderror">type</label>
                    <input type="text" name="type" id="type" value="{{ old('type') ?? $comic->type }}" class="form-control">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-primary ">Edit</button>
                
        </form>
    </div>
@endsection
