/* Main navigation
*
* IE 10+
*/

// global
navIsOpen = false;

(function () {
  'use strict';

  var navToggle = document.getElementById('nav-toggle'),
      bodyClass = document.body.classList;
      // navIsOpen = false;

  function toggleNav () {
    // nav is open, close it
    if (bodyClass.contains('nav-is-open')) {
      navIsOpen = false;
      bodyClass.remove('nav-is-open');
    } else {
      navIsOpen = true;
      bodyClass.add('nav-is-open');
    }
  }

  // Interaction

  navToggle.addEventListener('click', function() { toggleNav(); });

  document.getElementById('nav-main').addEventListener('mouseleave', function() {
    if (navIsOpen) { toggleNav(); }
  });

  window.onscroll = function () { if (navIsOpen) { toggleNav(); } }
}());
