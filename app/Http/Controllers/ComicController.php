<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comic = Comic::all();
    return view('comics.index', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
             'title' => 'required|unique:comics|max:255',
             'description' => 'required',
             'thumb' => 'required|URL',
             'price' => 'required|numeric',
             'series' => 'required|max:255',
             'sale_date' => 'required',
             'type' => 'required'

         ]);
         $data = $request->all();

         $newdate = new Comic();
         $newdate->title = $data['title'];
         $newdate->description = $data['description'];
         $newdate->thumb = $data['thumb'];
         $newdate->price = $data['price'];
         $newdate->series = $data['series'];
         $newdate->sale_date = $data['sale_date'];
         $newdate->type = $data['type'];
         $newdate->save();

         $comic = Comic::orderBy('id', 'desc')->first();
         return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
          return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
      $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|URL',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'required'

        ]);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();

      return redirect()->route('comics.index');

    }
}
