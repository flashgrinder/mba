import HystModal from 'hystmodal';

function init(container = document) {

    const modalBtnNext = document.querySelector('.modal__btn--next');
    const modalWrapperFirst = document.querySelector('.js-wrapper-first');
    const modalWrapperLast = document.querySelector('.js-wrapper-last');

    function modalWrapperShiftNext () {
        modalWrapperFirst.classList.add('is-close');
        modalWrapperLast.classList.add('is-open');
    }

    function modalWrapperShiftBack () {
        modalWrapperFirst.classList.remove('is-close');
        modalWrapperLast.classList.remove('is-open');
    }
    modalBtnNext.addEventListener('click', modalWrapperShiftNext);

    const modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: false,
        afterClose: function(modal){
            modalWrapperShiftBack();
        },
    });
        
}
  
export default { init }