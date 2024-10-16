<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="{{route('dashboard.home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('batus.create') }}" class="nav-link">Tambah Barang</a>
            </li>
            
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link" style="color: white; text-decoration: none;">Log
                        Out</button>
                </form>
            </li>



        </ul>
    </div>
    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>