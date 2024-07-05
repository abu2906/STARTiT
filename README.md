<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Untuk menjalankan proyek Laravel setelah melakukan cloning dari GitHub, berikut langkah-langkahnya:

Prasyarat
Pastikan Anda telah menginstal Composer: Composer digunakan untuk mengelola dependensi PHP, termasuk Laravel. Pastikan Composer terinstal di komputer Anda. Anda bisa mengunduhnya dan menginstalnya dari getcomposer.org.

Pastikan telah menginstal PHP: Laravel memerlukan PHP diinstal di komputer Anda. Pastikan versi PHP yang Anda gunakan sesuai dengan persyaratan Laravel.

Langkah-langkah untuk Menjalankan Proyek Laravel
Clone Repository dari GitHub:

bash
Salin kode
git clone <URL_repository_github>
Ganti <URL_repository_github> dengan URL repository GitHub yang ingin Anda clone.

Masuk ke Direktori Proyek:

bash
Salin kode
cd <nama_folder_proyek>
Ganti <nama_folder_proyek> dengan nama folder hasil dari proses cloning.

Instal Dependensi menggunakan Composer:

Setelah masuk ke direktori proyek, jalankan perintah berikut untuk menginstal semua dependensi PHP yang diperlukan:

bash
Salin kode
composer install
Perintah ini akan membaca file composer.json di proyek Anda dan menginstal semua paket yang didefinisikan di dalamnya.

Salin File .env:

Duplikat file .env.example dan beri nama .env. Ini adalah file konfigurasi lingkungan untuk proyek Laravel. Anda dapat menyalinnya dengan perintah:

bash
Salin kode
cp .env.example .env
Generate Key Aplikasi:

Setiap aplikasi Laravel membutuhkan kunci aplikasi unik. Jalankan perintah berikut untuk menghasilkan kunci aplikasi yang baru:

bash
Salin kode
php artisan key:generate
Konfigurasi Database (opsional):

Jika proyek Laravel memerlukan koneksi ke database, pastikan untuk mengkonfigurasi file .env dengan detail database yang sesuai (nama database, pengguna, kata sandi).

Jalankan Migrasi Database dan Seeder (opsional):

Jika proyek Laravel menggunakan migrasi dan seeder, jalankan perintah berikut untuk membuat skema database dan mengisi data awal (opsional):

bash
Salin kode
php artisan migrate --seed
Jalankan Server Pembangun Lokal:

Terakhir, jalankan server pengembangan lokal dengan perintah:

bash
Salin kode
php artisan serve
Server akan berjalan di http://localhost:8000 secara default. Buka URL ini di browser untuk melihat proyek Laravel Anda.
