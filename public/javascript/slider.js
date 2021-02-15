/*let slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n)
{
    showDivs(slideIndex += n);
}

function showDivs(n) {

    let i;
    let x = document.getElementsByClassName("mySlides");

    if (n > x.length)
    {
        slideIndex = 1
    }
    if (n < 1)
    {
        slideIndex = x.length
    } ;
    for (i = 0; i < x.length; i++)
    {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}*/

let simpleSlides = function () {
    let i;
    let slides = document.querySelectorAll(".slides");
    for (i = 0; i < slides.length; i++) {
        slides[i].setAttribute("style","display:none");
    }
    count++;
    if (count > slides.length) { count = 1; }
    slides[count-1].setAttribute("style","display:block");
    setTimeout(simpleSlides, 5000);
}

let count = 0;
simpleSlides();
