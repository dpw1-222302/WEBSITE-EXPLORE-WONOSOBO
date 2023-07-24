<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/25b07c5e9c.js" crossorigin="anonymous"></script>
    <style>
        /* kalender.php saja */
        .hover-shadow {
            border: 0;
            background-color: var(--bs-tertiary-bg);
        }

        .hover-shadow:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }

        .col .card.active {
            border: 2px solid var(--bs-emphasis-color);
            border-radius: 1rem;
        }

        .col .card {
            border: 0px solid;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- End navbar -->

    <!-- Header -->
    <div>
        <img src="img/kalender/header.jpeg" class="w-100">
    </div>
    <!-- End Header -->

    <!-- Kalender event-event di Wonosobo -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1>Kalender Event 2023 di Wonosobo</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Januari -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('01'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Januari</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Februari -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('02'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Februari</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Maret -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('03'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Maret</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- April -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('04'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">April</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mei -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('05'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Mei</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Juni -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('06'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Juni</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Juli -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('07'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Juli</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Agustus -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('08'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Agustus</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- September -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('09'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">September</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Oktober -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('10'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Oktober</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- November -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('11'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">November</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desember -->
            <div class="col">
                <div class="card h-100 <?php echo isTodayActive('12'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Desember</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-text mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                    <div>
                                        <h6 class="card-subtitle mb-1">Nama Event</h6>
                                        <span class="card-text text-body-secondary">Tanggal : 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Kalender event-event di Wonosobo -->

    <!-- Detail event -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nama Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/kalender/contoh.jpg" class="rounded-4 w-100">
                    <h2 class="my-4">Nama Event</h2>
                    <p class="mb-3">Tanggal: 2 Juli 2023</p>
                    <p class="mb-3">Tempat: ITTP</p>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam optio, eos repellendus dicta quae deleniti saepe non alias ea? Dignissimos repellendus commodi distinctio quidem nobis quos autem sapiente, beatae illo. Reprehenderit quas iste excepturi voluptatum, laboriosam, error quis tempora magni praesentium qui culpa. Tenetur minima, odit alias eveniet magni ipsam repudiandae inventore cumque voluptatibus fugiat maiores magnam labore saepe at totam nisi dolore doloribus illo vero, neque odio minus temporibus illum perferendis? Dolorem porro rerum repellendus assumenda repudiandae minima quibusdam ad esse maxime sed excepturi impedit, labore earum iure pariatur expedita veritatis explicabo dolores eligendi placeat reiciendis! Ad doloremque aspernatur fuga, nostrum hic praesentium consectetur quaerat rem cumque ipsam ipsa vitae non at, velit minus itaque quos provident dolorum quasi facilis nisi. Ratione eius quod dolores atque soluta voluptatibus aliquam quidem quibusdam totam amet, illum consectetur ipsa, optio consequatur porro assumenda incidunt libero, aliquid tempore obcaecati ullam modi excepturi tenetur. Molestias quia ad dolorum, provident, aliquam dolores quam non, quod error delectus necessitatibus laudantium! Minima ipsum aut nulla repudiandae quia id sunt ducimus corporis pariatur labore, blanditiis autem aperiam numquam voluptatem possimus magnam fugiat. Quod libero, officiis laborum omnis molestias voluptas error praesentium a quas reprehenderit corrupti? Eligendi ut excepturi provident adipisci deleniti officia architecto minima repellendus ad quisquam, ratione beatae tenetur doloremque omnis aut alias voluptas! Officia reiciendis unde voluptates accusamus quibusdam temporibus consequuntur, labore ad cumque eligendi possimus eaque tenetur pariatur veritatis expedita id magnam repellat quia vel eos nostrum, ipsum velit recusandae. Inventore quidem iste laboriosam eos numquam, minima voluptatibus dignissimos perferendis doloribus eius cum hic obcaecati ipsa adipisci velit nihil unde est quos sapiente error libero mollitia molestias officiis cumque? Nesciunt, voluptatem nobis consequuntur nihil expedita quos perspiciatis ullam sit, neque, et iusto aliquid deserunt voluptatum perferendis vel rem. Amet nam eos culpa magni enim maxime ea eius iure quisquam voluptatem, accusantium odit unde expedita quo pariatur laudantium quidem exercitationem minus omnis dolor sed nostrum impedit. Voluptates vel totam deserunt laboriosam possimus commodi sint voluptatibus accusamus recusandae suscipit? Tempora explicabo totam blanditiis laborum provident veritatis et quis rerum illo eligendi, voluptates quam iusto, mollitia dolorum neque consequuntur? Nulla nostrum omnis magnam repudiandae rerum, ullam corrupti et? Ipsam ex ducimus delectus consequatur, sequi reiciendis exercitationem, doloribus aliquam eveniet saepe tempore sapiente placeat qui nobis impedit labore maxime in? Sapiente optio quidem accusantium aut assumenda. Perspiciatis saepe iste, perferendis illum excepturi explicabo laudantium expedita illo possimus voluptate totam autem commodi a tenetur molestiae facilis pariatur laborum ipsam, laboriosam tempore porro impedit nemo. Dignissimos doloribus architecto voluptatibus distinctio. Ipsum voluptate incidunt mollitia quae exercitationem dolores quibusdam velit esse vero libero provident, ullam impedit? Optio hic recusandae in dignissimos, nesciunt excepturi provident rem itaque doloribus quibusdam libero harum et aliquam cumque impedit earum corrupti voluptas velit ipsum, perferendis eveniet! Eos mollitia est debitis ut laboriosam voluptas, maxime corrupti non quia molestiae molestias quas qui quisquam illum nisi doloremque aut sunt officiis distinctio enim quam et veniam nostrum? Natus eius aperiam nisi eaque! Mollitia architecto fuga earum non minima sapiente expedita?</p>
                    <div class="text-center mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4950.489899869106!2d109.24651767594274!3d-7.435257773256034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e1!3m2!1sid!2sid!4v1689929164532!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Detail Event -->

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

<?php
function isTodayActive($targetDate)
{
    // Mengatur zona waktu sesuai kebutuhan
    date_default_timezone_set('Asia/Jakarta');

    // Mendapatkan tanggal hari ini dalam format Y-m-d (misalnya: 2023-07-23)
    $today = date('m');

    // Periksa apakah tanggal hari ini sama dengan tanggal target
    if ($today === $targetDate) {
        return 'active';
    } else {
        return '';
    }
}
?>