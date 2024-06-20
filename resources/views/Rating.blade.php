@extends('layouts.app')

@section('main-content')
<div class="tabs">
    <div class="tab active" onclick="changeTab(0)">Belum Dinilai </div>
    <div class="tab" onclick="changeTab(1)">Penilaian Saya</div>
    <div class="tab" onclick="changeTab(2)">Dari Penjual</div>
</div>

<div class="content">
    <div class="tab-content active">
        <div class="item">
            <img src="{{ asset('img/profile.png') }}">
            <div class="details">
                <div class="title">[Miss.Vinka] ORI O.Two.O Mascara 3D Silk Fiber Eyelash Black Waterproof Longlasting Maskara Otwoo</div>
                <div class="sub-title">Sisa 46 hari untuk menilai</div>
            </div>
            <div class="actions">
                <div class="btn">Nilai +25</div>
            </div>
        </div>
        <div class="no-more-items">Tidak ada penilaian lainnya.</div>
    </div>
    <div class="tab-content" >
        <!-- Konten untuk tab 'Penilaian Saya' -->
    </div>
    <div class="tab-content">
        <!-- Konten untuk tab 'Dari Penjual' -->
    </div>
</div>
@endsection