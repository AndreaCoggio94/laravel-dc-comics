@extends('layouts.app')


@section('main-content')
    <div class="container">

        
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="row">
                
                <div class="mb-3 col">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="description" class="form-label">description</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="url" name="thumb" id="thumb" class="form-control">
                </div>
            </div>
            <div class="row">
                
                <div class="mb-3 col">
                    <label for="price" class="form-label">price</label>
                    <input type="number" name="price" id="price" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="series" class="form-label">series</label>
                    <input type="text" name="series" id="series" class="form-control" >
                </div>
                
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date" name="sale_date" id="sale_date" class="form-control">
                </div>
                
                <div class="mb-3 col">
                    <label for="type" class="form-label">type</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>

            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
                
        </form>
    </div>
@endsection



