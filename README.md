# Fitur PPDB (Penerimaan Peserta Didik Baru) pada Website SD Negeri 1 Purwokerto Kulon

## Deskripsi
Proyek ini adalah pengembangan fitur Penerimaan Peserta Didik Baru (PPDB) secara daring untuk website SD Negeri 1 Purwokerto Kulon menggunakan metode Extreme Programming (XP). Sistem ini dirancang untuk memudahkan proses pendaftaran siswa baru dengan meningkatkan aksesibilitas dan efisiensi.

## Demo Project
[Klik di sini untuk melihat demo](https://ppdb.sdn1purwokertokulon.sch.id)

## Features
- **Admin:**
  - Mengelola informasi PPDB
  - Mengaktifkan PPDB
  - Melihat tabel pendaftar
  - Mengelola data pendaftar
  - Mengelola data informasi sekolah

- **Wali Murid:**
  - Melihat informasi PPDB
  - Mendaftar dan masuk akun pendaftar (calon siswa)
  - Mendaftar PPDB online

## Installation Steps
1. Clone repository ini:
    ```bash
    git clone https://github.com/username/repo-name.git
    ```
2. Navigasi ke direktori proyek:
    ```bash
    cd repo-name
    ```
3. Install dependensi yang diperlukan (jika ada):
    ```bash
    composer install
    ```
4. Setup database dan import file SQL yang disediakan dalam folder `database`.

5. Konfigurasi file `.env` untuk koneksi database:
    ```bash
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "ppdb_sdn1pwtk";
    ```

6. Jalankan server lokal:
    ```bash
    php -S localhost:8000
    ```

## Technologies Used
- PHP Native
- HTML
- CSS
- JavaScript
- SCSS for Encrypting

## License Information
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
