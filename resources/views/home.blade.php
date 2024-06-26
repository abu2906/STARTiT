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
</div>


@endsection

