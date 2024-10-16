@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Detail Barang</h1>
        <div class="card">
            <div class="card-body">
                <h2>{{ $batu->name }}</h2>
                <p>{{ $batu->description }}</p>
                <p>Harga: {{ $batu->price }}</p>
                <a href="{{ route('batus.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
