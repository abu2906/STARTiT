@extends('layouts.app')

@section('main-content')
<div class="gigs-container">
    <div class="existing-jobs">
        <h2>Daftar Pekerjaan</h2>
        <table>
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->kategori }}</td>
                    <td>{{ $job->deskripsi }}</td>
                    <td>{{ $job->harga }}</td>
                    <td>
                        <a href="javascript:void(0);" data-job-id="{{ $job->id }}" class="editPekerjaBtn" onclick="openEditModal({{ $job->id }})">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('jobs.destroy', ['id' => $job->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="deletePekerjaBtn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="editJobModal" id="editJobModal-{{ $job->id }}" class="modal" style="display: none;">
                    <div class="modal-content">
                        <span class="close" onclick="closeEditModal({{ $job->id }})">&times;</span>
                        <form action="{{ route('jobs.update', ['id' => $job->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kategori">Kategori:</label>
                                <select id="kategori" name="kategori">
                                    <option value="Buruh" {{ $job->kategori }}>Buruh</option>
                                    <option value="Petani" {{ $job->kategori}}>Petani</option>
                                    <option value="Penjahit" {{ $job->kategori}}>Penjahit</option>
                                    <option value="ART" {{ $job->kategori}}>Asisten Rumah Tangga</option>
                                    <option value="Buruh Cuci" {{ $job->kategori}}>Buruh Cuci</option>
                                    <option value="Babysitter" {{ $job->kategori}}>Babysitter</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Pekerjaan:</label>
                                <textarea id="deskripsi" name="deskripsi" required>{{ $job->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" id="harga" name="harga" value="{{ $job->harga }}" required>
                            </div>
                            <button type="submit">Update Pekerjaan</button>
                            <button type="button" onclick="closeEditModal({{ $job->id }})">Tutup</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    

    <div class="job-add-form">
        <h2>Tambah Pekerjaan Baru</h2>
        <form action="{{ route('tambah-pekerjaan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori">
                    <option value="Buruh">Buruh</option>
                    <option value="Petani">Petani</option>
                    <option value="Penjahit">Penjahit</option>
                    <option value="ART">Asisten Rumah Tangga</option>
                    <option value="Buruh Cuci">Buruh Cuci</option>
                    <option value="Babysitter">Babysitter</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Pekerjaan:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" required>
            </div>
            <button type="submit" class="btn-submit">Tambah Pekerjaan</button>
        </form>
    </div>
</div>

<script>
function openEditModal(id) {
    document.getElementById('editJobModal-' + id).style.display = 'block';
}

function closeEditModal(id) {
    document.getElementById('editJobModal-' + id).style.display = 'none';
}
</script>
@endsection
