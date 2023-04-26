/*
Google Maps Einrichtungsfinder DSGVO
*/

$(document).ready(function () {
    $('.mod_karte').each(function () {

        var mapsData = $(this).find('.googleMap');
        var urlGglCluster = $(mapsData).attr('data-gglmapcluster');
        var urlGglInit = $(mapsData).attr('data-gglmapinit');
        var datapolice = $(this).find('.datapolice');
        var accept = datapolice.find('.switch');
        var mapsDiv = $(this).find('#map');

        if (getAgreeCookie('jsd_googlemap_finder') != 'true') {
            $(mapsDiv).addClass('finder_dsgvo');
            $(accept).on('click', function (ev) {
                ev.preventDefault();
                $(accept).addClass('active');
                setAgreeCookie();
                setTimeout( function() {
                    $(datapolice).attr('style','display: none !important');
                    $(accept).removeClass('active');
                    $(mapsDiv).removeClass('finder_dsgvo');
                    $.getScript(urlGglCluster);
                    $.getScript(urlGglInit);
                }, 1000);
                // location.reload();
            });
        } else {
            $(datapolice).attr('style','display: none !important');
            $(accept).removeClass('active');
            $(mapsDiv).removeClass('finder_dsgvo');
            $.getScript(urlGglCluster);
            $.getScript(urlGglInit);
        }
    });
});
function setAgreeCookie() {
    var expire=new Date();
    expire=new Date(expire.getTime()+7776000000);
    document.cookie="jsd_googlemap_finder=true; expires="+expire;
}
function getAgreeCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

/*
News Ticker (Warnhinweis)
*/
$(document).ready(function () {
    $('.marquee').marquee({
        //duration in milliseconds of the marquee
        duration: 15000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true
    });
    $('.mod_warnhinweis .m_wrap').on('click', function (ev) {
        ev.preventDefault();
        var myself = $(this);
        var close = $(this).next().find('.close');
        $(myself).slideUp();
        $(close).on('click', function (ev) {
            ev.preventDefault();
            $(myself).slideDown();
        });
        // $(this).hide();
    });
    if ($(".mod_warnhinweis")[0]) {
        $('.sf-search-pop').addClass('warning');
    }
});

/*
Load iFrame after accept data police
*/
$(document).ready(function () {
    $('.i_dsgvo').each(function () {
        var self = $(this);
        var url = $(this).attr('data-url');
        var datapolice = $(this).find('.datapolice');
        var accept = datapolice.find('.switch');
        $(self).find('iframe').removeAttr('id');
        $(self).next('.slick').addClass('no_dsgvo');
        $(this).addClass('dsgvo');
        $(accept).on('click', function (ev) {
            ev.preventDefault();
            $(self).find('iframe').attr('id', 'vid_frame');
            $(self).next('.slick').removeClass('no_dsgvo');
            $(accept).addClass('active');
            setTimeout( function() {
                $(self).find('iframe').attr('src', url);
                $(datapolice).attr('style','display: none !important');
                $(accept).removeClass('active');
                $(self).removeClass('dsgvo');
            }, 1000);
        });
    });
});

$(document).ready(function () {
    // response test
    // console.log('hello jsd');

    var $breakpoint = {
        // Briefmarke
        xxs: 320,
        // Extra small screen / phone
        xs: 320,
        // Small screen / phone
        sm: 384,
        // Medium screen / tablet
        md: 768,
        // Large screen / desktop
        lg: 1024,
        // Extra large screen / wide desktop
        xl: 1280
    };

    // console.log(breakpoint.sm);

    // bt carousel: display active item number
    $('.carousel').each(function () {
        var $carousel_id = ('#' + $(this).data('carousel-id'));
        $($carousel_id).on('slide.bs.carousel', function (e) {
            if (e.to) {
                $($carousel_id + ' .num .start').hide();
            }
            $($carousel_id + ' .num').html(e.to + 1);
        });
    });

    $('.slick').each(function () {

        // slich uid
        var slickUid = $(this).data('slick-class');
        // console.log(slickUid);

        // slick div-elements wrap
        var slickElement = ('.' + $(this).data('slick-class'));
        // console.log(slickElement);

        // slick navi div data
        var slickNavi = ('.' + slickUid + '-navi');

        // slick current element
        var slickSetCurrentSlide = (slickNavi + ' .num');

        if (slickNavi != null) {
            $(slickElement).on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $(slickSetCurrentSlide).html(i);
            });
        }

        // slick global options
        $(slickElement).slick({
            autoplay: false,
            autoplaySpeed: 5000,
            infinite: true,
            speed: 500,
            adaptiveHeight: true,
            // cssEase: 'linear'
        });

    });

    // sticky header
    $(window).scroll(function () {
        var sticky = $('.layout_default .sticky-menu-cta'),
            scroll = $(window).scrollTop();

        if (scroll >= 80) {
            sticky.addClass('scroll');
            $('.layout_default .scroll .item').attr('style', 'display:none');
        }
        else {
            $('.layout_default .scroll .item').removeAttr('style');
            sticky.removeClass('scroll');
        }
    });
