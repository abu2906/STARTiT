@extends('layouts.app')

@section('main-content')
<div class="akumulasi">
    <div class="akumulasi-card">
        <div class="akumulasi-card-main">
            <div class="akumulasi-card-main-sub">
                <p><span>Poin yang didapat hari ini: </span></p>
                <div class=akumulasi-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1000</span>
                </div>
            </div>
            <div class="akumulasi-card-main-sub2">
                <p><span>Total poin: </span></p>
                <div class=akumulasi-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dailyy">
    <div class="dailyy-card">
    <div class="dailyy-card-main" style="display: flex;">
            <div class="dailyy-card-main-sub2" style="display:flex;">
                <div class=dailyy-card-poin style="color:black;">
                    <span>Bonus Login Harian</span>
                </div>
            </div>
        </div>
        <div class="dailyy-card-main">
            <div class="dailyy-card-main-sub">
                <p><span>Hari 1 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1000</span>
                </div>
            </div>
            <div class="dailyy-card-main-sub2">
                <p><span>Hari 2 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
            <div class="dailyy-card-main-sub2">
                <p><span>Hari 3 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
            <div class="dailyy-card-main-sub2">
                <p><span>Hari 4 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
            <div class="dailyy-card-main-sub2">
                <p><span>Hari 5 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
            <div class="dailyy-card-main-sub2">
                <p><span>Hari 6 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
        </div>
        <div class="dailyy-card-main" style="display: flex;">
            <div class="dailyy-card-main-sub2" style="display:flex;">
                <p><span>Hari 7 </span></p>
                <div class=dailyy-card-poin>
                    <img src="{{asset('img/reward.png')}}" alt="poin">
                    <span>1500</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="akumulasi">
    <div class="dailyy-card-main">
        <div class="header-points">
            <h1>Tukar Poin</h1>
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
