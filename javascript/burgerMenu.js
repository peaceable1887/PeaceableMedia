function burgerMenu() 
{

    let elms = document.getElementsByTagName("nav");

    for (var i = 0; i < elms.length; i++) 
    {
        if (elms[i].style.display !== "flex" || elms[i].style.display === "") 
        {
            elms[i].style.display = "flex";
            elms[i].style.alignItems = "center";
            elms[i].style.flexDirection = "column";
            elms[i].style.right = "0%";
            elms[i].style.top = "100%";
            elms[i].style.borderTop = "1px solid grey";
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


