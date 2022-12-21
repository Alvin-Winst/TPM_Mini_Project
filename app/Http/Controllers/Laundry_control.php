<?php

namespace App\Http\Controllers;

use App\Models\laundromat;
use Illuminate\Http\Request;

class Laundry_control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundromat = laundromat::all();
        return view('welcome', compact('laundromat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createLaundry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        laundromat::create([
            "No_Bon" => $request->No_Bon,
            "Nama" => $request->Nama,
            "Berat" => $request->Berat,
            "Harga_Satuan" => $request->Harga_Satuan,
            "Harga_Total" => $request->Harga_Total,
            "Tgl_Masuk" => $request->Tgl_Masuk,
            "Tgl_Keluar" => $request->Tgl_Keluar,
            "Bayar" => $request->Bayar,
            "DP" => $request->DP,
            "Tgl_Ambil" => $request->Tgl_Ambil
        ]);
        return view('welcome');
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
