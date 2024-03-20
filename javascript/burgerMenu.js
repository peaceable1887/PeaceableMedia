function burgerMenu() 
{
    let navEls = document.getElementsByTagName("nav");

    for (let i = 0; i < navEls.length; i++) 
    {
        if (navEls[i].style.display !== "flex" || navEls[i].style.display === "") 
        {
            navEls[i].style.display = "flex";
            navEls[i].style.alignItems = "flex-start";
            navEls[i].style.flexDirection = "column";
            navEls[i].style.right = "0%";
            navEls[i].style.top = "100%";
            navEls[i].style.width = "100%";
            navEls[i].style.zIndex = "-1";
            navEls[i].style.boxShadow = "rgba(0, 0, 0, 0.15) 0.122rem 0.122rem 0.163rem";
            navEls[i].style.animation = "unfoldSmooth 0.25s";
        } else 
        {
            navEls[i].style.animation = "foldInSmooth 0.25s";
            navEls[i].addEventListener("animationend", function closureFunction() 
            {
                navEls[i].style.display = "none";
               
                navEls[i].removeEventListener("animationend", closureFunction);
            });
        }
    }

    let linkEls = document.getElementsByClassName("navLink");

    for (let i = 0; i < linkEls.length; i++) 
    {
        if (linkEls[i].style.display !== "flex" || linkEls[i].style.display === "") 
        {
            linkEls[i].style.width = "100%";
            linkEls[i].style.display = "flex";
            linkEls[i].style.alignItems = "flex-start";
        }
    }
}

function changeMenuIcon(onClick) 
{
    onClick.classList.toggle("fa-xmark");
}


