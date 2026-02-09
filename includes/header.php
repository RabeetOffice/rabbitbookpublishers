<?php
// /includes/header.php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo WEBSITE_NAME; ?> - Professional Publishing Agency</title>
    <link rel="icon" type="image/png" href="<?php echo WEBSITE_FAV; ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <!-- Headroom will manage the classes 'headroom', 'headroom--pinned', 'headroom--unpinned' -->
    <header class="site-header fixed-top py-3">
        <div class="container-fluid container-xl">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-between align-items-center">

                    <!-- 1. Logo (Left) -->
                    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                        <img src="<?php echo WEBSITE_LOGO; ?>" alt="<?php echo WEBSITE_NAME; ?>" class="logo-img"
                            height="40">
                        <div class="d-flex flex-column lh-1">
                            <span class="brand-name fw-bold text-primary-dark"
                                style="font-family: var(--font-heading); font-size: 1.25rem;">Publishing Platform</span>
                            <span class="tagline text-muted text-uppercase"
                                style="font-size: 0.65rem; letter-spacing: 1px;">Publishing Agency</span>
                        </div>
                    </a>

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- 2. Centered Nav Pills (Center) -->
                    <div class="collapse navbar-collapse justify-content-center order-2 order-lg-1" id="navbarContent">
                        <ul
                            class="navbar-nav nav-pills custom-nav-pills bg-white shadow-sm rounded-pill px-3 py-1 gap-1">
                            <li class="nav-item">
                                <a class="nav-link active rounded-pill" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="#about">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded-pill" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Writing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ghostwriting</a></li>
                                    <li><a class="dropdown-item" href="#">Song Writing</a></li>
                                    <li><a class="dropdown-item" href="#">Script Writing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded-pill" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Editing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Book Editing</a></li>
                                    <li><a class="dropdown-item" href="#">Proofreading</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded-pill" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Book Publishing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Publishing</a></li>
                                    <li><a class="dropdown-item" href="#">Marketing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded-pill" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Case Studies
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Fiction</a></li>
                                    <li><a class="dropdown-item" href="#">Non-Fiction</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded-pill" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                    <li><a class="dropdown-item" href="#">Blog</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- 3. Actions (Right) -->
                    <div class="d-none d-lg-flex align-items-center gap-3 order-3">
                        <a href="#" class="text-decoration-none text-dark fw-semibold">Login</a>
                        <a href="#contact" class="btn btn-primary rounded-pill px-4 fw-medium">Let’s Get Started</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>