# Ruang Belanja

Aplikasi web penjualan online berbasis Laravel untuk mengelola produk, kategori, stok, ekspedisi, keranjang belanja, checkout, dan transaksi pelanggan.

## Fitur Aplikasi

### Admin
- Dashboard admin.
- Mengelola kategori dan produk.
- Mengelola stok dan barang masuk.
- Mengelola layanan ekspedisi.
- Melihat dan mengelola transaksi pelanggan.
- Mengonfirmasi, membatalkan, dan memperbarui status pesanan.

### Pelanggan
- Registrasi dan login.
- Melihat dan mencari produk.
- Memfilter dan mengurutkan produk.
- Mengelola keranjang belanja.
- Melakukan checkout.
- Melihat riwayat dan detail pesanan.

## Teknologi

- PHP 8.3+
- Laravel 13
- MySQL / MariaDB
- Composer
- HTML, CSS, JavaScript
- Git

## Persyaratan

Pastikan perangkat sudah memiliki:
- PHP 8.3 atau lebih baru.
- Composer.
- MySQL atau MariaDB.
- Git.
- Laragon atau lingkungan server PHP lainnya.

## Instalasi

1. Clone repository:

   ```bash
   git clone URL_REPOSITORY
   ```

2. Masuk ke folder proyek:

   ```bash
   cd laravel-online-sales
   ```

3. Install dependency:

   ```bash
   composer install
   ```

4. Salin file konfigurasi:

   Windows:

   ```powershell
   copy .env.example .env
   ```

5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Buat database dengan nama `laravel_online_sales`, kemudian sesuaikan konfigurasi database pada file `.env`.

   ```env
   DB_CONNECTION=mysql
   DB_DATABASE=laravel_online_sales
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Jalankan migration dan seeder:

   ```bash
   php artisan migrate --seed
   ```

8. Buat symbolic link untuk penyimpanan gambar:

   ```bash
   php artisan storage:link
   ```

9. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

10. Buka aplikasi melalui:

    `http://127.0.0.1:8000`

## Akun Login

**Admin**

- Email: `admin@example.com`
- Password: `Admin12345!`

**Pelanggan**

Pelanggan dapat membuat akun melalui halaman registrasi (`/register`).

## Pengujian

Pengujian aplikasi meliputi:

- Registrasi dan autentikasi pengguna.
- Pembatasan akses berdasarkan role.
- Pengelolaan kategori dan produk.
- Upload gambar produk.
- Pengelolaan stok dan barang masuk.
- Keranjang dan validasi jumlah produk.
- Checkout dan pengurangan stok.
- Pengelolaan transaksi dan status pesanan.
- Pembatalan pesanan dan pengembalian stok.
- Validasi kepemilikan detail pesanan.
- Validasi harga dan stok saat checkout.

## Struktur Pengelolaan Git

Pengembangan dilakukan menggunakan branch berdasarkan milestone:

- `main`
- `milestone/01-auth`
- `milestone/02-master-data`
- `milestone/03-inventory-shipping`
- `milestone/04-storefront`
- `milestone/05-cart`
- `milestone/06-checkout`
- `milestone/07-order-admin`
- `milestone/08-qa`

## Lisensi

Proyek ini dibuat untuk keperluan praktikum dan pembelajaran pengembangan aplikasi web menggunakan Laravel.