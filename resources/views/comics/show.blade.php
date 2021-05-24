
@extends('layouts.app')

    @section('main')
    <div class="container">
      <div class="card">
          <img src="{{$comic->thumb}}" alt="{{$comic->type}} thumb">
          <span>{{$comic->title}}</span>
          <span>{{$comic->type}}</span>
          <span>{{$comic->price}} $</span>
          <span>{{$comic->series}}</span>
          <span>{{$comic->sale_date}}</span>
          <div class="">
            <p>{{$comic->description}}</p>
          </div>

      </div>
      <form class="" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="DELETE" value="DELETE">
      </form>
      <a href="{{route('comics.edit', ['comic' => $comic->id])}}">EDIT</a>
      <a href="{{route('comics.index')}}">Torna alla lista fumetti</a>
    </div>


    @endsection
