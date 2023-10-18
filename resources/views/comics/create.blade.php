@extends('app')

{{-- da inserire il form in post --}}


<form action="{{route('comics.store')}}" method="POST">
@csrf
</form>