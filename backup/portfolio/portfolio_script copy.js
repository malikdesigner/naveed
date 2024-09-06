document.addEventListener("DOMContentLoaded", () => {
    let portfolioRow = document.querySelector('.portfolioRow');
    let portfolioItems = document.querySelectorAll('.portfolioItem');
    let dots = document.querySelectorAll('.dot');

    let counter = 0;
    let deleteInterval;

    function switchPortfolio(currentPortfolio) {
        let portfolioId = parseInt(currentPortfolio.getAttribute('attr'));
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
        counter = (counter + 1) % dots.length; // Change to use the length of dots, not items
        portfolioRow.style.transition = 'transform 0.5s ease-in-out';
        updateSliderPosition();
        updateDots();
    }

    function autoSliding() {
        deleteInterval = setInterval(slideNext, 3000);
    }

    function pauseSliding() {
        clearInterval(deleteInterval);
    }

    function resumeSliding() {
        autoSliding();
    }

    autoSliding();

    // Pause and resume sliding on hover over the dots
    const container = document.querySelector('.indicators');
    container.addEventListener('mouseover', pauseSliding);
    container.addEventListener('mouseout', resumeSliding);

    // Pause and resume sliding on hover over the portfolio items
    portfolioItems.forEach(item => {
        item.addEventListener('mouseover', pauseSliding);
        item.addEventListener('mouseout', resumeSliding);
    });

    // Add click event listeners to dots for manual navigation
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            switchPortfolio(this);
        });
    });
});
