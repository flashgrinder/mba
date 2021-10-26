import Swiper, { Pagination, EffectFade } from 'swiper';

function init() {

    Swiper.use([Pagination, EffectFade]);

    const mainSlider = new Swiper(".main-slider__swiper", {
        loop: true,
        edgeSwipeThreshold: 150,
        edgeSwipeThreshold: 150,
        effect: 'fade',
        speed: 500,
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.main-slider__pagination',
            type: 'bullets',
            clickable: true,
            bulletActiveClass: 'main-slider__bullet--active',
            bulletClass: 'main-slider__bullet',
        }
    });

}

export default { init }