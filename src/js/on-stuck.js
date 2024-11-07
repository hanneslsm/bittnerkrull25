/**
* .on-stuck-has-padding
*/

const stickyElementsWithPadding = document.querySelectorAll('.on-stuck-has-padding');

const handlePaddingOnStuck = () => {
  stickyElementsWithPadding.forEach((element) => {
    const rect = element.getBoundingClientRect();
    const topOffset = parseInt(getComputedStyle(element).top) || 0;

    if (rect.top <= topOffset) {
      element.classList.add('is-stuck');
    } else {
      element.classList.remove('is-stuck');
    }
  });
};

let tickingPadding = false;

window.addEventListener('scroll', function() {
  if (!tickingPadding) {
    window.requestAnimationFrame(function() {
      handlePaddingOnStuck();
      tickingPadding = false;
    });
    tickingPadding = true;
  }
});

// Initial check for all sticky elements with padding
handlePaddingOnStuck();

/**
* .on-stuck-has-shadow
*/

const stickyElementsWithShadow = document.querySelectorAll('.on-stuck-has-shadow');

const handleShadowOnOverlap = () => {
  stickyElementsWithShadow.forEach((element, index) => {
    if (index > 0) {
      const prevElement = stickyElementsWithShadow[index - 1];
      const rect = element.getBoundingClientRect();
      const prevRect = prevElement.getBoundingClientRect();

      // Add shadow if overlapped, remove when fully covered
      if (prevRect.bottom >= rect.top && prevRect.bottom < rect.bottom) {
        element.classList.add('has-shadow');
      } else {
        element.classList.remove('has-shadow');
      }
    }
  });
};

let tickingShadow = false;

window.addEventListener('scroll', function() {
  if (!tickingShadow) {
    window.requestAnimationFrame(function() {
      handleShadowOnOverlap();
      tickingShadow = false;
    });
    tickingShadow = true;
  }
});

// Initial check for all sticky elements with shadow
handleShadowOnOverlap();
