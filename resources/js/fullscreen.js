document.addEventListener("DOMContentLoaded", function () {
    const fullscreenTriggers = document.querySelectorAll(".map");
    const fullscreenOverlay = document.getElementById("fullscreen");
    const viewportWidth = window.innerWidth;

  fullscreenTriggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) { //  Kad kliknes sliku da izracuna gde si kliknuo i tu da se pojavi ta slika tako to setuje backgroundimage kao src te slike
      const srcset = trigger.getAttribute("srcset");
      const src = getBestSrc(srcset, viewportWidth);

      fullscreenOverlay.style.backgroundImage = `url(${src})`;

       const clickY = ((e.clientY + window.scrollY) / window.innerHeight) * 100 - 55 + "vh";

      
      fullscreenOverlay.style.top = clickY;

      
      fullscreenOverlay.style.display = "block";
    });
  });
  function getBestSrc(srcset, viewportWidth) {
    if (!srcset) {
      return "";  //  Za svaki slucaj u slucaju da nema srcset
    }
  }

  fullscreenOverlay.addEventListener("click", function () {
    fullscreenOverlay.style.display = "none"; //  Kada kliknes ponovo na sliku ona nestaje
  });
  function getBestSrc(srcset) { //  Odaberi koji ce src da kosriti iz src seta tako sto gleda width ekrana
    const sources = srcset.split(", ");
    let bestSrc = "";
    let bestWidth = 0;

    sources.forEach(function (source) {
      const [url, width] = source.trim().split(" ");
      const numericWidth = parseInt(width, 10);
      if (numericWidth > bestWidth && numericWidth <= viewportWidth) {
        bestSrc = url;
        bestWidth = numericWidth;
      }
    });

    return bestSrc || sources[0].trim().split(" ")[0];
  }
});
