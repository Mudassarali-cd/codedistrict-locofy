document.addEventListener('DOMContentLoaded', function () {
    try {
        var engineering = bodymovin.loadAnimation({
            container: document.getElementById('engineering'), // Required
            renderer: 'svg', // Required
            loop: true, // Optional
            autoplay: true, // Optional
            path: './assets/lottieIcons/digital-consulting-advisory.json' // Correct relative path
        });
        engineering.addEventListener('DOMLoaded', function () {
            // Get the SVG element and set its width and height
            var svgElement = document.querySelector('#engineering svg');

            if (svgElement) {
                svgElement.setAttribute('width', '103px'); // Set desired width
                svgElement.setAttribute('height', 'auto'); // Set desired height
                svgElement.style.setProperty('transform', 'unset', 'important'); // Set transform: unset !important;
            }
        });
    } catch (error) {
    }
});

$(document).ready(function () {
    $(window).on("scroll", function () {
        var scrollDistance = $(this).scrollTop();
        var header = $("#site-header");

        if (scrollDistance > 75) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });
});


$(document).ready(function () {
    $('.dropdown-toggle').click(function () {
        $('.sub-menu-wrapper').toggleClass('active');
    });
    $('#mobileMenu, .mobile-nav-header .icon-close, .mob-nav-bg').click(function () {
        $('.navigation-menu').toggleClass('active');
        $('.mob-nav-bg').toggleClass('active');
    });
});



const swiper = new Swiper(".business-card", {
    // Optional parameters
    slidesPerView: "auto",
    spaceBetween: 24,
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

const logoSwiper = new Swiper(".logo-wrapper", {
    // Optional parameters
    slidesPerView: "auto",
    spaceBetween: 0,
    loop: false,
    centeredSlides: false,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

const clientSlider = new Swiper(".client-wrapper", {
    // Optional parameters
    slidesPerView: "auto",
    spaceBetween: 0,

    loop: true,
    autoplay: {
        delay: 1000,
    },
    speed: 500,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});