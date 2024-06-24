@extends('layouts.app')

@section('main-content')
<div class="gigs-container">
    <div class="existing-jobs">
        <h2>Daftar Pekerjaan</h2>
        <table>
            <thead>
                <tr>
                    <th>Pekerjaan</th>
                    <th>Deskripsi</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Buruh</td>
                    <td>Deskripsi</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>ART</td>
                    <td>Deskripsi</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>Deskripsi</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>Deskripsi</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    

    <div class="job-add-form">
        <h2>Tambah Pekerjaan Baru</h2>
        <form action="{{ url('/add-job') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="job_title">Judul Pekerjaan:</label>
                <input type="text" id="job_title" name="job_title" required>
            </div>
            <div class="form-group">
                <label for="job_description">Deskripsi Pekerjaan:</label>
                <textarea id="job_description" name="job_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="job_category">Kategori:</label>
                <select id="job_category" name="job_category">
                    <option value="Teknologi">Buruh</option>
                    <option value="Pendidikan">Petani</option>
                    <option value="Kesehatan">Penjahit</option>
                    <option value="Kesehatan">Asisten Rumah Tangga</option>
                    <option value="Kesehatan">Buruh Cuci</option>
                    <option value="Kesehatan">Babysitter</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_location">Lokasi:</label>
                <input type="text" id="job_location" name="job_location" required>
            </div>
            <button type="submit" class="btn-submit">Tambah Pekerjaan</button>
        </form>
    </div>
</div>

<!-- Modal -->
<form id="editJobModal">
    <div class="form-group">
        <label for="job_title">Pekerjaan:</label>
        <input type="text" id="job_title" name="job_title" required>
    </div>
    <div class="form-group">
        <label for="job_description">Deskripsi Pekerjaan:</label>
        <textarea id="job_description" name="job_description" required></textarea>
    </div>
    <div class="form-group">
        <label for="job_category">Kategori:</label>
        <select id="job_category" name="job_category">
            <option value="Teknologi">Buruh</option>
            <option value="Pendidikan">Petani</option>
            <option value="Kesehatan">Penjahit</option>
            <option value="Kesehatan">Asisten Rumah Tangga</option>
            <option value="Kesehatan">Buruh Cuci</option>
            <option value="Kesehatan">Babysitter</option>
        </select>
    </div>
    <div class="form-group">
        <label for="job_location">Lokasi:</label>
        <input type="text" id="job_location" name="job_location" required>
    </div>
    <button type="submit">Update Pekerjaan</button>
    <button type="button" id="closeModalButton">Tutup</button>
</form>
@endsection


