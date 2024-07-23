document.addEventListener('DOMContentLoaded', function () {
    try {
        var engineering = bodymovin.loadAnimation({
            container: document.getElementById('engineering'), // Required
            renderer: 'canvas', // Required
            loop: true, // Optional
            autoplay: true, // Optional
            path: './assets/lottieIcons/engineering.json' // Correct relative path
        });
        // console.log('Animation loaded successfully');
    } catch (error) {
        // console.error('Error loading animation:', error);
    }
});