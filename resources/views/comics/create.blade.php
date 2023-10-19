@extends('app')

{{-- da inserire il form in post --}}


<form action="{{route('comics.store')}}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description">
    </div>

    <div>
        <label for="thumb">thumb</label>
        <input type="url" name="thumb" id="thumb">
    </div>

    <div>
        <label for="price">price</label>
        <input type="text" name="price" id="price">
    </div>

    <div>
        <label for="series">series</label>
        <input type="number" name="series" id="series">
    </div>

    <div>
        <label for="sale_date">sale date</label>
        <input type="text" name="sale_date" id="sale_date">
    </div>

    <div>
        <label for="type">type</label>
        <input type="text" name="type" id="type">
    </div>

</form>



        