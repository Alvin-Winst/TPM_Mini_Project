@extends('template')

@section('title','Create Laundry')

@section('body')
<div class="m-5">
  <h1 class="text-center">Create Laundry Check</h1>
  <form action="/update-laundry/{{$laundry->No_Bon}}" method="POST">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="InputBon" class="form-label">No. Bon</label>
      <input type="number" class="form-control" id="InputBon" name="No_Bon" readonly value="{{$laundry->No_Bon}}">
    </div>
    <div class="mb-3">
      <label for="InputNama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="InputNama" name="Nama" required value="{{$laundry->Nama}}">
      @error('Nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputBerat" class="form-label">Berat</label>
      <input type="number" class="form-control" id="InputBerat" name="Berat" required value="{{$laundry->Berat}}">
      @error('Berat')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputHargaSat" class="form-label">Harga Satuan</label>
      <input type="number" class="form-control" id="InputHargaSat" name="Harga_Satuan" required value="{{$laundry->Harga_Satuan}}">
      @error('Harga_Satuan')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputMasuk" class="form-label">Tanggal Masuk</label>
      <input type="date" class="form-control" id="InputMasuk" name="Tgl_Masuk" required value="{{$laundry->Tgl_Masuk}}">
      @error('Tgl_Masuk')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputKeluar" class="form-label">Tanggal Keluar</label>
      <input type="date" class="form-control" id="InputKeluar" name="Tgl_Keluar" required value="{{$laundry->Tgl_Keluar}}">
      @error('Tgl_Keluar')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputDP" class="form-label">DP</label>
      <input type="number" class="form-control" id="InputDP" name="DP" value="{{$laundry->DP}}">
      @error('DP')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputAmbil" class="form-label">Tanggal Ambil</label>
      <input type="date" class="form-control" id="InputAmbil" name="Tgl_Ambil" value="{{$laundry->Tgl_Ambil}}">
      @error('Tgl_Ambil')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary" style="text-align: center">Submit</button>
  </form>
</div>

@endsection