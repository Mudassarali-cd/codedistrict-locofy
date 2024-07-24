document.addEventListener('DOMContentLoaded', function () {
    try {
        var engineering = bodymovin.loadAnimation({
            container: document.getElementById('engineering'), // Required
            renderer: 'svg', // Required
            loop: true, // Optional
            autoplay: true, // Optional
            path: './assets/lottieIcons/digital-consulting-advisory.json' // Correct relative path
        });
        engineering.addEventListener('DOMLoaded', function() {
            // Get the SVG element and set its width and height
            var svgElement = document.querySelector('#engineering svg');

            if (svgElement) {
                svgElement.setAttribute('width', '103px'); // Set desired width
                svgElement.setAttribute('height', 'auto'); // Set desired height
                svgElement.style.setProperty('transform', 'unset', 'important'); // Set transform: unset !important;
            }
        });
        // console.log('Animation loaded successfully');
    } catch (error) {
        // console.error('Error loading animation:', error);
    }
});