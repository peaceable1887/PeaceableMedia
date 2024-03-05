let i;
let slides = document.getElementsByClassName("mySlides");
let slideIndex = -1;
let repeater;

function carousel()
{
    for (i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length)
    {
        slideIndex = 1;
    }else if (slideIndex <= 0)
    {
        slideIndex = slides.length;
    }

    slides[slideIndex - 1].style.display = "block";

}

function cycle(r)
{
    if (r)
    {
        clearInterval(repeater);
        repeater = setInterval(function()
        {
            carousel();
        }, 10000);
    }else
        {
        clearInterval(repeater);
    }
}

window.onload = function()
{
    carousel();
};

carousel();

function plusDivs(n)
{
    slideIndex += n - 1;
    carousel();
}

function currentDiv(n)
{
    slideIndex = n - 1;
    carousel();
}

function activeImageButton()
{
    // Get the container element
    let btnImage = document.getElementById("clickable-slider-images");

    // Get all buttons with class="btn" inside the container
    let btnImages = btnImage.getElementsByClassName("clickable-image");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var x = 0; x < btnImages.length; x++) 
    {
        btnImages[x].addEventListener("click", function() 
        {
            let current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
}

activeImageButton();
