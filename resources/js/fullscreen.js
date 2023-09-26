    const fullscreen = document.getElementById("fullscreen");
    const images = document.querySelectorAll(".image-container img");

    images.forEach((img) => {
      img.addEventListener("click", (event) => {
        const clickedImage = event.target;
        const scrollY = window.scrollY;
        const imgRect = clickedImage.getBoundingClientRect();

        const topPosition = (scrollY + imgRect.top) * 100 / window.innerHeight - 50;

        fullscreen.style.backgroundImage = `url('${clickedImage.src}')`;
        fullscreen.style.top =  `${topPosition}vh`;
        fullscreen.style.display = "block";
      });

    });
    fullscreen.addEventListener("click", () => {
  fullscreen.style.display = "none";
  });
