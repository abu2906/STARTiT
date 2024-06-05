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
                <li id="button-dashboard" class="active">
                    <a href="#">
                        <i class='bx bxs-dashboard' ></i>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li id="button-usaha">
                    <a href="#">
                        <i class='bx bxs-shopping-bag-alt' ></i>
                        <span class="text">Business</span>
                    </a>
                </li>
                <li id="button-analytics">
                    <a href="#">
                        <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li id="button-message">
                    <a href="#">
                        <i class='bx bxs-message-dots' ></i>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li id="button-trend">
                    <a href="#">
                        <i class='bx bx-trending-up' ></i>
                        <span class="text">Trend Pasar</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu">
                <li id="button-setting">
                    <a href="">
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
                <a href="#" class="nav-link">Categories</a>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                    </div>
                </form>
                <input type="checkbox" id="switch-mode" hidden>
                <label for="switch-mode" class="switch-mode"></label>
                <a href="Notification.html" class="notification">
                    <i class='bx bxs-bell' ></i>
                    <span class="num">8</span>
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