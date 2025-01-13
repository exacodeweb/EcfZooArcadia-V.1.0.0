
document.addEventListener('DOMContentLoaded', function() {
  var carouselElement = document.querySelector('#carouselExampleFade');
  var carousel = new bootstrap.Carousel(carouselElement, {
      interval: 2000,
      ride: 'carousel',
      pause: false
  });
});


//document.addEventListener('DOMContentLoaded', function() {
  //console.log("JavaScript Loaded");

  //$('.carousel').carousel({
    //interval: 2000, // 2 secondes
    //pause: "hover" // Pauser au survol, ou null pour empêcher la pause
  //});
//});



//document.addEventListener('DOMContentLoaded', function() {

  //console.log("JavaScript Loaded");

  //$('.carousel').carousel({
      //interval: 2000 // soit 2 seconde
  //});

    // Forcer un re-rendu
    //$('.carousel').carousel('cycle');

//});
