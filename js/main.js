var QueryString = function () {
    // This function is anonymous, is executed immediately and
    // the return value is assigned to QueryString!
    var query_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        // If first entry with this name
        if (typeof query_string[pair[0]] === "undefined") {
            query_string[pair[0]] = decodeURIComponent(pair[1]);
            // If second entry with this name
        } else if (typeof query_string[pair[0]] === "string") {
            var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
            query_string[pair[0]] = arr;
            // If third or later entry with this name
        } else {
            query_string[pair[0]].push(decodeURIComponent(pair[1]));
        }
    }
    return query_string;
}();

/**
 * Created by David on 19/01/2017.
 */
(function(yourcode){ yourcode(window.jQuery, window, document); }(function($, window, document) {
    $(function() {

        // ----------------------------- .bg-img -------------------------- //
        $(".bg-img").each(function () {
            var urlImg = $(this).find("img").first().attr("src");
            $(this).find("img").on('error', function () {
                $(this).hide();
                $(this).closest(".bg-img").hide();
            });
            var elfondo = "url('" + $(this).find("img").attr("src") + "')";
            $(this).find("img").first().hide();
            $(this).css("background-image", elfondo);
        });
        // ---------------------------------------------------------------- //

        // $('.iso-cats').isotope({
        //     // options
        //     itemSelector: '.subcat-item',
        //     layoutMode: 'masonry'
        // });

        initParallaxCashControl();
        recalculateCCParallaxItems();

        $(window).resize(function () {
            recalculateCCParallaxItems();
        });

        $('.smooth-anchor').click(function (e) {
            e.preventDefault();

            var target = $($(this).attr('href'));
            scrollTo(target);

            if ( $(this).hasClass('tab-anchor') ) {
                $('.tab-anchor.current').removeClass('current');
                $(this).addClass('current');
            }
        });

        if ($(document).height() > 1800) {

            var footerOffset = $('footer').offset().top,
                goUpBtn = $('.go-up'),
                btnHeight = goUpBtn.height(),
                posOffset = 40;

            $(window).scroll(function () {

                if ( goUpBtn.offset().top >= footerOffset - posOffset ){
                    goUpBtn.removeClass('fixed');
                } else if ( $(window).scrollTop() + $(window).height() <= footerOffset - posOffset ) {
                    goUpBtn.addClass('fixed');
                }

                if ($(window).scrollTop() > $(document).height() * 0.4) {
                    $('.go-up').fadeIn();
                } else {
                    $('.go-up').fadeOut();
                }
            });
        }

        $('.cover-slides').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });


        $('.product-main-gallery').slick({
            arrows: false,
            infinite: true,
            asNavFor: '.product-thumbnails',
            slidesToScroll: 1,
            slidesToShow: 1
        });
        $('.product-main-gallery').slickLightbox({
            src: 'src',
            itemSelector: 'img'
        });

        $('.product-thumbnails').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            centerMode: true,
            focusOnSelect: true,
            asNavFor: '.product-main-gallery'

        });

        $('.open-cart').click(function (e) {
            e.preventDefault();
            $('.floating-cart').slideDown();
        });

        $('.floating-cart').mouseleave(function () {
           $(this).slideUp();
        });

        $('header .search-form .fa.submit').click(function (e) {

            e.preventDefault();

            if ( $(this).closest('.search-form').hasClass('search-open') ){
                $(this).closest('form').submit();
            } else {
                $('header .search-form input').animate({
                    width: '80%',
                    padding: '5px'
                }, 600 );

                $('header .search-form input').focus();

                $(this).closest('.search-form').addClass('search-open');

            }

        });

        $('.blog-sidebar .search-form .fa.submit').click(function (e) {
            e.preventDefault();
            $(this).closest('form').submit();
        });

        $('.open-menu').click(function (e) {
            e.preventDefault();
            $('.main-navigation .menu-container').fadeIn();
        });

        $('.close-menu').click(function (e) {
            e.preventDefault();
            $('.main-navigation .menu-container').fadeOut();
        });

        $('.products-slick').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: false,
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 840,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: true,
                        autoplaySpeed: 4000,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 4000,
                        arrows: false
                    }
                }
            ]
        });

        var customersLength= $('.container-customers .customer').length;

        if ( customersLength == 2 ) {
            $('.container-customers .customer').first().css('text-align', 'right');
            $('.container-customers .customer').last().css('text-align', 'left');
        }

        if ( customersLength > 5 ){
            $('.container-customers').slick({
                infinite: true,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 6000,
                rows: 2,
                slidesPerRow: 5,
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesPerRow: 3
                        }
                    },
                    {
                        breakpoint: 840,
                        settings: {
                            slidesPerRow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesPerRow: 1
                        }
                    }
                ]
            })
        } else {
            $('.container-customers').slick({
                infinite: true,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 4000,
                slidesToShow: customersLength,
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 840,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            autoplay: true,
                            autoplaySpeed: 4000,
                            arrows: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 4000,
                            arrows: false
                        }
                    }
                ]
            })
        }

        $('.video-accordion .panel-title a').click(function () {
           $('.cc-video').each(function () {
               $(this)[0].pause();
           })
        });

        formSubjectFromParam();
        fixProductDimensions();

    });
}));
$('.loader-container').fadeOut();
$(window).on("load", function() {
    customIsotope();
    setInterval(function () {
        $('.loader-container').fadeOut();
    }, 200);

});

