@extends('layouts.app')

    @section('main')
  <div class="">
    <form action="{{route('comics.update',['comic' => $comic->id])}}" method="post">
      @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title"  value="{{$comic->title}}">
        <label for="content">Description</label>
        <input type="text" name="description"  value="{{$comic->description}}">
        <label for="title">Thumb</label>
        <input type="text" name="thumb"  value="{{$comic->thumb}}">
        <label for="title">Series</label>
        <input type="text" name="series"  value="{{$comic->series}}">
        <label for="title">Price</label>
        <input type="text" name="price"  value="{{$comic->price}}">
        <label for="title">sale_date</label>
        <input type="text" name="sale_date"  value="{{$comic->sale_date}}">
        <label for="title">Type</label>
        <input type="text" name="type"  value="{{$comic->type}}">

        <input type="submit" value="Invia">

      </form>
  </div>
  <a href="{{route('comics.index')}}">Torna alla lista fumetti</a>
    @endsection
