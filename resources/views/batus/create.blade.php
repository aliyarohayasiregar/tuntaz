@extends('layouts.dashboard')

@section('content')

<div class="container">

<div class="container mt-6">
    <h1>Tambah Barang</h1>
    <form action="{{route('batus.store')}}" method="POST">

        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <textarea name="price" class="form-control"></textarea>
        </div>

        <button type="submit"class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>

<!-- @section('content')
<style>
    .container {
        padding-left: 153px;
    }

</style>
@endsection -->