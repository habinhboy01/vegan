$(document).ready(function() {
    if ($(window).width() <= 1024) {
        $('.more-news-container').slick({
            speed: 800,
            infinite: true,
            mobileFirst: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            lazyLoad: 'ondemand',
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [{
                    breakpoint: 1025,
                    settings: 'unslick'
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }

            ]
        });
    }
});