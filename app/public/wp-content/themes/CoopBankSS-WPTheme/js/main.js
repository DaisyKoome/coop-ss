jQuery(document).ready(function(){

    /*--- SEARCH ---*/
    var searchForm = jQuery('.main-search'),
        searchTrigger = jQuery('.btn-search'),
        coverLayer = jQuery('.cover-layer');

    function closeSearchForm() {
        searchTrigger.removeClass('search-form-visible');
        searchForm.removeClass('is-visible');
        coverLayer.removeClass('search-form-visible');
    }

    searchTrigger.on('click', function(event){
        event.preventDefault();
        if( searchTrigger.hasClass('search-form-visible') ) {
            searchForm.find('form').submit();
        } else {
            searchTrigger.addClass('search-form-visible');
            coverLayer.addClass('search-form-visible');
            searchForm.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                searchForm.find('input[type="search"]').focus().end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
            });
        }
    });

//close search form
    searchForm.on('click', '.btn-search-close', function(event){
        closeSearchForm();
        event.preventDefault();
    });

    coverLayer.on('click', function(){
        closeSearchForm();
    });

    jQuery(document).keyup(function(event){
        if( event.which=='27' ){
            closeSearchForm();
        }
    });
    /*--- SCROLLING ---*/
    var jQueryheader = jQuery('header');
    var offset = 56;

    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > offset ) {
            jQueryheader.addClass('scrolling');
        } else {
            jQueryheader.removeClass('scrolling');
        }
    });

    /*---------- EQUAL HEIGHTS ----------*/
    if(jQuery('.equal-height').length){
        jQuery('.equal-height').matchHeight();
    }

    jQuery(".lazyestload").unveil(0,function() {
        jQuery(this).on('load', function() {
            jQuery(this).removeClass('lazyestload');
        });
    });

    /*---------- ACCORDION ----------*/
    jQuery(".accordion .title").bind('click', function(e){
        if(!jQuery(this).parent("li").hasClass("content-visible")){
            jQuery(".accordion li").removeClass("content-visible");
            jQuery(".accordion .desc").slideUp(200);
        }
        jQuery(this).next('.desc').slideToggle(200).end().parent('li').toggleClass('content-visible');
        e.preventDefault();
    });


    if(jQuery( window ).width() <= 700){
        jQuery(".footer-links .col").removeClass("open");
        jQuery(".footer-links .links-wrap").hide();
        jQuery(".footer-links h5").on('click',function() {
            var sub_nav = jQuery(this).closest(".col").children(".links-wrap");
            if(sub_nav.is(':visible'))
            {
                jQuery(this).removeClass("open");
                sub_nav.slideUp(200);
            }
            else
            {
                jQuery(".footer-links h5").removeClass("open");
                jQuery(this).addClass("open");
                jQuery(".links-wrap").slideUp(200);
                sub_nav.slideDown(200);
            }
            return false;
        });
    }
    else{
        jQuery(".footer-links h5").unbind();
        jQuery(".footer-links .links-wrap").show();
    }

    /*--- Mobile Menu ---*/
    jQuery('.menu-icon').bind('touchstart mousedown', function(e){
        jQuery(".mobile-nav li").removeClass("open");
        jQuery(".sub-nav").slideUp(200);
        jQuery("body").toggleClass("menu-open");
        if(jQuery("body").hasClass("search-open")){
            jQuery("body").removeClass("search-open");
        }
        return false;
    });

    jQuery(".has-children .toggle").click(function(e) {
        var sub_nav = jQuery(this).closest("li").children(".sub-nav");
        if(sub_nav.is(':visible'))
        {
            jQuery(this).closest("li").removeClass("open");
            sub_nav.slideUp(200);
        }
        else
        {
            jQuery(".mobile-nav li").removeClass("open");
            jQuery(this).closest("li").addClass("open");
            jQuery(".sub-nav").slideUp(200);
            sub_nav.slideDown(200);
        }

        return false;

    });

    jQuery("#content_mask, .menu-close").bind('touchstart mousedown', function(e){
        jQuery(window).scrollTop(0);
        jQuery(".mobile-nav li").removeClass("open");
        jQuery(".sub-nav").slideUp(200);
        jQuery("body").removeClass("menu-open search-open");
        return false;
    });

    jQuery(".directors").owlCarousel({
        autoplay:false,
        loop:true,
        margin:32,
        items:3,
        dots: false,
        nav:true,
        responsiveClass:true,
        navText:["<span class='icon-arrow-left'></span>","<span class='icon-arrow-right'></span>"],
        responsive:{
            0:{
                items:1,
            },

            650:{
                items:1,
                nav:true,
            },
            768:{
                items:2,
                nav:true,
            },
            1000:{
                items:3,
                nav:true,
            }
        }

    });





});