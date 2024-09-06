document.addEventListener("DOMContentLoaded", () => {
    const portfolioRow = document.querySelector('.portfolioRow');
    const portfolioItems = document.querySelectorAll('.portfolioItem');
    const dots = document.querySelectorAll('.dot');
    const indicators = document.querySelector('.indicators');

    let counter = 0;
    let slideInterval;

    function switchPortfolio(dotElement) {
        let portfolioId = parseInt(dotElement.getAttribute('attr'));
        counter = portfolioId;  // Update the counter to match the clicked dot's index
        updateSliderPosition();
        updateDots();
    }

    function updateSliderPosition() {
        // Update the transform property to slide the portfolioRow
        portfolioRow.style.transform = `translateX(-${counter * (100 / portfolioItems.length)}%)`;
    }

    function updateDots() {
        // Remove the active class from all dots
        dots.forEach(dot => dot.classList.remove('active'));
        // Add the active class to the current dot
        dots[counter].classList.add('active');
    }

    function slideNext() {
        counter = (counter + 1) % dots.length; // Use the length of dots to cycle correctly
        portfolioRow.style.transition = 'transform 0.5s ease-in-out';
        updateSliderPosition();
        updateDots();
    }

    function startAutoSliding() {
        if (!slideInterval) { // Only start a new interval if one is not already running
            slideInterval = setInterval(slideNext, 3000);
        }
    }

    function stopAutoSliding() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    // Initialize auto-sliding
    startAutoSliding();

    // Attach event listeners to handle pausing of auto-sliding
    function setupPauseEvents(element) {
        element.addEventListener('mouseover', () => {
            stopAutoSliding();
        });
        element.addEventListener('mouseout', () => {
            startAutoSliding();
        });
    }

    // Attach event listeners to portfolio items
    portfolioItems.forEach(item => setupPauseEvents(item));

    // Attach event listeners to indicators container
    setupPauseEvents(indicators);

    // Add click event listeners to dots for manual navigation
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            stopAutoSliding();  // Stop auto-sliding to handle manual control
            switchPortfolio(this);
            // Do not immediately restart auto-sliding after manual control to prevent unwanted behavior
        });
    });

    // Ensure the slider wraps around seamlessly
    portfolioRow.addEventListener('transitionend', () => {
        if (counter === portfolioItems.length - 1) {
            portfolioRow.style.transition = 'none'; // Disable transition for instant jump
            portfolioRow.style.transform = 'translateX(0)'; // Jump to the start
            counter = 0; // Reset counter
            setTimeout(() => {
                portfolioRow.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
            }, 50); // Small timeout to ensure style change is applied
        }
    });
});

