<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Turn your manuscript into a masterpiece with expert writing, editing, printing, and marketing. Start your publishing journey with personalized support today!'; ?>">
    <link rel="icon" type="image/png" href="assets/images/favicon.webp">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style7839.css?v=1.2">
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reponsive.css">

    <script>
        setTimeout(function () {
            const cssFiles = [
                'assets/css/bootstrap.min.css',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
                'assets/css/jquery.fancybox.min.css',
                'assets/css/slick.css',
                'assets/css/slick-theme.css',
                'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css',
                'assets/css/swiper-bundle.min.css',
                'assets/css/style.css',
                'assets/css/reponsive.css'
            ];

            cssFiles.forEach(function (href) {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = href;
                link.type = 'text/css';
                link.media = 'all';
                document.head.appendChild(link);
            });
        }, 1200); 
    </script>



    <title><?php echo isset($pageTitle) ? $pageTitle : WEBSITE_NAME; ?></title>

</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">

    <header>

        <nav>

            <div class="row align-items-center">

                <div class="col-lg-3 col-4" data-aos="fade-right" data-aos-delay="100">

                    <a href="index.php">

                        <img src="assets/images/logo.webp" class="logo img-fluid" width="" height="" alt="Logo">

                    </a>

                </div>

                <div class="col-lg-9 col-8" data-aos="fade-left" data-aos-delay="100">

                    <div class="hamBurger d-block d-lg-none">

                        <div></div>

                        <div></div>

                        <div></div>

                    </div>

                    <div class="top_nav d-none d-lg-block">

                        <ul class="navigation d-none">

                            <li data-aos="fade-down" data-aos-delay="500">

                                <a href="javascript:;" class="d-flex gap-2 align-items-center service_btn">Services <i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>

                                <ul class="megaMenu">

                                    <li>

                                        <a href="javascript:;" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s1.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Publishing Services</span>

                                        </a>

                                        <div class="subMenuService">

                                            <h5>Publishing Services</h5>

                                            <a href="children-book-publishing.php">Children Book Publishing</a>

                                            <a href="self-publishing.php">Self Publishing</a>

                                            <a href="amazon-publishing.php">Amazon Publishing</a>

                                            <a href="amazon-audiobook-publishing.php">Amazon Audiobook Publishing</a>

                                            <a href="global-publishing.php">Global Publishing</a>

                                            <a href="lulu-publishing.php">Lulu Publishing</a>

                                            <a href="kindle-publishing.php">Kindle Publishing</a>

                                            <a href="ebook-publishing.php">Ebook Publishing</a>

                                            <a href="javascript:;" class="closeMenu"><span>+</span></a>

                                        </div>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s2.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Book Writing</span>

                                        </a>

                                        <div class="subMenuService">

                                            <h5>Book Writing</h5>

                                            <a href="ebook-writing.php">Ebook Writing</a>

                                            <a href="ghost-writing.php">Ghost Writing</a>
                                            <a href="book-proofreading.php">Book Proofreading</a>

                                            <a href="javascript:;" class="closeMenu"><span>+</span></a>

                                        </div>

                                    </li>

                                    <li>

                                        <a href="book-editing.php" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s3.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Book Editing</span>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s4.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Book Marketing</span>

                                        </a>

                                        <div class="subMenuService">

                                            <h5>Book Marketing</h5>

                                            <a href="amazon-book-marketing.php">Amazon Book Marketing</a>

                                            <a href="amazon-advertising.php">Amazon Advertising</a>

                                            <a href="amazon-storefront.php">Amazon Storefront</a>

                                            <a href="javascript:;" class="closeMenu"><span>+</span></a>

                                        </div>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s5.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Book Cover Design</span>

                                        </a>

                                        <div class="subMenuService">

                                            <h5>Book Cover Design</h5>

                                            <a href="book-formatting.php">Book Formatting</a>

                                            <a href="book-cover-design.php">Book Cover Design</a>

                                            <a href="book-illustration.php">Book Illustration</a>

                                            <a href="javascript:;" class="closeMenu"><span>+</span></a>

                                        </div>

                                    </li>

                                    <li>

                                        <a href="book-video-trailer.php"
                                            class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s6.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Video Trailer</span>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="author-websites-development.php"
                                            class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s7.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Author Website</span>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="d-flex gap-2 align-items-center subService">

                                            <img src="assets/images/s8.webp" class="service_img" width="" height=""
                                                alt="" />

                                            <span>Audio Book</span>

                                        </a>

                                        <div class="subMenuService">

                                            <h5>Audio Book</h5>

                                            <a href="audible-publishing.php">Audible Publishing</a>

                                            <a href="audio-book-narration.php">Audio Book Narration</a>

                                            <a href="audio-book-publishing.php">Audio Book Publishing</a>

                                            <a href="javascript:;" class="closeMenu"><span>+</span></a>

                                        </div>

                                    </li>

                                </ul>

                            </li>
                            <li data-aos="fade-down" data-aos-delay="600"><a href="pricing-packages.php">Packages</a>
                            </li>

                            <li data-aos="fade-down" data-aos-delay="600"><a href="testimonials.php">Testimonials</a>
                            </li>

                            <li data-aos="fade-down" data-aos-delay="700"><a href="about-us.php">About</a></li>

                            <li data-aos="fade-down" data-aos-delay="800"><a href="portfolio.php">Portfolio</a></li>

                            <li data-aos="fade-down" data-aos-delay="900"><a href="contact-us.php">Contact us</a></li>

                            <li data-aos="fade-down" data-aos-delay="1000">

                                <a href="<?php echo PHONE_HREF; ?>" class="numberBtn">

                                    <span class="phone_icom_wrap"><i class="fa fa-phone" aria-hidden="true"></i></span>

                                    <span class="animated_span">

                                        <span class="num_wrap">

                                            Call Now<br>

                                            <?php echo PHONE; ?>
                                        </span>

                                    </span>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </nav>

    </header>

    <div class="responsive_menu">
        <img src="assets/images/logo.webp" class="logo" width="210px" height="" alt="logo" />
        <div class="clm_wrap"></div>

    </div>
