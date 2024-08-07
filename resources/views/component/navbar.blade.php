@php
    $path = Request::path();
    $pageName = ''; 

    if (strpos($path, 'admin') !== false) {
        $pageName = 'Dashboard';
    } elseif (strpos($path, 'pekerja') !== false) {
        $pageName = 'Pekerja';
    } elseif (strpos($path, 'penyewa') !== false) {
        $pageName = 'Penyewa';
    }
@endphp
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
    <a href="#" class="profile" id="button-profile">
        <img src="img/profile.png">
    </a>
</nav>