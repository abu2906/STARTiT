@extends('layouts.app')

@section('main-content')
<div class="settings-container">
    <h1>Layanan Pengguna</h1>
    <div class="settings-section">
        <h2>Pengaturan Akun</h2>
        <label for="username">Nama Pengguna:</label>
        <input type="text" id="username" name="username">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <label for="detail-keluhan">Keluhan:</label>
        <input type="email" id="email" name="detail-keluhan">
        
        <button>Simpan Perubahan</button>
    </div>
</div>
@endsection


