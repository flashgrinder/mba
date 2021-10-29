import gsap from 'gsap';
import burgerMenu from '../libs/modules/burger-menu.js';
import mainSlider from '../libs/modules/main-slider.js';
import aboutAnimation from '../libs/modules/about-animation.js';
import residentsSlider from '../libs/modules/residents-slider.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });


    // const tl = gsap.timeline();

    // tl.to(".about__svg-word--long", {
    //     rotation: 360,
    //     transformOrigin: "50% 50%",
    //     ease: "none",
    //     repeat: -1,
    //     smoothOrigin: false,
    //     duration: 12,
    //   })
    // tl.to(".about__svg-word--short", {
    //     rotation: -360,
    //     transformOrigin: "50% 50%",
    //     ease: "none",
    //     repeat: -1,
    //     smoothOrigin: false,
    //     duration: 12,
    //   })
    
    burgerMenu.init();
    mainSlider.init();
    aboutAnimation.init();
    residentsSlider.init();
});