@extends('layouts.dashboard')

@section('content')
<!-- <div class="container">
    <h1>Welcome to the Dashboard</h1>
    <p>This is your dashboard main page.</p>
</div> -->
<div class="container">
    <h1>Daftar Barang</h1>
    <!-- <a href="{{ route('batus.create') }}" class="btn btn-primary">Tambah Batu</a> -->
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($batus as $batu)
            <tr>
                <td>{{ $batu->name }}</td>
                <td>{{ $batu->description }}</td>
                <td>{{ $batu->price }}</td>
                <td>
                    <a href="{{ route('batus.show', $batu->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('batus.edit', $batu->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('batus.destroy', $batu->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
