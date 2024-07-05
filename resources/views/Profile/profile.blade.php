@extends('layouts.app')

@section('main-content')
<div class="table-data">
    <div class="todo">
        <div class="detail">
            <div class="account">
                <img src="{{ asset('img/profile.png') }}">
                <div class="info">
                    <div class="nama">
                        <span><strong>{{ $user->username }}</strong></span>
                        <button onclick="openProfileModal()">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        
                    </div>
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
<div id="profileModal" class="modal">
    <form action="{{ route('update-profile') }}" method="POST" class="modal-content">
        @csrf
        <span class="close" onclick="closeProfileModal()">&times;</span>
        <div class="profile-picture">
            <img id="profileImage" src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 80%;width:90px;height:90px;">
            <button class="upload-button" onclick="document.getElementById('fileInput').click()">Upload new photo</button>
            <input type="file" id="fileInput" style="display:none" accept="image/*" onchange="handleFileChange(event)">
        </div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ $user->username }}">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ $user->email }}">
        <label for="noTelp">Nomor Handphone</label>
        <input type="text" id="noTelp" name="noTelp" value="{{ $user->telepon }}">
        <button type="submit" class="save-button">SIMPAN</button>
    </form>
</div>

<script>
    let selectedImageDataUrl = '';

    function openEditModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
    function openProfileModal() {
        document.getElementById('profileModal').style.display = 'flex';
    }

    function closeProfileModal() {
        document.getElementById('profileModal').style.display = 'none';
    }

    function handleFileChange(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                selectedImageDataUrl = e.target.result;
                document.getElementById('profileImage').src = selectedImageDataUrl;
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
