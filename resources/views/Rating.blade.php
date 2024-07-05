@extends('layouts.app')

@section('main-content')

<div class="existing-jobs">
        <h2>Daftar Penilaian</h2>
        <table>
            <thead>
                <tr>
                    <th>Pekerjaan</th>
                    <th>Nama Pekerja</th>
                    <th>Action</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Buruh</td>
                    <td>@stnuraisyah</td>
                    <td>
                        <button onclick="openTab('belum-dinilai')">nilai</button>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>ART</td>
                    <td>@stnuraisyah</td>
                    <td>
                        <button onclick="openTab('belum-dinilai')">nilai</button>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>@stnuraisyah</td>
                    <td>
                        <button onclick="openTab('belum-dinilai')">nilai</button>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>@stnuraisyah</td>
                    <td>
                        <button onclick="openTab('belum-dinilai')">nilai</button>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<div id="belum-dinilai" class="tab-content active">
    <h3>Penilaian Belum Dinilai</h3>
    <p>Anda memiliki penilaian yang belum dinilai.</p>
    <ul>
        <li>Penilaian 1</li>
        <li>Penilaian 2</li>
        <li>Penilaian 3</li>
    </ul>
</div>

<div id="sudah-dinilai" class="tab-content">
    <h3>Penilaian Sudah Dinilai</h3>
    <p>Anda memiliki penilaian yang sudah dinilai.</p>
    <ul>
        <li>Penilaian A</li>
        <li>Penilaian B</li>
        <li>Penilaian C</li>
    </ul>
</div>
@endsection