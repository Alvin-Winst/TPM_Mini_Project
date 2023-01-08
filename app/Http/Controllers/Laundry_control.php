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
        $validated = $request->validate([
            'No_Bon' => 'required|integer|digits_between:1,6|unique:laundromats',
            'Nama' => 'required',
            'Berat' => 'integer|required|min:1',
            'Harga_Satuan' => 'integer|required|min:1000',
            'Tgl_Masuk' => 'date|required',
            'Tgl_Keluar' => 'date|required|after_or_equal:Tgl_Masuk',
            'DP' => 'integer|min:1000|max:Harga_Total|nullable',
            'Tgl_Ambil' => 'date|after_or_equal:Tgl_Keluar|nullable',
        ]);

        $berat = $request->Berat;
        $harga_sat = $request->Harga_Satuan;

        laundromat::create([
            "No_Bon" => $request->No_Bon,
            "Nama" => $request->Nama,
            "Berat" => $request->Berat,
            "Harga_Satuan" => $request->Harga_Satuan,
            "Harga_Total"=> $berat*$harga_sat,
            "Tgl_Masuk" => $request->Tgl_Masuk,
            "Tgl_Keluar" => $request->Tgl_Keluar,
            "DP" => $request->DP,
            "Tgl_Ambil" => $request->Tgl_Ambil
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
        $laundry = laundromat.No_Bon::findOrFail($id);
        return view('detailLaundry', compact('laundromat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laundry = laundromat.No_Bon::findOrFail($id);
        return view('editLaundry',compact('laundromat'));
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
        $validated = $request->validate([
            'No_Bon' => 'required|integer|digits_between:1,6|unique:laundromats',
            'Nama' => 'required',
            'Berat' => 'integer|required|min:1',
            'Harga_Satuan' => 'integer|required|min:1000',
            'Tgl_Masuk' => 'date|required',
            'Tgl_Keluar' => 'date|required|after_or_equal:Tgl_Masuk',
            'DP' => 'integer|min:1000|max:Harga_Total|nullable',
            'Tgl_Ambil' => 'date|after_or_equal:Tgl_Keluar|nullable',
        ]);

        $berat = $request->Berat;
        $harga_sat = $request->Harga_Satuan;

        laundromat.No_Bon::findOrFail($id)->update([
            "No_Bon" => $request->No_Bon,
            "Nama" => $request->Nama,
            "Berat" => $request->Berat,
            "Harga_Satuan" => $request->Harga_Satuan,
            "Harga_Total"=> $berat*$harga_sat,
            "Tgl_Masuk" => $request->Tgl_Masuk,
            "Tgl_Keluar" => $request->Tgl_Keluar,
            "DP" => $request->DP,
            "Tgl_Ambil" => $request->Tgl_Ambil
        ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        laundromat.No_Bon::destroy($id);
        return redirect('/home');
    }
}
