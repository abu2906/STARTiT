@extends('layouts.app')

@section('main-content')
<div class="settings-container">
    <h1>Pengaturan</h1>
    <div class="settings-section">
        <h2>Pengaturan Akun</h2>
        <label for="username">Nama Pengguna:</label>
        <input type="text" id="username" name="username">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <button>Simpan Perubahan</button>
    </div>
    
    <div class="settings-section">
        <h2>Notifikasi</h2>
        <label><input type="checkbox" name="email_notifications"> Email Notifikasi</label>
        <label><input type="checkbox" name="push_notifications"> Push Notifikasi</label>
        
        <button>Update Notifikasi</button>
    </div>
    
    <div class="settings-section">
        <h2>Privasi</h2>
        <label><input type="checkbox" name="public_profile"> Profil Publik</label>
        <label><input type="checkbox" name="private_messages"> Pesan Pribadi</label>
        
        <button>Simpan Pengaturan Privasi</button>
    </div>
</div>
@endsection


