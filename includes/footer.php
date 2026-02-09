</main>
<footer class="site-footer bg-white section-padding border-top pb-0">
    <div class="container">
        <div class="row gy-5 mb-5 pb-4 border-bottom">
            <!-- Col 1: Logo & Description -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="footer-logo mb-4">
                    <a href="index.php" class="d-flex align-items-center text-decoration-none gap-2">
                        <img src="<?php echo WEBSITE_LOGO; ?>" alt="<?php echo WEBSITE_NAME; ?>">
                        <h2 class="h5 mb-0 text-dark fw-bold"><?php echo WEBSITE_NAME; ?></h2>
                    </a>
                </div>
                <p class="text-muted small mb-4 pe-lg-5">
                    We are a full-cycle book writing and publishing agency. From ghostwriting to distribution, we help
                    you leave a legacy.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="social-link" aria-label="Facebook">FB</a>
                    <a href="#" class="social-link" aria-label="Twitter">TW</a>
                    <a href="#" class="social-link" aria-label="LinkedIn">LN</a>
                    <a href="#" class="social-link" aria-label="Instagram">IG</a>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <h3 class="h6 fw-bold mb-3">Quick Links</h3>
                <ul class="list-unstyled d-flex flex-column gap-2 text-muted small">
                    <li><a href="index.php" class="text-decoration-none text-muted hover-primary">Home</a></li>
                    <li><a href="#about" class="text-decoration-none text-muted hover-primary">About Us</a></li>
                    <li><a href="#services" class="text-decoration-none text-muted hover-primary">Services</a></li>
                    <li><a href="#case-studies" class="text-decoration-none text-muted hover-primary">Case Studies</a>
                    </li>
                    <li><a href="#contact" class="text-decoration-none text-muted hover-primary">Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: Services -->
            <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h3 class="h6 fw-bold mb-3">Services</h3>
                <ul class="list-unstyled d-flex flex-column gap-2 text-muted small">
                    <li><a href="#" class="text-decoration-none text-muted hover-primary">Ghostwriting</a></li>
                    <li><a href="#" class="text-decoration-none text-muted hover-primary">Book Editing</a></li>
                    <li><a href="#" class="text-decoration-none text-muted hover-primary">Book Publishing</a></li>
                    <li><a href="#" class="text-decoration-none text-muted hover-primary">Book Formatting</a></li>
                    <li><a href="#" class="text-decoration-none text-muted hover-primary">Book Marketing</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact Info -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <h3 class="h6 fw-bold mb-3">Contact Us</h3>
                <ul class="list-unstyled d-flex flex-column gap-3 text-muted small">
                    <li class="d-flex align-items-start gap-2">
                        <span class="fw-bold">Phone:</span>
                        <a href="<?php echo PHONE_HREF; ?>"
                            class="text-decoration-none text-muted"><?php echo PHONE; ?></a>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <span class="fw-bold">Email:</span>
                        <a href="<?php echo EMAIL_HREF; ?>"
                            class="text-decoration-none text-muted"><?php echo EMAIL; ?></a>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <span class="fw-bold">Address:</span>
                        <a href="<?php echo ADDRESS_HREF; ?>"
                            class="text-decoration-none text-muted"><?php echo ADDRESS; ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row py-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="small text-muted mb-0">&copy; <?php echo date('Y'); ?> <?php echo WEBSITE_NAME; ?>. All Rights
                    Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="d-inline-flex gap-3 small">
                    <a href="#" class="text-decoration-none text-muted">Terms & Conditions</a>
                    <a href="#" class="text-decoration-none text-muted">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- External Libraries -->
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- AOS (Animate On Scroll) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Headroom.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js"></script>

<!-- GSAP (Core) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- Tippy.js & Popper -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>

</html>