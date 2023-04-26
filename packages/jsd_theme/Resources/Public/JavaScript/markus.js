/**
 * Markus Linne Damiontools UG
 * Anpasungen für JSD Webseite
 * Im Auftrag für MeyerMisginMedia
 * Berlin 2019
 */
var breiteResponsiveBreak = 1023;
var sliderKlasseFuerBreak = '.mod_3-er-teaser-anpassen';
var megaMenuBreiteDesktop = 1280;

jQuery(document).ready(function () {
    slickSliderMobile();
    megaMenuDektopClass();
    megaMenuClickVerhalten();
    einrichtungMenuAufZu();
    megaMenuStatusStart();
    einrichtungsMenuMobileAuf()
    einrichtungMenuAufZuMobile();
  //  menuEinrichtungLinks();


    if (jQuery('.mod_navieinrichtung').length > 0) {
        var referenzHohe = jQuery('.layout_einrichtungen .mod_navieinrichtung .menu-e-div .menu-e').offset().top;
        var stickyTop = jQuery('.mod_navieinrichtung');
        modEinrichtungSticky(referenzHohe);
  //      menuEinrichtungBreite();
    }

    jQuery(window).scroll(function () {
     //   menuEinrichtungLinks();
        if (jQuery('.mod_navieinrichtung').length > 0) {
            modEinrichtungSticky(referenzHohe);
     //       menuEinrichtungBreite();
        }
    });

    jQuery(window).resize(function () {
 //       slickSliderMobile();
        megaMenuDektopClass();
        einrichtungsMenuMobileAuf();
     //   menuEinrichtungLinks();
        if (jQuery('.mod_navieinrichtung').length > 0) {
            modEinrichtungSticky(referenzHohe);
      //      menuEinrichtungBreite();
        }
    });

    let scrollAktuell = 0;

    // megamenu open/close
    $('.mm_open').click(function (e) {
        e.preventDefault();
        scrollAktuell = jQuery( 'html,body' ).scrollTop();
        jQuery( 'html,body' ).scrollTop( 0 );
        $('.mm').fadeIn(150).removeClass('closed');
        if (jQuery(window).width() < 1023) {
           //jQuery('.lvl-0 a.active').removeClass('active');
           //jQuery('.mm a.a-lvl-0').removeClass('a-lvl-0');
           //jQuery('.mm a.a-lvl-1').removeClass('a-lvl-1');
           //jQuery('.mm a.a-lvl-2').removeClass('a-lvl-2');
           //jQuery('.mm a.a-lvl-3').removeClass('a-lvl-3');
           //jQuery('mm li.submenu.active').removeClass('active');
           jQuery( ".mm" ).find( "li.submenu.active" ).removeClass('active');
           jQuery( ".mm" ).find( "a.active" ).removeClass('active');
           megaMenuStatus();
        }
    });
    $('.mm_close').click(function (e) {
        e.preventDefault();
        jQuery( 'html,body' ).scrollTop( scrollAktuell );
        $('.mm').fadeOut(150).addClass('closed');
    });

    jQuery( '#mMcycleId-1 a' ).click(function(e){
        e.preventDefault();
        $('.mm').fadeIn(150).removeClass('closed');
        jQuery( '.mainmenu .active' ).removeClass( 'active' );
        jQuery( '.mainmenu .current' ).removeClass( 'current' );
        jQuery( '.mainmenu .offen' ).removeClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-1' ).parent().addClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-1' ).addClass( 'active' );
        if( jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-1' ).parent().hasClass( 'submenu' ) ){
            jQuery('.mod_megamenu .mm').addClass('offeneebenen1');
        } else {
            jQuery('.mod_megamenu .mm').removeClass('offeneebenen1');
        }
    });
    jQuery( '#mMcycleId-2 a' ).click(function(e){
        e.preventDefault();
        jQuery('.mm_open').click();
        jQuery( '.mainmenu .active' ).removeClass( 'active' );
        jQuery( '.mainmenu .current' ).removeClass( 'current' );
        jQuery( '.mainmenu .offen' ).removeClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-2' ).parent().addClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-2' ).addClass( 'active' );
        if( jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-2' ).parent().hasClass( 'submenu' ) ){
            jQuery('.mod_megamenu .mm').addClass('offeneebenen1');
        } else {
            jQuery('.mod_megamenu .mm').removeClass('offeneebenen1');
        }
    });
    jQuery( '#mMcycleId-3 a' ).click(function(e){
        e.preventDefault();
        jQuery('.mm_open').click();
        jQuery( '.mainmenu .active' ).removeClass( 'active' );
        jQuery( '.mainmenu .current' ).removeClass( 'current' );
        jQuery( '.mainmenu .offen' ).removeClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-3' ).parent().addClass( 'offen' );
        jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-3' ).addClass( 'active' );
        if( jQuery( '.mainmenu ul.lvl-0 li a.aha-lvl-0-cycle-3' ).parent().hasClass( 'submenu' ) ){
            jQuery('.mod_megamenu .mm').addClass('offeneebenen1');
        } else {
            jQuery('.mod_megamenu .mm').removeClass('offeneebenen1');
        }
    });
