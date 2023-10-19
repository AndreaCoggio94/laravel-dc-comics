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
    
    
    
    <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Deleting Element</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            You are going to delete a Comic element, do you want to continue?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('comics.destroy', $comic)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="delete">
            </form>
        </div>
      </div>
    </div>
  </div>
    @endsection