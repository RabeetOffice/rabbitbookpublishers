<?php
// index.php
include 'includes/header.php';
?>

<!-- =========================================
     HERO SECTION
     ========================================= -->
<section class="hero-section d-flex flex-column align-items-center justify-content-center text-center">
    <!-- Blue Glow Background -->
    <div class="hero-glow"></div>

    <div class="container relative z-1" data-aos="fade-up" data-aos-duration="1000">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <!-- Headline: Serif -->
                <h1 class="hero-title mb-2">
                    Dream. <span class="italic-blue">Write</span>. Publish.
                </h1>

                <!-- Subheadline: Sans-Serif -->
                <h2 class="hero-subtitle mb-4">
                    Your <span class="blue-bold">Story Deserves</span> to Be Read.
                </h2>

                <p class="hero-text">
                    We are a full-cycle book writing and publishing agency. From ghostwriting to distribution, we help
                    you leave a legacy.
                </p>

                <!-- Trust Badges (Colorful) -->
                <div class="d-flex justify-content-center align-items-center gap-4 mb-5 flex-wrap trust-badges">
                    <img src="assets/images/review/google.png" alt="Google 5 Stars">
                    <img src="assets/images/review/trustpilot.png" alt="Trustpilot">
                    <img src="assets/images/review/wordofmouth.png" alt="Word of Mouth">
                    <img src="assets/images/review/reviews.png" alt="Reviews.io">
                    <img src="assets/images/review/product.png" alt="Product Review">
                </div>

                <!-- Search Bar -->
                <div class="search-container mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <form action="#" class="w-100 h-100 position-relative">
                        <!-- Left Icon -->
                        <div class="search-icon-left">
                            <i data-lucide="search" width="22" height="22"></i>
                        </div>

                        <input type="text" class="custom-search-input"
                            placeholder="I want to publish my book on Amazon...">

                        <button type="submit" class="search-icon-nav btn p-0 border-0 bg-transparent"
                            aria-label="Search">
                            <i data-lucide="arrow-up-right" width="22" height="22"></i>
                        </button>
                    </form>
                </div>

                <!-- Suggestion Pills -->
                <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-delay="400">
                    <span class="suggestion-pill" data-tippy-content="Let's start your journey!">Can you help me write
                        my book?</span>
                    <span class="suggestion-pill" data-tippy-content="Get a free quote">How much does book publishing
                        cost?</span>
                    <span class="suggestion-pill" data-tippy-content="Publishing steps">I have a manuscript—what's
                        next?</span>
                    <span class="suggestion-pill" data-tippy-content="Beginner's guide">I'm a first-time author—where do
                        I start?</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Cover Strip (Swiper) -->
    <div class="book-strip-wrapper" data-aos="fade-in" data-aos-duration="1500">
        <div class="swiper book-strip-swiper">
            <div class="swiper-wrapper align-items-end">
                <!-- Loop covers -->
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <div class="swiper-slide book-cover-slide">
                        <div class="book-cover-card">
                            <img src="assets/images/bookcovers/<?php echo $i; ?>.png" alt="Book <?php echo $i; ?>">
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- =========================================
     VALUE / PARTNER SECTION
     ========================================= -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center gy-5">
            <!-- Left: Image Collage -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative ps-lg-5">
                    <!-- Main Image -->
                    <img src="assets/images/author-1.png" alt="Author Success"
                        class="img-fluid collage-img w-75 position-relative z-1">
                    <!-- Overlapping Image -->
                    <img src="assets/images/author-2.png" alt="Editing Process"
                        class="img-fluid collage-img w-50 position-absolute bottom-0 end-0 z-2 border border-white border-4 translate-middle-x">
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <span class="badge bg-light text-primary mb-3 px-3 py-2 fw-medium rounded-pill">A Publishing Partner —
                    Not Just a Service</span>
                <h2 class="mb-4 display-6 fw-bold">We help authors build <br><span
                        class="fst-italic text-primary">Confidence, Credibility,</span> and Success.</h2>

                <ul class="list-unstyled mb-4">
                    <li class="mb-2 d-flex align-items-center gap-2"><i data-lucide="check"
                            class="text-primary w-5 h-5"></i> Your name stays on the book</li>
                    <li class="mb-2 d-flex align-items-center gap-2"><i data-lucide="check"
                            class="text-primary w-5 h-5"></i> You own 100% rights & royalties</li>
                    <li class="mb-2 d-flex align-items-center gap-2"><i data-lucide="check"
                            class="text-primary w-5 h-5"></i> Dedicated publishing consultant</li>
                    <li class="mb-2 d-flex align-items-center gap-2"><i data-lucide="check"
                            class="text-primary w-5 h-5"></i> Transparent process — no hidden fees</li>
                    <li class="mb-2 d-flex align-items-center gap-2"><i data-lucide="check"
                            class="text-primary w-5 h-5"></i> Real humans, real expertise</li>
                </ul>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Start My Book Today</a>
                    <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2">Talk to a Publishing Expert</a>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex">
                        <div class="rounded-circle border border-white bg-secondary d-flex align-items-center justify-content-center text-white"
                            style="width:40px;height:40px;margin-right:-10px;">A</div>
                        <div class="rounded-circle border border-white bg-dark d-flex align-items-center justify-content-center text-white"
                            style="width:40px;height:40px;margin-right:-10px;">B</div>
                        <div class="rounded-circle border border-white bg-primary d-flex align-items-center justify-content-center text-white"
                            style="width:40px;height:40px;">C</div>
                    </div>
                    <div>
                        <p class="mb-0 small line-height-sm"><strong>1000+ Books Published</strong><br>by Trusted
                            Authors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================
     ABOUT SECTION
     ========================================= -->
