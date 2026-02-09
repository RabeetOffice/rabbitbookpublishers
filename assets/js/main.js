/**
 * main.js
 * Initializes third-party libraries (Swiper, AOS, Lucide, Headroom, Tippy).
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // 2. Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true, // Whether animation should happen only once - while scrolling down
            offset: 100, // Offset (in px) from the original trigger point
            duration: 800, // Values from 0 to 3000, with step 50ms
            easing: 'ease-out-cubic', // Default easing for AOS animations
        });
    }

    // 3. Initialize Headroom.js for Sticky Header
    const headerElement = document.querySelector(".site-header");
    if (headerElement && typeof Headroom !== 'undefined') {
        const headroom = new Headroom(headerElement, {
            offset: 100, // Vertical offset in px before element is first unpinned
            tolerance: {
                up: 10,
                down: 10
            },
            classes: {
                // when element is initialised
                initial: "headroom",
                // when scrolling up
                pinned: "headroom--pinned",
                // when scrolling down
                unpinned: "headroom--unpinned",
                // when above offset
                top: "headroom--top",
                // when below offset
                notTop: "headroom--not-top"
            }
        });
        headroom.init();
    }

    // 4. Initialize Swiper for Book Strip
    if (typeof Swiper !== 'undefined') {
        const bookSwiper = new Swiper('.book-strip-swiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            speed: 5000, // Slower for smoother linear effect
            observer: true, // Recommended when hidden by AOS
            observeParents: true, // Recommended when hidden by AOS
            resizeObserver: true,
            roundLengths: true, // Prevents blurry text/images on some screens
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false, // Keep moving even on mouse hover (true marquee)
            },
            allowTouchMove: false, // Marquee effect usually non-interactive
            breakpoints: {
                640: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 40,
                },
            }
        });
    }

    // 5. Initialize Tippy.js (Tooltips)
    if (typeof tippy !== 'undefined') {
        tippy('[data-tippy-content]', {
            animation: 'scale',
            theme: 'light-border',
        });
    }

    // GSAP Example (optional usage, e.g. for hero glow pulse)
    if (typeof gsap !== 'undefined') {
        gsap.to(".hero-glow", {
            scale: 1.1,
            opacity: 0.8,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    }

});
