<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Vila Brooklyn</title>

    <!-- Vite CSS dan JS -->
    @vite('resources/css/app.css')

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icons/favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/favicon/apple-touch-icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="Vila Brooklyn">
    <link rel="manifest" href="{{ asset('images/icons/favicon/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Families -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caveat:wght@400..700&family=Comic+Relief:wght@400;700&family=Dancing+Script:wght@400..700&family=Dongle&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Playwrite+DE+SAS:wght@100..400&family=Rock+3D&family=TASA+Explorer:wght@400..800&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="full-navbar">
        <div class="container">
            <div class="col-1">
                <img src="{{ asset('images/vila-brooklyn.jpg') }}" alt="Logo Vila" width="60">
                <p>Vila Brooklyn</p>
            </div>
            <div class="col-2">
                <a href="#">Beranda</a>
                <a href="#">Fasilitas</a>
                <a href="#">Galeri</a>
                <a href="#">Kontak</a>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="container">

        </div>
    </div>
</body>

</html>
