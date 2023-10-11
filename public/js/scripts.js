/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // event.preventDefault(); ??? FIXME:
    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });





// Set the time ratio (1 in-game day = 30 minutes real time)
const timeRatio = 30; // in minutes

// Function to update and display the in-game time
function updateGameTime() {
    // Get the current real-world time in minutes
    const realTime = new Date();
    const realMinutes = realTime.getMinutes() + realTime.getHours() * 60;

    // Calculate the in-game time
    const inGameMinutes = realMinutes * timeRatio;

    // Convert in-game minutes to hours and minutes
    const inGameHours = Math.floor(inGameMinutes / 60);
    const inGameMinutesRemainder = inGameMinutes % 60;

    // Display the in-game time on the website
    const gameTimeElement = document.getElementById('game-time');
    gameTimeElement.textContent = `In-Game Time: ${inGameHours}:${inGameMinutesRemainder}`;
}

// Update the in-game time every minute
setInterval(updateGameTime, 60000);

// Call the function immediately to display the initial time
updateGameTime();





    

});
