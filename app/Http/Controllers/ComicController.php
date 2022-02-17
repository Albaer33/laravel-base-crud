<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $request->validate($this->getValidationRules());
        
        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->type = $form_data['type'];
        $new_comic->series = $form_data['series'];
        $new_comic->price = $form_data['price'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->description = $form_data['description'];
        $new_comic->sale_date = $form_data['sale_date'];

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = $request->all();

        $request->validate($this->getValidationRules());
        
        $update_comic = Pasta::findOrFail($id);
        $update_comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $update_comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_comic = Pasta::findOrFail($id);
        $delete_comic->delete();

        return redirect()->route('comics.index');
    }

    // custom function
    protected function getValidationRules() {
        return [
            'title' => 'required|max:100',
            'description' => 'required|min:10|max:60000',
            'thumb' => 'required|max:250',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:30',
        ];
    }
}
