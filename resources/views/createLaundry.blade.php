@extends('template')

@section('title','Create Laundry')

@section('body')
<div class="m-5">
  <h1 class="text-center">Create Laundry Check</h1>
  <form action="/store-laundry" method="POST">
    @csrf
    <div class="mb-3">
      <label for="InputBon" class="form-label">No. Bon</label>
      <input type="text" class="form-control" id="InputBon" name="Bon">
    </div>
    <div class="mb-3">
      <label for="InputNama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="InputNama" name="Nama">
    </div>
    <div class="mb-3">
      <label for="InputBerat" class="form-label">Berat</label>
      <input type="number" class="form-control" id="InputBerat" name="Berat" required>
    </div>
    <div class="mb-3">
      <label for="InputHargaSat" class="form-label">Harga Satuan</label>
      <input type="number" class="form-control" id="InputHargaSat" name="Harga_Satuan" required>
    </div>
    <div class="mb-3">
      <label for="InputHargaTot" class="form-label">Harga Total</label>
      <input type="number" class="form-control" id="InputHargaTot" name="Harga_Total" value="{{Harga_Satuan*Berat}}" readonly>
    </div>
    <div class="mb-3">
      <label for="InputMasuk" class="form-label">Tanggal Masuk</label>
      <input type="date" class="form-control" id="InputMasuk" name="Tgl_Masuk" required>
    </div>
    <div class="mb-3">
      <label for="InputKeluar" class="form-label">Tanggal Keluar</label>
      <input type="date" class="form-control" id="InputKeluar" name="Tgl_Keluar" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="Lunas" name="Bayar" value="true">
      <label class="form-check-label" for="Lunas">Lunas</label>
    </div>
    <div class="mb-3">
      <label for="InputDP" class="form-label">DP</label>
      <input type="number" class="form-control" id="InputDP" name="DP" required>
    </div>
    <div class="mb-3">
      <label for="InputAmbil" class="form-label">Tanggal Ambil</label>
      <input type="date" class="form-control" id="InputAmbil" name="Tgl_Ambil">
    </div>

    <button type="submit" class="btn btn-primary" style="text-align: center">Submit</button>
  </form>
</div>

@endsection