function fixProductDimensions() {

    if ( $('td.product_dimensions').length > 0 ) {

        var defArray = ['(Largo)', '(Ancho)', '(Alto)'];

        var dimensionsString = $('td.product_dimensions').html();
        var dimensionsArray = dimensionsString.split('x');

        var resultString = '';

        for (var i = 0; i < dimensionsArray.length; i++) {

            resultString += dimensionsArray[i].trim().replace('cm', '').trim() + ' ' + defArray[i] + ' ';

        }

        resultString += 'cm';

        $('td.product_dimensions').html(resultString);
    }
}

function formSubjectFromParam() {
    if ( QueryString.asunto ) {
        $('form select[name="field_subject_recipient"] option').each(function () {
            if ( $(this).val().toLowerCase() == QueryString.asunto.toLowerCase() ) {
                $(this).attr('selected', true);
                return;
            }
        });
    }
}

function showFloatingCart() {
    $('.floating-cart').slideDown();
}

function scrollTo(target) {
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 1000);
}

function initParallaxCashControl() {

    if ($(window).scrollTop() == 0){
        $('.cash-control-content .cc-item').css('opacity', 100);
    }

    $(window).scroll(function () {

        var $cashControlCover = $('.cover.cash-control');

        if ($cashControlCover.length > 0){

            $('.cash-control-content').css('opacity', 1 - (($(window).scrollTop()) / 250));
            // $('.black-banner-row').css('opacity', 1 - (($(window).scrollTop()) / 250));
        }
    });
}

function recalculateCCParallaxItems() {

    var image = { width: 1903, height: 974 };

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    // Get largest dimension increase
    var xScale = windowWidth / image.width;
    var yScale = windowHeight / image.height;
    var scale;
    var yOffset = 0;
    var xOffset = 0;

    if (xScale > yScale) {
        // The image fits perfectly in x axis, stretched in y
        scale = xScale;
        yOffset = (windowHeight - (image.height * scale)) / 2;
    } else {
        // The image fits perfectly in y axis, stretched in x
        scale = yScale;
        xOffset = (windowWidth - (image.width * scale)) / 2;
    }

    $('.cc-item').each(function () {


        var target = { x: $(this).data('x'), y: $(this).data('y'), w: 52 };

        var newW = target.w * scale;
        //
        // console.log(scale);
        // console.log(target.w * scale);

        var hDiff = target.w - newW;

        $(this).css('top', ((target.y) * scale) + yOffset + hDiff);
        $(this).css('left', (target.x) * scale + xOffset);
        $(this).css('width', newW);
    });


}

function customIsotope() {

    var gutter = 20; //px

    var itemGroups = [];
    var tallest = 0;
    var totalWidth = 0;

    $('.subcat-item').each(function () {

        $(this).css('position', 'absolute');

        var width = $(this).width();
        var height = $(this).height();

        if (height > tallest)
            tallest = height;

        $(this).addClass('iso-g' + width);

        if (itemGroups[width]){
            itemGroups[width].push({
                el: $(this)
            });
        } else {
            totalWidth += width;
            itemGroups[width] = [];
            itemGroups[width].width = width;
            itemGroups[width].height = height;
            itemGroups[width].ratio = width / height;
            itemGroups[width].push({
                el: $(this)
            });
        }
    });

    var previousLeft = 0;

    itemGroups.sort(function (g1, g2) {
        return g2.width - g1.width;
    });

    for (var group in itemGroups){
        var g = itemGroups[group];

        if (group > 0)
            previousLeft += gutter;

        if (totalWidth < 1170){
            var wPercent = (g.width / totalWidth) * 100;

            var newW = (($('.iso-cats').outerWidth() / 100) * wPercent) - (gutter / 2);

            var wChangeRate = (((g.width - newW) / g.width) * 100) * -1;

            g.width = newW;

            var newH = g.height + ((g.height / 100) * wChangeRate);

            g.height = newH;
            console.log(newW);
        }

        var itemH = g.height;

        var t = (tallest + ((tallest / 100) * wChangeRate));

        var container = $('.iso-cats');
        if (!container.hasClass('hSet')) {
            container.css('height', t);
            container.addClass('hSet');
        }

        var diff = t - itemH;

        var distance = 0;

        if (diff != 0){
            var groupH = itemH * g.length;

            if (groupH < t) {
                var l = g.length > 1 ? g.length : 1;
                distance = (t - groupH) / l;
            }
        }

        var previousTop = 0;

        for (var i = 0; i < g.length; i++){
            var el = g[i].el;

            if (i > 0)
                previousTop += distance;
            if (i == g.length - 1)
                previousTop += distance;

            el.css('width', g.width);
            el.css('top', previousTop);
            previousTop += itemH;
            el.css('height', g.height);
            el.css('left', previousLeft);
            el.css('opacity', 1);
        }
        previousLeft += g.width;
    }
}