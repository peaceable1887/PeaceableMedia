function burgerMenu() 
{
    let elms = document.getElementsByTagName("nav");

    for (var i = 0; i < elms.length; i++) 
    {
        if (elms[i].style.display !== "flex" || elms[i].style.display === "") 
        {
            elms[i].style.display = "flex";
            elms[i].style.alignItems = "flex-start";
            elms[i].style.flexDirection = "column";
            elms[i].style.right = "0%";
            elms[i].style.top = "100%";
            elms[i].style.borderTop = "1px solid grey";
            elms[i].style.width = "100%";
            elms[i].style.boxShadow = "rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px";

        } else 
        {
            elms[i].style.display = "none";
        }
    }
}

function changeMenuIcon(onClick) 
{
    onClick.classList.toggle("fa-xmark");
}


