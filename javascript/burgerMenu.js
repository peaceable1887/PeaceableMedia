function burgerMenu() 
{
    let elms = document.getElementsByTagName("nav");

    for (let i = 0; i < elms.length; i++) 
    {
        if (elms[i].style.display !== "flex" || elms[i].style.display === "") 
        {
            elms[i].style.display = "flex";
            elms[i].style.alignItems = "flex-start";
            elms[i].style.flexDirection = "column";
            elms[i].style.right = "0%";
            elms[i].style.top = "100%";
            elms[i].style.width = "100%";
            elms[i].style.zIndex = "-1";
            elms[i].style.boxShadow = "rgba(0, 0, 0, 0.15) 0.122rem 0.122rem 0.163rem";
            elms[i].style.animation = "unfoldSmooth 0.25s";
            elms[i].style.borderTop = "1px solid rgb(168, 168, 168)";
        } else 
        {
            elms[i].style.animation = "foldInSmooth 0.25s";
            elms[i].addEventListener("animationend", function closureFunction() 
            {
                elms[i].style.display = "none";
                elms[i].removeEventListener("animationend", closureFunction);
            });
        }
    }
}

function changeMenuIcon(onClick) 
{
    onClick.classList.toggle("fa-xmark");
}