/* Selectbox Verhalten ausgeklammert, da das Grundsätzliche Verhalten schon falsch ist und hier scheinbar die Struktur angepasst werden muss
    jQuery('select.powermail_select').change( function() {
        if( jQuery( this ).parent().hasClass( 'parsley-error' ) ){
            console.log( "fehler" );
            var elternElement = jQuery( this.$element ).parent().parent().find( 'label' );
            jQuery( this.$element ).parent().parent().addClass( 'formularfeldfehler' );

            if( jQuery( elternElement ).find( 'span.fehlermeldung' ).length == 0 ){
                var FehlerMeldungsLabel = "<span class='fehlermeldung'>" + jQuery( elternElement ).attr( 'title' ) + "</span>";
                jQuery( elternElement ).append( FehlerMeldungsLabel );
            }
        } else {
            console.log( "kein fehler" );
            jQuery( this.$element ).parent().parent().removeClass( 'formularfeldfehler' );
        }
    });
    */

    // window.Parsley.on('field:error', function() {
    //     var feldType = jQuery( this.$element ).attr( 'type' );
    //     if( feldType == "select-multiple" ){
    //         console.log( "selectbox" );
    //     }
    //     if( jQuery( this.$element ).attr( 'data-parsley-class-handler' ) == ".powermail_fieldwrap_checkboxvollebreite div:first > div" ||
    //         jQuery( this.$element ).attr( 'data-parsley-class-handler' ) == ".powermail_fieldwrap_checkboxinlinevollezeilenbreite div:first > div" ){
    //         var elternElement = jQuery( this.$element ).parent().parent().parent().parent().parent().find( 'label' );
    //         jQuery( this.$element ).parent().parent().parent().parent().parent().addClass( 'formularfeldfehler' );
    //     } else if( feldType == "checkbox" || feldType == "radio" ){
    //         var elternElement = jQuery( this.$element ).parent().parent().parent().parent().find( 'label' );
    //         jQuery( this.$element ).parent().parent().parent().parent().addClass( 'formularfeldfehler' );
    //     } else {
    //         var elternElement = jQuery( this.$element ).parent().parent().find( 'label' );
    //         jQuery( this.$element ).parent().parent().addClass( 'formularfeldfehler' );
    //     }

    //     if( jQuery( elternElement ).find( 'span.fehlermeldung' ).length == 0 ){
    //         var FehlerMeldungsLabel = "<span class='fehlermeldung'>" + jQuery( elternElement ).attr( 'title' ) + "</span>";
    //         jQuery( elternElement[0] ).append( FehlerMeldungsLabel );
    //     }
    // });
    // window.Parsley.on('field:success', function() {
    //     var feldType = jQuery( this.$element ).attr( 'type' );
    //     if( jQuery( this.$element ).attr( 'data-parsley-class-handler' ) == ".powermail_fieldwrap_checkboxvollebreite div:first > div"  ||
    //         jQuery( this.$element ).attr( 'data-parsley-class-handler' ) == ".powermail_fieldwrap_checkboxinlinevollezeilenbreite div:first > div" ){
    //         jQuery( this.$element ).parent().parent().parent().parent().parent().removeClass( 'formularfeldfehler' );
    //     } else if( feldType == "checkbox" || feldType == "radio" ){
    //         jQuery( this.$element ).parent().parent().parent().parent().removeClass( 'formularfeldfehler' );
    //     } else {
    //         jQuery( this.$element ).parent().parent().removeClass( 'formularfeldfehler' );
    //     }
    // });

    // jQuery( 'form.powermail_form input' ).change(function(){
    //     var aktuellerWert = jQuery( this ).val();

    //     if( jQuery( this ).attr( 'type' ) == "text" || jQuery( this ).attr( 'type' ) == "email" || jQuery( this ).attr( 'type' ) == "date" || jQuery( this ).attr( 'type' ) == "file" ){
    //         var labels = jQuery( this ).parent().parent().find( 'label' );
    //     } else if( jQuery( this ).attr( 'type' ) == 'radio' || jQuery( this ).attr( 'type' ) == 'checkbox' ){
    //         if( jQuery( this ).attr( 'data-parsley-multiple' ) == 'checkboxnormal' || jQuery( this ).attr( 'data-parsley-multiple' ) == 'tx_powermail_pi1fieldradionormal' ){
    //             var labels = jQuery( this ).parent().parent().parent().parent().find( 'label' );
    //             if( jQuery( this ).attr( 'type' ) == 'checkbox' && jQuery( this ).parent().parent().find( ':checked' ).length == 0 ){
    //                 aktuellerWert = "";
    //             }
    //         } else {
    //             var labels = jQuery( this ).parent().parent().parent().parent().parent().find( 'label' );
    //             if( jQuery( this ).attr( 'type' ) == 'checkbox' && jQuery( this ).parent().parent().parent().find( ':checked' ).length == 0 ){
    //                 aktuellerWert = "";
    //             }
    //         }
    //     }

    //     if( aktuellerWert != "" ) {
    //         console.log( labels );
    //         jQuery( labels[0] ).css( 'font-family', 'Neue Plak Text W04 Regular' );
    //     } else {
    //         console.log( labels );
    //         jQuery( labels[0] ).css( 'font-family', 'Neue Plak Text W04 bold' );
    //     }
    // });

    // jQuery( 'form.powermail_form textarea' ).change(function(){
    //     var aktuellerWert = jQuery( this ).val();
    //     var labels = jQuery( this ).parent().parent().find( 'label' );

    //     if( aktuellerWert != "" ) {
    //         console.log( labels );
    //         jQuery( labels[0] ).css( 'font-family', 'Neue Plak Text W04 Regular' );
    //     } else {
    //         console.log( labels );
    //         jQuery( labels[0] ).css( 'font-family', 'Neue Plak Text W04 bold' );
    //     }
    // });

    // jQuery( 'form.powermail_form select' ).change(function(){
    //     var aktuellerWert = jQuery( this ).val();
    //     var aktuellerId = jQuery( this ).attr( 'id' );
    //     console.log( aktuellerWert + " : " + aktuellerId );

    //     if( aktuellerWert != "" ){
    //         jQuery( "#" + aktuellerId + "SelectBoxItContainer #" + aktuellerId + "SelectBoxItText" ).css( 'font-weight', 'bold' );
    //         jQuery( 'label[for=' + aktuellerId + ']' ).css( 'font-family', 'Neue Plak Text W04 Regular' );
    //     } else {
    //         jQuery( "#" + aktuellerId + "SelectBoxItContainer #" + aktuellerId + "SelectBoxItText" ).css( 'font-weight', 'normal' );
    //         jQuery( 'label[for=' + aktuellerId + ']' ).css( 'font-family', 'Neue Plak Text W04 bold' );
    //     }

    // });

});

