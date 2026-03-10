<style>
    /* ===== NEW HERO SECTION ===== */

    /* Override nav colors for light hero background on homepage */
    .home-page header nav ul li a {
        color: #212121 !important;
    }

    .home-page header nav ul li a:hover,
    .home-page header nav ul li a.active {
        color: #265783 !important;
    }

    .home-page header .top_nav ul.navigation {
        background-color: rgba(255, 255, 255, .75);
        border: 1.5px solid #C6CFD7;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    .home-page header .top_nav ul.navigation li a {
        background-color: transparent;
    }

    .home-page header .top_nav ul.navigation li a:hover {
        background-color: rgba(38, 87, 131, .08);
    }

    .home-page .numberBtn {
        border-color: #265783 !important;
        color: #265783 !important;
    }

    .home-page .numberBtn .phone_icom_wrap {
        background-color: #265783 !important;
    }

    .newHero {
        position: relative;
        overflow: hidden;
        padding: 150px 0 0px;
        background-image: url('./assets/hero-assets/background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        text-align: center;
    }

    .newHero__heading {
        font-size: 72px;
        font-weight: 400;
        line-height: 1.1;
        color: #212121;
        margin-bottom: 5px;
    }

    .newHero__heading .italic-accent {
        font-style: italic;
        color: #265783;
    }

    .newHero__subheading {
        font-size: 52px;
        font-weight: 400;
        color: #212121;
        margin-bottom: 20px;
        line-height: 1.3;
        letter-spacing: -1.5px;
    }

    .newHero__subheading strong {
        font-weight: 700;
        font-style: italic;
    }

    .newHero__desc {
        font-size: 16px;
        color: #555;
        max-width: 580px;
        margin: 0 auto 25px;
        line-height: 1.6;
    }

    /* Trust badges row */
    .newHero__trust {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .newHero__trust img {
        height: 50px;
        width: auto;
        object-fit: contain;
    }

    /* Search bar */
    .newHero__search {
        max-width: 580px;
        margin: 0 auto 15px;
        position: relative;
    }

    .newHero__search input {
        width: 100%;
        padding: 16px 55px 16px 45px;
        border: 1.5px solid #C6CFD7;
        border-radius: 50px;
        font-size: 15px;
        color: #212121;
        background: #fff;
        outline: none;
        transition: border-color .3s;
        font-family: inherit;
    }

    .newHero__search input:focus {
        border-color: #265783;
    }

    .newHero__search input::placeholder {
        color: #999;
    }

    .newHero__search .search-icon {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
        opacity: .45;
        pointer-events: none;
    }

    .newHero__search .arrow-btn {
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1.5px solid #C6CFD7;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all .3s;
    }

    .newHero__search .arrow-btn:hover {
        background: #265783;
        border-color: #265783;
    }

    .newHero__search .arrow-btn:hover svg {
        stroke: #fff;
    }

    .newHero__search .arrow-btn svg {
        width: 16px;
        height: 16px;
        stroke: #212121;
        transition: stroke .3s;
    }

    /* Quick suggestion tags */
    .newHero__tags {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        max-width: 700px;
        margin: 0 auto 40px;
    }

    .newHero__tags a {
        padding: 7px 16px;
        border: 1px solid #C6CFD7;
        border-radius: 50px;
        font-size: 12px;
        color: #555;
        background: #fff;
        text-decoration: none;
        transition: all .3s;
        white-space: nowrap;
    }

    .newHero__tags a:hover {
        border-color: #265783;
        color: #265783;
        background: #eef4fa;
    }

    /* Book covers marquee */
    .newHero__books {
        position: relative;
        padding: 20px 0;
        overflow: clip;
        overflow-clip-margin: 0px;
        width: 100%;
    }

    .newHero__books-track {
        display: flex;
        gap: 25px;
        align-items: flex-end;
        width: max-content;
        animation: marqueeScroll var(--marquee-duration, 60s) linear infinite;
    }

    .newHero__books-track:hover {
        animation-play-state: paused;
    }

    .newHero__books-track .book-cover {
        width: 200px;
        flex-shrink: 0;
        border-radius: 8px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, .12);
        transition: transform .4s ease;
    }

    .newHero__books-track .book-cover:hover {
        transform: translateY(-10px) scale(1.08);
        z-index: 3;
    }

    @keyframes marqueeScroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Fade edges for book strip */
    .newHero__books::before,
    .newHero__books::after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 120px;
        z-index: 2;
        pointer-events: none;
    }

    .newHero__books::before {
        left: 0;
        background: linear-gradient(90deg, rgba(244, 247, 252, 1) 0%, transparent 100%);
    }

    .newHero__books::after {
        right: 0;
        background: linear-gradient(-90deg, rgba(244, 247, 252, 1) 0%, transparent 100%);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 991px) {
        .newHero__heading {
            font-size: 52px;
        }

        .newHero__subheading {
            font-size: 28px;
        }

        .newHero__books-track .book-cover {
            width: 110px;
        }
    }

    @media (max-width: 767px) {
        .newHero {
            padding: 40px 0 0;
        }

        .newHero__heading {
            font-size: 38px;
        }

        .newHero__subheading {
            font-size: 22px;
        }

        .newHero__trust {
            gap: 15px;
        }

        .newHero__trust img {
            height: 22px;
        }

        .newHero__books-track .book-cover {
            width: 90px;
        }

        .newHero__books-track {
            gap: 10px;
        }

        .newHero__tags a {
            font-size: 11px;
            padding: 5px 12px;
        }
    }

    @media (max-width: 575px) {
        .newHero__heading {
            font-size: 30px;
        }

        .newHero__subheading {
            font-size: 18px;
        }

        .newHero__desc {
            font-size: 14px;
        }

        .newHero__books-track .book-cover {
            width: 75px;
        }
    }
