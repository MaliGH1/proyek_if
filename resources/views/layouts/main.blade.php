<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DVJR Rent Cars | HOME</title>
    <link rel="stylesheet" href="css/main.css" class="">
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/mb.css" class="">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Transisi paragraf -->
    <style>
        /* Gaya tambahan jika diinginkan */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Gaya untuk mengatur tinggi layar minimal */
        #about-section {
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
            opacity: 0; /* Tambahkan opsi ini untuk memulai elemen dalam keadaan tidak terlihat */
            transform: translateX(100%); /* Tambahkan opsi ini untuk memulai elemen di luar layar */
            transition: opacity 1s ease, transform 2s ease; /* Animasi transisi */
        }

        /* Gaya untuk konten tentang kami */
        #about-section-content {
            text-align: justify;
            color: white;
        }

        
    </style>

</head>

<body class="bg-gradient-to-b from-black from-45% to-white">
    <div class="margin_bottom_navbar">
        @include('partials.navbar')

        <style>
            /* Tambahkan gaya jika diperlukan */
            #map-container {
                width: 100%;
                height: 400px;
                /* Sesuaikan tinggi peta */
                margin-top: 20px;
            }
        </style>

        <!-- Style ngetik -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var options = {
                    strings: ['DVJR RentCar'],
                    typeSpeed: 120,
                    backSpeed: 50,
                    backDelay: 1000,
                    startDelay: 500,
                    loop: false,
                    showCursor: true,
                    onComplete: function(self) {

                        document.getElementById('animated-h2').classList.add('h2-entered');
                    }
                };

                var typed = new Typed('#insertion-point', options);
            });
        </script>

    </div>
    <div class="container ">
        <!-- Style h2 -->
        <style>
            h2 {
                opacity: 0;
                transform: translateX(50px);
                transition: opacity 1s ease-in-out, transform 1s ease-in-out;
            }

            .h2-entered {
                opacity: 1;
                transform: translateX(0);
            }

            #image-container img {
                transition: opacity 1s ease-in-out;
            }
        </style>


        @yield('container')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>