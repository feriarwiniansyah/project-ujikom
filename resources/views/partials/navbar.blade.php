<nav class="navbar navbar-expand-lg bg-primary navbar-dark {{--fixed-top--}} sticky-top mb-2">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand fw-bolder" href="#">{{ config('app.name') }}</a>
    </div>
</nav>

{{-- untuk memunculkan navbar|class digunakan untuk bootstrap | navbar-expand-lg agar menjadi responsif sesuai ukuran layar --}}
{{-- href itu sebuah syntax untuk melink | config('app.name')  akan mengambil nama aplikasi dari file konfigurasi Laravel (config/app.php)  --}}