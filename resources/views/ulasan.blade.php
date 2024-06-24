@extends('layouts.app')

@section('main-content')
<div class="reviews">
    <div class="review-item">
        <div class="reviewer">
            <img src="{{ asset('img/profile.png') }}">
            <div class="reviewer-details">
                <div class="name">Ahmad</div>
                <div class="category">Kategori: Buruh</div>
            </div>
        </div>
        <div class="review-content">
            <p>Sangat responsif dan hasil kerjanya memuaskan. Rekomendasi!</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star-half-stroke" style="color: #FFD43B;"></i>
            </div>
            <a href="">
                <i class="fa-solid fa-reply">Balas</i>
            </a>
        </div>
    </div>
    <div class="review-item">
        <div class="reviewer">
            <img src="{{ asset('img/profile.png') }}">
            <div class="reviewer-details">
                <div class="name">Siti</div>
                <div class="category">Kategori: ART</div>
            </div>
        </div>
        <div class="review-content">
            <p>Pekerjaan cepat dan rapi. Komunikasi juga baik.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>
            <a href="">
                <i class="fa-solid fa-reply">Balas</i>
            </a>
        </div>
    </div>
    <div class="review-item">
        <div class="reviewer">
            <img src="{{ asset('img/profile.png') }}">
            <div class="reviewer-details">
                <div class="name">Mimah</div>
                <div class="category">Kategori: Penjahit</div>
            </div>
        </div>
        <div class="review-content">
            <p>Pekerjaan cepat dan rapi. Komunikasi juga baik.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>
            <a href="">
                <i class="fa-solid fa-reply">Balas</i>
            </a>
        </div>
    </div>
    <div class="review-item">
        <div class="reviewer">
            <img src="{{ asset('img/profile.png') }}">
            <div class="reviewer-details">
                <div class="name">Suparto</div>
                <div class="category">Kategori: Supir</div>
            </div>
        </div>
        <div class="review-content">
            <p>Pekerjaan cepat dan rapi. Komunikasi juga baik.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>
            <a href="">
                <i class="fa-solid fa-reply">Balas</i>
            </a>
        </div>
    </div>
    <div class="review-item">
        <div class="reviewer">
            <img src="{{ asset('img/profile.png') }}">
            <div class="reviewer-details">
                <div class="name">Surmi</div>
                <div class="category">Kategori: Tukang Masak</div>
            </div>
        </div>
        <div class="review-content">
            <p>Pekerjaan cepat dan rapi. Komunikasi juga baik.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>
            <a href="">
                <i class="fa-solid fa-reply">Balas</i>
            </a>
        </div>
    </div>
</div>
@endsection