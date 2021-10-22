import gsap from 'gsap';
import burgerMenu from '../libs/modules/burger-menu.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });
    
    burgerMenu.init();  
});