@extends('views.home')

@section('content')
<div class="head-title">
    <div class="left">
        <h1>Home</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Profile</a>
            </li>
        </ul>
    </div>
</div>
<div class="table">
    <div class="profile">
        <div class="img">
            <img src="img/profile.png" alt="">
            <h2>St. Nur Aisyah. S</h2>
        </div>
        <div class="edit">
            <ul>
                <li>
                    <i class="fa-solid fa-pencil"></i>
                    <span class="text">Edit Profile</span>
                </li>
                <li>
                    <i class="fa-solid fa-trash"></i>
                    <span class="text">Hapus Akun</span>
                </li>
                <li>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="text">Log-out</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="detail-profile">
        <div class="box">
            <h3>Nama Lengkap</h3>
            <p>St. Nur Aisyah. S</p>
        </div>
        <div class="box">
            <h3>Alamat</h3>
            <p>Pinrang</p>
        </div>
        <div class="box">
            <h3>No. Telpon</h3>
            <p>08************</p>
        </div>
        <div class="box">
            <h3>Email</h3>
            <p>sittinuraisyah456@gmail.com</p>
        </div>
    </div>
</div>
@endsection	