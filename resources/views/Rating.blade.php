@extends('layouts.app')

@section('main-content')

<div class="existing-jobs">
        <h2>Riwayat</h2>
        <table>
            <thead>
                <tr>
                    <th>Pekerjaan</th>
                    <th>Pekerja</th>
                    <th>Status</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Buruh</td>
                    <td>@username</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <button type="submit">Beri Nilai</button>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>ART</td>
                    <td>@username</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <button type="submit">Beri Nilai</button>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>@username</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <button type="submit">Beri Nilai</button>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
                <tr>
                    <td>Buruh</td>
                    <td>@username</td>
                    <td>
                        <a href="" class="editPekerjaBtn">
                            <button type="submit">Beri Nilai</button>
                        </a>
                    </td>
                    <td>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection