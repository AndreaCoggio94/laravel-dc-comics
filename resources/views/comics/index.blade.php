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
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
    
    
    
    {{-- da inserire all'interno di un singolo comic --}}
    {{-- <a href="{{ route('comics.show', $comic)}}">dettagli comic</a> --}}
    @endsection