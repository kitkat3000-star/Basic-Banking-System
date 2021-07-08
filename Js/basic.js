$(function() {

    'use strict';

    (function() {

        var aside = $('.side-nav'),

            showAsideBtn = $('.show-side-btn'),

            contents = $('#contents');

        showAsideBtn.on("click", function() {

            $("#" + $(this).data('show')).toggleClass('show-side-nav');

            contents.toggleClass('margin');

        });

        if ($(window).width() <= 767) {

            aside.addClass('show-side-nav');

        }
        $(window).on('resize', function() {

            if ($(window).width() > 767) {

                aside.removeClass('show-side-nav');

            }

        });

    }());
});