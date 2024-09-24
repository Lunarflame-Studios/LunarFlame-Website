const header = document.querySelector('.home-header');
const imagePaths = ['images/PL_SS_1.png', 'images/PL_SS_4.png', 'images/Horizon_Skyline_1.png', 'images/PL_SS_5.png'];
let currentIndex = 0;

/**
 * Changes the background image of the header element to the next
 * image in the imagePaths array.
 */
function changeBackground() {
    /**
     * The background image is a linear gradient with a semi-transparent
     * overlay, which then has the image at the specified index in the
     * imagePaths array as the background image.
     *
     * @param {number} index - The index of the image in the imagePaths array.
     */
    header.style.backgroundImage = `linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(${imagePaths[currentIndex]})`;
}


/**
 * Changes the background image of the header to the next image in
 * the imagePaths array and increments the currentIndex.
 */
function nextSlide() {
    /**
     * Increment the index to point to the next image in the array.
     * If the index exceeds the length of the array, it wraps around
     * to the beginning (Modulo operator).
     */
    currentIndex = (currentIndex + 1) % imagePaths.length;

    /* Call the changeBackground function to update the background
     * image of the header element.
     */
    changeBackground();
}

/*setInterval(nextSlide, 5000);

changeBackground();*/