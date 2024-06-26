@extends('layouts.app')

@section('main-content')
	@if(isset($user))
	<div class="table-data">
		<div class="todo">
			<div class="detail">
				<div class="account">
					<img src="{{ asset('img/profile.png') }}">
					<div class="info">
						<div class="nama">
							<span><strong>{{ $user->username }}</strong></span>
							<a href="">
								<i class="fa-solid fa-pencil"></i>
							</a>
						</div>
						<i class="fa-solid fa-location-dot"></i>
						<span>Jakarta</span>
						<p>{{ $user->email }}</p>
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
						<h3>Total Pesanan</h3>
						<p>Blablabla</p>
					</span>
				</li>
			</ul>
			<div class="button-profile">
				<a href="#" class="btn-profile" style="margin-right: 20px">
				<i class="fa-solid fa-phone"></i>
					<span class="text">Contact Me</span>
				</a>
			</div>
		</div>
	</div>
	@endif
@endsection
