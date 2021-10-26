import gsap from 'gsap';
import burgerMenu from '../libs/modules/burger-menu.js';
import mainSlider from '../libs/modules/main-slider.js';
import residentsSlider from '../libs/modules/residents-slider.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });
    
    burgerMenu.init();
    mainSlider.init();
    residentsSlider.init();
});