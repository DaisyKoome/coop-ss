$(document).ready(function(){

    /*--- SEARCH ---*/
    var searchForm = $('.main-search'),
        searchTrigger = $('.btn-search'),
        coverLayer = $('.cover-layer');

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

    $(document).keyup(function(event){
        if( event.which=='27' ){
            closeSearchForm();
        }
    });
    /*--- SCROLLING ---*/
    var $header = $('header');
    var offset = 56;

    $(window).scroll(function(){
        if ($(this).scrollTop() > offset ) {
            $header.addClass('scrolling');
        } else {
            $header.removeClass('scrolling');
        }
    });

    /*---------- EQUAL HEIGHTS ----------*/
    if($('.equal-height').length){
        $('.equal-height').matchHeight();
    }

    $(".lazyestload").unveil(0,function() {
        $(this).on('load', function() {
            $(this).removeClass('lazyestload');
        });
    });

    /*---------- ACCORDION ----------*/
    $(".accordion .title").bind('click', function(e){
        if(!$(this).parent("li").hasClass("content-visible")){
            $(".accordion li").removeClass("content-visible");
            $(".accordion .desc").slideUp(200);
        }
        $(this).next('.desc').slideToggle(200).end().parent('li').toggleClass('content-visible');
        e.preventDefault();
    });


    if($( window ).width() <= 700){
        $(".footer-links .col").removeClass("open");
        $(".footer-links .links-wrap").hide();
        $(".footer-links h5").on('click',function() {
            var sub_nav = $(this).closest(".col").children(".links-wrap");
            if(sub_nav.is(':visible'))
            {
                $(this).removeClass("open");
                sub_nav.slideUp(200);
            }
            else
            {
                $(".footer-links h5").removeClass("open");
                $(this).addClass("open");
                $(".links-wrap").slideUp(200);
                sub_nav.slideDown(200);
            }
            return false;
        });
    }
    else{
        $(".footer-links h5").unbind();
        $(".footer-links .links-wrap").show();
    }

    /*--- Mobile Menu ---*/
    $('.menu-icon').bind('touchstart mousedown', function(e){
        $(".mobile-nav li").removeClass("open");
        $(".sub-nav").slideUp(200);
        $("body").toggleClass("menu-open");
        if($("body").hasClass("search-open")){
            $("body").removeClass("search-open");
        }
        return false;
    });

    $(".has-children .toggle").click(function(e) {
        var sub_nav = $(this).closest("li").children(".sub-nav");
        if(sub_nav.is(':visible'))
        {
            $(this).closest("li").removeClass("open");
            sub_nav.slideUp(200);
        }
        else
        {
            $(".mobile-nav li").removeClass("open");
            $(this).closest("li").addClass("open");
            $(".sub-nav").slideUp(200);
            sub_nav.slideDown(200);
        }

        return false;

    });

    $("#content_mask, .menu-close").bind('touchstart mousedown', function(e){
        $(window).scrollTop(0);
        $(".mobile-nav li").removeClass("open");
        $(".sub-nav").slideUp(200);
        $("body").removeClass("menu-open search-open");
        return false;
    });


});