<nav class="navbar navbar-light navbar-expand-lg bg-light">
    <div class="container navbar-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-2 mb-3 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Sewa") ? 'active' : '' }}" href="/sewa">Sewa</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="/home">DVJR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .navbar-brand {
        font-size: 24px;
        /* Sesuaikan ukuran teks sesuai kebutuhan Anda */
        font-weight: bold;
        /* Atur berat font sesuai kebutuhan Anda */
        color: black;
        /* Atur warna teks sesuai kebutuhan Anda */
        text-transform: uppercase;
        /* Atur perubahan huruf sesuai kebutuhan Anda */
        margin: 0;
        /* Hapus margin agar brand navbar tepat berada di tengah-tengah */
    }

    .navbar-brand:hover {
        color: #fff;
        /* Warna saat mengarahkan kursor ke brand navbar */
    }
</style>