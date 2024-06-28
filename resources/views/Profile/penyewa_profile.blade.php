@extends('layouts.app')

@section('main-content')
    @if(isset($user))
    <div class="table-data">
        <div class="todo">
            <div class="detail">
                <div class="account">
				<img id="mainProfileImage" src="https://via.placeholder.com/150" alt="Profile">
                    <div class="info">
                        <div class="nama">
                            <span><strong>{{ $user->username }}</strong></span>
                            <button onclick="openEditModal('profileModal')" style="cursor:pointer;">Edit Profile</button>
                        </div>
                        <div><i class="fa-solid fa-location-dot"></i><span style="margin-left:11px">Jakarta</span></div>
                        <div><i class="fa-solid fa-envelope"></i><span style="margin-left:8px">{{ $user->email }}</span></div>
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
	<div id="profileModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeProfileModal()">&times;</span>
            <div class="profile-picture">
                <img id="profileImage" src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 80%;width:90px;height:90px;">
                <button class="upload-button" onclick="document.getElementById('fileInput').click()">Upload new photo</button>
                <input type="file" id="fileInput" style="display:none" accept="image/*" onchange="handleFileChange(event)">
            </div>
            <label for="nama">Nama</label>
            <input type="text" id="nama">
            <label for="username">Username</label>
            <input type="text" id="username">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat">
            <button class="save-button" onclick="saveProfile()">SIMPAN</button>
        </div>
    </div>
    @endif

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

        function saveProfile() {
            if (selectedImageDataUrl) {
                document.getElementById('mainProfileImage').src = selectedImageDataUrl;
            }
            closeProfileModal();
        }
    </script>
@endsection
