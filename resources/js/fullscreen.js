 const fullscreen = document.getElementById("fullscreen");
    const sliderImages = document.querySelectorAll(".slider-image");

    sliderImages.forEach((img) => {
      img.addEventListener("click", (event) => {
        const clickedImage = event.target;
        const scrollY = window.scrollY;
        const imgRect = clickedImage.getBoundingClientRect();

        // Set the image as background
        fullscreen.style.backgroundImage = `url('${clickedImage.src}')`;

        // Calculate the position considering scroll
        const topPosition = (scrollY + imgRect.top) * 100  / window.innerHeight - 50;

        fullscreen.style.top = `${topPosition}vh`;
        fullscreen.style.display = "block";
      });
    });

    // Add event listener to hide fullscreen when clicked
    fullscreen.addEventListener("click", () => {
      fullscreen.style.display = "none";
    });