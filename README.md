
## Langkah Membuat
Alat yang digunakan :
1. Php versi 8.1
2. Laravel versi 8.3
3. MongoDB versi 4.2

Langkah-langkah :
1. Download MongoDB, kemudian install driver mongodb pada windous, dan edit file php.ini.
2. install laravel baru.
    ```bash
    composer create-project --prefer-dist laravel/laravel="^8.0"
    ```
3. install librari mongodb pada file laravel, karena menggunakan laravel versi 8 maka sesuaikan librarinya disini menggunakan versi 3.8.
    ```bash
    composer require jenssegers/mongodb="^3.8"
    ```
4. Konfigurasi mongodb untuk laravel.
    - pada file config/app
    ```bash
    Jenssegers\Mongodb\MongodbServiceProvider::class,
    ```
    - pada file config/database, dan ubah default environtmen menjadi mongodb.
    ```bash
    'mongodb' => [
                'driver' => 'mongodb',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', 27017),
                'database' => env('DB_DATABASE', ''),
                'username' => env('DB_USERNAME', ''),
                'password' => env('DB_PASSWORD', ''),
            ],
    ```
    - pada .env .
    ```bash
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=kendaraan
    DB_USERNAME=
    DB_PASSWORD=
    ```
5. Setelah itu membuat Model sekaligus migrate, controller dan resource sebagai contoh.
    ```bash
    php artisan make:model Api/Kendaraan -mcr
    ```
6. Setelah itu konfirurasi semuanya dan lakukan migrate database dengan cara dibawah.
    ```bash
    php artisan migrate
    php artisan migrate:fresh
    ```
7. Setelah itu buat repository dan services.
8. Kemudian dalam controller mengakses repository melalui services.
9. kemudian integrasikan dan konfigurasi auth menggunakan JWT (JSON Web Token).

## Cara Menggunakan API

Kendaraan :
1. Akses semua data menggunakan method get.
    ```bash
    GET http://127.0.0.1:8000/api/kendaraan
    ```
2. Akses kendaraan berdasarkan nama.
    ```bash
    GET http://127.0.0.1:8000/api/kendaraan/{kendaraan}
    ```
    Sebagai contoh : 
    ```bash
    GET hhttp://127.0.0.1:8000/api/kendaraan/Lamborgini
    ```
3. Menambah data menggunakan method post.
    ```bash
    POST http://127.0.0.1:8000/api/kendaraan/add
    ```
4. Update data menggunakan method put.
    ```bash
    PUT http://127.0.0.1:8000/api/kendaraan/update/{id}
    ```
    Sebagai contoh :
    ```bash
    PUT http://127.0.0.1:8000/api/kendaraan/update/639cb5f8920767ff6c0d5902
    ```
3. Akses stok kendaraan.
    ```bash
    GET http://127.0.0.1:8000/api/stok
    ```

Penjualan :
1. Menambah data penjualan, method post.
    ```bash
    POST http://127.0.0.1:8000/api/penjualan
    ```
2. Akses semua data laporan penjualan, method get.
    ```bash
    GET http://127.0.0.1:8000/api/laporan/all
    ```
3. Akses data laporan penjualan per kendaraan, method get.
    ```bash
    GET http://127.0.0.1:8000/api/laporan/{kendaraan}
    ```
    Sebagai contoh :
    ```bash
    GET http://127.0.0.1:8000/api/laporan/Motor
    ```

Auth :
1. Api rgistrasi, method post.
    ```bash
    POST http://127.0.0.1:8000/api/register
    ```
1. Api login, method post.
    ```bash
    POST http://127.0.0.1:8000/api/login
    ```
1. Api user, method get dengan autorization token yang didapat dari login atau email dan pasword secara langsung juga bisa.
    ```bash
    GET http://127.0.0.1:8000/api/user
    ```
