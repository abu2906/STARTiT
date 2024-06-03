<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/seller.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
	<link href="../css/fontawesome/css/all.css" rel="stylesheet" />
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet" />
	<script src="../js/jquery-3.7.1.js"></script>
	<title>STARTiT</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
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
        <a href="#" class="profile" id="button-profile">
            <img src="img/profile.png">
        </a>
    </nav>
    <!-- NAVBAR -->
</body>