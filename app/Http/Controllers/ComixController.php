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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
