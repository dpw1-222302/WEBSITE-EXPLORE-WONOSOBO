<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/25b07c5e9c.js" crossorigin="anonymous"></script>
    <style>
        /* gunung.php saja */
        .hover-shadow {
            border: 0;
            background-color: var(--bs-tertiary-bg);
        }

        .hover-shadow:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- End navbar -->

    <!-- Header -->
    <div>
        <img src="img/gunung/header.jpeg" class="w-100">
    </div>
    <!-- End Header -->

    <!-- Gunung-gunung di Wonosobo -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1>Gunung-gunung di Wonosobo</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            <?php
            include 'connect.php';
            $query = "SELECT * FROM tabel_gunung ORDER BY gunung_id DESC";
            $datas = $conn->query($query);
            foreach ($datas as $data) :
            ?>
                <div class="col">
                    <div class="card h-100 rounded-4 hover-shadow">
                        <a type="button" class="link-body-emphasis text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['gunung_id'] ?>">
                            <img src="<?= $data['img_gunung'] ?>" class="card-img-top rounded-top-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['nama_gunung'] ?></h5>
                                <p class="card-text">Ketinggian : <?= $data['ketinggian_gunung'] ?> MDPL</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Detail Gunung -->
                <div class="modal fade" id="exampleModal<?= $data['gunung_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content rounded-4">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_gunung'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="<?= $data['img_gunung'] ?>" class="rounded-4 w-100">
                                <h2 class="my-4"><?= $data['nama_gunung'] ?></h2>
                                <p class="mb-3">Ketinggian: <?= $data['ketinggian_gunung'] ?> MDPL</p>
                                <p style="text-align: justify;"><?= $data['deskripsi_gunung'] ?></p>
                                <div class="text-center mt-5">
                                    <?= $data['link_google_maps_gunung'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Detail Gunung -->
            <?php endforeach ?>
        </div>
    </div>
    <!-- End Gunung-gunung di Wonosobo -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        /*!
         * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
         * Copyright 2011-2023 The Bootstrap Authors
         * Licensed under the Creative Commons Attribution 3.0 Unported License.
         */

        (() => {
            'use strict'

            const getStoredTheme = () => localStorage.getItem('theme')
            const setStoredTheme = theme => localStorage.setItem('theme', theme)

            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                    return storedTheme
                }

                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            const setTheme = theme => {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-bs-theme', 'dark')
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme)
                }
            }

            setTheme(getPreferredTheme())

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitcher = document.querySelector('#bd-theme')

                if (!themeSwitcher) {
                    return
                }

                const themeSwitcherText = document.querySelector('#bd-theme-text')
                const activeThemeIcon = document.querySelector('.theme-icon-active')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                    element.setAttribute('aria-pressed', 'false')
                })

                btnToActive.classList.add('active')
                btnToActive.setAttribute('aria-pressed', 'true')
                activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
                activeThemeIcon.classList.add(iconOfActiveBtn)
                activeThemeIcon.dataset.iconActive = iconOfActiveBtn
                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
                themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

                if (focus) {
                    themeSwitcher.focus()
                }
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme()
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })

            window.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            setStoredTheme(theme)
                            setTheme(theme)
                            showActiveTheme(theme, true)
                        })
                    })
            })
        })()
    </script>
    <script>
        $(window).scroll(function() {
            var navbar = $(".navbar");
            var scroll = $(window).scrollTop();

            if (scroll > 0) {
                navbar.addClass("navbar-scrolled");
            } else {
                navbar.removeClass("navbar-scrolled");
            }
        });
    </script>
</body>

</html>