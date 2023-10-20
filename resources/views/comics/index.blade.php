@extends('layouts.app')

@section('main-content')
   

<div class="container">

    <a href="{{ route('comics.create')}}" class="btn btn-success">create</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            {{-- <th scope="col">description</th>
            <th scope="col">thumb</th> --}}
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale date</th>
            <th scope="col">type</th>
            <th scope="col">details</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($comics as $comic)
                
            
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                {{-- <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td> --}}
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td><a href="{{ route('comics.show', $comic)}}">more</a></td>
                <td><a href="{{ route('comics.edit', $comic)}}">edit</a></td>
                <!-- Button trigger modal -->
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        delete
                      </button>
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
    @endsection

    @section('modal')
        @include('partials._modalDelete')
    @endsection