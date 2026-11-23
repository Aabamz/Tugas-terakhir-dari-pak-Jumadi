::: {align="center"}
`<img src="https://readme-typing-svg.demolab.com?font=Space+Grotesk&weight=700&size=34&pause=1000&color=7C3AED&center=true&vCenter=true&width=700&lines=ONE+MOVIES;Discover.+Review.+Save+your+favorite+films." alt="One Movies animated heading" />`{=html}

```{=html}
<p>
```
`<strong>`{=html}Aplikasi Katalog Film Berbasis
Laravel`</strong>`{=html}
```{=html}
</p>
```
```{=html}
<p>
```
`<a href="https://zabranfilm.freedev.app/">`{=html}`<img src="https://img.shields.io/badge/🌐_Live_Demo-One_Movies-7C3AED?style=for-the-badge" alt="Live Demo">`{=html}`</a>`{=html}
`<img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13">`{=html}
`<img src="https://img.shields.io/badge/Bootstrap-3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap 3">`{=html}
`<img src="https://img.shields.io/badge/Project-Kelas_XII-0EA5E9?style=for-the-badge" alt="Project Kelas XII">`{=html}
```{=html}
</p>
```
```{=html}
<p>
```
`<em>`{=html}Jelajahi film, berikan ulasan, dan simpan film favoritmu
dalam satu aplikasi.`</em>`{=html}
```{=html}
</p>
```
:::🎬 Tentang One Movies
One Movies adalah aplikasi katalog film yang dikembangkan
menggunakan Laravel 13 dan Bootstrap 3 sebagai proyek
pembelajaran kelas XII.

Aplikasi ini menyediakan pengalaman untuk melihat katalog dan detail
film, mencari film, memberikan kritik serta rating, membalas komentar,
dan menyimpan film ke watchlist. Di sisi pengelolaan, tersedia dashboard
admin dengan fitur CRUD untuk mengelola data aplikasi.
🚀 Coba langsung: https://zabranfilm.freedev.app/

✨ Fitur Utama
  Fitur                               Deskripsi
  🎞️ Katalog film                     Menampilkan daftar film dan halaman
detail film

  🔎 Pencarian                        Mencari film berdasarkan judul
melalui /movies?q=judul

  🔐 Autentikasi                      Login, register, dan logout

  ⭐ Kritik & rating                  User dapat memberi ulasan dan
rating pada film

  💬 Balas komentar                   User dapat membalas komentar pada
halaman detail film

  🔖 Watchlist                        Menyimpan dan menghapus film dari
daftar tontonan

  👤 Profil                           User dapat melihat dan mengubah
profil sendiri

  🛠️ Dashboard admin                  Ringkasan data, film terbaru,
kritik terbaru, dan statistik genre
📦 Manajemen poster                 Upload poster ke Laravel Storage
serta penghapusan file poster lama
🧰 Teknologi
<p>
<img src="https://img.shields.io/badge/PHP-Laravel-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">{=html}
<img src="https://img.shields.io/badge/Framework-Laravel_13-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel">{=html}
<img src="https://img.shields.io/badge/Frontend-Bootstrap_3-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap">{=html}
<img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL">{=html}
</p>
- Backend: Laravel 13
- Frontend: Bootstrap 3, Blade
- Database: MySQL
- Penyimpanan poster: Laravel Filesystem (storage/app/public)
- Autentikasi: Session-based authentication
📚 Daftar Isi
- Tentang One Movies
- Fitur Utama
- Teknologi
- Demo dan Akun
- Instalasi Lokal
- Hak Akses Pengguna
- Dashboard Admin dan CRUD
- Relasi Model
- Penyimpanan Poster
- Fitur Tambahan
- Perbaikan dan Catatan Teknis
🌐 Demo dan Akun
Aplikasi telah di-deploy dan dapat dicoba secara online:
::: {align="center"}
### [Buka One Movies ↗](https://zabranfilm.freedev.app/)
:::Akun bawaan seeder
  Role    Email                                           Password
  Admin   admin@example.com                             12345678
User    Email acak dari factory (lihat tabel users)   12345678

Login melalui tombol Login di pojok kanan atas. Setelah berhasil
login, admin akan diarahkan ke halaman /admin.
Catatan: Akun di atas merupakan akun bawaan untuk kebutuhan
demonstrasi proyek. Jangan gunakan kredensial contoh ini untuk akun
pribadi atau lingkungan produksi.

