(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        page = $('html, body'),
        body = $('body');
    function menuMobile() {
        var button = $('.js-menu'),
            slide = $('.js-slide');
        if(windowSize < 980) {
            button.click(function() {
                slide.stop().slideToggle(300);
                page.toggleClass('noscroll');
                $(this).toggleClass('open');
            });
        }
    }
    function masonry() {
        var item = $('.item');
        if(windowSize < 980) {
            $('a.item:nth-of-type(6n + 1)').addClass('item--big');
            $('a.item:nth-of-type(5n)').addClass('item--big');
        } else {
            $('a.item:nth-of-type(3n + 1)').addClass('item--big');
        }
        var $grid = $('.js-grid').imagesLoaded( function() {
            $grid.masonry({
                // options
                itemSelector: '.item',
                columnWidth: '.item--sizer',
                percentPosition: true
            });
        });
    }
    function masonryBlog() {
        var $grid = $('.js-blog').imagesLoaded( function() {
            $grid.masonry({
                // options
                itemSelector: '.item__news',
                columnWidth: '.item__news',
                percentPosition: true
            });
        });
    }
    function filtros() {
        var text = $('.js-text'),
            filter = $('.js-filter'),
            child = $('.js-filter li'),
            total = 0;
        text.click(function() {
            filter.stop().slideToggle();
        });
        child.click(function() {
            var name = $(this).text();
            text.empty();
            text.text(name);
            filter.slideUp();
        });
        if(windowSize > 980) {
            child.each(function() {
                total += parseInt($(this).outerWidth(true));
                var lenght = total + 20;
                filter.css('width', lenght);
            }); 
        }
    }
    function slider() {
        var $container = $('.js-slider'), 
            $grid = $container.imagesLoaded(function() {
                $container.flexslider({
                    animation: 'slide',
                    controlNav: false,
                    controlsContainer: $(".custom-controls-container"),
                    prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                    nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                    start: function(slider) {
                        $('.total-slides').text(slider.count);
                        $('.current-slide').text(slider.currentSlide+1);
                    },
                    after: function(slider) {
                        $('.current-slide').text(slider.currentSlide+1);
                    }
                });
            });
    }
    function itemNosotros() {
        var icon = $('.accordeon'),
            text = $('.js-nosotros-text');
        icon.click(function() {
            $(this).parents('.js-nosotros-text').toggleClass('open');
        });
    }
    function acordeonHacemos() {
        var accordeon = $('.accordeon-box'),
            content = $('.accordeon-content');
        if(accordeon.length > 0) {
            if(windowSize < 740) {


                var trigger = $('.accordeon-box'),
                    items   = $('.accordeon-content');

                trigger.on('click', function(){
                    var $this   = $(this);

                    items.stop(true, true).addClass('open');

                    if ( $this.parent().hasClass('open') ) {
                        $this.parent().siblings().removeClass('open');
                        $this.parent().removeClass('open');
                    }
                    items.slideUp(300);
                    trigger.removeClass('open');

                    var target = $this;
                    $this.parent().find('.accordeon-content').stop().slideToggle(300, function(){
                        $('html, body').stop().animate({
                            'scrollTop': target.offset().top - 10
                        }, 900, 'swing');
                    });
                    $this.stop().toggleClass('open');
                });



            }
        }
    }
    function sidebar() {
        var sidebar = $('.sidebar'),
            sidebarList = $('.sidebar ul'),
            content = $('.container--text').height(),
            sidebarHeight = $('.sidebar ul').height(),
            scrollTop = $(window).scrollTop();
        sidebar.css('height', sidebarHeight);
        if(sidebar.length > 0) {
            var img = $('.img--dest').offset().top,
                start = img - 50,
                stop = $('.stop-sidebar').offset().top,
                fin = stop - sidebarHeight;
        }
        if(scrollTop > img && scrollTop < fin) {
            sidebar.css({
                position: 'fixed',
                top: '0',
                right: 'auto',
                bottom: 'auto'
            });
        } else if(scrollTop >= fin) {
            sidebar.css({
                position: 'absolute',
                top: 'auto',
                right: 'auto',
                bottom: '0'
            });
        } else {
            sidebar.css({
                position: 'relative',
                top: start,
                right: 'auto',
                bottom: 'auto'
            });
        }
    }
    function buscador() {
        var search = $('.js-buscador'),
            close = $('.js-close'),
            icon = $('.js-search');
        icon.click(function() {
            search.fadeIn();
            search.find('.search-here').focus();
            $('body, html').addClass('noscroll');
        });
        close.click(function() {
            search.fadeOut();
            search.find('.search-here').val('');
            $('body, html').removeClass('noscroll');
        });
        $(document).bind('keydown', function(e) { 
            if (e.which == 27) {
                search.fadeOut();
                search.find('.search-here').val('');
                $('body, html').removeClass('noscroll');
            }
        }); 
    }
    function message() {
        var button = $('.message--close');
        button.click(function() {
            $('.message').fadeOut(300);
        });
    }
    function focus() {
        $('input, textarea').focus(function() {
            $(this).parent('.input-group').addClass('focus');
        });
        $('input, textarea').blur(function() {
            $(this).parent('.input-group').removeClass('focus');
        });
    }
    menuMobile();
    masonry();
    masonryBlog();
    filtros();
    slider();
    itemNosotros();
    acordeonHacemos();
    sidebar();
    buscador();
    message();
    focus();
    $(window).resize(function() {
        masonry();
    });
    $(window).scroll(function() {
        sidebar();
    });
})(jQuery);
