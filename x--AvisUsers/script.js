document.addEventListener('DOMContentLoaded', function() {
  var carouselElement = document.querySelector('#carouselExampleFade');
  if (carouselElement) {
    var carousel = new bootstrap.Carousel(carouselElement, {
      interval: 3500, // 3.5 secondes
      ride: 'carousel',
      pause: false
    });
  }
});