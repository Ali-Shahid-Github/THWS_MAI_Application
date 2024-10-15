
 document.addEventListener("DOMContentLoaded", function() {
    new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });



    /**
     * Testimonials slider
     */
    new Swiper('#NoticeSlider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '#nnsp',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },

        }
    });


    new Swiper('#BlogHomeSlider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '#sbsp',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },

            760: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            // 960: {
            //     slidesPerView: 3,
            //     spaceBetween: 20
            // }
        }
    });

    new Swiper('#EventsHomeSlider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '#sbsp',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },

            760: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            // 960: {
            //     slidesPerView: 3,
            //     spaceBetween: 20
            // }
        }
    });

});