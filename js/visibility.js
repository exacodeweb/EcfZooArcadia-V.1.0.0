document.addEventListener("scroll", () => {
  document.querySelectorAll('.section').forEach((el) => {
    if (el.getBoundingClientRect().top < window.innerHeight) {
      el.classList.add('visible');
    }
  });
});