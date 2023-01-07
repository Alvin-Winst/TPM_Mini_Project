@extends(template)
@section('title','Laundry List')

@section('body')
<div class="m-5">
    <h1 class="text-center">Create Laundry List</h1>
    <form action="/store-laundry" method="POST">
        @csrf
        <div class="mb-3">
            <label for="InputBon" class="form-label">No. Bon</label>
            <input type="text" class="form-control" id="InputBon" name="Bon">
        </div>
        <div class="mb-3">
            <label for="InputNama" class="form-label">List Laundry</label>
            <textarea name="list_laund" id="InputList" cols="100" rows="50"></textarea>
        </div>
@endsection