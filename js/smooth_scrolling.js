/**
 * @file
 * JavaScript for smooth scrolling.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Attaches the behavior for smooth scrolling.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.smooth_scrolling = {
    attach: function (context, settings) {
      if (context !== document) {
        return;
      }

      // Select all links with hashes in snippets view.
      $('.view-snippets a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
          // Make sure on-page links.
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function () {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                // Checking if the target was focused.
                if ($target.is(":focus")) {
                  return false;
                } else {
                  // Adding tabindex for elements not focusable.
                  $target.attr('tabindex', '-1');
                  // Set focus again.
                  $target.focus();
                };
              });
            }
          }
        });
    }
  };
})(jQuery, Drupal);
