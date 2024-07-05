@extends('layouts.app3')

@section('main-content')  
<div class="user-cards">
    <div class="card" onclick="openPekerjaan()">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
    <div class="card">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
    <div class="card">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
    <div class="card">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
    <div class="card">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
    <div class="card">
        <div class="fotoNama"><i class="fas fa-user-circle"></i><h3>@stnuraisyah_</h3></div>
        <div class="info" style="margin-top:10px;">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        
    </div>
</div>

<div id="pekerjaanModal" class="modal">
    <div class="modal-content" style="width:50%">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="akun">
            <i class="fa-solid fa-user" style="font-size:40px"></i>
            <span style="font-size:40px">St. Nur Aisyah. S</span>
        </div>
        <div class="kualifikasi">
            <div><i class="fa-solid fa-location-dot"></i><p>Parepare, Sulawesi Selatan</p></div>
            <div><i class="fa-solid fa-clipboard-list"></i><p>Asisten Rumah Tangga</p></div>
            <div><i class="fa-solid fa-money-bill-wave" style="margin-right:0.5rem;"></i><p>Rp 1.850.000</p></div>
        </div>
        <div class="Deskripsi">
            <h4>Deskripsi :</h4>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
            <span>Disini itu isi deskripsi dari pekerjaan</span>
        </div>
        <div class="button-container" style="margin-top:1rem;">
            <button class="rekrut" onclick="showRekrutModal()">Daftar</button>
            <button>Kontak</button>
        </div>
    </div>
</div>

<script>
    function openPekerjaan() {
        document.getElementById('pekerjaanModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('pekerjaanModal').style.display = 'none';
    }
</script>

@endsection