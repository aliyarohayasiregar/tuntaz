@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Edit Batu</h1>
        <form action="{{ route('batus.update', $batu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $batu->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control">{{ $batu->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" class="form-control" value="{{ $batu->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
