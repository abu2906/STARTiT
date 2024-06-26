<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel='stylesheet' href="{{ asset('css/app.css') }}" >
        <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/fontawesome/css/solid.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/app.js') }}" ></script>
        <title>STARTiT</title>
    </head>
    <body>
        <!-- SIDEBAR -->
		<section id="sidebar">
            <a href="#" class="brand">
                <i class='bx bxs-laugh'></i>
                <span class="text">STARTiT</span>
            </a>
            <ul class="side-menu top">
                <li id="button-dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">
                        <i class='bx bxs-dashboard' ></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li id="button-poin" class="{{ Request::is('layanan') ? 'active' : '' }}">
                    <a href="{{ url('/layanan') }}">
                        <i class='bx bx-trending-up' ></i>
                        <span class="text">Layanan Pengguna</span>
                    </a>
                </li>
                <li id="button-ulasan" class="{{ Request::is('verifikasi') ? 'active' : '' }}">
                    <a href="{{ url('/verifikasi') }}">
                        <i class='bx bx-message' ></i>
                        <span class="text">Verifikasi Pembayaran</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu top">
                <li id="button-setting" class="{{ Request::is('set_adm') ? 'active' : '' }}">
                    <a href="{{ url('/set-adm') }}">
                        <i class='bx bxs-cog' ></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li id="button-logout">
                    <a href="{{ route('logout') }}" class="logout">
                        <i class='bx bxs-log-out-circle' ></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>

        <!-- CONTENT -->
        <section id="content">
            <!-- NAVBAR -->
            <nav>
                <i class='bx bx-menu' ></i>
                @php
                    $path = Request::path();
                    $pageName = 'Dashboard'; 

                    if ($path === 'dashboard') {
                        $pageName = 'Dashboard';
                    } elseif ($path === 'layanan') {
                        $pageName = 'Layanan';
                    } elseif ($path === 'verifikasi') {
                        $pageName = 'Verifikasi Pembayaran';
                    } elseif ($path === 'set-adm') {
                        $pageName = 'Settings';
                    }
                @endphp
                <a href="#" class="nav-link">{{ $pageName }}</a>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                    </div>
                </form>
                <input type="checkbox" id="switch-mode" hidden>
                <label for="switch-mode" class="switch-mode"></label>
                <a href="{{ url('/profile') }}" class="profile" id="button-profile">
                    <img src="img/profile.png">
                </a>
            </nav>
            <!-- MAIN -->
            <main class="main-content">
                @yield('main-content')

                <!-- jQuery and Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
            </main>

        </section>
    </body>
</html>