/*
    // megamenu open/close
    $('.mm_open').click(function (e) {
        e.preventDefault();
        $('.mm').fadeIn(150).removeClass('closed');
    });
    $('.mm_close').click(function (e) {
        e.preventDefault();
        $('.mm').fadeOut(150).addClass('closed');
    });
*/
    // megamenu slideIn treelevel
    // $('.mm').on("click", function (e) {

    //     e.preventDefault();

    //     var target = $(e.target);
    //     var link = $(target).closest('li.submenu').children('a');
    //     var sub_ul = $(link).next('ul.subitems');

    //     if ($(link).hasClass('active')) {
    //         $(sub_ul).fadeOut(150).removeClass('active');
    //         $(link).removeClass('active');
    //     }
    //     else {
    //         $(sub_ul).fadeIn(150).addClass('active');
    //         $(link).addClass('active');
    //         $(parent_sub_ul).addClass('active');
    //     }
    // });

    // footer share box
    $('.shareprint .share').on('click', function (e) {

        e.preventDefault();
        var target_box = $(this).parent('p').next('.share-box');
        $('.shareprint .close').on('click', function (e) {
            $(target_box).fadeOut(150, "linear");
        });
        $(target_box).fadeToggle(150, "linear");

    });

    // back-to-top button
    var btn = $('#btt-button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '600');
    });

    // hide breadcrumb links between
    var breadcrumb_el_first = $("div.treelevel-wrap nav ol > li:nth(2)");
    var breadcrumb_items = $("div.treelevel-wrap nav ol > li").length;

    if(breadcrumb_items > 3) {
        $(breadcrumb_el_first).before("<li class='list-inline-item'><span class='breadcrumb_dots bold'>···</span><span class='raquo'>›</span></li>");
        $(breadcrumb_el_first).nextUntil('li.current').addBack().wrapAll("<li class='list-inline-item wrap'><ol class='list-unstyled list-inline breadcrumb_hide'></ol></li>");

        $('.breadcrumb_dots').on('click', function (e) {
            e.preventDefault();
            $(this).parent('li').hide();
            $('.breadcrumb_hide').fadeToggle(150, "linear").css("display", "inline");
        });
    }

    // lightbox
    if (jQuery(window).width() < 768) {
        // console.log('current width:' + jQuery(window).width());
        $.featherlight.prototype.beforeOpen = function (event) {
            console.log(this); // this contains all related elements
            return false; // prevent lightbox from opening
        }
    }

    // Calls the selectBoxIt method on your HTML select box
    $(function () {

        var selectBox = $(".select-wrap select").selectBoxIt();

    });

    // selectBoIt parsley error check
    var selectCheckError = $('.mod_mailform .select-wrap select');
    var selectCheckTargetAddClass = $('.mod_mailform .select-wrap');
    $('.mod_mailform .btn').click(function () {
        if ($(selectCheckError).prop('required')) {
            if (!selectCheckError.val()) {
                $(selectCheckTargetAddClass).addClass('parsley-error');
            }
        }
    });
    $(selectCheckError).on('change', function () {
        if ($(this).prop('required')) {
            if(this.value == '') {
                $(this).parent(selectCheckTargetAddClass).addClass('parsley-error');
            } else {
                $(this).parent(selectCheckTargetAddClass).removeClass('parsley-error');
            }
        }
    });
    // multiselect
    $('.selectmulti-wrap select[multiple]').multiselect({
        columns: 1,
        texts: {
            placeholder: 'Bitte auswählen',
        }
    });
    var selectMultiCheckError = $('.mod_mailform .selectmulti-wrap select[multiple]');
    var selectMultiCheckTargetAddClass = $('.mod_mailform .selectmulti-wrap');
    $('.mod_mailform .btn').click(function () {
        if ($(selectMultiCheckError).prop('required')) {
            if (selectMultiCheckError.val() == '') {
                $(selectMultiCheckTargetAddClass).addClass('parsley-error');
            }
        }
    });
    $(selectMultiCheckError).on('change', function () {
        if ($(this).prop('required')) {
            if ($(this).val() == '') {
                $(this).parent(selectMultiCheckTargetAddClass).addClass('parsley-error');
            } else {
                $(this).parent(selectMultiCheckTargetAddClass).removeClass('parsley-error');
            }
        }
    });

    // form fileupload
    $(".mod_mailform").on("change", ".file-upload-field", function () {
        $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
    });
    // date field, if value
    $(".mod_mailform").on("change", ".powermail_date", function () {
        $(this).addClass('active');
    });

    // var formInstance = $('.mod_mailform').parsley();
    // console.log(formInstance);

    // Suche (Lupe im header) open/close
    $('.sf-search-pop-close').click(function (e) {
        e.preventDefault();
        $('.sf-search-pop').fadeOut(150).removeClass('show');
    });
    $('.mod_megamenu .item .suche').click(function (e) {
        e.preventDefault();
        $('.sf-search-pop').fadeIn(150).addClass('show');
    });

    // .mod_ankerliste smooth scrolling with offset
    $('.mod_ankerliste a[href*="#"]:not([href="#"])').click(function() {
        var offset = -80;
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top + offset
                }, 1000);
                return false;
            }
        }
    });

});



$(window).resize(function () {
    if (jQuery(window).width() < 768) {
        // console.log('rezize: ' + jQuery(window).width());
        $.featherlight.prototype.beforeOpen = function (event) {
            console.log(this); // this contains all related elements
            return false; // prevent lightbox from opening
        }
    }
});

// ekomi liste next/prev button scroll-to-top
function jump(h) {
    var contents = $('#'+ h);
    $('html, body').animate({ scrollTop: ($(contents).offset().top) }, 0);
};