</style>

<section class="newHero">
    <div class="container">
        <!-- Main Headline -->
        <h1 class="heading24px italic fw_400 light" style="color : #265783" data-aos="fade-up" data-aos-delay="100">
            Welcome to
            Stress-Free Publishing Success!</h1>
        <h2 class="newHero__subheading" data-aos="fade-up" data-aos-delay="200">
            Your <strong>Story Deserves</strong> to Be Read.
        </h2>

        <!-- Description -->
        <p class="newHero__desc" data-aos="fade-up" data-aos-delay="300">
            We are a full-cycle book writing and publishing agency. From ghostwriting to distribution, we help you leave
            a legacy.
        </p>

        <!-- Trust Badges -->
        <div class="newHero__trust" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/hero-assets/review/google.png" alt="Google Reviews" />
            <img src="assets/hero-assets/review/trustpilot.png" alt="Trustpilot" />
            <img src="assets/hero-assets/review/wordofmouth.png" alt="Word of Mouth" />
            <img src="assets/hero-assets/review/reviews.png" alt="Reviews.io" />
            <img src="assets/hero-assets/review/product.png" alt="Product Review" />
        </div>

        <!-- Search Bar -->
        <div class="newHero__search" data-aos="fade-up" data-aos-delay="500">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" placeholder="I want to publish my book on Amazon..." readonly
                onclick="document.querySelector('.pop_btn').click();" />
            <button class="arrow-btn pop_btn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </button>
        </div>

        <!-- Quick Tags -->
        <div class="newHero__tags" data-aos="fade-up" data-aos-delay="600">
            <a href="javascript:;" class="pop_btn">Can you help me write my book?</a>
            <a href="javascript:;" class="pop_btn">How much does book publishing cost?</a>
            <a href="javascript:;" class="pop_btn">I have a manuscript—what's next?</a>
            <a href="javascript:;" class="pop_btn">I'm a first-time author—where do I start?</a>
        </div>
    </div>

    <!-- Book Covers Strip - Infinite Marquee -->
    <?php
    $coversDir = 'assets/hero-assets/book-covers/';
    $covers = glob($coversDir . '*.{webp,png,jpg,jpeg}', GLOB_BRACE);
    shuffle($covers);
    $count = count($covers);
    $duration = max(30, $count * 3); // 3 seconds per image, minimum 30s
    ?>
    <div class="newHero__books" data-aos="fade-up" data-aos-delay="700">
        <div class="newHero__books-track" style="--marquee-duration: <?php echo $duration; ?>s;">
            <?php
            // Output original set
            foreach ($covers as $cover) {
                $alt = pathinfo($cover, PATHINFO_FILENAME);
                echo '<img src="' . $cover . '" class="book-cover" alt="' . htmlspecialchars($alt) . '" loading="lazy" />';
            }
            // Duplicate set for seamless loop
            foreach ($covers as $cover) {
                $alt = pathinfo($cover, PATHINFO_FILENAME);
                echo '<img src="' . $cover . '" class="book-cover" alt="' . htmlspecialchars($alt) . '" loading="lazy" />';
            }
            ?>
        </div>
    </div>
</section>

<script>
    // Swap logo to black version for hero section pages
    document.addEventListener('DOMContentLoaded', function () {
        var logo = document.querySelector('header .logo');
        if (logo) logo.src = 'assets/images/logo-black.webp';
    });
</script>