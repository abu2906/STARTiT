@extends('layouts.app')

@section('main-content')       
<div class="job-listings">
	<div class="job-listing">
		<img src="{{ asset('img/art.jpeg') }}" alt="">
		<div class="job-title">
			<div class="profile-container">
				<img src="{{ asset('img/profile.png') }}" alt="Profile">
				<p>@username</p>
			</div>
			<div class="rating">
				<i class="fa-solid fa-star"></i>
				<span>4.5/5</span>
			</div>
		</div>
		<p>Deskripsi pekerjaan</p>
		<button class="apply-btn">Detail</button>
	</div>
	<div class="job-listing">
		<img src="{{ asset('img/penjahit.jpeg') }}" alt="">
		<div class="job-title">
			<div class="profile-container">
				<img src="{{ asset('img/profile.png') }}" alt="Profile">
				<p>@username</p>
			</div>
			<div class="rating">
				<i class="fa-solid fa-star"></i>
				<span>4.5/5</span>
			</div>
		</div>
		<p>Deskripsi pekerjaan</p>
		<button class="apply-btn">Detail</button>
	</div>
	<div class="job-listing">
		<img src="{{ asset('img/buruh.jpeg') }}" alt="">
		<div class="job-title">
			<div class="profile-container">
				<img src="{{ asset('img/profile.png') }}" alt="Profile">
				<p>@username</p>
			</div>
			<div class="rating">
				<i class="fa-solid fa-star"></i>
				<span>4.5/5</span>
			</div>
		</div>
		<p>Deskripsi pekerjaan</p>
		<button class="apply-btn">Detail</button>
	</div>
	<div class="job-listing">
		<img src="{{ asset('img/babysitter.jpeg') }}" alt="">
		<div class="job-title">
			<div class="profile-container">
				<img src="{{ asset('img/profile.png') }}" alt="Profile">
				<p>@username</p>
			</div>
			<div class="rating">
				<i class="fa-solid fa-star"></i>
				<span>4.5/5</span>
			</div>
		</div>
		<p>Deskripsi pekerjaan</p>
		<button class="apply-btn">Detail</button>
	</div>
</div>
<div id="home-modal" style="width:40%;height:70%;background:var(--light)">
    <div class="header-detail">
        <h1 style="text-align:center">Asisten Rumah Tangga</h1>
    </div>
	<div class="akun">
		<i class="fa-solid fa-user" style="font-size:30px;"></i>
		<span style="font-size:20px;margin-left:1rem">St. Nur Aisyah. S</span>
	</div>
    <div class="kualifikasi" style="margin-top:1rem;">
		<div class="info-user" style="display:flex;justify-content:space-between;">
			<div class="usia">
				<h3 style="font-weight:600;">Usia :</h3>
				<span> 19 Tahun</span>
			</div>
			<div class="jenis-kelamin">
				<h3>Jenis Kelamin :</h3>
				<span>Perempuan</span>
			</div>
		</div>
	</div>
	<div class="responsibilities" style="margin-top:1rem;text-align:center;">
		<h4>Deskripsi :</h4>
		<span>Disini deskripsinya</span>
	</div>
	<div class="info-tambahan" style="display:flex;justify-content:space-between;margin-top:5rem">
		<div class="gaji">
		<i class="fa-solid fa-money-bill-1-wave"></i>
			<span>Rp 2.000.000 - 2.500.000</span>
		</div>
		<div class="kontrak">
			<i class="fa-solid fa-book"></i>
			<span>1 Bulan</span>
		</div>
	</div>
	<div class="button-container" style="margin-top:2rem;display:flex;justify-content:space-around">
		<button id="close-modal" style="background:var(--red);">Kembali</button>
		<button class="rekrut" style="display: right;">Rekrut</button>
		<button style="display: right;">Kontak</button>
	</div>
</div>
<div id="rekrutModal" style="background:var(--light);width:30%">
	<h1 style="text-align:center">Verifikasi Pesanan</h1>
	<span>Anda akan melakukan pembayaran untuk merekrut :</span>
	<div style="display:flex;justify-content:space-between;">
		<div class="keterangan">
			<p>NAMA</p>
			<p>PEKERJAAN</p>
			<p>DURASI KONTRAK</p>
			<p>TOTAL BAYAR</p>
		</div>
		<div class="isi-keterangan" style="text-align:right;font-weight:600;">
			<p>St. Nur Aisyah. S</p>
			<p>Asisten Rumah Tangga</p>
			<p>1 Bulan</p>
			<p>Rp 1.200.000</p>
		</div>
	</div>
	
	<div class="button-container" style="margin-top:2rem;display:flex;justify-content:space-around">
		<button id="closeModal" style="background:var(--red);">Kembali</button>
		<button style="display: right;">Konfirmasi</button>
	</div>
</div>
@endsection

