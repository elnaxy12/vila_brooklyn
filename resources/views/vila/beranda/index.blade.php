<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Vila Brooklyn</title>

    <!-- Vite CSS dan JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <div class="slider">
                <div class="slides">
                    <img src="https://static.wixstatic.com/media/d701c3_a494ba2e8c8c426e909e336a3b25cd3d~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_a494ba2e8c8c426e909e336a3b25cd3d~mv2.jpg"
                        class="slide" alt="">
                    <img src="https://static.wixstatic.com/media/d701c3_f543aa8a57bb40b0b9459e12f492148c~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_f543aa8a57bb40b0b9459e12f492148c~mv2.jpg"
                        class="slide" alt="">
                    <img src="https://static.wixstatic.com/media/d701c3_b888d73d0a374bd9badefcbd557ad4c3~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_b888d73d0a374bd9badefcbd557ad4c3~mv2.jpg"
                        class="slide" alt="">
                    <img src="https://static.wixstatic.com/media/d701c3_a8b409f13e314ec9b5e44b50d4d2d557~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_a8b409f13e314ec9b5e44b50d4d2d557~mv2.jpg"
                        class="slide" alt="">
                    <img src="https://static.wixstatic.com/media/d701c3_fb562da7d7eb4ef083a4a55c029f6a5f~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_fb562da7d7eb4ef083a4a55c029f6a5f~mv2.jpg"
                        class="slide" alt="">
                    <img src="https://static.wixstatic.com/media/d701c3_80fada58f96e4136809ee03fd796fda3~mv2.jpg/v1/fill/w_980,h_554,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/d701c3_80fada58f96e4136809ee03fd796fda3~mv2.jpg"
                        class="slide" alt="">

                </div>
                <!--Tombol Navigasi -->
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>

                <!-- Dots Navigasi -->
                <div class="dots"></div>
            </div>
        </div>

        <!-- Section PAX VILA -->
        <div class="container pax-vila-section">
            <div class="col-1">
                <p>PAX VILA</p>
            </div>
            <div class="col-2">
                <div class="grid-3-container">
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_f543aa8a57bb40b0b9459e12f492148c~mv2.jpg/v1/crop/x_0,y_0,w_1535,h_1080/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/LODY_BIG_15_1620x1080.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>60 PAX VILLA</span>
                            <p>VILLA BUANA</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Villa terbesar di Villa lody dengan kapasitas 50 pax. Juga dilengkapi dengan berbagai
                                fasilitas yang menunjang kegiatan berkelompok sehingga sangat cocok untuk retreat atau
                                outing kantor.
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(21 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_54d1c990990042d594c69d7f049e8a97~mv2.jpg/v1/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/DSC06772_3240x2160.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>6+3 PAX VILLA</span>
                            <p>VILLA ANDES</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Luxury desainer villa terbaru dari Villa Lody. Memiliki desain yang modern &
                                instagramable. Memiliki fasilitas seperti kolam renang, akses internet, barbecue grill,
                                dapur modern, TV kabel, dan lainnya.
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(128 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_b888d73d0a374bd9badefcbd557ad4c3~mv2.jpg/v1/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/DSC00103_1620x1080.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>4 PAX VILLA</span>
                            <p>VILLA VERDE</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Untuk Anda yang mendambakan staycation yang lebih open concept, villa berkapasitas 6
                                orang dengan konsep nature glass ini adalah pilihan yang sangat tepat. Dilengkapi juga
                                dengan AC, TV kabel, dan water heater.
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(128 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                </div>

                <!--Section 2 PAX VILA -->
                <div class="grid-3-container">
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_a8b409f13e314ec9b5e44b50d4d2d557~mv2.jpg/v1/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/IMG_0215_1920x1080_JPG.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>15 PAX VILLA</span>
                            <p>VILLA AMAYA</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Mengusung konsep estetik classic American heritage, Villa Amaya juga dilengkapi dengan 3
                                pekarangan luas multifungsi yang bisa Anda gunakan untuk berbagai kegiatan outdoor
                                selama staycation Anda.
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(11 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_3a4c3c5f7f164e398e5af61180663e57~mv2.jpg/v1/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/DJI_0328_1620x1080.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>8 PAX VILLA</span>
                            <p>VILLA ARUM</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Jadikan staycation Anda berikutnya lebih fun dengan memilih villa yang dilengkapi dengan
                                lapangan basket, tenis, greenhouse, dan viewing deck ini. Fasilitas lain seperti TV
                                kabel, water heater, dan dapur lengkap juga menanti.
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(128 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                    <div class="card grid-item">
                        <div class="row-1">
                            <img src="https://static.wixstatic.com/media/d701c3_80fada58f96e4136809ee03fd796fda3~mv2.jpg/v1/fill/w_414,h_267,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Pine%20Hills%20-%20Drone%20copy_1920x1080.jpg"
                                alt="">
                        </div>
                        <div class="row-2">
                            <span>6+3 PAX</span>
                            <p>VILLA PINE HILL</p>
                        </div>
                        <div class="row-3">
                            <p>
                                Villa dengan estetik desain Minimalist American Countryside ini menyajikan salah satu
                                pemandangan Gunung Salak terbaik! Dengan fasilitas lengkap, dipastikan dapat membuat
                                staycation Anda lebih perfect!
                            </p>
                            <div class="product-rating">
                                <div class="stars" data-rating="4.3"></div>
                                <span class="rating-value">4.3</span>
                                <span class="reviews">(77 reviews)</span>
                            </div>
                            <button class="booking">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Section Fasilitas -->
        <div class="container fasilitas-section">
            <div class="row-1">
                <h2>Fasilitas</h2>
                <p>Berikut adalah fasilitas yang kami tawarkan di villa kami:</p>
            </div>
            <div class="row-2 grid-5-container">
                <div class="card fasilitas-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M552 216C552 185.1 526.9 160 496 160C465.1 160 440 185.1 440 216C440 246.9 465.1 272 496 272C526.9 272 552 246.9 552 216zM293.4 262.2L204.8 336.1C205.9 336.1 207 336 208.1 336C241.2 335.8 274.4 346.2 302.5 367.4C324.6 384 331.6 384 353.7 367.4C381.2 346.7 413.6 336.2 446.1 336C450.9 336 455.8 336.2 460.6 336.6C452.3 306.6 436.3 278.9 413.8 256.4C395.4 238 373.2 223.7 348.8 214.6L280.2 188.9C252.8 178.6 222.2 181.4 197.1 196.5L143.6 228.6C128.4 237.7 123.5 257.3 132.6 272.5C141.7 287.7 161.3 292.6 176.5 283.5L230 251.3C238.4 246.3 248.6 245.4 257.7 248.8L293.4 262.2zM403.4 444.1C424.7 428 453.3 428 474.6 444.1C493.6 458.5 516.5 472.3 541.8 477.4C568.3 482.8 596.1 478.2 622.5 458.3C633.1 450.3 635.2 435.3 627.2 424.7C619.2 414.1 604.2 412 593.6 420C578.7 431.2 565 433.1 551.3 430.3C536.4 427.3 520.4 418.4 503.5 405.7C465.1 376.7 413 376.7 374.5 405.7C350.5 423.8 333.8 432 320 432C306.2 432 289.5 423.8 265.5 405.7C227.1 376.7 175 376.7 136.5 405.7C114.9 422 95.2 431.5 77.6 431.4C68 431.3 57.7 428.4 46.4 419.9C35.8 411.9 20.8 414 12.8 424.6C4.8 435.2 7 450.3 17.6 458.3C36.7 472.7 57 479.3 77.4 479.4C111.3 479.6 141.7 462 165.5 444.1C186.8 428 215.4 428 236.7 444.1C260.9 462.4 289 480 320.1 480C351.2 480 379.2 462.3 403.5 444.1z" />
                    </svg>
                </div>
                <div class="card fasilitas-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M288.5 64C303.2 64 316.7 72.1 323.7 85L539.7 485C546.4 497.4 546.1 512.4 538.9 524.5C531.7 536.6 518.6 544 504.6 544L72.6 544C58.5 544 45.5 536.6 38.3 524.5C31.1 512.4 30.8 497.4 37.5 485L253.5 85L256.4 80.4C263.7 70.2 275.6 64 288.5 64zM202.4 313.9L229.2 340.7C235.4 346.9 245.6 346.9 251.8 340.7L295.1 297.4C301.1 291.4 309.2 288 317.7 288L360.5 288L288.4 154.5L202.3 313.9zM528.5 224C484.3 224 448.5 188.2 448.5 144C448.5 99.8 484.3 64 528.5 64C572.7 64 608.5 99.8 608.5 144C608.5 188.2 572.7 224 528.5 224z" />
                    </svg>
                </div>
                <div class="card fasilitas-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M272 208C272 155 229 112 176 112C123 112 80 155 80 208C80 261 123 304 176 304C229 304 272 261 272 208zM316.4 240C301.9 304.1 244.5 352 176 352C96.5 352 32 287.5 32 208C32 128.5 96.5 64 176 64C244.5 64 301.9 111.9 316.4 176L388.2 176C397 166.2 409.8 160 424 160L528 160C554.5 160 576 181.5 576 208C576 234.5 554.5 256 528 256L424 256C409.8 256 397 249.8 388.2 240L316.4 240zM176 144C211.3 144 240 172.7 240 208C240 243.3 211.3 272 176 272C140.7 272 112 243.3 112 208C112 172.7 140.7 144 176 144zM432 304C445.3 304 456 314.7 456 328L456 336L552 336C565.3 336 576 346.7 576 360C576 373.3 565.3 384 552 384L312 384C298.7 384 288 373.3 288 360C288 346.7 298.7 336 312 336L408 336L408 328C408 314.7 418.7 304 432 304zM320 528L320 416L544 416L544 528C544 554.5 522.5 576 496 576L368 576C341.5 576 320 554.5 320 528zM80 384L208 384C234.5 384 256 405.5 256 432C256 458.5 234.5 480 208 480L192 480C192 497.7 177.7 512 160 512L96 512C78.3 512 64 497.7 64 480L64 400C64 391.2 71.2 384 80 384zM208 448C216.8 448 224 440.8 224 432C224 423.2 216.8 416 208 416L192 416L192 448L208 448zM56 528L232 528C245.3 528 256 538.7 256 552C256 565.3 245.3 576 232 576L56 576C42.7 576 32 565.3 32 552C32 538.7 42.7 528 56 528z" />
                    </svg>
                </div>
                <div class="card fasilitas-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M320 128C241 128 175.3 185.3 162.3 260.7C171.6 257.7 181.6 256 192 256L208 256C234.5 256 256 277.5 256 304L256 400C256 426.5 234.5 448 208 448L192 448C139 448 96 405 96 352L96 288C96 164.3 196.3 64 320 64C443.7 64 544 164.3 544 288L544 456.1C544 522.4 490.2 576.1 423.9 576.1L336 576L304 576C277.5 576 256 554.5 256 528C256 501.5 277.5 480 304 480L336 480C362.5 480 384 501.5 384 528L384 528L424 528C463.8 528 496 495.8 496 456L496 435.1C481.9 443.3 465.5 447.9 448 447.9L432 447.9C405.5 447.9 384 426.4 384 399.9L384 303.9C384 277.4 405.5 255.9 432 255.9L448 255.9C458.4 255.9 468.3 257.5 477.7 260.6C464.7 185.3 399.1 127.9 320 127.9z" />
                    </svg>
                </div>
                <div class="card fasilitas-item">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M320 160C229.1 160 146.8 196 86.3 254.6C73.6 266.9 53.3 266.6 41.1 253.9C28.9 241.2 29.1 220.9 41.8 208.7C113.7 138.9 211.9 96 320 96C428.1 96 526.3 138.9 598.3 208.7C611 221 611.3 241.3 599 253.9C586.7 266.5 566.4 266.9 553.8 254.6C493.2 196 410.9 160 320 160zM272 496C272 469.5 293.5 448 320 448C346.5 448 368 469.5 368 496C368 522.5 346.5 544 320 544C293.5 544 272 522.5 272 496zM200 390.2C188.3 403.5 168.1 404.7 154.8 393C141.5 381.3 140.3 361.1 152 347.8C193 301.4 253.1 272 320 272C386.9 272 447 301.4 488 347.8C499.7 361.1 498.4 381.3 485.2 393C472 404.7 451.7 403.4 440 390.2C410.6 356.9 367.8 336 320 336C272.2 336 229.4 356.9 200 390.2z" />
                    </svg>
                </div>
                <div class="title">
                    <p>Kolam Renang Pribadi</p>
                </div>
                <div class="title">
                    <p>Pemandangan Indah</p>
                </div>
                <div class="title">
                    <p>Dapur Lengkap</p>
                </div>
                <div class="title">
                    <p>Support 24/7</p>
                </div>
                <div class="title">
                    <p>Wifi</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
