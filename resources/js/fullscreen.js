const fullscreen = document.getElementById("fullscreen");
const closeButton = document.getElementById("closeButton");
const sliderImages = document.querySelectorAll(".slider-image");

    sliderImages.forEach((img) => {
      img.addEventListener("click", (event) => {
        const clickedImage = event.target;
        fullscreen.querySelector("img").src = clickedImage.src;
        fullscreen.style.top = "0";
        fullscreen.style.left = "0"; 
        fullscreen.style.width = "100vw";
        fullscreen.style.height = "100vh";
        fullscreen.style.display = "block";
      });
    });

    // Add event listener to hide fullscreen and re-enable scrolling
     function closeFullscreen(){
      fullscreen.style.display = "none";
};
closeButton.addEventListener("click", closeFullscreen);
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeFullscreen();
  }
});