import Swiper, { Thumbs, Navigation, Pagination, EffectFade } from 'swiper';

function init() {

    Swiper.use([Thumbs, Navigation, Pagination, EffectFade]);

    const residentsSliderThumb = new Swiper(".residents-slider__swiper-thumb", {
        loop: true,
        slidesPerView: 6,
        spaceBetween: 30,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
                spaceBetween: 10
            }
        }
    });

    const residentsSliderFull = new Swiper(".residents-slider__swiper-full", {
        loop: true,
        edgeSwipeThreshold: 150,
        edgeSwipeThreshold: 150,
        effect: 'fade',
        speed: 500,
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            prevEl: '.residents-slider__arrow--prev',
            nextEl: '.residents-slider__arrow--next'
        },
        pagination: {
            el: '.residents-slider__pagination',
            type: 'bullets',
            clickable: true,
            bulletActiveClass: 'residents-slider__bullet--active',
            bulletClass: 'residents-slider__bullet',
        },
        thumbs: {
            swiper: residentsSliderThumb
        }
    });

}

export default { init }