let width = window.innerWidth;

AOS.init({
    once: true,
    duration: 800,
    disable: function () {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
    }
});

// Wait for DOM ready and append navigation FIRST
jQuery(document).ready(function ($) {

    /* ===============================
       Clone desktop menus to mobile
    ================================ */
    var top_nav = $('.top_nav').html();
    if (top_nav) {
        $('.responsive_menu .clm_wrap').append(top_nav);
    }

    var sec_menu = $('.second_menu_clm').html();
    if (sec_menu) {
        $('.responsive_menu .clm_wrap').append(sec_menu);
    }

    /* ===============================
       Hamburger menu
    ================================ */
    var hamBurger = document.querySelector('.hamBurger');
    var responsive_menu = document.querySelector('.responsive_menu');

    if (hamBurger && responsive_menu) {
        hamBurger.addEventListener('click', function () {
            responsive_menu.classList.toggle('openMenu');
        });
    }

    /* ===============================
       SERVICES MENU – CLICK (TOGGLE)
    ================================ */
    $(document).on('click', '.service_btn', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $btn = $(this);
        var $li = $btn.closest('li');
        var $megaMenu = $btn.next('.megaMenu');

        // MOBILE
        if ($btn.closest('.responsive_menu').length) {
            $megaMenu.stop(true, true).slideToggle();
            $btn.toggleClass('activeBtn');
            return;
        }

        // DESKTOP
        var isOpen = $li.hasClass('clicked');

        $('.megaMenu').removeClass('activeMenu');
        $('.service_btn').removeClass('activeBtn');
        $('li').removeClass('clicked');

        if (!isOpen) {
            $btn.addClass('activeBtn');
            $megaMenu.addClass('activeMenu');
            $li.addClass('clicked');
        }
    });

    /* ===============================
       SERVICES MENU – HOVER (DESKTOP)
    ================================ */
    $(document).on('mouseenter', 'li', function () {
        if (
            !$(this).closest('.responsive_menu').length &&
            !$(this).hasClass('clicked')
        ) {
            $(this).children('.megaMenu').addClass('activeMenu');
            $(this).find('.service_btn').addClass('activeBtn');
        }
    });

    $(document).on('mouseleave', 'li', function () {
        if (
            !$(this).closest('.responsive_menu').length &&
            !$(this).hasClass('clicked')
        ) {
            $(this).children('.megaMenu').removeClass('activeMenu');
            $(this).find('.service_btn').removeClass('activeBtn');
        }
    });

    /* ===============================
       SUB SERVICES – CLICK (FIXED)
       👉 Link tab hi roko jab submenu exist kare
    ================================ */
    $(document).on('click', '.subService', function (e) {

        var $this = $(this);
        var $subMenuService = $this.next('.subMenuService');

        // ✅ Agar submenu hai → JS handle kare
        if ($subMenuService.length) {
            e.preventDefault();
            e.stopPropagation();

            // MOBILE
            if ($this.closest('.responsive_menu').length) {
                $('.responsive_menu .subMenuService').removeClass('active');
                $subMenuService.addClass('active');
            }
            // DESKTOP
            else {
                $('.subMenuService').removeClass('active');
                $subMenuService.addClass('active');
            }
        }
        // ❗ Agar submenu nahi → kuch mat karo (link normal open hoga)
    });

    /* ===============================
       CLOSE SUB MENU
    ================================ */
    $(document).on('click', '.closeMenu', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if ($(this).closest('.responsive_menu').length) {
            $('.responsive_menu .subMenuService').removeClass('active');
        } else {
            $('.subMenuService').removeClass('active');
        }
    });

    /* ===============================
       CLICK OUTSIDE – CLOSE DESKTOP MENU
    ================================ */
    $(document).on('click', function () {
        $('.megaMenu').removeClass('activeMenu');
        $('.service_btn').removeClass('activeBtn');
        $('li').removeClass('clicked');
    });

});


