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
                <li id="button-dashboard" class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class='bx bxs-dashboard' ></i>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li id="button-poin" class="{{ Request::is('awards') ? 'active' : '' }}">
                    <a href="{{ url('/awards') }}">
                        <i class='bx bx-trending-up' ></i>
                        <span class="text">Awards</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu top">
                <li id="button-setting" class="{{ Request::is('settings') ? 'active' : '' }}">
                    <a href="{{ url('/setting') }}">
                        <i class='bx bxs-cog' ></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li id="button-logout">
                    <a href="logout.php" class="logout">
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

                    if ($path === '/') {
                        $pageName = 'Home';
                    } elseif ($path === 'awards') {
                        $pageName = 'Awards';
                    } elseif ($path === 'setting') {
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
                <a href="{{ url('/notifikasi') }}" class="notification">
                    <i class='bx bxs-bell'></i>
                    <span class="num">8</span>
                    <div class="notification-dropdown" style="display: none;">
                        <div class="notification-item">
                            <span class="notification-text">Pesanan baru diterima</span>
                            <span class="notification-time">5 menit yang lalu</span>
                        </div>
                        <div class="notification-item">
                            <span class="notification-text">Pembayaran telah dikonfirmasi</span>
                            <span class="notification-time">10 menit yang lalu</span>
                        </div>
                        <div class="notification-item">
                            <span class="notification-text">Ulasan baru ditambahkan</span>
                            <span class="notification-time">1 jam yang lalu</span>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/profile') }}" class="profile" id="button-profile">
                    <img src="img/profile.png">
                </a>
            </nav>
            <!-- MAIN -->
            <main class="main-content">
                @yield('main-content')
            </main>

        </section>
    </body>
</html>