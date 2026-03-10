<?php
$pageTitle = 'Rabbit Book Publishers | Pricing & Packages | Rabbit Book Publishers – Affordable Publishing Services';
$bodyClass = 'pricing-packages';
$pageDescription = 'Explore Rabbit Book Publishers’ transparent pricing and flexible packages for writing, editing, publishing, and marketing services. Find the perfect plan to bring your book to life.';
include 'includes/config.php';
include 'includes/header.php';
?>
<style>
    .port_tabs_wrap {
        background-image: none;
        background-color: #E8EFF5 !important;
    }

    .port_tabs_wrap ul#pills-tab li button {
        font-family: 'Inter' !important;
        font-weight: 200;
        border-radius: 6px;
        transform: translate(0px, 0px);
        background-color: #265783;
        border: 2px solid #7DA1C5;
        margin-top: 10px;
        border-radius: 50px;
        width: 222px !important;
    }

    .port_tabs_wrap ul#pills-tab li button.active {
        box-shadow: none;
        background-color: #7DA1C5 !important;
        color: white !important;
        border: 2px solid #265783;
    }

    .port_tabs_wrap ul#pills-tab {
        background-color: transparent !important;
        padding: 0 300px;
    }

    section.packages {
        padding: 100px 0 100px !important;

    }

    @media screen and (max-width: 575px) {
        .port_tabs_wrap ul#pills-tab {
            padding: 0 !important;
        }

        .port_tabs_wrap ul#pills-tab li button {
            font-family: 'Inter' !important;
            font-weight: 200;
            border-radius: 6px;
            transform: translate(0px, 0px);
            background-color: #265783;
            border: 2px solid #7DA1C5;
            margin-top: 10px;
            width: 169px;
            height: 65px;
            padding: 0 2px;
            border-radius: 50px !important;


        }

        .port_tabs_wrap ul#pills-tab li button {
            width: 165px !important;
            border-raduis: 50px;
        }

    }


    .port_tabs_wrap ul#pills-tab li button {
        width: 300px;
    }

    @media screen and (max-width: 1800px) {
        .port_tabs_wrap ul#pills-tab {
            padding: 0 156px;
        }
    }

    @media screen and (max-width: 1570px) {
        .port_tabs_wrap ul#pills-tab {
            padding: 0 40px;
        }
    }
