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
        }, 6000);
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
cycle(true);


function plusDivs(n)
{
    cycle(true);
    slideIndex += n - 1;
    carousel();
}

function currentDiv(n)
{
    cycle(true);
    slideIndex = n - 1;
    carousel();
}




