function adjustNavigation() 
{
    var iconElement = document.querySelector("#menuIcon i");
    var nav = document.querySelector("nav");
    var width = document.documentElement.clientWidth;

    if (width < 900) 
    {
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");

        nav.style.display = "none";
        nav.style.width = "18.75rem";
        nav.style.boxShadow = "";

    }
    if(width > 900 && width < 1200)
    {
        nav.style.alignItems = "end";
        nav.style.display = 'flex';
        nav.style.justifyContent = "space-between";
        nav.style.flexDirection = "row";
        nav.style.paddingTop = "0";
        nav.style.right = "5%";
        nav.style.top = "";
        nav.style.border = "none";
        nav.style.width = "50%";
        nav.style.alignItems = "center";
        nav.style.height = "0vh";
    }
    else if (width > 1200) 
    {
        nav.style.alignItems = "end";
        nav.style.display = 'flex';
        nav.style.justifyContent = "space-between";
        nav.style.flexDirection = "row";
        nav.style.paddingTop = "0";
        nav.style.right = "5%";
        nav.style.top = "";
        nav.style.border = "none";
        nav.style.width = "40%";
        nav.style.alignItems = "center";
        nav.style.height = "0vh";
    }

    let linkEls = document.getElementsByClassName("navLink");
    let logoEl = document.getElementById("navLinkLogo");

    for (let i = 0; i < linkEls.length; i++) 
    {
        if (width < 900) 
        {
            
            linkEls[i].style.width = "100%";
            linkEls[i].style.margin = "3.5rem 0";
            linkEls[i].style.justifyContent = "center";
            
        } 
        else if (width > 900) 
        {
            linkEls[i].style.border = "none";
            linkEls[i].style.width = "auto";
            logoEl.style.width = "0%";
            linkEls[i].style.justifyContent = "start";
            linkEls[i].style.margin = "0px 0";
        }
    }
}

// Füge einen Event-Listener hinzu, damit die Funktion bei einer Größenänderung aufgerufen wird
window.addEventListener('resize', adjustNavigation);
document.addEventListener('DOMContentLoaded', adjustNavigation);

// Rufe die Funktion auch einmalig auf, um sicherzustellen, dass das Layout beim Laden der Seite korrekt ist
adjustNavigation();





    