// Service button handlers moved to jQuery ready handler above using event delegation





// SubService handlers moved to jQuery ready handler above using event delegation



// CloseMenu handlers moved to jQuery ready handler above using event delegation

// Mobile service menu handler moved to jQuery ready handler above using event delegation





$(function () {

  var url = window.location.pathname; 

  var activePage = url.substring(url.lastIndexOf('/') + 1); 

  $('header li a, .sidebar__list li a').each(function () {

    var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);

    if (activePage == linkPage) {

        $(this).addClass('active');

    }

  });

});





var swiper = new Swiper('.mySwiper_port', {

    pagination: {

        el: '.swiper-pagination',

        clickable: true,

    },

    effect: 'coverflow',

    loop: true,

    autoplay: true,

    centeredSlides: true,

    slidesPerView: 'auto',

    speed:2000,

    autoplaySpeed: 1000,

    coverflowEffect: {

        rotate: 0,

        stretch: 200,

        depth: 280,

        modifier: 1, // 2,3

        slideShadows : false,

    }

});







jQuery(".why_choose_slider").owlCarousel({
  loop:true,

  autoplay: true,

  rewind: false, /* use rewind if you don't want loop */

  margin: 0,

  responsiveClass: true,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: false,

  dots: true,

  responsive: {

    0: {

      items: 2

    },



    600: {

      items: 2

    },



    1024: {

      items: 2

    },



    1366: {

      items: 2

    }

  }

});

jQuery(".blog_slider").owlCarousel({
  loop:true,
  autoplay: true,
  rewind: false, /* use rewind if you don't want loop */
  margin: 12,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: false,
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1024: {
      items: 2
    },
    1366: {
      items: 3
    }
  }
});



jQuery(".unveiling_slider").owlCarousel({

  autoplay: true,

  rewind: true, /* use rewind if you don't want loop */

  margin: 30,

  center:true,

  loop:true,

  responsiveClass: true,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: true,

  dots: false,

  responsive: {

    0: {

      items: 1

    },



    600: {

      items: 2

    },



    1024: {

      items: 2

    },



    1366: {

      items: 3

    }

  }

});
jQuery(".book_trailer_slider").owlCarousel({

  autoplay: true,

  rewind: true, /* use rewind if you don't want loop */

  margin: 30,

  center:true,

  loop:true,

  responsiveClass: true,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: true,

  dots: false,

  responsive: {

    0: {

      items: 1

    },



    600: {

      items: 2

    },



    1024: {

      items: 3

    },



    1366: {

      items: 4

    }

  }

});

jQuery(".blogs_slider").owlCarousel({

  autoplay: true,

  margin: 30,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: true,

  dots: false,

  responsive: {

    0: {

      items: 1

    },



    600: {

      items: 2

    },



    1024: {

      items: 3

    },



    1366: {

      items: 4

    }

  }

});



jQuery(".test_slider").owlCarousel({

  autoplay: true,

  rewind: true,

  margin: 20,

  center:true,

  loop:true,

  responsiveClass: true,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: true,

  dots: false,

  responsive: {

    0: {

      items: 1

    },



    600: {

      items: 1

    },



    1024: {

      items: 1

    },



    1366: {

      items: 1

    }

  }

});



jQuery(".plateform_logo_slider").owlCarousel({

  autoplay: true,

  rewind: true,

  margin: 20,

  center:true,

  loop:true,

  responsiveClass: true,

  autoHeight: true,

  autoplayTimeout: 7000,

  smartSpeed: 800,

  nav: false,

  dots: false,

  responsive: {

    0: {

      items: 2

    },



    600: {

      items: 4

    },



    1024: {

      items: 5

    },



    1366: {

      items: 5

    }

  }

});