function menuEinrichtungBreite() {
    var einrichtungLogoBreite = jQuery( '.layout_einrichtungen .mod_navieinrichtung .logo-e' ).outerWidth();
    var einrichtungMenuBreite = jQuery( '.layout_einrichtungen .mod_navieinrichtung .menu-e' ).outerWidth();
    jQuery( '.layout_einrichtungen .mod_navieinrichtung' ).width( (einrichtungLogoBreite + einrichtungMenuBreite) );
}

function menuEinrichtungLinks() {
    if (jQuery('.layout_einrichtungen .menu_lists.fixed').length > 0) {
        if (jQuery(window).width() < 1023) {
            var menuPunktBreite = jQuery('.layout_einrichtungen .menu_lists li.hasSub').outerWidth();
            var menuLogoBreite = jQuery('.layout_einrichtungen .mod_navieinrichtung .logo-e').outerWidth();
            var seitenBreite = jQuery(window).width();

            var abstandLinks = ((seitenBreite - (menuPunktBreite + menuLogoBreite)) / 2) + menuLogoBreite;
            jQuery('.layout_einrichtungen .menu_lists').css('left', abstandLinks);
        } else {
            var headerBreite = jQuery('.layout_einrichtungen section.subheader').outerWidth();
            var menuLogoBreite = jQuery('.layout_einrichtungen .mod_navieinrichtung .logo-e').outerWidth();
            var seitenBreite = jQuery(window).width();

            var abstandLinks = ((seitenBreite - headerBreite) / 2) + menuLogoBreite;
            jQuery('.layout_einrichtungen .menu_lists').css('left', abstandLinks);
        }
    } else {
        jQuery('.layout_einrichtungen .menu_lists').css('left', 'auto');
    }
}

