@extends('layouts.app')

    @section('main')
    @foreach($comic as $id => $fumetto)
       <div class="card">
           <a href="{{route('comics.show', ['comic' => $fumetto->id])}}"><img src="{{$fumetto->thumb}}" alt="{{$fumetto->type}} thumb"></a>
           <span>{{$fumetto->title}}</span>
           <span>{{$fumetto->type}}</span>
           <span>{{$fumetto->price}} $</span>
           <span>{{$fumetto->series}}</span>
           <span>{{$fumetto->sale_date}}</span>
           <p>{{$fumetto->description}}</p>
           <a href="{{route('comics.edit', ['comic' => $fumetto->id])}}">EDIT</a>
       </div>
       <form class="" action="{{route('comics.destroy', ['comic' => $fumetto->id])}}" method="post">
         @csrf
         @method('DELETE')
         <input type="submit" name="DELETE" value="DELETE">
       </form>
   @endforeach
    <a href="{{route('comics.create')}}">CREA INSERZIONE</a>

    @endsection
