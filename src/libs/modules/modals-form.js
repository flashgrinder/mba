import HystModal from 'hystmodal';

function init(container = document) {

    const modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: false,
    });
        
}
  
export default { init }