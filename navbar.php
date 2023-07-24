<style>
    :root {
        --opacity-value: 0.3;
    }

    .navbar-scrolled {
        background-color: rgba(var(--bs-emphasis-color-rgb), var(--opacity-value));
        backdrop-filter: blur(8px);
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: var(--bs-body-bg);
    }

    @media (max-width: 1399px) {
        .blur-burger {
            background-color: rgba(var(--bs-emphasis-color-rgb), var(--opacity-value));
            backdrop-filter: blur(8px);
        }

        .ada {
            background-color: var(--bs-body-bg);
            width: auto;
            height: 67.5px;
        }
    }
</style>
<nav class="blur-burger navbar navbar-expand-xxl fixed-top py-3">
    <div class="container">
        <a class="navbar-brand py-0 rounded-end-5" href="index.php" style="border: 2px solid var(--bs-body-bg);"><span class="px-2" style="background-color: var(--bs-body-bg); color: var(--bs-light-text-emphasis); border: 3px solid var(--bs-body-bg);">EXPLORE</span><span class="px-2">WONOSOBO</span></a>

        <button class="navbar-toggler" style="color: var(--bs-body-bg); border-color: var(--bs-body-bg)" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list h4" style="color: var(--bs-body-bg);"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <span class="navbar-text me-auto">
            </span>
            <ul class="navbar-nav">
                <li class="nav-item ms-3">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="kalender.php">Kalender Event</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="destinasi.php">Destinasi</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="gunung.php">Gunung</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="danau.php">Danau</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="airterjun.php">Air Terjun</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="makanankhas.php">Makanan Khas</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="oleholeh.php">Oleh-Oleh</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="album.php">Album</a>
                </li>
                <li class="nav-item ms-3 dropdown">
                    <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i> -->
                        Tema
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
                                <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                                Light
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
                                <i class="bi bi-moon-stars-fill me-2 opacity-50" data-theme-icon="bi-moon-stars-fill"></i>
                                Dark
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto">
                                <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                                Auto
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="ada"></div>