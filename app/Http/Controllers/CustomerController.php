<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CompagnyType;

class CustomerController extends Controller
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
        $customers = Customer::all();
        return view('customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compagnytypes = CompagnyType::all();
        return view('customer/create', compact('compagnytypes'));
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
            'type_id' => 'required',
            'name' => 'required|max:100',
            'address_line_1' => 'required|max:100',
            'address_line_2' => 'max:100',
            'zip' => 'required|max:7',
            'city' => 'required|max:50',
            'country' => 'required|max:10',
            'contact_firstname' => 'required|max:10',
            'contact_lastname' => 'required|max:10',
            'contact_mail' => 'required|email|max:100',
            'contact_phone' => 'required|max:15'
        ]);
        $customer = Customer::create($validatedData);
        return redirect('/customers')->with('success', 'Le client a bien été enregistré!');
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

        $compagnytypes = CompagnyType::all();

        $customer = Customer::findOrFail($id);
        return view('/customer/edit', compact('customer', 'compagnytypes'));
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
            'type_id' => 'required',
            'name' => 'required|max:100',
            'address_line_1' => 'required|max:100',
            'address_line_2' => 'max:100',
            'zip' => 'required|max:7',
            'city' => 'required|max:50',
            'country' => 'required|max:10',
            'contact_firstname' => 'required|max:10',
            'contact_lastname' => 'required|max:10',
            'contact_mail' => 'required|email|max:100',
            'contact_phone' => 'required|max:15'
        ]);
        Customer::whereId($id)->update($validatedData);
        return redirect('/customers')->with('success', 'La fiche client a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/customers')->with('success', 'Client supprimé');
    }
}
