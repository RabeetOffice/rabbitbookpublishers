<footer>

    <div class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-4 mb-md-0">

                    <h2 class="heading70px fw_400"><i>Contact Us</i></h2>

                    <div class="footer_row">

                        <p>Have questions or are you ready to start your publishing journey?</p>

                        <p><a href="javascript:;" class="chat">Get in touch</a> with our team today, we're here to
                            help you every step of the way!</p>

                    </div>

                    <div class="footer_row">

                        <div class="emial_number row">

                            <div class="col-md mb-4 mb-md-0">

                                <p class="m-0">Email Us</p>

                                <a href="<?php echo EMAIL_HREF; ?>">Email Us</a>

                            </div>

                            <div class="col-md">

                                <p class="m-0">Call Us</p>

                                <a href="<?php echo PHONE_HREF; ?>"><?php echo PHONE; ?></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <form action="https://rabbitbookpublishers.com/mail.php" method="post" class="footer_form">

                        <div class="row">

                            <div class="col-md-12">

                                <input type="text" name="name" class="input" placeholder="Full name*" required="" />

                            </div>

                            <div class="col-md-6">

                                <input type="email" name="email" class="input" placeholder="email*" required="" />

                            </div>

                            <div class="col-md-6">

                                <input type="number" name="number" class="input" placeholder="Phone*" required="" />

                            </div>

                            <div class="col-md-12">

                                <textarea name="msg" class="input" placeholder="Message*"></textarea>

                            </div>
                            <span class="margin-checkbox-via">
                                <input type="checkbox" name="bn_emailPromotional" required="" checked=""
                                    aria-required="true"> Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL
                                (<a href="privacy-policy.php" class="text-color-form">PRIVACY POLICY</a> &
                                <a href="terms-and-condition.php" class="text-color-form">Terms of Service</a>)
                                – Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP anytime.
                            </span>

                            <div class="col-md-12">

                                <button class="secondColor_btn" type="submit">Get Started</button>

                            </div>

                        </div>

                        <input type="hidden" name="fullpageurl" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <div class="copyright">

        <div class="container light">

            <div class="row">

                <div class="col-md-6 mb-2 mb-md-0">

                    <p>Copyright © <?php echo date('Y'); ?> <span class="green"><?php echo WEBSITE_NAME; ?></span>. All
                        rights reserved.
                    </p>

                </div>

                <div class="col-md-6">

                    <div class="btn_set">

                        <a href="terms-and-condition.php">Terms of Services</a>

                        <a href="privacy-policy.php">Privacy Policy</a>

                        <a href="refund-policy.php">Refund Policy</a>

                        <a href="blogs.php">Blogs</a>

                    </div>

                </div>
            </div>
            <p class=" pt-3" style=" font-weight: 400;"><span
                    style="font-style:italic; font-weight:700;">Disclaimer:</span> <?php echo WEBSITE_NAME; ?> is an
                independent entity and is not affiliated with, sponsored by, or associated with any other company or
                brand with a similar or identical name. All services, products, and content are solely provided by
                <?php echo WEBSITE_NAME; ?> and are not endorsed by any third party.
            </p>
        </div>

    </div>

</footer>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/custom7839.js?v=1.2"></script>
<style>
    .overlay-bg-new-popup {
        background: rgb(0 0 0 / 33%);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 998;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
    }



    .overlay-bg-new-popup.active {
        opacity: 1;
        visibility: visible;
    }

    .popupform-main-new-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(7px);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
    }



    .pop-form-new-popp.ta-center-new-pop {
        background-size: cover;
        padding: 30px;
        border-radius: 25px;
        overflow: hidden;
        transform: translateY(20px);
        opacity: 0;
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        position: relative;
        max-width: 600px;
        background-color: #fff;
    }

    .popupform-main-new-popup.active {
        opacity: 1;
        visibility: visible;
    }

    .popupform-main-new-popup.active .pop-form-new-popp.ta-center-new-pop {
        transform: translateY(0);
        opacity: 1;
    }

    .pop-form-new-popp.ta-center-new-pop input,
    .pop-form-new-popp.ta-center-new-pop textarea {
        width: 100%;
        border: 1px solid #00000029;
        border-radius: 10px;
        background: transparent;
        margin-bottom: 10px;
        padding: 10px 0 10px 20px;
        outline: none !important;
        font-weight: 400;
        font-size: 13px;
    }

    .close-btn {
        width: 35px;
        height: 35px;
        background: var(--primeColor);
        border: 0;
        color: var(--white);
        font-weight: 200;
        font-size: 39px;
        line-height: 0;
        transform: rotate(45deg);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
        top: 7px;
        right: 7px;
        cursor: pointer;
        z-index: 99;
    }

    .close-btn span {
        position: relative;
        left: 0;
        top: -5px;
    }

    .pop-form-new-popp .checkbox_wrapper {
        row-gap: 20px;
        column-gap: 5px;
    }

    .pop-form-new-popp .checkbox_wrapper .custm_checkBox {
        margin: 0;
    }

    .pop-form-new-popp .checkbox_wrapper .custm_checkBox input:checked~.checkmark {
        color: #fff !important;
    }

    .pop-form-new-popp .heading20px {
        font-family: 'Stika';
    }

    .pop-form-new-popp.ta-center-new-pop ::placeholder {
        color: #000;
        opacity: 0.5;
    }

    img.popup_logo {
        width: 60px;
        margin-bottom: 20px;
    }

    img.pop_icon {
        top: 13px;
    }

    img.popup_bg {
        position: absolute;
        width: 102%;
        left: -7px;
        top: 0;
        opacity: 0.8;
        height: 102%;
    }

    @media(max-width: 767px) {
        .pop-form-new-popp.ta-center-new-pop {
            padding: 20px;
            border-radius: 15px;
        }

        .pop-form-new-popp.ta-center-new-pop input,
        .pop-form-new-popp.ta-center-new-pop textarea {
            border-radius: 7px;
            margin-bottom: 5px;
            padding: 5px 0 5px 10px;
            font-size: 11px;
        }

        .checkmark {
            padding: 6px 11px;
            font-size: 12px;
        }

        img.popup_logo {
            width: 60px;
            margin-bottom: 20px;
        }

        .pop-form-new-popp.ta-center-new-pop {
            width: 90% !important;
        }
    }
