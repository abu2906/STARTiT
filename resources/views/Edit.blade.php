@extends('layouts.app')

@section('main-content')
<form id="editJobModal" style="display:none">
    <label for="title">Judul Pekerjaan:</label>
    <input type="text" id="title" name="title" value="" required>

    <label for="description">Deskripsi:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="category">Kategori:</label>
    <input type="text" id="category" name="category" value="" required>

    <label for="location">Lokasi:</label>
    <input type="text" id="location" name="location" value="" required>

    <button type="submit">Update Pekerjaan</button>
</form>
@endsection