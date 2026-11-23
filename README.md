<div align="center">

<img src="https://readme-typing-svg.demolab.com?font=Space+Grotesk&weight=700&size=34&pause=1000&color=7C3AED&center=true&vCenter=true&width=700&lines=ONE+MOVIES;Discover.+Review.+Save+your+favorite+films." alt="One Movies animated heading" />

### Aplikasi Katalog Film Berbasis Laravel

<p>
  <a href="https://zabranfilm.freedev.app/"><img src="https://img.shields.io/badge/LIVE_DEMO-One_Movies-7C3AED?style=for-the-badge" alt="Live Demo"></a>
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13">
  <img src="https://img.shields.io/badge/Bootstrap-3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap 3">
  <img src="https://img.shields.io/badge/Project-Kelas_XII-0EA5E9?style=for-the-badge" alt="Project Kelas XII">
</p>

*Jelajahi film, berikan ulasan, dan simpan film favoritmu dalam satu aplikasi.*

</div>

---

## 🎬 Tentang One Movies

**One Movies** adalah aplikasi katalog film yang dikembangkan menggunakan **Laravel 13** dan **Bootstrap 3** sebagai proyek pembelajaran kelas XII.

Aplikasi ini menyediakan fitur katalog dan detail film, pencarian, kritik dan rating, balasan komentar, serta watchlist. Admin juga memiliki dashboard khusus untuk mengelola data aplikasi melalui fitur CRUD.