function modEinrichtungSticky(referenzHohe) {
    var scrollHoehe = jQuery(window).scrollTop();
    var einrichtungMenuHoehe = jQuery( '.layout_einrichtungen .mod_navieinrichtung .menu_lists' ).height();
/*
    var headerHoehe = jQuery('section.header').outerHeight();
    var subHeaderHoehe = jQuery('section.subheader').outerHeight();
    var hoheMenuPunkt = jQuery('.layout_einrichtungen .menu_lists li.hasSub').outerHeight();
    var referenzHohe = headerHoehe + subHeaderHoehe - hoheMenuPunkt;

    var referenzHohe = jQuery('.layout_einrichtungen .mod_navieinrichtung .menu-e-div').offset().top;
*/
    console.log( "Referenzhöhe alt: " + referenzHohe );

    if (scrollHoehe > referenzHohe) {
        jQuery('.layout_einrichtungen .mod_navieinrichtung .menu-e-div').addClass('fixed');
        jQuery( '.layout_einrichtungen .mod_navieinrichtung .menu-e' ).height( einrichtungMenuHoehe );
    } else {
        jQuery('.layout_einrichtungen .mod_navieinrichtung .menu-e-div').removeClass('fixed');
        jQuery( '.layout_einrichtungen .mod_navieinrichtung .menu-e' ).height( 'auto' );
    }
}

function megaMenuStatusStart() {
    var anzahlOffenerUntermenues = jQuery('.mod_megamenu li.active');
    var anzahlOffenerUntermenues1 = jQuery('.mod_megamenu li.current');
    var listeUnterMenu = jQuery(anzahlOffenerUntermenues1).find(" ul");
    var count = 0;

    for (i = 0; i < anzahlOffenerUntermenues.length; i++) {
        listeUnterMenus = jQuery(anzahlOffenerUntermenues[i]).find(" ul");
        if (listeUnterMenus.length > 0) {
            count += 1;
        }
    }

    if (listeUnterMenu.length > 0) {
        count += 1;
    }

    if (count > 0) {
        jQuery('.mod_megamenu .mm').addClass('offeneebenen' + count);
    }
}

