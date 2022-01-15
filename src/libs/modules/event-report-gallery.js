import lightGallery from 'lightgallery';

// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';

function init() {

    lightGallery(document.getElementById('event-report__gallery'), {
        licenseKey: '0000-0000-000-0000',
        plugins: [lgZoom, lgThumbnail],
        speed: 600,
        zoomFromOrigin: true,
        allowMediaOverlap: true,
        toggleThumb: true,
        download: false,
    });

}

export default { init }