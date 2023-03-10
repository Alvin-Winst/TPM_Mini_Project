<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class LaundCat_control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        return view('welcome', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createLCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request->file('Bukti')->getClientOriginalExtension();
        $filename = $request->Bon.'.'.$extension;
        $request->file('Bukti')->storeAs('/public/Bukti/',$filename);

        $validated = $request->validate([
            'Bon' => 'required|integer|digits_between:1,6|unique:categories',
            'List_Laund' => 'required',
            'Bukti' => 'required|mimes:jpg,jpeg,png'
        ]);

        categories::create([
            'Bon' => $request->Bon,
            'List_Barang' => $request->List_Laund,
            'Bukti' => $filename
        ]);
        return redirect('/home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
