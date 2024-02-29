    window.onscroll = function()
    {
        scrollFunction();
    };

    function scrollFunction()
    {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
        {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
            document.getElementById("menu").style.backgroundColor= "#15171B";
            document.getElementById("menu").style.boxShadow = "rgba(0, 0, 0, 0.15) 0px 1.95px 2.6px";
            document.getElementById("logo").style.backgroundColor= "#15171B";
            document.getElementById("last-name").style.color= "white";
            
            var navLinks = document.getElementsByClassName("navLink");
  
            for (var i = 0; i < navLinks.length; i++) 
            {
                navLinks[i].style.color = "white"; 

                navLinks[i].addEventListener("mouseenter", function() {
                    // Ändern Sie den Stil für den Hover-Zustand
                    this.style.color = "#0f5dc4"; // Ändern Sie die Farbe entsprechend Ihren Anforderungen
                });

                 // Fügen Sie einen Event-Listener für den "aus dem Hover"-Effekt hinzu
                navLinks[i].addEventListener("mouseleave", function() {
                    // Setzen Sie den Stil zurück, wenn der Mauszeiger den Link verlässt
                    this.style.color = "white";
                });
                
            }

            var navElements = document.getElementsByTagName("nav");

            // Schleife durch alle ausgewählten Elemente
            for (var i = 0; i < navElements.length; i++) 
            {
                // Hintergrundfarbe ändern (zum Beispiel auf Rot)
                navElements[i].style.position = "absolute";
                navElements[i].style.backgroundColor = "#15171B";
            }

        }else
        {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
            document.getElementById("menu").style.backgroundColor= "white";
            document.getElementById("logo").style.backgroundColor= "white";
            document.getElementById("menu").style.boxShadow = "";
            document.getElementById("last-name").style.color= "black";

            var navElements = document.getElementsByTagName("nav");

            var navLinks = document.getElementsByClassName("navLink");
  
            for (var i = 0; i < navLinks.length; i++) 
            {
                navLinks[i].style.color = "black"; 

                navLinks[i].addEventListener("mouseenter", function() {
                    // Ändern Sie den Stil für den Hover-Zustand
                    this.style.color = "#0f5dc4"; // Ändern Sie die Farbe entsprechend Ihren Anforderungen
                });

                 // Fügen Sie einen Event-Listener für den "aus dem Hover"-Effekt hinzu
                navLinks[i].addEventListener("mouseleave", function() {
                    // Setzen Sie den Stil zurück, wenn der Mauszeiger den Link verlässt
                    this.style.color = "black";
                });
            }

            // Schleife durch alle ausgewählten Elemente
            for (var i = 0; i < navElements.length; i++) 
            {
                // Hintergrundfarbe ändern (zum Beispiel auf Rot)
                navElements[i].style.position = "absolute";
                navElements[i].style.backgroundColor = "white";
            }
        }
    }

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
            nav.style.width = "300px";
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


    let position = window.scrollY;
    var iconElement = document.querySelector("#menuIcon i");

    window.addEventListener('scroll', function()
    {
        let scroll = window.scrollY;
        let width = document.documentElement.clientWidth;

        var nav = document.querySelector("nav");

        if (scroll > position && width < 800) 
        {
            nav.style.display = "none";
            iconElement.classList.remove("fa-xmark");
            iconElement.classList.add("fa-bars");

        } else if (scroll < position && width < 800)
         {
            nav.style.display = "none";
            iconElement.classList.remove("fa-xmark");
            iconElement.classList.add("fa-bars");
        }

        position = scroll;
    });

    