⚙️ Instalasi Lokal
1. Persiapan
Pastikan perangkat sudah memiliki:
- PHP dan Composer yang sesuai dengan kebutuhan Laravel 13.
- MySQL.
- Web browser.
- Git.
Buat database terlebih dahulu melalui MySQL atau phpMyAdmin. Nama
database harus sama dengan nilai DB_DATABASE di file .env.
2. Clone repository
git clone nama-repo-masing-masing
cd laravel-kelas-xii
3. Konfigurasi environment
cp .env.example .env
Buka file .env, lalu sesuaikan konfigurasi database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
4. Install dependency dan generate application key
composer install
php artisan key:generate
5. Migrasi dan seeding database
php artisan migrate:fresh --seed
Perintah ini membuat ulang tabel sekaligus mengisi data awal seperti
genre, film, user, admin, dan data seeder lainnya.
6. Hubungkan storage
php artisan storage:link
Perintah ini membuat symbolic link public/storage menuju
storage/app/public, sehingga poster dapat diakses dari browser.
7. Jalankan aplikasi
php artisan serve
Buka alamat lokal yang ditampilkan oleh terminal, biasanya:
http://127.0.0.1:8000
<details>
<summary>
<strong>{=html}💡 Ringkasan perintah instalasi`</strong>`{=html}
</summary>
git clone nama-repo-masing-masing
cd laravel-kelas-xii
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
Pastikan konfigurasi database pada .env sudah benar sebelum
menjalankan migrasi.
</details>
🔑 Hak Akses Pengguna
One Movies membagi akses menjadi tiga jenis: tamu, user, dan admin.

  Fitur                                    Tamu   User   Admin
  Melihat katalog dan detail film           ✓      ✓       ✓
Mencari film                              ✓      ✓       ✓
Menulis kritik dan rating                ---     ✓       ✓
Membalas komentar                        ---     ✓       ✓
Menyimpan film ke watchlist              ---     ✓       ✓
Mengubah profil sendiri                  ---     ✓       ✓
Mengakses dashboard admin                ---    ---      ✓
Mengelola data melalui CRUD              ---    ---      ✓
Menghapus balasan milik pengguna lain    ---    ---      ✓

Alur akses:
Tamu
 └── Katalog · Detail Film · Pencarian

User (login)
 └── Semua fitur Tamu
     └── Kritik · Rating · Balasan · Watchlist · Profil

Admin (login)
 └── Semua fitur User
     └── Dashboard · CRUD · Manajemen Pengguna
User biasa yang mencoba membuka /admin akan mendapatkan respons 403
Forbidden melalui middleware admin.
🛠️ Dashboard Admin dan CRUD
Dashboard admin dapat diakses melalui:
/admin
Route admin dikelompokkan di routes/web.php dan dilindungi middleware
auth serta admin.
Isi dashboard
- Jumlah data aplikasi.
- Daftar film terbaru.
- Daftar kritik terbaru.
- Jumlah film berdasarkan genre.
Layout dashboard berada di:
resources/views/admin/layouts/app.blade.php
Menu pengelolaan data
  Menu             Controller                URL
  Film             FilmController          /admin/films
Genre            Admin\GenreController   /admin/genres
Cast             CastController          /admin/casts
Peran            PeranController         /admin/perans
Kritik           KritikController        /admin/kritiks
User & Profile   Admin\UserController    /admin/users

Setiap menu menyediakan operasi Create, Read, Update, Delete (CRUD).
Validasi input ditempatkan pada app/Http/Requests/ melalui class Store
dan Update.

User biasa tetap dapat mengirim komentar melalui /movies/{film} dan
mengubah profilnya sendiri melalui /profile.
🔗 Relasi Model
Relasi Eloquent digunakan untuk menghubungkan data antar-model agar
pengelolaan data lebih terstruktur.
  Model                               Relasi
  Film                              genre() belongsTo, perans()
hasMany, kritiks() hasMany,
actors() belongsToMany Cast
melalui perans

  Genre                             films() hasMany

  Cast                              perans() hasMany, films()
belongsToMany

  Peran                             film() belongsTo, cast()
belongsTo

  Kritik                            film() belongsTo, user()
belongsTo

  User                              role(), profile() belongsTo,
kritiks() hasMany, isAdmin()

  Profile                           user() hasOne

  Role                              users() hasMany

  Balasan                           Terhubung dengan komentar melalui
relasi balasan
Watchlist                         film() dan user() belongsTo
Controller menggunakan eager loading dengan with(...) untuk
mengambil relasi yang dibutuhkan dan membantu menghindari masalah N+1
query.
🖼️ Penyimpanan Poster di Laravel Storage
Poster film disimpan di storage, bukan lagi langsung di folder
public. Penyimpanan menggunakan disk public milik Laravel.
Struktur penyimpanan
storage/
└── app/
    └── public/
        └── images/
            ├── poster-film-1.jpg
            ├── poster-film-2.jpg
            └── poster-film-3.jpg

public/
└── storage -> ../storage/app/public
Proses pemindahan gambar
1. Buat folder tujuan
   mkdir -p storage/app/public/images
2. Pindahkan poster dari public/template/images/ ke
   storage/app/public/images/.
   File berikut tetap berada di folder public karena digunakan oleh
   CSS template: 1.jpg, arrow1.png, img-sp.png, dan
   play-button.png.
3. Buat symbolic link
   php artisan storage:link
