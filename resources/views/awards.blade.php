@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="header">
        <h1>Tukar Poin</h1>
        <div class="points-display">
            <p id="user-points"><span style="font-weight: bold">Poin Anda:</span>1500</p>
        </div>
    </div>
    <div class="rewards">
        <div class="reward-item">
            <img src="{{asset('img/rocket.png')}}" alt="Reward 1">
            <h2>Booster (3 Hari)</h2>
            <p>100 Poin</p>
        </div>
        <div class="reward-item">
            <img src="{{asset('img/rocket.png')}}" alt="Reward 2">
            <h2>Booster (7 Hari)</h2>
            <p>200 Poin</p>
        </div>
        <div class="reward-item">
            <img src="{{asset('img/save-money.png')}}" alt="Reward 3">
            <h2>Cash (Rp 10.000)</h2>
            <p>300 Poin</p>
        </div>
    </div>
</div>
@endsection
