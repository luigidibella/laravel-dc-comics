<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        /* dd($comics); */
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();

        /* $new_comic->title = $form_data['title'];
        $new_comic->slug = Helper::generateSlug($new_comic->title,new Comic());
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->artists = $form_data['artists'];
        $new_comic->writers = $form_data['writers']; */

        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        $new_comic->fill($form_data);
        $new_comic->save();

        /* dd($new_comic); */

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        /* $comic = Comic::find($id); */
        /* dd($comic); */
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        if($form_data['title'] == $comic->title){
            $form_data['slug'] = $comic->slug;
        }else{
            $form_data['slug'] = Helper::generateSlug($form_data['title'],new Comic());
        }

        $comic->update($form_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', 'Il fumetto ' . $comic->title . 'è stata eliminato.');
    }
}