<section class="section-padding bg-light" id="about">
    <div class="container">
        <div class="row align-items-center gy-5 flex-lg-row-reverse">
            <!-- Right: Content -->
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4 display-6 fw-bold">About <span class="fst-italic">Publishing Platform</span></h2>
                <p class="text-muted mb-4 lead fs-6">
                    Split-screen composition showing transformation. Left side: a confused author in a dark workspace...
                    Right side: the same author confidently working in a bright, clean, modern workspace. We bridge the
                    gap between your draft and a bestselling masterpiece.
                </p>

                <div class="row g-4 border-top pt-4">
                    <div class="col-4">
                        <h3 class="fw-bold text-primary mb-0 counter">750+</h3>
                        <small class="text-muted">Satisfied Customers</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold text-primary mb-0 counter">10+</h3>
                        <small class="text-muted">Years of Experience</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold text-primary mb-0 counter">350+</h3>
                        <small class="text-muted">Award-Winning Books</small>
                    </div>
                </div>

                <a href="#" class="btn btn-dark rounded-pill px-4 py-2 mt-4">Learn More About Us</a>
            </div>

            <!-- Left: Image -->
            <div class="col-lg-6" data-aos="fade-right">
                <img src="assets/images/about-laptop.jpg" alt="Writing on Laptop"
                    class="img-fluid rounded-4 shadow-lg w-100">
            </div>
        </div>
    </div>
</section>

<!-- =========================================
     SERVICES DARK GRID
     ========================================= -->
<section class="section-padding bg-dark-navy text-white" id="services">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <h2 class="text-white display-6 fw-bold mb-3" data-aos="fade-up">Exceptional Services For Aspiring Authors
            </h2>
            <p class="text-secondary lead fs-6" data-aos="fade-up" data-aos-delay="100">Comprehensive solutions tailored
                to every author's needs.</p>
        </div>

        <div class="row g-0 border-top border-start border-secondary border-opacity-25">
            <?php
            $services = [
                ['title' => 'Book Publishing', 'desc' => 'We handle every stage of publishing with care, turning your manuscript into professional book.'],
                ['title' => 'Book Cover Design', 'desc' => 'Our designers craft visually appealing covers that capture your story’s essence.'],
                ['title' => 'Ghost Writing', 'desc' => 'Share your ideas, and our expert ghostwriters will bring them to life with words.'],
                ['title' => 'Book Editing', 'desc' => 'Our skilled editors refine your manuscript, ensuring clarity and consistency.'],
                ['title' => 'Book Formatting', 'desc' => 'We prepare your book for print and digital with flawless layouts.'],
                ['title' => 'Book Video Trailer', 'desc' => 'We create cinematic video trailers that visually capture your story.'],
                ['title' => 'Book Printing', 'desc' => 'From paperback to hardcover, we deliver high-quality printed books.'],
                ['title' => 'Book Illustration', 'desc' => 'Our talented illustrators design captivating illustrations that enhance visuals.'],
            ];

            $delay = 0;
            foreach ($services as $service):
                $delay += 50;
                ?>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                    <div
                        class="service-card border-end border-bottom border-secondary border-opacity-25 p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="h5 mb-3 fw-bold"><?php echo $service['title']; ?></h4>
                            <p class="text-secondary small mb-4"><?php echo $service['desc']; ?></p>
                        </div>
                        <a href="#"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-0 transition-transform hover-rotate"
                            style="width: 32px; height: 32px; font-size: 14px;">
                            <i data-lucide="arrow-up-right" width="16" height="16"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================
     TRUSTED PARTNERS
     ========================================= -->
<section class="section-padding bg-white border-bottom">
    <div class="container text-center">
        <h3 class="h4 mb-5" data-aos="fade-up">Trusted <span class="fst-italic">Publishing</span> Partners</h3>
        <div class="d-flex justify-content-center align-items-center flex-wrap gap-5 opacity-50" data-aos="fade-up"
            data-aos-delay="200">
            <img src="assets/images/logo-bn.png" alt="Barnes & Noble" height="30" class="grayscale-img">
            <img src="assets/images/logo-amazon.png" alt="Amazon Kindle" height="30" class="grayscale-img">
            <img src="assets/images/logo-apple.png" alt="Apple Books" height="30" class="grayscale-img">
            <img src="assets/images/logo-bam.png" alt="BAM" height="30" class="grayscale-img">
            <img src="assets/images/logo-googleplay.png" alt="Google Play" height="30" class="grayscale-img">
            <img src="assets/images/logo-kobo.png" alt="Rakuten Kobo" height="30" class="grayscale-img">
        </div>
    </div>
</section>

<!-- =========================================
     GHOSTWRITING TEAM (QA Section)
     ========================================= -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold" data-aos="fade-up">Our <strong>Ghostwriting Team</strong><br>Provide Top Notch
                Services</h2>
        </div>
        <div class="row g-4">
            <?php
            $qa_items = [
                ['title' => 'Quality Assurance', 'desc' => 'They say you must keep a quality check, which our writers live by exactly.', 'icon' => 'shield-check'],
                ['title' => 'Expert Writers', 'desc' => 'Hand-picked professionals with years of experience in various genres.', 'icon' => 'pen-tool'],
                ['title' => 'Timely Delivery', 'desc' => 'We respect deadlines and ensure your project stays on track.', 'icon' => 'clock'],
                ['title' => '24/7 Support', 'desc' => 'Our support team is always available to answer your queries.', 'icon' => 'head-phones']
            ];
            $delay = 0;
            foreach ($qa_items as $item):
                $delay += 100;
                ?>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 hover-lift transition-all">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <i data-lucide="<?php echo $item['icon']; ?>" width="28" height="28"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3"><?php echo $item['title']; ?></h4>
                        <p class="text-muted small mb-0"><?php echo $item['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>