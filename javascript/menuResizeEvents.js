function adjustNavigation() 
{
    var iconElement = document.querySelector("#menuIcon i");
    var nav = document.querySelector("nav");
    var width = document.documentElement.clientWidth;

    if (width <= 900) 
    {
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");

        nav.style.display = "none";
        nav.style.width = "18.75rem";
        nav.style.boxShadow = "";

    } else if (width > 900) 
    {
        nav.style.alignItems = "end";
        nav.style.display = 'flex';
        nav.style.flexDirection = "row";
        nav.style.paddingTop = "0";
        nav.style.right = "5%";
        nav.style.top = "";
        nav.style.borderTop = "none";
    }
}

// Füge einen Event-Listener hinzu, damit die Funktion bei einer Größenänderung aufgerufen wird
window.addEventListener('resize', adjustNavigation);
document.addEventListener('DOMContentLoaded', adjustNavigation);

// Rufe die Funktion auch einmalig auf, um sicherzustellen, dass das Layout beim Laden der Seite korrekt ist
adjustNavigation();





    