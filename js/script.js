const img = document.getElementById('zoomableImage');
let scale = 1;

img.addEventListener('wheel', function(event) {
    event.preventDefault();
    if (event.deltaY < 0) {
        scale *= 1.1;
    } else {
        scale /= 1.1;
    }
    img.style.transform = `scale(${scale})`;
});
