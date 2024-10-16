<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex vh-100">
        <div class="row align-self-center w-100">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