</style>

<div class="overlay-bg-new-popup"></div>

<div class="popupform-main-new-popup">

    <div class="pop-form-new-popp ta-center-new-pop position-relative col-lg-5 col-md-7">

        <a href="javascript:;" class="close-btn ta-center"><span>+</span></a>

        <form action="https://rabbitbookpublishers.com/mail.php" method="POST" class="position-relative">

            <div class="titleWrap text-center">

                <img src="assets/images/favicon.webp" class="popup_logo" alt="" loading="lazy" />

            </div>

            <div class="row">

                <div class="col-lg-6 position-relative">

                    <input type="text" name="firstName" placeholder="First Name" required>

                </div>

                <div class="col-lg-6 position-relative">

                    <input type="text" name="lastName" placeholder="Last Name" required>

                </div>

                <div class="col-lg-6 position-relative">

                    <input type="email" name="email" placeholder="Email Address" required>

                </div>

                <div class="col-lg-6 position-relative">

                    <input type="number" name="number" placeholder="Phone Number" required>

                </div>

                <div class="col-lg-6 position-relative">

                    <input type="text" name="author_name" placeholder="Author Name" required>

                </div>

                <div class="col-lg-6 position-relative">

                    <input type="text" name="location" placeholder="Location" required>

                </div>

                <div class="col-12">

                    <h6 class="heading20px my-1 mb-md-4">Select Services</h6>

                    <div class="checkbox_wrapper">

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Publishing Services">

                            <span class="checkmark">Publishing Services</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Book Writing">

                            <span class="checkmark">Book Writing</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Ebook Editing">

                            <span class="checkmark">Ebook Editing</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Book Marketing">

                            <span class="checkmark">Book Marketing</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Book Cover Design">

                            <span class="checkmark">Book Cover Design</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Video Trailer">

                            <span class="checkmark">Video Trailer</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Author Website">

                            <span class="checkmark">Author Website</span>

                        </label>

                        <label class="custm_checkBox">

                            <input type="checkbox" name="service[]" value="Audio Book">

                            <span class="checkmark">Audio Book</span>

                        </label>

                        <input type="hidden" name="fullpageurl" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
                        <input type="hidden" name="pkg_name" value="">
                        <input type="hidden" name="pkg_price" value="">
                        <input type="hidden" name="service_name" value="">

                    </div>

                </div>

                <span class="margin-checkbox-via" style="margin-top:10px;">
                    <input type="checkbox" style="width:auto; margin-bottom:0; " name="bn_emailPromotional" required=""
                        checked="" aria-required="true"> Please CHECK THE BOX to COMMUNICATE VIA SMS OR
                    EMAIL
                    (<a href="privacy-policy.php" class="text-color-form">PRIVACY POLICY</a> &
                    <a href="terms-and-condition.php" class="text-color-form">Terms of Service</a>)
                    – Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP anytime.
                </span>

                <div class="col-12 mt-3 text-center">

                    <button class="primeBtn w-md-100 mx-auto d-table" type="submit">

                        <span class="animated_span">

                            <span class="txt_wrap">

                                Get Started<br>

                                Get Started

                            </span>

                        </span>

                    </button>


                </div>

            </div>


        </form>

    </div>

</div>

