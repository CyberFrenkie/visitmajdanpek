document.addEventListener('DOMContentLoaded', function () {
  const mybutton = document.getElementById("myBtn");
  const customHero = document.getElementById("custom-hero");
  const middleElement = document.getElementById("middle");
  const scrollContainer = document.getElementById("scroller");

  if (mybutton) {
    mybutton.addEventListener("click", topFunction);
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  function toggleButtonVisibility() {
    const scrollY = window.scrollY;
    mybutton.style.display = scrollY > 20 ? "block" : "none";
  }

  function adjustHeroHeight() {
    const scrollY = window.scrollY;
    customHero.style.height = scrollY > 20 ? '35vh' : '100vh';
  }

  function adjustMiddleMargin() {
    const scrollY = window.scrollY;
    middleElement.style.marginTop = scrollY > 20 ? '40vh' : '100vh';
  }

  window.addEventListener('scroll', () => {
    toggleButtonVisibility();
    adjustHeroHeight();
    adjustMiddleMargin();
  });

  if (scrollContainer) {
    scrollContainer.addEventListener("wheel", (evt) => {
      evt.preventDefault();
      scrollContainer.scrollLeft += evt.deltaY - 30;
    });
  }
});

function hideLoader() {
  const loader = document.getElementById("loader");
  loader.style.display = "none";
}

window.onload = hideLoader;