$('.store-slider1').slick({

   dots: false,

   infinite: true,

   arrows: false,

   autoplay: true,

   autoplaySpeed: 0,

   speed: 5000,

   // pauseOnHover: false,

   cssEase: 'linear',

   slidesToShow:6,

   slidesToScroll:1 ,

   responsive: [

   {

   breakpoint: 1445,

   settings: {

   slidesToShow:5,

   }

   },

   {

   breakpoint: 1285,

   settings: {

   slidesToShow: 5,

   }

   },

   {

   breakpoint: 1200,

   settings: {

   slidesToShow: 5,

   }

   },

   {

   breakpoint: 768,

   settings: {

   slidesToShow: 2,

   },



   }

   ]

});



$('.store-slider2').slick({

   dots: false,

   infinite: true,

   arrows: false,

   autoplay: true,

   autoplaySpeed: 0,

   speed: 5000,

   // pauseOnHover: false,

   cssEase: 'linear',

    rtl: true,

   slidesToShow:6,

   slidesToScroll:1 ,

   responsive: [

   {

   breakpoint: 1445,

   settings: {

   slidesToShow:5,

   }

   },

   {

   breakpoint: 1285,

   settings: {

   slidesToShow: 5,

   }

   },

   {

   breakpoint: 1200,

   settings: {

   slidesToShow: 5,

   }

   },

   {

   breakpoint: 768,

   settings: {

   slidesToShow: 2,

   },



   }

   ]

});


document.addEventListener('DOMContentLoaded', () => {
  const pkg_name = document.querySelector('[name="pkg_name"]');
  const pkg_price = document.querySelector('[name="pkg_price"]');
  const service_name = document.querySelector('[name="service_name"]');
  const primeBtns = document.querySelectorAll('.primeBtn');

  primeBtns.forEach((item) => {
    item.addEventListener('click', () => {
      const pkgName = item.getAttribute('data-pkg-name');
      const pkgPrice = item.getAttribute('data-pkg-price');
      const serviceName = item.getAttribute('data-service-name');
      console.log(pkgPrice, '|', pkgName);

      if (pkg_name && pkg_price) {
        pkg_name.value = pkgName;
        pkg_price.value = pkgPrice;
        service_name.value = serviceName;
      }
    });
  });
});

let isHovering = false;

scrollContainer.addEventListener('mouseenter', () => {
  isHovering = true;
});

scrollContainer.addEventListener('mouseleave', () => {
  isHovering = false;
});

scrollContainer.addEventListener('wheel', function (e) {
  if (!isHovering) return;

  e.preventDefault();
  scrollContainer.scrollLeft += e.deltaY;
}, { passive: false });





jQuery(document).ready(function($) {
    // Auto open chat on page load
    var chatInterval = setInterval(function() {
        if (typeof $zopim !== 'undefined') {
            $zopim.livechat.window.show();
            clearInterval(chatInterval);
        }
    }, 500);
    
    // All chat buttons - class "chat" wale sab buttons
    $('.chat, #chat_toggle, #chat_toggle_btn').click(function(e) {
        e.preventDefault();
        
        // Try Zopim (old Zendesk)
        if (typeof $zopim !== 'undefined') {
            $zopim.livechat.window.show();
        } 
        // Try Zendesk Web Widget
        else if (typeof zE !== 'undefined') {
            zE.activate();
        } 
        // Try alternate Zendesk method
        else if (typeof window.zE !== 'undefined') {
            window.zE('messenger', 'open');
        }
        else {
            console.log('Zendesk chat not loaded yet.');
        }
    });
});

// Unread messages handler
zE(function() {
    if (typeof $zopim !== 'undefined') {
        $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
            if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                $zopim.livechat.window.show();
            }
        });
    }
});

// Global functions
function setButtonURL() {
    if (typeof $zopim !== 'undefined') {
        $zopim.livechat.window.show();
    }
}

function toggleChat() {
    if (typeof $zopim !== 'undefined') {
        $zopim.livechat.window.show();
    } else if (typeof zE !== 'undefined') {
        zE.activate();
    } else if (typeof window.zE !== 'undefined') {
        window.zE('messenger', 'open');
    }
}

// Popup function
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}