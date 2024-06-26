@extends('layouts.app')

@section('main-content')       
<div class="container-detail" >
    <div class="header-detail">
        <h4>Detail Lowongan</h4>
    </div>

    <div class="info">
        <div><i class="fa-solid fa-location-dot"></i> Kota Parepare, Sulawesi Selatan</div>
        <div><i class="fa-solid fa-file"></i> Buruh</div>
        <div><i class="fa-solid fa-money-bill-wave"></i> Rp 3.434.298 • Rp 4.345.289</div>
    </div>

    <div class="requirements">
		<h4>Kualifikasi:</h4>
		<div class="kualifikasi">
			<div class="usia" style="margin-right:2rem;"><div class="keterangan"><i class="fa-solid fa-user"></i> Usia</div><span>Max. 30 Tahun</span></div>
			<div class="j.kelamin" style="margin-right:2rem;"><div class="keterangan"><i class="fa-solid fa-user"></i> Jenis Kelamin</div><span>Laki-laki</span></div>
			<div class="pengalaman"><div class="keterangan"><i class="fa-solid fa-user"></i> Pengalaman</div><span>Min. 1 Tahun</span></div>
		</div>
		<div class="responsibilities">
			<h4>Deskripsi Pekerjaan:</h4>
			<span>Deskripsi/poin</span>
		</div>
		<div class="button-container">
			<button>Lamar</button>
		</div>
	</div>
</div>    
        
@endsection

