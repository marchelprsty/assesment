

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmartStudent')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #ffffff;
        }

        #sidebar {
            background-color: #343a40;
            color: #ffffff;
            height: 100vh; 
            position: fixed; 
        }

        #sidebar .nav-link {
            color: #ffffff;
        }

        #sidebar .nav-link:hover {
            background-color: #6c757d;
        }

        #sidebar .sidebar-header {
            padding: 1.5rem;
            text-align: center;
        }

        #sidebar .sidebar-logo img {
            width: 200px; 
            margin-bottom: auto;
        }

        main {
            background-color: #ffffff;
            padding: 20px;
        }

        .navbar-brand img {
            width: 30px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="sidebar-sticky">
                <div class="sidebar-header">
                    <div class="sidebar-logo">
                        <img src="{{ asset('gambar/logoaplikasi2.png') }}" alt="Logo">
                    </div>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                            <img src="{{ asset('gambar/mahasiswalogo.png') }}" alt="Mahasiswa" width="30" class="mr-2">
                            Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dosen.index') }}">
                            <img src="{{ asset('gambar/dosenlogo.png') }}" alt="Dosen" width="37" class="mr-2">
                            Dosen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            <img src="{{ asset('gambar/prodilogo.png') }}" alt="Prodi" width="29" class="mr-2">
                            Program Studi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('matakuliah.index') }}">
                            <img src="{{ asset('gambar/matkullogo.png') }}" alt="Matkul" width="38" class="mr-2">
                            Mata Kuliah
                        </a>
                    </li>
                    <li class="nav-item" style="position: absolute; bottom: 0;">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('gambar/logoutlogo.png') }}" alt="Logoutlogo" width="30" class="mr-2">
                            Logout
                        </a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>


        
        <!-- Main content area -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('title', 'Aplikasi Data Akademik')</h1>
            </div> --}}

            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
