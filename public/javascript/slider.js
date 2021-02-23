let slideIndex = 1;
showSlides(slideIndex);

let count = 0;
simpleSlides();

function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Slider: Bildwechsel per klick
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";

}
// Slider: Bildwechsel in Sekundenintervallen
function simpleSlides () {
    let i;
    let slides = document.querySelectorAll(".mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].setAttribute("style","display:none");
    }
    count++;
    if (count > slides.length) { count = 1; }
    slides[count-1].setAttribute("style","display:block");
    setTimeout(simpleSlides, 7000);
}
