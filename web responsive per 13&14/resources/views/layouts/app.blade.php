<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 py-3 bg-primary d-flex justify-content-between align-items-center">
            <div class="text-white">
                Web Responsive
            </div>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    User
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> {{ Auth::user()->name }}</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Ubah Password</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf

                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-in-right"></i> Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 p-3">
            <div class="d-flex flex-column flex-shrink-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                           class="nav-link {{ request()->routeIs('home') ? 'active': 'link-dark' }}"
                           aria-current="page">
                            <i class="bi bi-house me-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dosen') }}" class="nav-link {{ request()->routeIs('dosen') ? 'active': 'link-dark' }}">
                            <i class="bi bi-person me-2"></i>
                            Dosen
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mahasiswa') }}" class="nav-link {{ request()->routeIs('mahasiswa') ? 'active': 'link-dark' }}">
                            <i class="bi bi-people me-2"></i>
                            Mahasiswa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('skripsi') }}" class="nav-link {{ request()->routeIs('skripsi') ? 'active': 'link-dark' }}">
                            <i class="bi bi-book me-2"></i>
                            Skripsi
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9 p-3">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>
