@extends('layouts.app')

    @section('main')
  <div class="">
    <h1>CLICCA SUL BOTTONE PER VEDERE TUTTI I FUMETTI DISPONIBILI</h1>
    <button type="button" name="button"> <a href="{{route('comics.index')}}">VAI</a> </button>
  </div>

    @endsection
