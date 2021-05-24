@extends('layouts.app')

    @section('main')
  <div class="">
    <form action="{{route('comics.update',['comic' => $comic->id])}}" method="post">
      @csrf
        @method('PUT')
        <label for="title">Title</label><br>
        <input type="text" name="title"  value="{{$comic->title}}"> <br>
        <label for="content">Description</label><br>
        <input type="text" name="description"  value="{{$comic->description}}"><br>
        <label for="title">Thumb</label><br>
        <input type="text" name="thumb"  value="{{$comic->thumb}}"><br>
        <label for="title">Series</label><br>
        <input type="text" name="series"  value="{{$comic->series}}"><br>
        <label for="title">Price</label><br>
        <input type="text" name="price"  value="{{$comic->price}}"><br>
        <label for="title">sale_date</label><br>
        <input type="text" name="sale_date"  value="{{$comic->sale_date}}"><br>
        <label for="title">Type</label><br>
        <input type="text" name="type"  value="{{$comic->type}}"><br>

        <input type="submit" value="Invia">

      </form>
  </div>
  <a href="{{route('comics.index')}}">Torna alla lista fumetti</a>
    @endsection
