@extends('layouts.app')

    @section('main')
    <div class="flex-main">
           <button class="btn-last"type="button" name="button"><a  href="{{route('comics.create')}}">CREA INSERZIONE</a></button>
      @foreach($comic as $id => $fumetto)
         <div class="card border-grey">
             <a href="{{route('comics.show', ['comic' => $fumetto->id])}}"><img src="{{$fumetto->thumb}}" alt="{{$fumetto->type}} thumb"></a>
             <div class="text-center flex-column border-grey" >
               <span>{{$fumetto->title}}</span>
               <span>{{$fumetto->type}}</span>
               <span>{{$fumetto->price}} $</span>
               <span>{{$fumetto->series}}</span>
               <span>{{$fumetto->sale_date}}</span>
               <div class="description">
                 <p>{{$fumetto->description}}</p>
               </div>
               <div class="flex-middle">
                 <form class="" action="{{route('comics.destroy', ['comic' => $fumetto->id])}}" method="post">
                   @csrf
                   @method('DELETE')
                   <input type="submit" name="DELETE" value="DELETE">
                 </form>
                 <a href="{{route('comics.edit', ['comic' => $fumetto->id])}}">EDIT</a>
               </div>

             </div>
         </div>

     @endforeach


    </div>

    @endsection
