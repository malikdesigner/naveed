document.addEventListener("DOMContentLoaded", () => {
    const portfolioRow = document.querySelector('.portfolioRow');
    const portfolioItems = document.querySelectorAll('.portfolioItem');
    const dots = document.querySelectorAll('.dot');
    const indicators = document.querySelector('.indicators');

    let counter = 0;
    let slideInterval;

    function switchPortfolio(dotElement) {
        let portfolioId = parseInt(dotElement.getAttribute('attr'));
        counter = portfolioId;
        updateSliderPosition();
        updateDots();
    }

    function updateSliderPosition() {
        const itemWidth = portfolioItems[0].getBoundingClientRect().width;
        portfolioRow.style.transform = `translateX(-${counter * itemWidth}px)`;
    }

    function updateDots() {
        dots.forEach(dot => dot.classList.remove('active'));
        dots[counter].classList.add('active');
    }

    function slideNext() {
        counter = (counter + 1) % dots.length;
        portfolioRow.style.transition = 'transform 0.5s ease-in-out';
        updateSliderPosition();
        updateDots();
    }

    function startAutoSliding() {
        if (!slideInterval) {
            slideInterval = setInterval(slideNext, 3000);
        }
    }

    function stopAutoSliding() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    startAutoSliding();

    function setupPauseEvents(element) {
        element.addEventListener('mouseover', stopAutoSliding);
        element.addEventListener('mouseout', startAutoSliding);
    }

    portfolioItems.forEach(item => setupPauseEvents(item));
    setupPauseEvents(indicators);

    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            stopAutoSliding();
            switchPortfolio(this);
        });
    });

    // Update slider on resize to adjust positions
    window.addEventListener('resize', () => {
        updateSliderPosition();
    });

    // Ensure the slider wraps around seamlessly
    portfolioRow.addEventListener('transitionend', () => {
        if (counter === portfolioItems.length - 1) {
            portfolioRow.style.transition = 'none';
            portfolioRow.style.transform = 'translateX(0)';
            counter = 0;
            setTimeout(() => {
                portfolioRow.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
    });
});