function megaMenuStatus() {
    var anzahlOffenerUntermenues = jQuery('.mod_megamenu li.offen a.active.a-lvl-0').parent();
    var aktiveLinks = jQuery( anzahlOffenerUntermenues ).find( '.active' );
    var count = aktiveLinks.length;
    jQuery('.mod_megamenu .mm.offeneebenen1').removeClass('offeneebenen1');
    jQuery('.mod_megamenu .mm.offeneebenen2').removeClass('offeneebenen2');

    if (count > 0) {
        jQuery('.mod_megamenu .mm').addClass('offeneebenen' + count);
    }
}
function megaMenuStatusClicked() {


}

function einrichtungsMenuMobileAuf() {
    var fensterBreite = jQuery(window).width();
    if (fensterBreite < 1023) {
        jQuery('.mod_navieinrichtung .tabcontent ul.sub-e').show();
    } else {
        jQuery('.mod_navieinrichtung .tabcontent ul.sub-e').hide();
    }
}

function einrichtungMenuAufZuMobile() {
    jQuery('.mod_navieinrichtung .menu-e-tabs > li span.menu-head').click(function (e) {
        e.preventDefault();
        var fensterBreite = jQuery(window).width();
        if (fensterBreite < 786) {
            if (jQuery('.mod_navieinrichtung .tabcontent').hasClass('active')) {
                jQuery('.mod_navieinrichtung .tabcontent').removeClass('active');
                jQuery('.mod_navieinrichtung .tabcontent').hide();
                jQuery(this).removeClass('active');
                jQuery(this).parent().parent().parent().removeClass('active');
            } else {
                jQuery('.mod_navieinrichtung .tabcontent').addClass('active');
                jQuery('.mod_navieinrichtung .tabcontent').show();
                jQuery(this).addClass('active');
                jQuery(this).parent().parent().parent().addClass('active');
            }
        }
    });
}

function einrichtungMenuAufZu() {
    jQuery('.mod_navieinrichtung .menu-e-tabs > li.hasSub').click(function (e) {
        e.preventDefault();
        var fensterBreite = jQuery(window).width();
        if (fensterBreite < 786) {
            jQuery('.mod_navieinrichtung .tabcontent ul.sub-e').show();
        } else {
            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
                jQuery('.mod_navieinrichtung .tabcontent').slideToggle(150).removeClass('open');
            } else {
                jQuery('.mod_navieinrichtung .menu-e-tabs > li.hasSub.active').removeClass('active');
                jQuery(this).addClass('active');
                if (!jQuery('.mod_navieinrichtung .tabcontent').hasClass('open')) {
                    jQuery('.mod_navieinrichtung .tabcontent').slideToggle(150).addClass('open');
                }
                jQuery('.mod_navieinrichtung .tabcontent ul.sub-e').hide();
                var einschaltListe = jQuery(this).find("span").attr('aria-controls');
                jQuery('.mod_navieinrichtung .tabcontent ul#' + einschaltListe).show();
            }
        }
    });

    $('.mod_navieinrichtung .menu-e .tabcontent .menu-head.haveLinks').click(function (e) {
        e.preventDefault();
        var fensterBreite = jQuery(window).width();
        if (fensterBreite < 786) {
            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
                jQuery(this).parent().find('ul').hide(150).removeClass('open');
            } else {
                jQuery(this).addClass('active');
                jQuery(this).parent().find('ul').show(150).addClass('open');
            }
        } else {
            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
                jQuery('.mod_navieinrichtung .tabcontent .sub-e li ul').hide(150).removeClass('open');
            } else {
                jQuery(this).addClass('active');
                jQuery('.mod_navieinrichtung .tabcontent .sub-e li ul').show(150).addClass('open');
            }
        }
    });
}

