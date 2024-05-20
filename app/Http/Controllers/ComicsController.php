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
        $request->validate([
            'title' => 'required|min:3|max:50',
            'thumb' => 'required|min:3|max:50',
            'price' => 'required|min:3|max:50',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|min:3|max:50',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3|max:50',
            'writers' => 'required|min:3|max:50',
        ],[
            'title.required' => 'Il titolo è un campo obbligatorio',
            'thumb.required' => 'La copertina è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'series.required' => 'La serie è un campo obbligatorio',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'artists.required' => 'Gli artisti è un campo obbligatorio',
            'writers.required' => 'Gli scrittori è un campo obbligatorio',

            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'thumb.min' => 'La copertina deve contenere almeno :min caratteri',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'sale_date.min' => 'La data deve contenere almeno :min caratteri',
            'type.min' => 'Il tipo deve contenere almeno :min caratteri',
            'artists.min' => 'Gli artisti deve contenere almeno :min caratteri',
            'writers.min' => 'Gli scrittori deve contenere almeno :min caratteri',

            'title.max' => 'Il titolo deve contenere non piu di :max caratteri',
            'thumb.max' => 'La copertina deve contenere non piu di :max caratteri',
            'price.max' => 'Il prezzo deve contenere non piu di :max caratteri',
            'series.max' => 'La serie deve contenere non piu di :max caratteri',
            'sale_date.max' => 'La data deve contenere non piu di :max caratteri',
            'type.max' => 'Il tipo deve contenere non piu di :max caratteri',
            'artists.max' => 'Gli artisti deve contenere non piu di :max caratteri',
            'writers.max' => 'Gli scrittori deve contenere non piu di :max caratteri',
        ]);

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
