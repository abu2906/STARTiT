@extends('layouts.app2')

@section('main-content')
<ul class="box-info">
    <li>
        <i class='bx bx-group' ></i>
        <span class="text">
            <h3>2127</h3>
            <p>Jumlah Pengguna</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>2834</h3>
            <p>Pencari Pekerja</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>2543</h3>
            <p>Penyedia Jasa</p>
        </span>
    </li>
</ul>


<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Verifikasi Akun Pengguna</h3>
            <i class='bx bx-filter' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>
                        <p style="text-align:left; margin-left:2rem;">Username</p>
                    </th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>@stnuraisyah__</td>
                    <td>St. Nur Aisyah. S</td>
                    <td>
                        <button>Verifikasi</button>
                    </td>
                </tr>
                <tr>
                    <td>@stnuraisyah__</td>
                    <td>St. Nur Aisyah. S</td>
                    <td>
                        <button class="verifikasiAkun">Verifikasi</button>
                    </td>
                </tr>
                <tr>
                    <td>@stnuraisyah__</td>
                    <td>St. Nur Aisyah. S</td>
                    <td>
                        <button>Verifikasi</button>
                    </td>
                </tr>
                <tr>
                    <td>@stnuraisyah__</td>
                    <td>St. Nur Aisyah. S</td>
                    <td>
                        <button>Verifikasi</button>
                    </td>
                </tr>
                <tr>
                    <td>@stnuraisyah__</td>
                    <td>St. Nur Aisyah. S</td>
                    <td>
                        <button>Verifikasi</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="todo">
        <div class="head">
            <h3 style="text-align:center;">Daftar Pencari Pekerja dan Penyedia Jasa</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama Pencari</th>
                    <th>Nama Penyedia</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <tr>
                    <td>@pencari1</td>
                    <td>@penyedia1</td>
                    <td>Kontrak/Aktif</td>
                </tr>
                <!-- Tambahkan baris lain jika diperlukan -->
            </tbody>
        </table>            
    </div>
</div>
@endsection