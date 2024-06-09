@extends('layouts.app')

@section('main-content')
<div class="head-title">
    <div class="left">
        <h1>Home</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Notifikasi</a>
            </li>
        </ul>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Judul Notifikasi 1</h5>
            <small>3 menit yang lalu</small>
        </div>
        <p class="mb-1">Ini adalah detail dari notifikasi pertama.</p>
    </div>
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Judul Notifikasi 2</h5>
            <small>1 jam yang lalu</small>
        </div>
        <p class="mb-1">Ini adalah detail dari notifikasi kedua.</p>
    </div>
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Judul Notifikasi 3</h5>
            <small>Kemarin</small>
        </div>
        <p class="mb-1">Ini adalah detail dari notifikasi ketiga.</p>
    </div>
</div>
@endsection

