document.addEventListener('DOMContentLoaded', function () {
const mybutton = document.getElementById("myBtn");

mybutton.addEventListener("click", function () {
    topFunction();
});


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
}
});


const scrollContainer = document.getElementById("scroller");

scrollContainer.addEventListener("wheel", (evt) => {
evt.preventDefault();
scrollContainer.scrollLeft += evt.deltaY-30;
});