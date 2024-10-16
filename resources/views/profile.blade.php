@extends('layouts.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Profile</h1>
        
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <h2>User Information</h2>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        <h3>Update Password</h3>
        <form action="{{ route('profile.update.password') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</body>
</html>

@endsection
