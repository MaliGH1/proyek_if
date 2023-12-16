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

<!-- Transisi paragraf ABOUT -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    #about-section {
        min-height: 50vh;
        padding-top: 7rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: justify; /* Menambahkan properti text-align untuk membuat paragraf menjadi rata kiri dan kanan */
    }
</style>

    </style>
    <!-- hubungi kami -->
    <style>
        #contact-section {
            display: flex;
            justify-content: flex-start;
            /* Mengatur agar konten berada di sebelah kiri */
        }
        /* Jika ingin mengatur lebar maksimum box, tambahkan properti max-width */
        #contact-section .max-w-6xl {
            padding-top: 20rem;
            max-width: 500px;
            /* Sesuaikan lebar maksimum sesuai kebutuhan */
        }
        #contact-section .max-w-1xl{
            padding-top: 18rem;
            max-width: 1590px;
        }
    </style>



</head>

<body class="bg-gradient-to-b from-black from-45% to-white">
    @include('partials.navbar')
    <div class="margin_bottom_navbar">


        <!-- Style ngetik -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var options = {
                    strings: ['DVJR RentCar', 'WELCOME'],
                    typeSpeed: 50,
                    backSpeed: 20,
                    backDelay: 1000,
                    startDelay: 250,
                    loop: true,
                    showCursor: true,
                    onComplete: function(self) {

                        document.getElementById('animated-h2').classList.add('h2-entered');
                    }
                };

                var typed = new Typed('#insertion-point', options);
            });
        </script>
 <!-- about -->
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
    </div>
    <!-- Style h2 -->
    <div class="container ">
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        

        @yield('container')

    </div>

<style>
/* INI BUAT BIAR RAPIH DI BUKA DI IPONE */
@media (max-width: 414px) {
    #home {
        padding: 1rem;
    }

    #home h1 {
        font-size: 2.5rem;
    }

    #home h2 {
        font-size: 1.8rem;
    }

    #home a {
        font-size: 1rem;
    }

    #about-section-content h1 {
        font-size: 2.5rem;
    }

    #about-section-content p {
        font-size: 1rem;
    }

    #contact-section h1 {
        font-size: 2.5rem;
    }

    #contact-section p {
        font-size: 1rem;
    }

    #contact-section .flex {
        flex-direction: column;
    }

    #contact-section .flex div {
        margin-bottom: 1rem;
    }

    #contact-section .map-image {
        width: 100%;
    }

    .margin_bottom_navbar {
        margin-bottom: 2rem;
    }
}

</style>

        
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>