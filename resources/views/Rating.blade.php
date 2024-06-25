@extends('layouts.app')

@section('main-content')
<div class="tab">
    <button onclick="openTab('belum-dinilai')">Belum Dinilai</button>
    <button onclick="openTab('sudah-dinilai')">Sudah Dinilai</button>
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