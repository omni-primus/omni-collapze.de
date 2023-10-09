const eles = document.querySelectorAll('.tx-tournament .container');

let pos = { top: 0, left: 0, x: 0, y: 0 };

const mouseDownHandler = function (e) {
    this.style.cursor = 'grabbing';
    this.style.userSelect = 'none';
    pos = {
        // The current scroll
        left: this.scrollLeft,
        top: this.scrollTop,
        // Get the current mouse position
        x: e.clientX,
        y: e.clientY,
    };

    this.addEventListener('mousemove', mouseMoveHandler);
    this.addEventListener('mouseup', mouseUpHandler);
};

const mouseMoveHandler = function (e) {
    // How far the mouse has been moved
    const dx = e.clientX - pos.x;
    const dy = e.clientY - pos.y;

    // Scroll the element
    this.scrollTop = pos.top - dy;
    this.scrollLeft = pos.left - dx;
};

const mouseUpHandler = function () {
    this.removeEventListener('mousemove', mouseMoveHandler);
    this.removeEventListener('mouseup', mouseUpHandler);

    this.style.cursor = 'grab';
    this.style.removeProperty('user-select');
};

for(let i = 0;i<eles.length;i++) {
    console.log(eles[i]);
    eles[i].addEventListener('mousedown', mouseDownHandler);
}