function megaMenuClickVerhalten() {
    jQuery('.mod_megamenu li.submenu a').click(function (e) {
            if ( ! jQuery(this).parent().hasClass('submenu')) {
                //console.log("closemenufast");
                jQuery( ".mod_megamenu .mm" ).fadeOut( "slow" );
                //jQuery('.mod_megamenu .mm').addClass('closed');
            }
           //console.log('helllllo');
           jQuery('.lvl-0').scrollTop(0);
           jQuery('.lvl-1').scrollTop(0);
        if (jQuery(this).parent().parent().hasClass('lvl-0')) {
           //console.log(jQuery('.submenu a.current.active').parent().parent());
           jQuery('a.current.active').parent().parent().parent().removeClass('active');
           jQuery('a.current.active').parent().parent().parent().children('a.active').removeClass('active');
           jQuery('a.current.active').parents('.offen').removeClass('offen');
           jQuery('a.current.active').parents('.lvl-1 submenu.active').removeClass('active');
           jQuery('.submenu a.current.active').removeClass('active');
           jQuery('.lvl-1 .submenu.offen').removeClass('offen');
           jQuery('.submenu.current').removeClass('current');
           //console.log("shredder");
           megaMenuStatus();
           jQuery('.mod_megamenu .mm').removeClass('offeneebenen2');
           jQuery('.mod_megamenu .mm').addClass('offeneebenen1');
        }
        if (jQuery(this).hasClass('a-lvl-1')){
          megaMenuStatus();
        }
        if (jQuery(this).parent().hasClass('submenu')) {
            e.preventDefault();
            jQuery(this).parent().siblings().removeClass('active');
        }
        if (jQuery(this).parent().hasClass('offen')) {
            jQuery(this).parent().removeClass('offen');
            jQuery(this).parent().find('li.submenu.offen').removeClass('offen');
            jQuery(this).parent().find('li .active').removeClass('active');
            jQuery(this).removeClass('active');
            jQuery(this).parent().parent().parent().removeClass('unteractive');
            jQuery(this).parent().parent().find('li').removeClass('ausblendenmobile');
            jQuery(this).parent().parent().scrollTop(0);
            //console.log('helllllo');
        } else {
            if( ! jQuery( this ).hasClass( 'a-lvl-0' ) ) {
                jQuery(this).parent().parent().find('.offen').removeClass('offen');
                jQuery(this).parent().addClass('offen');
                jQuery(this).parent().parent().parent().addClass('unteractive');
                jQuery(this).parent().parent().find('.active').removeClass('active');
                jQuery(this).addClass('active');
                jQuery(this).parent().parent().find('li').addClass('ausblendenmobile');
                //console.log('helllllo');
                jQuery(window).scrollTop(0);
                jQuery('.bs3').remove();
                jQuery(this).children().clone().insertAfter(jQuery(this).next().children('.bs2')).wrap( "<li class='backslide bs3'></li>" );
            } else {
                jQuery('.backslide').remove();
                jQuery('.slippteaser').remove();
                jQuery(this).children().clone().prependTo(jQuery(this).next()).wrap( "<li class='backslide bs1'></li>" );
                jQuery(this).children().clone().prependTo(jQuery(this).next().children().children('.lvl-2')).wrap( "<li class='backslide bs2'></li>" );
                jQuery('.mm_ce .mod_schnellzugriffsteaser .row.num-1').clone().appendTo(jQuery(this).next()).wrap( "<li class='slippteaser'></li>" );
                jQuery( '.mm .a-lvl-0.active' ).removeClass( 'active' );
                jQuery( '.mm .a-lvl-0' ).parent().removeClass( 'offen' );
                jQuery(this).addClass('active');
                jQuery(this).parent().addClass('offen');
                jQuery( '.mm .a-lvl-0' ).each(function(){
                    if( ! jQuery( this ).hasClass( 'active' ) ){
                        jQuery( this ).parent().addClass('ausblendenmobile');
                    }
                });
            }

        }
        if (jQuery(this).hasClass('a-lvl-1')){
          if (jQuery(this).parent().parent().hasClass('lvl-1') && jQuery(this).parent().hasClass('submenu')){
          console.log("level2");
          megaMenuStatus();
          jQuery('.mod_megamenu .mm').addClass('offeneebenen2');
         }
        }
        //megaMenuStatus();
    });
    jQuery(document).on('click', '.lvl-2 .bs3', function(){
       //console.log("hey!!!!!!!!!!!!!!!!!!!!!!");
       jQuery(this).parent().parent().removeClass('offen');
       jQuery(this).parent().parent().children('a').removeClass('active');
       //jQuery(this).parent().parent().parent().parent().removeClass('offen');
       //jQuery(this).parent().parent().parent().parent().children('a').removeClass('active');
       //jQuery('mm.offeneebenen2').addClass('.offeneebenen1');
       //jQuery('.mm').removeClass('.offeneebenen2');
       jQuery('.lvl-0').scrollTop(0);
       jQuery('.lvl-1').scrollTop(0);
       jQuery('.lvl-2').scrollTop(0);
       megaMenuStatus();
    });
    jQuery(document).on('click', '.lvl-2 .bs2', function(){
       //console.log("hey!!!!!!!!!!!!!!!!!!!!!!");
       jQuery(this).parent().parent().removeClass('offen');
       jQuery(this).parent().parent().children('a').removeClass('active');
       jQuery(this).parent().parent().parent().parent().removeClass('offen');
       jQuery(this).parent().parent().parent().parent().children('a').removeClass('active');
       //jQuery('mm.offeneebenen2').addClass('.offeneebenen1');
       //jQuery('.mm').removeClass('.offeneebenen2');
       jQuery('.lvl-0').scrollTop(0);
       jQuery('.lvl-1').scrollTop(0);
       jQuery('.lvl-2').scrollTop(0);
       megaMenuStatus();
    });
    jQuery(document).on('click', '.bs1', function(){
       //console.log("hey!!!!!!!!!!!!!!!!!!!!!!");
       jQuery(this).parent().parent().removeClass('offen');
       jQuery(this).parent().parent().parent().children('a').removeClass('active');
       //jQuery('.mm').removeClass('.offeneebenen1');
       jQuery('.lvl-0').scrollTop(0);
       jQuery('.lvl-1').scrollTop(0);
       jQuery('.lvl-2').scrollTop(0);
       megaMenuStatus();
    });
}

