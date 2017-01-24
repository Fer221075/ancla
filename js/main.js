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

        customIsotope();

    });
}));

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