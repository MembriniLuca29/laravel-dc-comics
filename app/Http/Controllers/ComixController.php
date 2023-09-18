<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model

use App\Models\Comix;

class ComixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comixs = Comix::all();

        return view('admin.comix.index', compact('comixs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comix.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formdata = $request->all();
        $request->validate([
            'title' => 'required|max:70|unique:comixes',
            'description' => 'required',
            'thumb' => 'nullable|max:2048',
            'price' => 'required|numeric|min:2|max:100',
            'series' => 'nullable|max:64',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:70',
        ],[
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo puo essere lungo al massimo 70 caratteri',
            'title.unique' => 'Il titolo è già esistente',
            'description.required' => 'La descrizione è obbligatoria',
            'thumb.max' => 'Lunghezza del link non validà',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Prezzo minimo $2.00',
            'price.max' => 'Prezzo massimo $100.00',
            'series.max' => 'Lunghezza massima 64 caratteri',
            'sale_date.date' => 'Data non valida',
            'type.max' => 'Lunghezza massima 70 caratteri',
        ]
    );
        
        $comix = new comix();
        $comix->title = $formdata['title'];
        $comix->description = $formdata['description'];
        $comix->thumb = $formdata['thumb'];
        $comix->price = $formdata['price'];
        $comix->series = $formdata['series'];
        $comix->sale_date = $formdata['sale_date'];
        $comix->type = $formdata['type'];
        $comix->artist = json_encode($formdata['artists']);
        $comix->writers = json_encode($formdata['writers']);

        $comix->save();


        return redirect()->route('comix.show', ['comix' => $comix->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comix = Comix::findOrFail($id);

        return view('admin.comix.show', compact('comix'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comix = Comix::findOrFail($id);
        return view('admin.comix.edit',  compact('comix'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comix = comix::findOrFail($id);
        // dd($request->all());

        $formdata = $request->all();


        $request->validate([
            'title' => 'required|max:70|unique:comixes',
            'description' => 'required',
            'thumb' => 'nullable|max:2048',
            'price' => 'required|numeric|min:2|max:100',
            'series' => 'nullable|max:64',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:70',
        ],[
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo puo essere lungo al massimo 70 caratteri',
            'title.unique' => 'Il titolo è già esistente',
            'description.required' => 'La descrizione è obbligatoria',
            'thumb.max' => 'Lunghezza del link non validà',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Prezzo minimo $2.00',
            'price.max' => 'Prezzo massimo $100.00',
            'series.max' => 'Lunghezza massima 64 caratteri',
            'sale_date.date' => 'Data non valida',
            'type.max' => 'Lunghezza massima 70 caratteri',
        ]
    );

        // $comix->update($formData);      // Mass assignment

        // OPPURE

        $comix->title = $formdata['title'];
        $comix->description = $formdata['description'];
        $comix->thumb = $formdata['thumb'];
        $comix->price = $formdata['price'];
        $comix->series = $formdata['series'];
        $comix->sale_date = $formdata['sale_date'];
        $comix->type = $formdata['type'];
        $comix->artist = json_encode($formdata['artists']);
        $comix->writers = json_encode($formdata['writers']);
        $comix->save();

        return redirect()->route('comixs.show', ['comix' => $comix->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comix = Comix::findOrFail($id);

        $comix->delete();

        return redirect()->route('comixs.index');
    }
}
