/*================
 Template Name: Kohost Hosting Provider with WHMCS Template
 Description: All type of web hosting provider or company with WHMCS template.
 Author: https://themeforest.net/user/themetags
=======================*/
//
// hide whmcs powerd by text
function hideWhmcs() {
    var poweredBySelector = $("p:contains('Powered by')");
    if(poweredBySelector.length) {
        poweredBySelector.hide();
    }
}
hideWhmcs();

// fixed navbar
$(function(){
    $(window).on('scroll', function () {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if ($(this).scrollTop() > 100) {
            $('.tt-header').addClass('affix');
        } else {
            $('.tt-header').removeClass('affix');
        }
    });

    //custom menu hover
    $('.tt-dropdown-memu').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);
    });



    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top-100
        }, 900, 'easeInOutExpo');
        event.preventDefault();
    });


    $('[data-toggle="offcanvas"]').on('click', function () {
        $(".tt-body-wrapper").addClass("active");
        $('.offcanvas-collapse').toggleClass('open');
        $('.tt-body-wrapper .overlay').css('display', 'block');
    });

    var sembunyikan = function() {
        $('.tt-body-wrapper .overlay').css('display', 'none');
        $('.offcanvas-collapse').toggleClass('open');
        $(".tt-body-wrapper").removeClass("active");
    };

    $('.tt-body-wrapper .overlay').click(sembunyikan);
});


//swiper slider
var swiper = new Swiper('.custom-slider', {
    slidesPerView: 3,
    spaceBetween: 15,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1920: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});
var swiper = new Swiper('.custom-slider-2', {
    slidesPerView: 1,
    spaceBetween: 0,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

function countDown() {
    var countDay = $(".counter-days");
    var countHour = $(".counter-hours");
    var countMinutes = $(".counter-minutes");
    var countSeconds = $(".counter-seconds");
    var date = new Date("Jan 1, 2023 12:00:00");
    var interval = setInterval(function () {
        var today = new Date().getTime();
        var distance = date - today;
        countDay.html(Math.floor(distance / (1000 * 60 * 60 * 24)) + 'D');
        countHour.html(Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)) + 'H');
        countMinutes.html(Math.floor(distance % (1000 * 60 * 60) / (1000 * 60)) + 'M');
        countSeconds.html(Math.floor(distance % (1000 * 60) / 1000) + 'S');
        if (distance < 0) {
            clearInterval(interval);
            $(".counter-days").html("00");
            $(".counter-hours").html("00");
            $(".counter-minutes").html("00");
            $(".counter-seconds").html("00");
        }
    }, 1000);
}
countDown();




//    dark light mood
var setDarkMode = (active = false) => {
    var wrapper = document.querySelector(":root");
    if (active) {
        wrapper.setAttribute("data-bs-theme", "dark");
        localStorage.setItem("theme", "dark");
    } else {
        wrapper.setAttribute("data-bs-theme", "light");
        localStorage.setItem("theme", "light");
    }
};

var toggleDarkMode = () => {
    var theme = document.querySelector(":root").getAttribute("data-bs-theme");
    // If the current theme is "light", we want to activate dark
    setDarkMode(theme === "light");
};

var initDarkMode = () => {
    var theme = localStorage.getItem("theme", "light");

    if(theme == "dark"){

        setDarkMode(true);
    }else{
        setDarkMode(false);
    }


    var toggleButton = document.querySelector(".tt-theme-toggle");
    toggleButton.addEventListener("click", toggleDarkMode);
};

initDarkMode();
