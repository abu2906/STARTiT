@extends('layouts.app')

@section('main-content')
<div class="list-group">
    <div class="notification">
        <div class="profile-pic"></div>
        <div class="notification-content">
            <strong>Muh. Abubakar T</strong>
            <p>Permintaan untuk merekrut Anda. <span>2h</span></p>
        </div>
        <button class="view-btn" onclick="openModal()">Lihat</button>
    </div>
    <div class="notification">
        <div class="profile-pic"></div>
        <div class="notification-content">
            <strong>Muh. Abubakar T</strong>
            <p>Permintaan untuk merekrut Anda. <span>2h</span></p>
        </div>
        <button class="view-btn">Lihat</button>
    </div>
    <div class="notification">
        <div class="profile-pic"></div>
        <div class="notification-content">
            <strong>Muh. Abubakar T</strong>
            <p>Memberi ulasan. <span>2h</span></p>
        </div>
        <button class="view-btn">Lihat</button>
    </div>
    <div class="notification">
        <div class="profile-pic"></div>
        <div class="notification-content">
            <strong>Muh. Abubakar T</strong>
            <p>. <span>2h</span></p>
        </div>
        <button class="view-btn">Lihat</button>
    </div>
</div>
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <h2>Konfirmasi</h2>
        <p>Nama: Muh. Abubakar T</p>
        <p>Ingin merekrut :</p>
        <p>Nama: St. Nur Aisyah. S</p>
        <p>Pekerjaan: Asisten Rumah Tangga</p>
        <p>Gaji: Rp 1.200.000</p>
        <p>Kontrak: 1 Bulan</p>
        <div class="modal-buttons">
            <button class="btn kembali" onclick="closeModal()">Kembali</button>
            <button class="btn tolak">Tolak</button>
            <button class="btn terima">Terima</button>
        </div>
    </div>
</div>
<script>
    function openModal() {
        document.getElementById('confirmationModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('confirmationModal').style.display = 'none';
    }
</script>
@endsection

