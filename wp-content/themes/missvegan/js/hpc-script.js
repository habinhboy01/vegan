$(document).ready(function() {
    $('.carousel-container').slick({
        speed: 800,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        lazyLoad: 'ondemand',
        prevArrow: $('.btn-prev'),
        nextArrow: $('.btn-next'),
        responsive: [{
                breakpoint: 2563,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.btn-prev'),
                    nextArrow: $('.btn-next'),
                }
            }, {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next">Next</button>',
                }
            },
            {
                breakpoint: 675,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next">Next</button>',
                }
            }
        ]
    });
});