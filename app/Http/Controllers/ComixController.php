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


        return redirect()->route('comix.show', ['comixs' =>$comix->id]);
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