function megaMenuDektopClass() {
    var breite = jQuery(window).width();

    if (breite < megaMenuBreiteDesktop) {
        if (!jQuery('section.header .mod_megamenu').hasClass('mobile')) {
            jQuery('section.header .mod_megamenu').addClass('mobile');
            jQuery('section.header .mod_megamenu').removeClass('desktop');
        }
    } else {
        if (!jQuery('section.header .mod_megamenu').hasClass('desktop')) {
            jQuery('section.header .mod_megamenu').addClass('desktop');
            jQuery('section.header .mod_megamenu').removeClass('mobile');
        }

    }
}

function slickSliderMobile() {
    var slider = jQuery(sliderKlasseFuerBreak);
    var sollSlider = jQuery('.slick .row');
    var breite = jQuery(window).width();

    if (slider.length > 0) {
        if (breite < breiteResponsiveBreak) {
            jQuery(sollSlider).each(function () {
                if (typeof jQuery(this).attr('data-slick') !== "undefined") {
                    if (!jQuery(this).hasClass('slick-slider')) {
                        var slickParameter = jQuery.parseJSON(jQuery(this).attr('data-slick'));
                        jQuery(this).slick(slickParameter);
                    }
                }
            });
        } else {
            jQuery(slider).each(function () {
                jQuery(this).slick('unslick');
            });
        }
    }
}

function weiterLesen(dies) {
    var elternElement = jQuery( dies ).parent().parent();
    jQuery( elternElement ).find( '.commenttext' ).hide();
    jQuery( elternElement ).find( '.commenttext1' ).show();
}
