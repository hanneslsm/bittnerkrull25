const stickyElements = document.querySelectorAll('.on-stuck-has-padding');

const handleScroll = (element, topOffset) => {
  const rect = element.getBoundingClientRect();
  if (rect.top <= topOffset) {
    element.classList.add('is-stuck');
  } else {
    element.classList.remove('is-stuck');
  }
};

let ticking = false;

window.addEventListener('scroll', function() {
  if (!ticking) {
    window.requestAnimationFrame(function() {
      stickyElements.forEach((element) => {
        const topOffset = parseInt(getComputedStyle(element).top) || 0;
        handleScroll(element, topOffset);
      });
      ticking = false;
    });
    ticking = true;
  }
});

// Initial check for all sticky elements
stickyElements.forEach((element) => {
  const topOffset = parseInt(getComputedStyle(element).top) || 0;
  handleScroll(element, topOffset);
});
