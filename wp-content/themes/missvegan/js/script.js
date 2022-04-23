$(document).ready(function() {
    $('#fullpage').fullpage({
        autoScrolling: true,
        scrollHorizontally: true,
        fixedElements: '.side-navbar, footer',
        anchors: ['#section1', '#section2', '#section3', '#section4', '#section5', '#section6']
    });

    $('.arrow-up').click(function() {
        $.fn.fullpage.moveSectionUp();
    })

    $('.arrow-down').click(function() {
        $.fn.fullpage.moveSectionDown();
    })

    //section 3
    $('.s3-carousel').slick({
        dots: true,
        speed: 800,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'ondemand',
        responsive: [{
                breakpoint: 1700,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //section 5
    $('.s5-carousel').slick({
        dots: true,
        speed: 800,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'ondemand',
        responsive: [{
                breakpoint: 1700,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});