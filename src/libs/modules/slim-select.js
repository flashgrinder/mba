import SlimSelect from 'slim-select'

function init() {
    
    new SlimSelect({
      select: document.querySelector('.modal__select'),
      showSearch: false,
      searchFocus: false,
    })

}

export default { init }