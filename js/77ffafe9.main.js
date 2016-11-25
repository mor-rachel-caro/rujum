$(document).ready(function() {
    var navhighet = $('.navbar-fixed-top').height() + 15,
        navli = $('.navbar-fixed-top li');
    
    if ($(window).width() < 768) {
        //close nav on clicking menu
        // new WOW().init();
      
        $('#fullpage').find('section,header').css({
            'min-height': '100vh',
            'height': 'auto',
            'padding-bottom' : '100px',
            'padding-top' : navhighet.toString() + 'px',
            'position' : 'relative'
        });

        
        $('.nextsection').hide();
        
        // $('.nextsection i').on('click', function(event){
        //     console.log(sections);
        //     event.preventDefault();
        //     var i;
        //     sections.forEach(function(item) {
        //         var pos = window.pageYOffset;
        //         console.log(i);
        //         console.log(pos);
        //         if (pos <= item.top && pos < item.bottom ) {
        //             console.log(item.name);
        //             i = item.top;
        //         }
        //         return $(window).scrollTop(i);
        //     });
        // });

    }else{
        $('#fullpage').fullpage({
            fixedElements: '.navbar-fixed-top, .nextsection',
            sectionSelector: 'section,header',
            verticalCentered: true,
            paddingTop: navhighet.toString() + 'px',
            paddingBottom: '20px',
            responsiveHeight: true,
            scrollBar: true,
            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            normalScrollElements: '#whoarewe',
            scrollOverflow:false,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,

            //events
            onLeave: function(index, nextIndex, direction){
                //changing arrow color
                var color = 'white',
                    sectionobj = $('section, header').eq(nextIndex - 1);
                switch(sectionobj.data('text')) {
                    case 'blue':
                        color = '#475472';
                        break;
                    case 'orange':
                        color = '#f26522';
                        break;
                    case 'purple':
                        color = '#9f1e63';
                        break;
                    default:
                        color = 'white';
                }
                $('.nextsection i').css({
                    color: color,
                    'border-color': color
                });

                //changing arrow when reacing bottom     
                if(sectionobj.data('anchor') == 'interested'){
                    $('.nextsection').addClass('upside');
                }else{
                    $('.nextsection').removeClass('upside');
                }

                //chnaging navigation colors
                if(index === 1){
                    $('.navbar-fixed-top').addClass('outside');
                }
                if( nextIndex === 1){
                    $('.navbar-fixed-top').removeClass('outside');
                }

                navli.eq(index - 1).addClass('active').siblings().removeClass('active');
            },
            afterLoad: function(anchorLink, index){},
            afterRender: function(){
                new WOW().init();
            },
            afterResize: function(){},
        });
        $('.nextsection i').on('click', function(event) {
            event.preventDefault();
            if ($(event.currentTarget).parents('.nextsection').hasClass('upside')) {
                $.fn.fullpage.moveTo(1);
                $(event.currentTarget).parents('.nextsection').removeClass('upside');
            }else{
                $.fn.fullpage.moveSectionDown();
            }
        });
    }

    //nav and nextsection functionality
    var sections = [];
    $('section,header').each(function(index, el) {
        sections[index] = {
            name : $(el).data('anchor'),
            top : $(el).offset().top,
            bottom: $(el).offset().top + $(el).outerHeight(true)
        }
    });

    $('.nav a').click(function(event){
        event.preventDefault();
        $('#bs-example-navbar-collapse-1').collapse('hide');
        var href = $(event.currentTarget).attr('href');
        console.log(href);
        sections.forEach(function(item) {
            if ('#' + item.name == href) {
                console.log('#' + item.name);
                $(window).scrollTop(item.top);
            }
        });
    });

});