4. Sesuaikan path database
   Kolom films.poster menyimpan path relatif, misalnya
   images/nama.jpg. Data ini dapat dilihat pada
   database/data/movies.csv.
5. Gunakan accessor di Blade
   {{ $film->poster_url }}
   Accessor poster_url didefinisikan pada model Film, sehingga view
   tidak perlu menulis path storage secara berulang.
6. Simpan poster baru
   Upload dari admin menggunakan:
   store('images', 'public')
   File akan tersimpan di storage/app/public/images. Poster lama ikut
   dihapus ketika poster film diganti atau data film dihapus melalui
   Film::deletePosterFile().
7. Pastikan folder ikut tersimpan di Git
   File .gitignore pada storage/app/public/ telah disesuaikan agar
   folder images/ ikut ter-commit.
Jika poster tidak muncul
Periksa hal-hal berikut:
- Jalankan php artisan storage:link.
- Pastikan file tersedia di storage/app/public/images/.
- Pastikan nilai films.poster sesuai dengan nama dan lokasi file.
- Akses poster melalui pola URL /storage/images/nama.jpg.
Contoh URL lokal:
http://localhost:8000/storage/images/nama.jpg
💬 Fitur Tambahan
Balas komentar
Implementasi balas komentar menggunakan:
- Model: app/Models/Balasan.php
- Controller: BalasanController
- Tabel database: balasans
Ketentuan fitur:
- Setiap komentar (Kritik) dapat memiliki banyak balasan melalui
  relasi Kritik::balasans().
- Form balasan muncul di bawah komentar pada halaman detail film.
- Hanya user yang sudah login yang dapat mengirim balasan.
- User hanya dapat menghapus balasannya sendiri.
- Admin dapat menghapus balasan milik siapa pun.
Watchlist
Watchlist memungkinkan user menyimpan film yang ingin ditonton.
- Model: app/Models/Watchlist.php
- Controller: WatchlistController
- Tabel database: watchlists
- Halaman: /watchlist
Ketentuan fitur:
- Tombol Simpan ke Watchlist tersedia pada halaman detail film.
- Tombol berfungsi sebagai toggle untuk menyimpan atau menghapus film.
- Halaman Watchlist Saya menampilkan film yang disimpan oleh user
  yang sedang login.
- Relasi menggunakan User::watchlists() hasMany serta
  Watchlist::film() dan Watchlist::user() belongsTo.
- Kombinasi user_id dan film_id memiliki constraint unique agar
  film yang sama tidak tersimpan dua kali oleh user yang sama.
Setelah menarik update yang menambahkan tabel balasans dan
watchlists, jalankan php artisan migrate. Tidak perlu menggunakan
--fresh jika data lama ingin dipertahankan.

🧹 Perbaikan dan Catatan Teknis
Beberapa perbaikan yang telah dilakukan selama pengerjaan proyek:
  Area                                Perbaikan
  Model Profile & User            Menambahkan konfigurasi $fillable
yang diperlukan agar proses seeder
berjalan

  ApiResponseClass                  Melengkapi import DB, Log, dan
HttpResponseException

  Model User                        Menambahkan trait HasApiTokens
untuk route API yang menggunakan
auth:sanctum

  AppServiceProvider                Menghindari query database pada
setiap proses boot; pemanggilan
data navbar dipindahkan ke view
composer khusus

  Navbar genre                        Memperbaiki loop agar genre pertama
tidak terlewat

  Blade & JavaScript                  Memperbaiki posisi
@stack('scripts'), pasangan
@push('scripts'), dan pemanggilan
file simplePlayer.js yang tidak
tersedia

  Footer                              Memperbaiki tautan menuju file
.html yang tidak tersedia

  Query                               Memperbaiki penggunaan
orderByDesc() dan mengganti
pemuatan seluruh data Peran
dengan query yang lebih tepat

  Halaman detail                      Menampilkan nama cast dan nama user
melalui relasi, bukan ID mentah

  Konfigurasi database                Menyamakan .env.example dengan
konfigurasi MySQL yang digunakan
README
Pencarian                           Mengaktifkan pencarian film melalui
/movies?q=judul
📝 Catatan Penggunaan
- Untuk instalasi baru atau ketika ingin membangun ulang database
  beserta data seed, gunakan:
  php artisan migrate:fresh --seed
  Perhatian: migrate:fresh menghapus tabel yang ada sebelum
  membuat ulang database. Gunakan hanya jika data lama memang boleh
  dihapus.
- Untuk menerapkan migration baru tanpa menghapus data lama, gunakan:
  php artisan migrate
- Jika poster tidak tampil, periksa symbolic link dan isi folder
  storage/app/public/images.
- Pastikan konfigurasi .env sudah sesuai dengan database lokal.
::: {align="center"}
**ONE MOVIES**

*Built with Laravel · Aplikasi Katalog Film Kelas XII*

`<a href="https://zabranfilm.freedev.app/">`{=html}🌐 Kunjungi Live
Demo`</a>`{=html}
:::