> 🌐 **Live Demo:** [https://zabranfilm.freedev.app/](https://zabranfilm.freedev.app/)

## ✨ Fitur Utama

| Fitur | Deskripsi |
|:--|:--|
| 🎞️ Katalog film | Menampilkan daftar dan detail film |
| 🔎 Pencarian | Mencari film berdasarkan judul |
| 🔐 Autentikasi | Login, register, dan logout |
| ⭐ Kritik & rating | User dapat memberikan ulasan dan rating |
| 💬 Balas komentar | Membalas komentar pada halaman detail film |
| 🔖 Watchlist | Menyimpan dan menghapus film dari daftar tontonan |
| 👤 Profil | Mengubah profil pribadi |
| 🛠️ Dashboard admin | Ringkasan data, film terbaru, kritik terbaru, dan statistik genre |
| 🖼️ Poster film | Upload poster menggunakan Laravel Storage |

## 🧰 Teknologi

<p>
  <img src="https://img.shields.io/badge/PHP-Laravel-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Bootstrap-3-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL">
</p>

- **Backend:** Laravel 13
- **Frontend:** Bootstrap 3 dan Blade
- **Database:** MySQL
- **Penyimpanan poster:** Laravel Filesystem
- **Autentikasi:** Session-based authentication

## 📚 Daftar Isi

- [Demo dan Akun](#-demo-dan-akun)
- [Instalasi Lokal](#-instalasi-lokal)
- [Hak Akses Pengguna](#-hak-akses-pengguna)
- [Dashboard Admin dan CRUD](#-dashboard-admin-dan-crud)
- [Relasi Model](#-relasi-model)
- [Penyimpanan Poster](#-penyimpanan-poster)
- [Fitur Tambahan](#-fitur-tambahan)
- [Perbaikan Teknis](#-perbaikan-teknis)

## 🌐 Demo dan Akun

<div align="center">

### [▶ BUKA ONE MOVIES](https://zabranfilm.freedev.app/)

</div>

### Akun bawaan seeder

| Role | Email | Password |
|:--|:--|:--|
| Admin | `admin@example.com` | `12345678` |
| User | Email acak dari factory (lihat tabel `users`) | `12345678` |

Login melalui tombol **Login** di pojok kanan atas. Admin akan diarahkan ke halaman `/admin`.

> Catatan: Akun tersebut merupakan akun demonstrasi bawaan seeder. Jangan gunakan kredensial contoh untuk akun pribadi atau lingkungan produksi.

## ⚙️ Instalasi Lokal

### 1. Persiapan

Pastikan perangkat sudah memiliki PHP, Composer, MySQL, Git, dan browser.

Buat database terlebih dahulu melalui MySQL atau phpMyAdmin. Nama database harus sama dengan nilai `DB_DATABASE` di file `.env`.

### 2. Clone repository

```bash
git clone nama-repo-masing-masing
cd laravel-kelas-xii
```

### 3. Konfigurasi environment

```bash
cp .env.example .env
```

Sesuaikan konfigurasi database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Install dependency

```bash
composer install
php artisan key:generate
```

### 5. Migrasi dan seeding database

```bash
php artisan migrate:fresh --seed
```

Perintah ini membuat ulang tabel dan mengisi data awal seperti genre, film, user, dan admin.

### 6. Hubungkan storage

```bash
php artisan storage:link
```

Perintah ini membuat symbolic link `public/storage` menuju `storage/app/public`.

### 7. Jalankan aplikasi

```bash
php artisan serve
```

Buka alamat lokal yang ditampilkan terminal, biasanya `http://127.0.0.1:8000`.

<details>
<summary><strong>💡 Ringkasan perintah instalasi</strong></summary>

```bash
git clone nama-repo-masing-masing
cd laravel-kelas-xii
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
```

Pastikan konfigurasi database `.env` sudah benar sebelum migrasi.

</details>

## 🔑 Hak Akses Pengguna

Aplikasi memiliki tiga jenis akses: tamu, user, dan admin.

| Fitur | Tamu | User | Admin |
|:--|:--:|:--:|:--:|
| Melihat katalog dan detail film | ✅ | ✅ | ✅ |
| Mencari film | ✅ | ✅ | ✅ |
| Menulis kritik dan rating | — | ✅ | ✅ |
| Membalas komentar | — | ✅ | ✅ |
| Menyimpan film ke watchlist | — | ✅ | ✅ |
| Mengubah profil sendiri | — | ✅ | ✅ |
| Mengakses dashboard admin | — | — | ✅ |
| Mengelola data melalui CRUD | — | — | ✅ |
| Menghapus balasan pengguna lain | — | — | ✅ |

User biasa yang mencoba membuka `/admin` akan mendapatkan respons **403 Forbidden** melalui middleware `admin`.

## 🛠️ Dashboard Admin dan CRUD

Dashboard admin dapat diakses melalui `/admin`. Route admin dikelompokkan di `routes/web.php` dan dilindungi middleware `auth` serta `admin`.

### Isi dashboard

- Jumlah data aplikasi.
- Film terbaru.
- Kritik terbaru.
- Jumlah film berdasarkan genre.

Layout dashboard: `resources/views/admin/layouts/app.blade.php`.

### Menu pengelolaan data

| Menu | Controller | URL |
|:--|:--|:--|
| Film | `FilmController` | `/admin/films` |
| Genre | `Admin\GenreController` | `/admin/genres` |
| Cast | `CastController` | `/admin/casts` |
| Peran | `PeranController` | `/admin/perans` |
| Kritik | `KritikController` | `/admin/kritiks` |
| User & Profile | `Admin\UserController` | `/admin/users` |

Setiap menu menyediakan operasi **Create, Read, Update, Delete (CRUD)**. Validasi input berada di `app/Http/Requests/` melalui class Store dan Update.

## 🔗 Relasi Model

Relasi Eloquent menghubungkan data antar-model agar pengelolaan data lebih terstruktur.

| Model | Relasi |
|:--|:--|
| `Film` | `genre()` belongsTo, `perans()` hasMany, `kritiks()` hasMany, `actors()` belongsToMany Cast melalui `perans` |
| `Genre` | `films()` hasMany |
| `Cast` | `perans()` hasMany, `films()` belongsToMany |
| `Peran` | `film()` belongsTo, `cast()` belongsTo |
| `Kritik` | `film()` belongsTo, `user()` belongsTo |
| `User` | `role()`, `profile()` belongsTo, `kritiks()` hasMany, `isAdmin()` |
| `Profile` | `user()` hasOne |
| `Role` | `users()` hasMany |
| `Balasan` | Digunakan untuk relasi balasan komentar |
| `Watchlist` | `film()` dan `user()` belongsTo |

Controller menggunakan **eager loading** dengan `with(...)` untuk mengambil relasi yang dibutuhkan dan membantu menghindari masalah N+1 query.

## 🖼️ Penyimpanan Poster

Poster film disimpan di `storage`, bukan langsung di folder `public`. Penyimpanan menggunakan disk `public` milik Laravel.

### Struktur folder

```text
storage/
└── app/
    └── public/
        └── images/
            ├── poster-film-1.jpg
            ├── poster-film-2.jpg
            └── poster-film-3.jpg

public/
└── storage -> ../storage/app/public
```

### Proses pemindahan gambar

1. Buat folder tujuan: `storage/app/public/images`.
2. Pindahkan file poster dari `public/template/images/` ke folder tersebut.
3. File `1.jpg`, `arrow1.png`, `img-sp.png`, dan `play-button.png` tetap di `public` karena dipanggil oleh CSS template.
4. Buat symbolic link dengan `php artisan storage:link`.
5. Kolom `films.poster` menyimpan path relatif, misalnya `images/nama.jpg` (lihat `database/data/movies.csv`).
6. Gunakan accessor di Blade:

   ```blade
   {{ $film->poster_url }}
   ```

7. Upload poster baru menggunakan:

   ```php
   store('images', 'public')
   ```

   File tersimpan di `storage/app/public/images`. Poster lama ikut dihapus ketika poster diganti atau film dihapus melalui `Film::deletePosterFile()`.

8. File `.gitignore` pada `storage/app/public/` telah disesuaikan agar folder `images/` ikut ter-commit ke Git.

### Jika poster tidak muncul

- Pastikan `php artisan storage:link` sudah dijalankan.
- Pastikan file tersedia di `storage/app/public/images/`.
- Pastikan nilai `films.poster` sesuai dengan nama file.
- Coba akses melalui URL `/storage/images/nama.jpg`.

Contoh URL lokal: `http://localhost:8000/storage/images/nama.jpg`.

## 💬 Fitur Tambahan

### Balas komentar

Implementasi balas komentar menggunakan:

- Model: `app/Models/Balasan.php`
- Controller: `BalasanController`
- Tabel: `balasans`

Ketentuan:

- Setiap komentar (`Kritik`) dapat memiliki banyak balasan melalui relasi `Kritik::balasans()`.
- Form balasan muncul di bawah komentar pada halaman detail film.
- Hanya user yang login yang dapat mengirim balasan.
- User hanya dapat menghapus balasannya sendiri.
- Admin dapat menghapus balasan milik siapa pun.

### Watchlist

Watchlist memungkinkan user menyimpan film yang ingin ditonton.

- Model: `app/Models/Watchlist.php`
- Controller: `WatchlistController`
- Tabel: `watchlists`
- Halaman: `/watchlist`

Ketentuan:

- Tombol **Simpan ke Watchlist** tersedia di halaman detail film.
- Tombol berfungsi sebagai toggle untuk menyimpan atau menghapus film.
- Halaman **Watchlist Saya** menampilkan film yang disimpan user yang sedang login.
- Relasi: `User::watchlists()` hasMany, `Watchlist::film()` dan `Watchlist::user()` belongsTo.
- Kombinasi `user_id` dan `film_id` memiliki constraint `unique` agar film yang sama tidak tersimpan dua kali oleh user yang sama.

> Setelah menarik update yang menambahkan tabel `balasans` dan `watchlists`, jalankan `php artisan migrate`. Tidak perlu `--fresh` jika data lama ingin dipertahankan.

## 🧹 Perbaikan Teknis

| Area | Perbaikan |
|:--|:--|
| Model `Profile` & `User` | Menambahkan konfigurasi `$fillable` agar seeder berjalan |
| `ApiResponseClass` | Melengkapi import `DB`, `Log`, dan `HttpResponseException` |
| Model `User` | Menambahkan trait `HasApiTokens` untuk route API `auth:sanctum` |
| `AppServiceProvider` | Menghindari query database saat boot; data navbar dipindahkan ke view composer khusus |
| Navbar genre | Memperbaiki loop agar genre pertama tidak terlewat |
| Blade & JavaScript | Memperbaiki posisi `@stack('scripts')`, pasangan `@push('scripts')`, dan pemanggilan file `simplePlayer.js` yang tidak tersedia |
| Footer | Memperbaiki tautan menuju file `.html` yang tidak tersedia |
| Query | Memperbaiki `orderByDesc()` dan menghindari pemuatan seluruh data `Peran` |
| Halaman detail | Menampilkan nama cast dan nama user melalui relasi, bukan ID mentah |
| Konfigurasi database | Menyamakan `.env.example` dengan konfigurasi MySQL |
| Pencarian | Mengaktifkan pencarian film melalui `/movies?q=judul` |

## 📝 Catatan

- Untuk instalasi baru atau membangun ulang database beserta data seed:

  ```bash
  php artisan migrate:fresh --seed
  ```

  **Perhatian:** `migrate:fresh` menghapus tabel yang ada sebelum membuat ulang database. Gunakan hanya jika data lama boleh dihapus.

- Untuk menerapkan migration baru tanpa menghapus data lama:

  ```bash
  php artisan migrate
  ```

- Jika poster tidak tampil, periksa symbolic link dan isi folder `storage/app/public/images`.
- Pastikan konfigurasi `.env` sesuai dengan database lokal.

---

<div align="center">

### 🎬 ONE MOVIES

*Built with Laravel · Aplikasi Katalog Film Kelas XII*

[🌐 Kunjungi Live Demo](https://zabranfilm.freedev.app/)

</div>
