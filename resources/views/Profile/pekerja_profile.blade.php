@extends('layouts.app')

@section('main-content')
	<div class="table-data">
		<div class="todo">
			<div class="detail">
				<div class="account">
					<img src="{{ asset('img/profile.png') }}">
					<div class="info">
						<div class="nama">
							<span><strong>@username</strong></span>
							<a href="">
								<i class="fa-solid fa-pencil"></i>
							</a>
						</div>
						<i class="fa-solid fa-location-dot"></i>
						<span>Jakarta</span>
						<p>username@gmail.com</p>
					</div>
				</div>
				<div class="rating">
					<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
					<span>4.5/5</span>
				</div>
			</div>
			
			<ul class="box-info">
				<li>
					<span class="text">
						<h3>Level</h3>
						<p>Lvl.30</p>
					</span>
				</li>
				<li>
					<span class="text">
						<h3>Earned</h3>
						<p>$12</p>
					</span>
				</li>
				<li>
					<span class="text">
						<h3>Point</h3>
						<p>1.500</p>
					</span>
				</li>
			</ul>
			<div class="button-profile">
				<a href="#" class="btn-profile" style="margin-right: 20px">
				<i class="fa-solid fa-phone"></i>
					<span class="text">Contact Me</span>
				</a>
				<a href="{{ route('pekerja-tambah') }}" class="btn-profile">
					<i class='fa-solid fa-plus'></i>
					<span class="text">Gigs</span>
				</a>
			</div>
		</div>
	</div>
@endsection
