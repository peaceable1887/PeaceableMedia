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

/*const slider = document.querySelector(".slideshow-container");
const slidesImg = Array.from(document.querySelectorAll(".mySlides"));

let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID = 0;
let currentIndex = 0;

slidesImg.forEach((mySlides, index) => {
    const slideImage = mySlides.querySelector(".imageSlider");
    slideImage.addEventListener("dragstart", (e) => e.preventDefault());

    // Touch events
    mySlides.addEventListener("touchstart", touchStart(index));
    mySlides.addEventListener("touchend", touchEnd);
    mySlides.addEventListener("touchmove", touchMove);

    // Mouse events
    mySlides.addEventListener("mousedown", touchStart(index));
    mySlides.addEventListener("mouseup", touchEnd);
    mySlides.addEventListener("mouseleave", touchEnd);
    mySlides.addEventListener("mousemove", touchMove);
})

function touchStart(index)
{
    return function(event) 
    {
        currentIndex = index;
        startPos = getPositionX(event)
        console.log(startPos)
        isDragging = true;

        animationID = requestAnimationFrame(animation)
        slider.classList.add("grabbing")
    }
}

function touchEnd()
{
    isDragging = false;
    cancelAnimationFrame(animationID)

    const movedBy = currentTranslate - prevTranslate;

    if(movedBy < -100 && currentIndex < slides.length - 1)
    {
        currentIndex += 1;
    }
    if(movedBy > 100 && currentIndex > 0)
    {
        currentIndex -= 1;
    }

    setPositionByIndex()

    slider.classList.remove("grabbing");
}

function touchMove(event)
{
    if(isDragging)
    {
        const currentPosition = getPositionX(event)
        currentTranslate = prevTranslate + currentPosition - startPos
    }
    
}

function getPositionX(event)
{
    return event.type.includes("mouse") ? event.pageX : event.touches[0].clientX;
}

function animation()
{
    setSliderPosition()
    if(isDragging) requestAnimationFrame(animation)
}

function setSliderPosition()
{
    slider.style.transform = `translateX(${currentTranslate}px)`;
}

function setPositionByIndex()
{
    currentTranslate = currentIndex * -window.innerWidth;
    prevTranslate = currentTranslate;
    setSliderPosition();
}
*/