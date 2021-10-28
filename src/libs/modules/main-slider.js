import Swiper, { Pagination, EffectFade } from 'swiper';

function init() {

    Swiper.use([Pagination, EffectFade]);

    const mainSlider = new Swiper(".main-slider__swiper", {
        loop: true,
        edgeSwipeThreshold: 150,
        edgeSwipeThreshold: 150,
        effect: 'fade',
        speed: 1000,
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.main-slider__pagination',
            clickable: true,
            bulletActiveClass: 'main-slider__bullet--active',
            currentClass: 'main-slider__bullet--current',
            bulletClass: 'main-slider__bullet',
            // renderBullet: function (index, className) {
            //     let activeBullet = 'main-slider__bullet--active';
            //     className = activeBullet;
            //     return `<span class="main-slider__bullet ${className}">${index}</span>`;
            // }
        }
    });

}

export default { init }