<script>

    document.addEventListener("DOMContentLoaded", function () {

        const popup = document.querySelector(".popupform-main-new-popup");

        const overlay = document.querySelector(".overlay-bg-new-popup");

        const openButtons = document.querySelectorAll(".pop_btn");

        const closeButton = document.querySelector(".close-btn");


        // setTimeout(function () {
        //     popup.classList.add("active");
        //     overlay.classList.add("active");
        //     document.body.style.overflow = "hidden";
        // }, 3000);


        openButtons.forEach(function (btn) {

            btn.addEventListener("click", function () {

                popup.classList.add("active");

                overlay.classList.add("active");

                document.body.style.overflow = "hidden";

            });

        });

        function closePopup() {

            popup.classList.remove("active");

            overlay.classList.remove("active");

            document.body.style.overflow = "";

        }

        closeButton.addEventListener("click", closePopup);

        overlay.addEventListener("click", closePopup);

    });




    document.addEventListener("DOMContentLoaded", function () {

        const popup = document.querySelector(".popupform-main-new-popup");
        const overlay = document.querySelector(".overlay-bg-new-popup");
        const closeButton = document.querySelector(".close-btn");
        const form = document.querySelector(".popupform-main-new-popup form");

        const servicesContainer = document.querySelector(".checkbox_wrapper");
        const servicesParentCol = servicesContainer.closest(".col-12");


        const packageInfoDiv = document.createElement("div");
        packageInfoDiv.className = "col-12 package-info-display";
        packageInfoDiv.style.display = "none";
        packageInfoDiv.innerHTML = `
        <div class="selected-package-info">
            <h6 class="heading20px my-3 mb-md-4 text-center" style="color:#133f36;">
                Selected Package Details
            </h6>
            <div style="background:#fff3d3;padding:20px;border-radius:15px;border:2px solid #88b4f7;">
                <p><strong>Service:</strong> <span id="display-service-name"></span></p>
                <p><strong>Package:</strong> <span id="display-pkg-name"></span></p>
                <p><strong>Price:</strong> $<span id="display-pkg-price"></span></p>
            </div>
        </div>
    `;
        servicesParentCol.after(packageInfoDiv);


        function ensureHidden(name, id) {
            let input = form.querySelector(`#${id}`);
            if (!input) {
                input = document.createElement("input");
                input.type = "hidden";
                input.name = name;
                input.id = id;
                form.appendChild(input);
            }
            return input;
        }

        const pkgNameField = ensureHidden("pkg_name", "pkg_name_field");
        const pkgPriceField = ensureHidden("pkg_price", "pkg_price_field");
        const serviceNameField = ensureHidden("service_name", "service_name_field");

        function openPopupWithPackage(btn) {

            const pkgName = btn.dataset.pkgName || "";
            const pkgPrice = btn.dataset.pkgPrice || "";
            const service = btn.dataset.serviceName || "";

            if (pkgName && pkgPrice && service) {

                servicesParentCol.style.display = "none";
                packageInfoDiv.style.display = "block";

                document.getElementById("display-service-name").textContent = service;
                document.getElementById("display-pkg-name").textContent = pkgName;
                document.getElementById("display-pkg-price").textContent = pkgPrice;

                pkgNameField.value = pkgName;
                pkgPriceField.value = pkgPrice;
                serviceNameField.value = service;

            } else {
                servicesParentCol.style.display = "block";
                packageInfoDiv.style.display = "none";

                pkgNameField.value = "";
                pkgPriceField.value = "";
                serviceNameField.value = "";
            }

            popup.classList.add("active");
            overlay.classList.add("active");
            document.body.style.overflow = "hidden";
        }


        function bindButtons() {
            document.querySelectorAll(".pop_btn").forEach(btn => {
                btn.onclick = function (e) {
                    e.preventDefault();
                    openPopupWithPackage(this);
                };
            });
        }
        bindButtons();


        function closePopup() {
            popup.classList.remove("active");
            overlay.classList.remove("active");
            document.body.style.overflow = "";

            servicesParentCol.style.display = "block";
            packageInfoDiv.style.display = "none";
        }

        closeButton.onclick = closePopup;
        overlay.onclick = closePopup;


        form.addEventListener("submit", function () {
            console.log("SUBMIT DATA →", {
                service: serviceNameField.value,
                package: pkgNameField.value,
                price: pkgPriceField.value
            });
        });

    });
</script>
<!-- Zendesk Web Widget -->

<script>
    jQuery(document).ready(function ($) {
        // Auto open chat on page load
        var chatInterval = setInterval(function () {
            if (typeof $zopim !== 'undefined') {
                $zopim.livechat.window.show();
                clearInterval(chatInterval);
            }
        }, 500);
        // On click chat open
        $('#chat_toggle').click(function (e) {
            e.preventDefault();
            if (typeof $zopim !== 'undefined') {
                $zopim.livechat.window.show();
            } else if (typeof zE !== 'undefined') {
                zE.activate();
            } else {
                console.log('Zendesk chat not loaded yet.');
            }
        });
    });
</script>
<script>
    zE(function () {
        $zopim.livechat.setOnUnreadMsgs(function (numUnread) {
            if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                $zopim.livechat.window.show();
            }
        });
    });
    function setButtonURL() {
        $zopim.livechat.window.show();
    }
    function toggleChat() {
        $zopim.livechat.window.show();
    }
</script>
<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
</script>

</body>

</html>