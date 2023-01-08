@extends('template')
@section('title','Laundry List')

@section('body')
<div class="m-5">
    <h1 class="text-center">Create Laundry List</h1>
    <form action="/store-list" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="InputBon" class="form-label">No. Bon</label>
            <input type="text" class="form-control" id="InputBon" name="Bon" required>
            @error('Bon')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="InputList" class="form-label">List Laundry</label>
            <textarea name="List_Laund" id="InputList" cols="150" rows="5" required></textarea>
            @error('List_Laund')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="InputFoto" class="form-label">Bukti Laundry</label>
            <input type="file" class="form-control" id="InputFoto" name="Bukti" required>
            @error('Bukti')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" style="text-align: center">Submit</button>
    </form>
</div>
@endsection