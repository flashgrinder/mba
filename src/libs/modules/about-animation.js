const plunks = document.querySelectorAll('.js-plunk');
const plates = document.querySelectorAll('.js-plate');

function showPlunk() {

    plunks.forEach( (plunk, i) => {

        plunk.addEventListener('mouseover', () => {
            plates[i].classList.add('is-visible');
        })

        plunk.addEventListener('mouseout', () => {
            plates[i].classList.remove('is-visible');
        })
        
    });

}

function init() {

    showPlunk();

}

export default { init }