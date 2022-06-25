# Aplikasi Dashboard Simple Crud dengan Sistem Login - Laravel 8

## System Requirement

1. Minimal PHP versi 7.2
2. Aplikasi web server (XAMPP, MAMP, Laragon, dll)
3. Composer versi 2.0 atau lebih
4. Node NPM versi 16.0 atau lebih

## Cara Instalasi dan Menjalankan Program

1. Buka Terminal / CMD
2. Clone project <code>https://github.com/mujahalbadri/laravel-dashboard.git</code>
3. Buka folder project pada terminal dengan path <code>cd laravel-dashboard</code>
4. Ketik <code>composer install</code>
5. Ketik <code>npm install && npm run dev</code>
6. Rename file <code>.env.example</code> menjadi <code>.env</code>
7. Ketik <code>php artisan key:generate</code>
8. Jalankan aplikasi web server
9. Buat database baru dengan nama <code>laravel-dashboard</code>
10. Konfigurasi database di <code>.env</code> dengan contoh seperti berikut :

-   DB_CONNECTION=localhost
-   DB_HOST=127.0.0.1
-   DB_PORT=3306
-   DB_DATABASE=laravel-dashboard
-   DB_USERNAME=root
-   DB_PASSWORD=

11. Ketik <code>php artisan migrate --seed</code> pada terminal
12. Jalankan dengan <code>php artisan serve</code>
13. Buka browser dan ketik url <code>http://127.0.0.1:8000/</code>

## Login

1. Role Staff

-   email : staff@gmail.com
-   password : staff123

2. Role Owner

-   email : owner@gmail.com
-   password : owner123
