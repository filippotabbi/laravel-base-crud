@extends('layouts.app')

    @section('main')
  <div class="flex-center">
    <h1>CLICCA SUL BOTTONE PER VEDERE TUTTI I FUMETTI DISPONIBILI</h1>
    <button class="btn-last" type="button" name="button"> <a href="{{route('comics.index')}}">VAI</a> </button>
  </div>

    @endsection
