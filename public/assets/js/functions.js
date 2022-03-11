(function ($) {
    "use strict";
    $(window).on("load", function () {
        $(".preloader").fadeOut(2000);
        $(".preloader").remove();
    });
    var $bgSection = $(".bg-section");
    var $bgPattern = $(".bg-pattern");
    var $colBg = $(".col-bg");
    $bgSection.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-section");
        $(this).remove();
    });
    $bgPattern.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-pattern");
        $(this).remove();
    });
    $colBg.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("col-bg");
        $(this).remove();
    });
    var $moduleSearch = $(".module-icon-search"),
        $searchWarp = $(".module-search-warp");
    $moduleSearch.on("click", function () {
        $(this).parent().addClass("module-active");
        $(this).parent().siblings().removeClass("module-active");
        $searchWarp.addClass("search-warp-active");
    });
    var $moduleCart = $(".module-icon-cart"),
        $cartWarp = $(".module-cart-warp");
    $moduleCart.on("click", function () {
        $(this).parent().toggleClass("module-active");
        $(this).parent().siblings().removeClass("module-active");
    });
    var $module = $(".module"),
        $moduleWarp = $(".module-warp"),
        $moduleCancel = $(".module-cancel");
    $moduleCancel.on("click", function (e) {
        $module.removeClass("module-active");
        $searchWarp.removeClass("search-warp-active");
        e.stopPropagation();
        e.preventDefault();
    });
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $module.removeClass("module-active");
            $moduleWarp.removeClass("active");
            $searchWarp.removeClass("search-warp-active");
            $popMenuWarp.removeClass("popup-menu-warp-active");
        }
    });
    var $w = $(window);
    var $wWidth = $w.width();
    var mobile_resolution_size = "1200";
    var $dropToggle = $("[data-toggle='dropdown']");
    $dropToggle.on("click", function (event) {
        $(this).each(() => {
            if ($wWidth <= mobile_resolution_size && $(this).attr("href") === "#") {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass("show");
                $(this).parent().toggleClass("show");
            } else if ($wWidth <= mobile_resolution_size && !$(this).attr("href") !== "#") {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass("show");
                $(this).parent().toggleClass("show");
                $(this)
                    .children("span")
                    .on("click", () => {
                        window.location.href = $(this).attr("href");
                    });
            }
        });
    });
    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $(".navbar-sticky").addClass("navbar-fixed");
        } else {
            $(".navbar-sticky").removeClass("navbar-fixed");
        }
    });
    $(".mailchimp").ajaxChimp({ url: "http://wplly.us5.list-manage.com/subscribe/post?u=91b69df995c1c90e1de2f6497&id=aa0f2ab5fa", callback: chimpCallback });
    function chimpCallback(resp) {
        if (resp.result === "success") {
            $(".subscribe-alert")
                .html('<div class="alert alert-success">' + resp.msg + "</div>")
                .fadeIn(1000);
        } else if (resp.result === "error") {
            $(".subscribe-alert")
                .html('<div class="alert alert-danger">' + resp.msg + "</div>")
                .fadeIn(1000);
        }
    }
    $(".subscribe-alert").on("click", function () {
        $(this).fadeOut();
    });
    $("#campaignmonitor").submit(function (e) {
        e.preventDefault();
        $.getJSON(this.action + "?callback=?", $(this).serialize(), function (data) {
            if (data.Status === 400) {
                alert("Error: " + data.Message);
            } else {
                alert("Success: " + data.Message);
            }
        });
    });
    var $carouselDirection = $("html").attr("dir");
    if ($carouselDirection == "rtl") {
        var $carouselrtl = true;
    } else {
        var $carouselrtl = false;
    }
    $(".carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data("loop"),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data("space"),
            nav: $Carousel.data("nav"),
            dots: $Carousel.data("dots"),
            center: $Carousel.data("center"),
            dotsSpeed: $Carousel.data("speed"),
            responsive: { 0: { items: 1 }, 768: { items: $Carousel.data("slide-rs") }, 1000: { items: $Carousel.data("slide") } },
        });
    });
    $(".custom-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data("loop"),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data("space"),
            nav: $Carousel.data("nav"),
            dots: $Carousel.data("dots"),
            center: $Carousel.data("center"),
            dotsSpeed: $Carousel.data("speed"),
            dotsContainer: "#carousel-custom-dots",
            thumbs: true,
            thumbsPrerendered: true,
            thumbContainerClass: "owl-thumbs",
            thumbItemClass: "owl-thumb-item",
            responsive: { 0: { items: 1 }, 768: { items: $Carousel.data("slide-rs") }, 1000: { items: $Carousel.data("slide") } },
        });
    });
    $(".slider-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data("loop"),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data("space"),
            nav: $Carousel.data("nav"),
            dots: $Carousel.data("dots"),
            center: $Carousel.data("center"),
            dotsSpeed: $Carousel.data("speed"),
            responsive: { 0: { items: 1 }, 768: { items: $Carousel.data("slide-rs") }, 1000: { items: $Carousel.data("slide") } },
        });
    });
    $(".owl-thumbs .owl-thumb-item").on("click", function () {
        $(this).siblings(".owl-thumb-item").removeClass("active");
        $(this).addClass("active");
        $(".custom-carousel").trigger("to.owl.carousel", [$(this).index(), 300]);
    });
    $(".custom-carousel").on("changed.owl.carousel", function (event) {
        var items = event.item.count;
        var item = event.item.index;
        var owlDots = document.querySelectorAll(".owl-thumbs .owl-thumb-item");
        if (owlDots.length > 0) {
            owlDots[item].click();
        }
    });
    $(".custom-navs .next").click(function () {
        $(".custom-carousel").trigger("next.owl.carousel");
    });
    $(".custom-navs .prev").click(function () {
        $(".custom-carousel").trigger("prev.owl.carousel");
    });
    var $imgPopup = $(".img-popup");
    $imgPopup.magnificPopup({ type: "image" });
    $(".img-gallery-item").magnificPopup({ type: "image", gallery: { enabled: true } });
    $(".popup-video,.popup-gmaps").magnificPopup({
        disableOn: 700,
        mainClass: "mfp-fade",
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: "iframe",
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + "</div>",
            patterns: { youtube: { index: "youtube.com/", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" } },
            srcAction: "iframe_src",
        },
    });
    var backTop = $("#back-to-top");
    if (backTop.length) {
        var scrollTrigger = 200,
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    backTop.addClass("show");
                } else {
                    backTop.removeClass("show");
                }
            };
        backToTop();
        $(window).on("scroll", function () {
            backToTop();
        });
        backTop.on("click", function (e) {
            e.preventDefault();
            $("html,body").animate({ scrollTop: 0 }, 700);
        });
    }
    var aScroll = $('a[data-scroll="scrollTo"]');
    aScroll.on("click", function (event) {
        var target = $($(this).attr("href"));
        if (target.length) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: target.offset().top }, 1000);
            if ($(this).hasClass("menu-item")) {
                $(this).parent().addClass("active");
                $(this).parent().siblings().removeClass("active");
            }
        }
    });
    var $sliderRange = $("#slider-range"),
        $sliderAmount = $("#amount");
    $sliderRange.slider({
        range: true,
        min: 0,
        max: 500,
        values: [50, 300],
        slide: function (event, ui) {
            $sliderAmount.val("$" + ui.values[0] + " - $" + ui.values[1]);
        },
    });
    $sliderAmount.val("$" + $sliderRange.slider("values", 0) + " - $" + $sliderRange.slider("values", 1));
    var contactForm = $(".contactForm"),
        contactResult = $(".contact-result");
    contactForm.validate({
        debug: false,
        submitHandler: function (contactForm) {
            $(contactResult, contactForm).html("Please Wait...");
            $.ajax({
                type: "POST",
                url: "assets/php/contact.php",
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function (msg) {
                    $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>').delay(3000).fadeOut(2000);
                },
                error: $(".thanks").show(),
            });
            return false;
        },
    });
    siteFooter();
    $(window).resize(function () {
        siteFooter();
    });
    function siteFooter() {
        var siteContent = $("#wrapperParallax");
        var siteFooter = $("#footerParallax");
        var siteFooterHeight = siteFooter.height();
        siteContent.css({ "margin-bottom": siteFooterHeight });
    }
    $("select").niceSelect();
    $(".collapse").on("shown.bs.collapse", function () {
        $(this).parent(".card").addClass("active-acc");
    });
    $(".collapse").on("hidden.bs.collapse", function () {
        $(this).parent(".card").removeClass("active-acc");
    });
    $(".product-quantity span ").on("click", "a.plus, a.minus", function () {
        var qty = $(this).parents(".product-quantity").find(".pro-qunt");
        var val = parseFloat(qty.val());
        var max = parseFloat(qty.data("max"));
        var min = parseFloat(qty.data("min"));
        var step = parseFloat(qty.data("step"));
        if (isNaN(val)) {
            var val = 0;
        }
        if ($(this).is(".plus")) {
            if (max && max <= val) {
                qty.val(max);
            } else {
                qty.val(val + step);
            }
        } else {
            if (min && min >= val) {
                qty.val(min);
            } else if (val > 1) {
                qty.val(val - step);
            }
        }
    });
    $(".offer-banner  .banner-close").on("click", function () {
        $(this).parent(".offer-banner").remove();
    });
})(jQuery);
