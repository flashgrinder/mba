import gsap from 'gsap';
import burgerMenu from './burger-menu.js';

let tl = gsap.timeline({defaults: {duration: .2, ease: 'power3.out'}});

tl.paused(true);
tl.to('.modal__field--anim', {opacity: 1, x: '0px', stagger: .1});

const modalService = () => {
    const d = document;
    const body = d.querySelector('body');
    const buttons = d.querySelectorAll('[data-modal-trigger]');
    const header = d.querySelector('.header__wrapper-menu');

    for(let button of buttons) {
        triggerEvent(button);
    }
    
    function triggerEvent(button) {

        button.addEventListener('click', () => {

            const trigger = button.getAttribute('data-modal-trigger');
            const modal = d.querySelector(`[data-modal=${trigger}]`);
            const modalBody = modal.querySelector('.modal__body');
            const closeBtn = modal.querySelector('.modal__close');
            
            function closeTrigger() {

                closeBtn.addEventListener('click', () => {

                    tl.reverse();

                    setTimeout(() => {
                        modal.classList.remove('is-open');
                    }, 400);
                    
                    setTimeout(() => {
                        header.classList.remove('is-open');
                    }, 800);
                } )
                
                body.addEventListener('keydown', (e) => {

                    if(e.keyCode === 27 || e.which === 27) {

                        tl.reverse();
                        
                        
                        setTimeout(() => {
                            modal.classList.remove('is-open');
                        }, 400);
                        
                        setTimeout(() => {
                            header.classList.remove('is-open');
                        }, 800);
                    }

                });
            }

            function openTrigger() {

                modal.classList.add('is-open');
                header.classList.add('is-open');
                burgerMenu.close();
                
                setTimeout(() => {
                    
                    tl.play();

                }, 400)
                
            }

            modalBody.addEventListener('click', (e) => e.stopPropagation());

            closeTrigger();
            openTrigger();

        });
    }
}

function init() {
    modalService();
}
  
export default { init }