</style>
<section class="homeBanner portfolioBanner">
    <div class="abl_wrap">
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl1.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl2.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl3.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl4.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl5.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl6.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl7.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl8.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl9.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl3.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl1.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl9.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl8.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl7.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl6.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl5.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl4.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl3.webp');"></span>
        <span class="abl_img moveTop" style="background-image: url('assets/images/abl2.webp');"></span>
        <span class="abl_img moveBottom" style="background-image: url('assets/images/abl3.webp');"></span>
    </div>
    <div class="custom_container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="heading24px italic primeColor fw_400 light beforeEelement" data-aos="fade-up"
                    data-aos-delay="100">Premium Packages</h1>
                <h2 class="heading59px fw_400 light" data-aos="fade-up" data-aos-delay="200">Affordable Publishing &
                    Writing Packages <i> <span class="primeColor"> for Every Author</span> </i></h2>
                <p class="light" data-aos="fade-up" data-aos-delay="300">Select from our customized price plans, which
                    are intended to assist writers at every level, from novices to seasoned pros. Whether you need
                    assistance with writing, editing, publishing, or marketing, Rabbit Book Publishers can help you make
                    your book a reality with clear pricing and professional services. Start your publishing journey
                    right now by selecting the plan that best suits your objectives and financial constraints. </p>
                <div class="btn_set mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="javascript:;" class="secondColor_btn pop_btn">Get Started</a>
                    <a href="javascript:toggleChat();" class="primeColor_btn chat">
                        Live Chat
                    </a>
                    <a href="tel:14084129231" class="secondColor_btn ">Call Now</a>
                </div>
                <form class="banner_form aos-init aos-animate" method="post"
                    action="https://rabbitbookpublishers.com/mail.php" class="text-center">
                    <div class="form-inputs-wrapper">
                        <input type="text" name="name" placeholder="Your name *" class="input" required="">
                        <input type="email" name="email" placeholder="Your email *" class="input" required="">
                        <input type="phone" name="number" placeholder="Your phone *" class="input" required="">
                        <input type="text" name="msg" placeholder="Requirements" class="input">
                        <!-- <span class="margin-checkbox-via dnone cl_wt">
        <input type="checkbox" name="bn_emailPromotional" required="" checked="" aria-required="true"> 
        Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL
        (<a href="privacy-policy.php" class="text-color-form">PRIVACY POLICY</a> &
        <a href="terms-and-condition.php" class="text-color-form">Terms of Service</a>)
        – Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP anytime.
       </span> -->
                        <button type="submit" class="submit_btn text-center">
                            <svg class="width" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </button>
                    </div>
                    <!-- <span class="margin-checkbox-via dnone cl_wt" >
        <input type="checkbox" name="bn_emailPromotional" required="" checked="" aria-required="true"> 
        Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL
        (<a href="privacy-policy.php" class="text-color-form">PRIVACY POLICY</a> &
        <a href="terms-and-condition.php" class="text-color-form">Terms of Service</a>)
        – Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP anytime.
    </span> -->

                    <input type="hidden" name="fullpageurl" value="pricing-packages.php">
                    <input type="hidden" name="ip" value="119.73.104.184">
                </form>
            </div>
            <div class="banner_animation_wrap position-absolute d-none d-lg-block" data-aos="fade-up"
                data-aos-delay="700">
                <img src="assets/images/about-bae6.webp" class="portfolio-bae start_img img-fluid" width="" height=""
                    alt="Rabbit Book Publishers" />
                <img src="assets/images/portfolio-bae1.webp" class="portfolio-bae img-fluid" width="" height=""
                    alt="Rabbit Book Publishers" />
                <img src="assets/images/portfolio-bae2.webp" class="portfolio-bae img-fluid" width="" height=""
                    alt="Rabbit Book Publishers" />
                <img src="assets/images/portfolio-bae3.webp" class="portfolio-bae img-fluid" width="" height=""
                    alt="Rabbit Book Publishers" />
                <img src="assets/images/portfolio-bae4.webp" class="portfolio-bae img-fluid" width="" height=""
                    alt="Rabbit Book Publishers" />
            </div>
        </div>
    </div>
    <img src="assets/images/banner-bg-ele1.webp" class="position-absolute banner_bg_ele1" width="" height=""
        alt="Rabbit Book Publishers" />
    <div class="port_tabs_wrap clients_section position-relative overflow-hidden text-center">
        <div class="container-fluid">
            <span class="titleTag mb-4">
                <img src="assets/images/fire.webp" class="fire_img" width="" height="" alt="Rabbit Book Publishers">
                <span class="txt">Our Packages</span>
            </span>
            <h2 class="heading50px fw_400 position-relative">
                <span>Simple, transparent packages guiding you from authoring to promotion! </span><br>
                <i class=" righ_top_img primeColor">Making publishing easy and stress-free.</i><br>
                <span></span>
            </h2>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="ebook-writing-tab" data-bs-toggle="pill"
                        data-bs-target="#ebook-writing" type="button" role="tab" aria-controls="ebook-writing"
                        aria-selected="true">Ebook writing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Ghost-writing-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Ghost-writing" type="button" role="tab"
                        aria-controls="pills-Ghost-writing" aria-selected="false">Ghost writing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-amazon-book-marketing-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-amazon-book-marketing" type="button" role="tab"
                        aria-controls="pills-amazon-book-marketing" aria-selected="false">Amazon book marketing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-amazon-advertising-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-amazon-advertising" type="button" role="tab"
                        aria-controls="pills-amazon-advertising" aria-selected="true">Amazon advertising</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-book-formatting-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-book-formatting" type="button" role="tab"
                        aria-controls="pills-book-formatting" aria-selected="false">Book formatting</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-book-cover-design-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-book-cover-design" type="button" role="tab"
                        aria-controls="pills-book-cover-design" aria-selected="false">Book cover design</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-book-illustration-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-book-illustration" type="button" role="tab"
                        aria-controls="pills-book-illustration" aria-selected="false">book illustration</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-audible-publishing-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-audible-publishing" type="button" role="tab"
                        aria-controls="pills-audible-publishing" aria-selected="false">Audible publishing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-audio-book-narration-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-audio-book-narration" type="button" role="tab"
                        aria-controls="pills-audio-book-narration" aria-selected="false">Audio book narration</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-audio-book-publishing-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-audio-book-publishing" type="button" role="tab"
                        aria-controls="pills-audio-book-publishing" aria-selected="false">audio book publishing</button>
                </li>


            </ul>
            <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade show active" id="ebook-writing" role="tabpanel"
                    aria-labelledby="ebook-writing-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Essential Launch</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,080</h3>
                                                <del>$1,800</del>
                                            </div>
                                            <p class="mb-4 fw_300">Perfect for aspiring authors starting their journey.
                                            </p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>5,000-7,000 words</li>
                                                    <li>Standard outline and formatting</li>
                                                    <li>1 round of revisions</li>
                                                    <li>Proofreading included</li>
                                                    <li>Delivered in PDF & DOCX</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,080"
                                                data-pkg-name="Essential Launch" data-service-name="Ebook Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Professional Author</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,800</h3>
                                                <del>$3,000</del>
                                            </div>
                                            <p class="mb-4 fw_300">Ideal for professionals looking for quality
                                                storytelling.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>10,000-15,000 words</li>
                                                    <li>Custom outline with table of contents</li>
                                                    <li>2 rounds of revisions</li>
                                                    <li>Grammar and plagiarism check</li>
                                                    <li>Kindle-ready formatting</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,800"
                                                data-pkg-name="Professional Author" data-service-name="Ebook Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Best Seller Ready</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$2,700</h3>
                                                <del>$4,500</del>
                                            </div>
                                            <p class="mb-4 fw_300">Comprehensive package for a polished and impactful
                                                eBook.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>20,000+ words</li>
                                                    <li>Dedicated writing team</li>
                                                    <li>Unlimited revisions (within scope)</li>
                                                    <li>Images/graphics inclusion</li>
                                                    <li>Publishing consultation</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="2,700"
                                                data-pkg-name="Best Seller Ready" data-service-name="Ebook Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Ghost-writing" role="tabpanel"
                    aria-labelledby="pills-Ghost-writing-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Basic Draft</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,320</h3>
                                                <del>$2,200</del>
                                            </div>
                                            <p class="mb-4 fw_300">For clients needing a fast and simple manuscript.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>7,000-10,000 words</li>
                                                    <li>Ghostwriter assigned</li>
                                                    <li>1 revision cycle</li>
                                                    <li>Basic formatting</li>
                                                    <li>Delivery in 10-12 days</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,320"
                                                data-pkg-name="Basic Draft" data-service-name="Ghost Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm ">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Author’s Voice</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$2,160</h3>
                                                <del>$3,600</del>
                                            </div>
                                            <p class="mb-4 fw_300">For clients who want their story told professionally.
                                            </p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>15,000-20,000 words</li>
                                                    <li>Senior ghostwriter assigned</li>
                                                    <li>2 revisions </li>
                                                    <li>Cover/title suggestions</li>
                                                    <li>Plagiarism report included</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="21,60"
                                                data-pkg-name="Author’s Voice" data-service-name="Ghost Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Complete Autobiography
                                                </h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$3,120</h3>
                                                <del>$5,200</del>
                                            </div>
                                            <p class="mb-4 fw_300">profile projects needing deep engagement.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>25,000-40,000 words</li>
                                                    <li>Team of expert writers & editor</li>
                                                    <li>Unlimited revisions</li>
                                                    <li>Editorial consultation</li>
                                                    <li>Publishing & promotion plan</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="3,120"
                                                data-pkg-name="Complete Autobiography"
                                                data-service-name="Ghost Writing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-amazon-book-marketing" role="tabpanel"
                    aria-labelledby="pills-amazon-book-marketing-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Basic Boost</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$600</h3>
                                                <del>$1,000</del>
                                            </div>
                                            <p class="mb-4 fw_300">Entry-level visibility for new releases.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Optimization</li>
                                                    <li>Page audit</li>
                                                    <li>Customer reviews</li>
                                                    <li>Targeting</li>
                                                    <li>Sales reporting</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="600"
                                                data-pkg-name="Basic Boost" data-service-name="Amazon Book Marketing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Visibility Builder</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$960</h3>
                                                <del>$1,600</del>
                                            </div>
                                            <p class="mb-4 fw_300">Improves ranking & attracts niche readers.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>A+ content setup</li>
                                                    <li>10+ verified reviews</li>
                                                    <li>Daily performance tracking</li>
                                                    <li>Competitor analysis</li>
                                                    <li>Sponsored brand campaign setup</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="960"
                                                data-pkg-name="Visibility Builder"
                                                data-service-name="Amazon Book Marketing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Best Seller Strategy</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,440</h3>
                                                <del>$2,400</del>
                                            </div>
                                            <p class="mb-4 fw_300">Aggressive campaign for top-tier exposure.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>25+ reviews from target readers</li>
                                                    <li>Dedicated marketing strategist</li>
                                                    <li>Monthly sales report</li>
                                                    <li>Email newsletter support</li>
                                                    <li>Influencer promotion</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,440"
                                                data-pkg-name="Best Seller Strategy"
                                                data-service-name="Amazon Book Marketing">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-amazon-advertising" role="tabpanel"
                    aria-labelledby="pills-amazon-advertising-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Ad Kickstart</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$540</h3>
                                                <del>$900</del>
                                            </div>
                                            <p class="mb-4 fw_300">Get started with Amazon ads.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Sponsored products setup</li>
                                                    <li>1 ad group</li>
                                                    <li>Keyword research</li>
                                                    <li>Weekly report</li>
                                                    <li>$100 ad spend management</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="540"
                                                data-pkg-name="Ad Kickstart" data-service-name="Amazon Advertising">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Ad Pro Boost</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$900</h3>
                                                <del>$1,500</del>
                                            </div>
                                            <p class="mb-4 fw_300">Increase conversions and impressions.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Multiple ad groups</li>
                                                    <li>A/B ad testing</li>
                                                    <li>Daily keyword adjustments</li>
                                                    <li>$250 ad spend management</li>
                                                    <li>Performance consultation</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="900"
                                                data-pkg-name="Ad Pro Boost" data-service-name="Amazon Advertising">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Ad Domination</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,260</h3>
                                                <del>$2,100</del>
                                            </div>
                                            <p class="mb-4 fw_300">Advanced strategy for bestseller campaigns.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>All ad types (product, brand, display)</li>
                                                    <li>Ad copywriting support</li>
                                                    <li>Monthly strategy session</li>
                                                    <li>Conversion tracking</li>
                                                    <li>$500+ ad spend management</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,260"
                                                data-pkg-name="Ad Domination" data-service-name="Amazon Advertising">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-book-formatting" role="tabpanel"
                    aria-labelledby="pills-book-formatting-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">eBook Ready</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$360</h3>
                                                <del>$600</del>
                                            </div>
                                            <p class="mb-4 fw_300">Format your manuscript for Kindle and e-readers.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Print & digital formats</li>
                                                    <li>Title, chapters, page numbers</li>
                                                    <li>1 format included (Kindle or Print)</li>
                                                    <li>Font and spacing adjustment</li>
                                                    <li>Turnaround: 3-4 days</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="360"
                                                data-pkg-name="eBook Ready" data-service-name="Book formatting">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Dual Format</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$540</h3>
                                                <del>$900</del>
                                            </div>
                                            <p class="mb-4 fw_300">Both digital and print-ready versions.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Multiple formats (ePub, Kindle, Print)</li>
                                                    <li>Design for front/back matter</li>
                                                    <li>Custom headers/footers</li>
                                                    <li>Footnote integration</li>
                                                    <li>Free updates for 30 days</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="540"
                                                data-pkg-name="Dual Format" data-service-name="Book formatting">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Publishing House Standard
                                                </h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$780</h3>
                                                <del>$1,300</del>
                                            </div>
                                            <p class="mb-4 fw_300">Professional formatting for global distribution.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>All major platforms (KDP, IngramSpark)</li>
                                                    <li>Visual page elements (quotes, callouts)</li>
                                                    <li>Interactive Table of Contents</li>
                                                    <li>Unlimited format edits</li>
                                                    <li>Priority turnaround</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="780"
                                                data-pkg-name="Publishing House Standard"
                                                data-service-name="Book formatting">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-book-illustration" role="tabpanel"
                    aria-labelledby="pills-book-illustration-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">

                            <div class="custom_container">

                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Basic Illustrations</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$600</h3>

                                                <del>$1,000</del>

                                            </div>

                                            <p class="mb-4 fw_300">For children’s books or scene enhancements.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>3-5 illustrations</li>
                                                    <li>Black & white or simple color</li>
                                                    <li>Delivered in PNG</li>
                                                    <li>1 revision cycle</li>
                                                    <li>Turnaround: 1 week</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="600"
                                                data-pkg-name="Basic Illustrations"
                                                data-service-name="Book illustration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Color Storybook</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,080</h3>

                                                <del>$1,800</del>

                                            </div>

                                            <p class="mb-4 fw_300">For full-color storybooks or chapter visuals.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>10-15 illustrations</li>
                                                    <li>Full color, character-based</li>
                                                    <li>Background scenery included</li>
                                                    <li>Cover illustration included</li>
                                                    <li>Storyboarding preview</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,080"
                                                data-pkg-name="Color Storybook" data-service-name="Book illustration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Illustrated Masterpiece
                                                </h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,500</h3>

                                                <del>$2,500</del>

                                            </div>

                                            <p class="mb-4 fw_300">Advanced illustrations for publishers & comics.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>20+ illustrations</li>
                                                    <li>Custom styles & hand-drawn elements</li>
                                                    <li>High-res print files + web formats</li>
                                                    <li>Unlimited revisions</li>
                                                    <li>Design consultation for layout</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,500"
                                                data-pkg-name="Illustrated Masterpiece"
                                                data-service-name="Book illustration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-audible-publishing" role="tabpanel"
                    aria-labelledby="pills-audible-publishing-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">

                            <div class="custom_container">

                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Basic Upload</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$480</h3>

                                                <del>$800</del>

                                            </div>

                                            <p class="mb-4 fw_300">Perfect if you already have your audio files.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Up to 5,000 words</li>
                                                    <li>Standard narration</li>
                                                    <li>Background editing</li>
                                                    <li>ACX compliant</li>
                                                    <li>Delivery in 5-7 days</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="480"
                                                data-pkg-name="Basic Upload" data-service-name="Audible publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Guided Upload + Branding
                                                </h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$840</h3>

                                                <del>$1,400</del>

                                            </div>

                                            <p class="mb-4 fw_300">Includes marketing materials and setup.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Up to 15,000 words</li>
                                                    <li>Voice talent selection</li>
                                                    <li>Intro/outro music</li>
                                                    <li>2 rounds of audio edits</li>
                                                    <li>Distribution support</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="840"
                                                data-pkg-name="Guided Upload + Branding"
                                                data-service-name="Audible publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Launch & Market</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,200</h3>

                                                <del>$2,000</del>

                                            </div>

                                            <p class="mb-4 fw_300">Full service for an Audible bestseller.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Up to 40,000+ words</li>
                                                    <li>Dedicated narrator with tone matching</li>
                                                    <li>Full mastering & quality control</li>
                                                    <li>Global platform publishing</li>
                                                    <li>Author bio and credits narration</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,200"
                                                data-pkg-name="Launch & Market" data-service-name="Audible publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-audio-book-narration" role="tabpanel"
                    aria-labelledby="pills-audio-book-narration-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">

                            <div class="custom_container">

                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Basic Voice Over</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$660</h3>

                                                <del>$1,100</del>

                                            </div>

                                            <p class="mb-4 fw_300">Simple and clear narration.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Single voice narration</li>
                                                    <li>Natural tone delivery</li>
                                                    <li>English-only</li>
                                                    <li>1 revision included</li>
                                                    <li>3-5 day delivery</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="660"
                                                data-pkg-name="Basic Voice Over"
                                                data-service-name="Audio book narration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Dramatic Narration</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,140</h3>

                                                <del>$1,900</del>

                                            </div>

                                            <p class="mb-4 fw_300">For engaging non-fiction & fiction titles.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Studio-grade audio</li>
                                                    <li>Background cleanup</li>
                                                    <li>Choice of gender/accent</li>
                                                    <li>Up to 15,000 words</li>
                                                    <li>Delivered in multiple formats</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,140"
                                                data-pkg-name="Dramatic Narration"
                                                data-service-name="Audio book narration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Theatrical Production</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,620</h3>

                                                <del>$2,700</del>

                                            </div>

                                            <p class="mb-4 fw_300">Multi-voice and immersive experience.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Character voices and emotion</li>
                                                    <li>Background scores (if needed)</li>
                                                    <li>Multiple languages available</li>
                                                    <li>Full ACX submission package</li>
                                                    <li>Author collaboration session</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,620"
                                                data-pkg-name="Theatrical Production"
                                                data-service-name="Audio book narration">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-audio-book-publishing" role="tabpanel"
                    aria-labelledby="pills-audio-book-publishing-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">

                            <div class="custom_container">

                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Simple Distribution</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$720</h3>

                                                <del>$1,200</del>

                                            </div>

                                            <p class="mb-4 fw_300">For authors ready with audio files.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Account setup (ACX/KDP)</li>
                                                    <li>Upload assistance</li>
                                                    <li>ISBN guidance</li>
                                                    <li>Metadata entry</li>
                                                    <li>Delivery within 3 days</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="720"
                                                data-pkg-name="Simple Distribution"
                                                data-service-name="Audio book publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Published & Promoted</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,200</h3>

                                                <del>$2,000</del>

                                            </div>

                                            <p class="mb-4 fw_300">Publishing with a light promotion touch.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Cover & metadata formatting</li>
                                                    <li>Keywords for discovery</li>
                                                    <li>Upload to Audible, Amazon, iTunes</li>
                                                    <li>Basic analytics</li>
                                                    <li>Distribution strategy</li>


                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,200"
                                                data-pkg-name="Published & Promoted"
                                                data-service-name="Audio book publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="pkg_clm">

                                            <div class="d-flex gap-3 align-items-center mb-4">

                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />

                                                <h3 class="heading24px fw_700 m-0 inter dark">Full Launch Campaign</h3>

                                            </div>

                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">

                                                <h3 class="heading28px m-0 inter fw_700 dark">$1,680</h3>

                                                <del>$2,800</del>

                                            </div>

                                            <p class="mb-4 fw_300">Top-tier launch support and distribution.</p>

                                            <div class="pkg_services dark">

                                                <ul>

                                                    <li>Global distribution to all audio platforms</li>
                                                    <li>Launch marketing strategy</li>
                                                    <li>Advanced metadata</li>
                                                    <li>Press release for launch</li>
                                                    <li>Author dashboard setup</li>

                                                </ul>

                                            </div>

                                            <div class="row justify-content-between my-4">

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>

                                                    <button class="pkg_livechat chat">Live Chat</button>

                                                </div>

                                                <div class="col-sm-6">

                                                    <p class="mb-1 dark fw_300">Speak with us</p>

                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>

                                                </div>

                                            </div>

                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="1,680"
                                                data-pkg-name="Full Launch Campaign"
                                                data-service-name="Audio book publishing">

                                                <span class="animated_span">

                                                    <span class="txt_wrap">

                                                        Get Started<br>

                                                        Get Started

                                                    </span>

                                                </span>

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-book-cover-design" role="tabpanel"
                    aria-labelledby="pills-book-cover-design-tab">
                    <div class="row g-0 justify-content-center">
                        <section class="packages">
                            <div class="custom_container">
                                <h2 class="heading50px fw_400 text-center mb-4 mb-lg-5"><i>We Are <span
                                            class="primeColor">Offering</span> <br>Our Best Affordable Pricing</i> </h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Simple Cover</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$300</h3>
                                                <del>$500</del>
                                            </div>
                                            <p class="mb-4 fw_300">Clean, professional cover design.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>1 concept design</li>
                                                    <li>Stock image use</li>
                                                    <li>2 revisions</li>
                                                    <li>Front cover only</li>
                                                    <li>Delivered in JPG & PDF</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="300"
                                                data-pkg-name="Simple Cover" data-service-name="Book cover design">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Visual Storytelling</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$480</h3>
                                                <del>$800</del>
                                            </div>
                                            <p class="mb-4 fw_300">Custom design that reflects the book's theme.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>2-3 concept options</li>
                                                    <li>Custom typography</li>
                                                    <li>Front + spine + back cover</li>
                                                    <li>3D mockup included</li>
                                                    <li>Print-ready files</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="480"
                                                data-pkg-name="Visual Storytelling"
                                                data-service-name="Book cover design">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="pkg_clm">
                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                <img src="assets/images/pkg-img.webp" class="pkg_img img-fluid" width=""
                                                    height="" alt="Rabbit Book Publishers" />
                                                <h3 class="heading24px fw_700 m-0 inter dark">Premium Branding</h3>
                                            </div>
                                            <div class="price_wrap d-flex align-items-end gap-2 mb-4">
                                                <h3 class="heading28px m-0 inter fw_700 dark">$720</h3>
                                                <del>$1,200</del>
                                            </div>
                                            <p class="mb-4 fw_300">Publisher-level cover for all formats.</p>
                                            <div class="pkg_services dark">
                                                <ul>
                                                    <li>Multiple design rounds</li>
                                                    <li>Custom illustration (if needed)</li>
                                                    <li>Audiobook thumbnail included</li>
                                                    <li>Title and subtitle consultation</li>
                                                    <li>Multiple format exports</li>
                                                </ul>
                                            </div>
                                            <div class="row justify-content-between my-4">
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Want to discuss?</p>
                                                    <button class="pkg_livechat chat">Live Chat</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-1 dark fw_300">Speak with us</p>
                                                    <a href="tel:+1-408-412-9231" class="pkg_number">+1-408-412-9231</a>
                                                </div>
                                            </div>
                                            <button class="primeBtn w-100 pop_btn" data-pkg-price="720"
                                                data-pkg-name="Premium Branding" data-service-name="Book cover design">
                                                <span class="animated_span">
                                                    <span class="txt_wrap">
                                                        Get Started<br>
                                                        Get Started
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">

    <div class="custom_container">

        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="100">

                <h2 class="heading40px fw_400">

                    <span class="secondColor">Our Delighted</span>

                    <i class="primeColor">Group</i>

                    <i>Of Clients</i>

                </h2>

                <div class="test_slider owl-carousel owl-theme">

                    <div class="item">

                        <div class="caption">

                            <p style="color: #9D9D9D;">I worked with rabbitbookpublishers.com to publish my manuscript
                                — and they delivered with precision. The editing and design were on point. I’ll
                                definitely use them again (maybe with more marketing next time!).</p>

                        </div>

                        <div class="d-flex gap-2 align-items-center">

                            <img src="assets/images/brian-coleman.webp" class="user_img" width="" height=""
                                alt="user image">

                            <div class="text_wrap">

                                <h3 class="heading24px fw_500 m-0">Brian Coleman</h3>

                                <p class="fw_300 m-0">May 2, 2025</p>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="caption">

                            <p style="color: #9D9D9D;">My experience with Rabbit Book Publishers was fantastic. The team
                                brought my non-fiction book to life and ensured everything was polished and
                                launch-ready. Super professional from start to finish.</p>

                        </div>

                        <div class="d-flex gap-2 align-items-center">

                            <img src="assets/images/megan-fisher.webp" class="user_img" width="" height=""
                                alt="user image">

                            <div class="text_wrap">

                                <h3 class="heading24px fw_500 m-0">Megan Fisher</h3>

                                <p class="fw_300 m-0">December 14, 2024</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-10 mx-auto">

                <div class="row g-0">

                    <div class="col-6">

                        <div class="logo_wrap">

                            <img src="assets/images/logo1.webp" class="logo_img img-fluid" width="" height=""
                                alt="Rabbit Book Publishers" data-aos="zoom-in" data-aos-delay="200" />

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="logo_wrap">

                            <img src="assets/images/logo2.webp" class="logo_img img-fluid" width="" height=""
                                alt="Rabbit Book Publishers" data-aos="zoom-in" data-aos-delay="300" />

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="logo_wrap">

                            <img src="assets/images/logo3.webp" class="logo_img img-fluid" width="" height=""
                                alt="Rabbit Book Publishers" data-aos="zoom-in" data-aos-delay="400" />

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="logo_wrap">

                            <img src="assets/images/logo4.webp" class="logo_img img-fluid" width="" height=""
                                alt="Rabbit Book Publishers" data-aos="zoom-in" data-aos-delay="500" />

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<?php include 'includes/footer.php'; ?>