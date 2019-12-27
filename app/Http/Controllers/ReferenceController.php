<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reference;

class ReferenceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::all();

        return view('reference/index', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reference/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|max:10',
            'short_description' => 'required|max:100',
            'long_description' => 'required|max:250',
            'price' => 'required|numeric',
        ]);
        $reference = Reference::create($validatedData);

        return redirect('/references')->with('success', 'La référence a bien été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reference = Reference::findOrFail($id);

        return view('/reference/edit', compact('reference'));
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
        $validatedData = $request->validate([
            'code' => 'required|max:10',
            'short_description' => 'required|max:100',
            'long_description' => 'required|max:250',
            'price' => 'required|numeric',
        ]);
        Reference::whereId($id)->update($validatedData);

        return redirect('/references')->with('success', 'La référence a bien été mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reference = Reference::findOrFail($id);
        $reference->delete();

        return redirect('/references')->with('success', 'Réference supprimée!');
    }
}
