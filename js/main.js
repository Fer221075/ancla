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

        $('')

    });
}));