@extends('layouts.app')

@section('main-content')
    @dump($comics)
{{-- da inserire all'interno di un singolo comic --}}
    {{-- <a href="{{ route('comics.show', $comic)}}">dettagli comic</a> --}}
@endsection