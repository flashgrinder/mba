import gsap from 'gsap';
import modalsForm from '../libs/modules/modals-form.js';
import burgerMenu from '../libs/modules/burger-menu.js';
import mainSlider from '../libs/modules/main-slider.js';
import aboutAnimation from '../libs/modules/about-animation.js';
import residentsSlider from '../libs/modules/residents-slider.js';
import eventReportGallery from '../libs/modules/event-report-gallery.js';
import slimSelect from '../libs/modules/slim-select.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });
    
    modalsForm.init();
    burgerMenu.init();
    mainSlider.init();
    aboutAnimation.init();
    residentsSlider.init();
    eventReportGallery.init();
    slimSelect.init();
});