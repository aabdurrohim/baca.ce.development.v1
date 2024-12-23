<nav class="p-3 navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #001349;">
    <div class="container-fluid">
        <a href="#">
            <img src="#" height="45px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <style>
                .drop2>li>a:hover {
                    background-color: #001349;
                    color: #D8D8D8
                }

                .drop2 a {
                    color: white;
                }
            </style>
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item dropdown">
                    <a class="mx-2 text-uppercase nav-link dropdown-toggle active fw-bold" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="mt-3 border-top border-info dropdown-menu drop2 border-3 rounded-0 border-start-0 border-end-0 border-bottom-0"
                        style="background-color: #001349;" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Pustakawan</a></li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Visi Misi</a></li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Jam Layanan</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="mx-2 text-uppercase nav-link dropdown-toggle active fw-bold rounded-0" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Koleksi
                    </a>
                    <ul class="mt-3 border-top border-info dropdown-menu drop2 border-3 rounded-0 border-start-0 border-end-0 border-bottom-0"
                        style="background-color: #001349;" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Koleksi Buku</a>
                        </li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Daftar Buku
                                Sumbangan</a></li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Tugas Akhir
                                Digital</a></li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Dokumen Capstone
                                Digital</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="mx-2 text-uppercase nav-link dropdown-toggle active fw-bold rounded-0" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fasilitas
                    </a>
                    <ul class="mt-3 border-top border-info dropdown-menu drop2 border-3 rounded-0 border-start-0 border-end-0 border-bottom-0"
                        style="background-color: #001349;" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Ruang Baca</a></li>
                        <li><a class="fw-bold dropdown-item text-uppercase rounded-0" href="#">Tata Tertib</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="mx-2 text-uppercase nav-link active fw-bold" href="#">FAQ</a>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-item dropdown">
                        <div class="btn-group">
                            <button type="button" class="rounded-pill btn btn-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                                {{ Str::limit(auth()->user()->name, 10, '...') }}

                            </button>
                            <ul class="mt-3 dropdown-menu drop2 rounded-0 border-top border-info border-3 border-start-0 border-end-0 border-bottom-0"
                                style="background-color: #001349;">
                                @if (Auth::check() && Auth::user()->role_id == 1)
                                    <li><a class="dropdown-item" href="#">Dasbor</a></li>
                                @endif
                                @if (Auth::check() && Auth::user()->role_id == 2)
                                    <li><a class="dropdown-item" href="#">Profil</a></li>
                                @endif
                                <li><a class="dropdown-item" href="#" onclick="confirmLogout(event)">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a href="{{ route('login.index') }}"> <button type="button" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login</button></a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
