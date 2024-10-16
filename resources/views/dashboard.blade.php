@extends('layouts.dashboard')

<div class="sidebar">
    <h2>Dashboard</h2>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('batus.create') }}" class="nav-link">Tambah Batu</a>
        </li>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </ul>
</div>
