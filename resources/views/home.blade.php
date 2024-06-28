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
		<button class="apply-btn" onclick="showModal('home-modal')">Detail</button>
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
		<button class="apply-btn" >Detail</button>
	</div>
</div>
<!-- Home Modal -->
<div id="home-modal" class="modal">
    <div class="modal-content" style="width:50%">
        <div class="header-detail">
            <h1 style="text-align:center;">Asisten Rumah Tangga</h1>
        </div>
        <div class="akun">
            <i class="fa-solid fa-user"></i>
            <span>St. Nur Aisyah. S</span>
        </div>
        <div class="kualifikasi">
            <div class="info-user">
                <div class="usia">
                    <h3>Usia :</h3>
                    <span>19 Tahun</span>
                </div>
                <div class="jenis-kelamin">
                    <h3>Jenis Kelamin :</h3>
                    <span>Perempuan</span>
                </div>
            </div>
        </div>
        <div class="responsibilities">
            <h4>Deskripsi :</h4>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
			<span>Disini itu isi deskripsi dari pekerjaan</span>
			<span>Disini itu isi deskripsi dari pekerjaan</span>
			<span>Disini itu isi deskripsi dari pekerjaan</span>
			<span>Disini itu isi deskripsi dari pekerjaan</span>
        </div>
        <div class="info-tambahan">
            <div class="gaji">
                <i class="fa-solid fa-money-bill-1-wave"></i>
                <span>Rp 2.000.000 - 2.500.000</span>
            </div>
            <div class="kontrak">
                <i class="fa-solid fa-book"></i>
                <span>1 Bulan</span>
            </div>
        </div>
        <div class="button-container">
            <button id="close-home-modal" onclick="closeModal('home-modal')">Kembali</button>
            <button class="rekrut" onclick="showRekrutModal()">Rekrut</button>
            <button>Kontak</button>
        </div>
    </div>
</div>

<!-- Rekrut Modal -->
<div id="rekrut-modal" class="modal">
    <div class="modal-content" style="width:37%">
        <h1 style="text-align:center;">Verifikasi Pesanan</h1>
        <span style="margin-top:1.5rem">Anda akan melakukan pembayaran untuk merekrut :</span>
        <div class="order-details" style="display:flex;justify-content:space-between;margin-top:0.7rem;">
            <div class="keterangan">
                <p>NAMA</p>
                <p>PEKERJAAN</p>
                <p>DURASI KONTRAK</p>
                <p>TOTAL BAYAR</p>
            </div>
            <div class="isi-keterangan" style="text-align:right;font-weight:700;">
                <p>St. Nur Aisyah. S</p>
                <p>Asisten Rumah Tangga</p>
                <p>1 Bulan</p>
                <p>Rp 1.200.000</p>
            </div>
        </div>
        
        <div class="button-container" style="margin-top:2rem;">
            <button id="close-rekrut-modal" onclick="closeModal('rekrut-modal')">Kembali</button>
            <button>Konfirmasi</button>
        </div>
    </div>
</div>

<script>
    function showModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    function showRekrutModal() {
        closeModal('home-modal');
        showModal('rekrut-modal');
    }
</script>
@endsection

