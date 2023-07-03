<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel isaccessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<br>

---

<br>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

<p align="center" style="font-size: 500%; font-family: 'Play', sans-serif;"><img style="padding-right: 20px" src="https://raw.githubusercontent.com/ramhaidar/TelkomSehat_TuBes_ABP/main/public/favicon.svg" width="75%" ><span class="d-none d-lg-block"></span></p>

## Framework
- Laravel 10.13.2

## Collaborators

-   Haidaruddin Muhammad Ramdhan (1301204459) — [@ramhaidar](https://github.com/ramhaidar)
-   Ahmad Fasya Adila (1301204231) — [@AhmadFasya](https://github.com/AhmadFasya)
-   Muhammad Dimas Rifki Irianto (1301204112) — [@dimasrfq](https://github.com/dimasrfq)
-   Muhammad Hiksal Daeng Jusuf Bauw (1301204416) — [@hiksalmuhammad](https://github.com/hiksalmuhammad)
-   Robith Naufal Razzak (1301204017) — [@robithnr](https://github.com/robithnr)

## How to Run

-   Install XAMPP and Run Apache and MySQL
-   Copy file .env.example to .env
-   Set your database configuration in .env file in the following lines as needed:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
-   Create a Database with the same name as the value `DB_DATABASE` in MySQL (Can Use PHPMyAdmin)
-   Open a Command Prompt in the Laravel Project Root Folder
    -   Execute the following command to install the dependencies needed by Laravel:
        ```
        composer install
        ```
    -   Generate a new application key by running the following command in the terminal:
        ```
        php artisan key:generate
        ```        
    -   Run the following command to create database tables:
        ```
        php artisan migrate
        ```
    -   Execute the following command for seeding database data:
        ```
        php artisan db:seed --class=AwalanSeeder
        ```
-   After the above steps have been performed run the following command to start the local server and open the app in the browser:
    ```
    php artisan serve
    ```

## Predefined Users

-   Patient:
    -   ```
        Nama: Muhammad Dimas Rifki Irianto
        Username: dimasrfq
        Password: dimas123
        ```
    -   ```
        Nama: Ahmad Fasya Adila
        Username: ahmadfasya
        Password: fasya123
        ```
    -   ```
        Nama: Muhammad Hiksal Daeng Jusuf Bauw
        Username: hiksal
        Password: hiksal123
        ```
    -   ```
        Nama: Robith Naufal Razzak
        Username: robithnaufal
        Password: robithnaufal123
        ```
    -   ```
        Nama: Haidaruddin Muhammad Ramdhan
        Username: haidarx
        Password: haidarx123
        ```

-   Dokter:

    -   ```
        Kode Dokter: FSV
        Spesialis: Dokter Gigi
        Username: fanie
        Password: fanie123
        ```
    -   ```
        Kode Dokter: SOL
        Spesialis: Dokter Umum
        Username: solikin
        Password: solikin123
        ```
    -   ```
        Kode Dokter: GAW
        Spesialis: Dokter Kulit
        Username: gedeagung
        Password: gedeagung123
        ```
    -   ```
        Kode Dokter: COK
        Spesialis: Psikiater
        Username: tjokor
        Password: tjokor123
        ```
    -   ```
        Kode Dokter: ADR
        Spesialis: Dokter THT
        Username: drian
        Password: drian123
        ```

-   Paramedis:

    -   ```
        Kode Paramedis: TPR
        Spesialis: Tim Tapir
        Username: tapir
        Password: tapir123
        ```
    -   ```
        Kode Paramedis: KSR
        Spesialis: Tim Kasuari
        Username: kasuari
        Password: kasuari123
        ```
    -   ```
        Kode Paramedis: KMD
        Spesialis: Tim Komodo
        Username: komodo
        Password: komodo123
        ```

## Screenshots

-   **Halaman Beranda:**

    ![](https://i.imgur.com/4smGwfr.png)    <!-- TelkomSehat-Beranda.png -->
    ![](https://i.imgur.com/PsOhzyw.png)    <!-- TelkomSehat-Beranda2.png -->
    ![](https://i.imgur.com/xcCAFuP.png)    <!-- TelkomSehat-Beranda3.png -->

-   **Halaman Login:**

    ![](https://i.imgur.com/0a2lwV8.png)    <!-- TelkomSehat-Login.png -->

-   **Dashboard Dokter:**

    ![](https://i.imgur.com/e6A66Bg.png)    <!-- Telkom-Sehat-Dashboard-Dokter.png -->
    ![](https://i.imgur.com/by0rUg2.png)  <!-- Telkom-Sehat-Dashboard-Dokter2.png -->
    ![](https://i.imgur.com/VN03UzA.png)  <!-- Telkom-Sehat-Dashboard-Reservasi3.png -->
    ![](https://i.imgur.com/w4nb5Vs.png)  <!-- Telkom-Sehat-Dashboard-Reservasi4.png -->
    ![](https://i.imgur.com/OPpWYS5.png)  <!-- Telkom-Sehat-Dashboard-Konsultasi3.png -->
    ![](https://i.imgur.com/9iQI85J.png)  <!-- Telkom-Sehat-Dashboard-Konsultasi4.png -->
    
-   **Dashboard Mahasiswa:**

    ![](https://i.imgur.com/DaMNBJy.png) <!-- Telkom-Sehat-Dashboard-Mahasiswa.png -->
    ![](https://i.imgur.com/jIaKleD.png) <!-- Telkom-Sehat-Dashboard-Reservasi2.png -->
    ![](https://i.imgur.com/YAsmgSm.png) <!-- Telkom-Sehat-Dashboard-Reservasi.png -->
    ![](https://i.imgur.com/NCIX47B.png) <!-- Telkom-Sehat-Dashboard-Konsultasi.png -->
    ![](https://i.imgur.com/3yBuwdg.png) <!-- Telkom-Sehat-Dashboard-Konsultasi2.png -->
    ![](https://i.imgur.com/bfONhpO.png) <!-- Telkom-Sehat-Dashboard-Penjemputan.png -->
    ![](https://i.imgur.com/aJ51tY5.png) <!-- Telkom-Sehat-Dashboard-Penjemputan2.png -->
    ![](https://i.imgur.com/NAUuewa.png) <!-- Telkom-Sehat-Dashboard-Penjemputan3.png -->

-   **Dashboard Paramedis:**

    ![](https://i.imgur.com/vZ8ZiZd.png) <!-- Telkom-Sehat-Dashboard-Paramedis.png -->
    ![](https://i.imgur.com/HO7xOPN.png) <!-- Telkom-Sehat-Dashboard-Penjemputan5.png -->
    ![](https://i.imgur.com/TF2XfhM.png) <!-- Telkom-Sehat-Dashboard-Penjemputan6.png -->
    ![](https://i.imgur.com/gOO8jEu.png) <!-- Telkom-Sehat-Dashboard-Penjemputan7.png -->
