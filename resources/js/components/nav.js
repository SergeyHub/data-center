window.onscroll = function () { myFunction(); };

// Get the navbar
const navbar = document.querySelector('.nav');
const linksNav = document.querySelectorAll('div.links__children');

// Get the offset position of the navbar
const sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction () {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add('sticky');
    for (let i = 0; i < linksNav.length; i++) {
      linksNav[i].style.top = '75px';
    }
  } else {
    navbar.classList.remove('sticky');
    for (let i = 0; i < linksNav.length; i++) {
      linksNav[i].style.top = '125px';
  	}
  }
}
