@extends('layouts.app')

    @section('main')
  <div class="">
    <form action="{{route('comics.store')}}" method="post">
      @csrf
        @method('POST')
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="title">
        <label for="content">Description</label>
        <input type="text" name="description" placeholder="descrizione">
        <label for="title">Thumb</label>
        <input type="text" name="thumb" placeholder="thumb">
        <label for="title">Series</label>
        <input type="text" name="series" placeholder="series">
        <label for="title">Price</label>
        <input type="text" name="price" placeholder="price">
        <label for="title">sale_date</label>
        <input type="text" name="sale_date" placeholder="sale_date">
        <label for="title">Type</label>
        <input type="text" name="type" placeholder="type">

        <input type="submit" value="Invia">

      </form>
  </div>
  <a href="{{route('comics.index')}}">Torna alla lista fumetti</a>
    @endsection
