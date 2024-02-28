    window.onscroll = function()
    {
        scrollFunction();
    };

    function scrollFunction()
    {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)
        {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
            document.getElementById("menu").style.backgroundColor= "black";
            document.getElementById("logo").style.backgroundColor= "black";
            document.getElementById("last-name").style.color= "white";
            
            var navLinks = document.getElementsByClassName("navLink");
  
            for (var i = 0; i < navLinks.length; i++) {
                
                navLinks[i].style.color = "white"; 
            }

            var navElements = document.getElementsByTagName("nav");

            // Schleife durch alle ausgewählten Elemente
            for (var i = 0; i < navElements.length; i++) 
            {
                // Hintergrundfarbe ändern (zum Beispiel auf Rot)
                navElements[i].style.position = "absolute";
                navElements[i].style.backgroundColor = "black";
            }

        }else
        {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
            document.getElementById("menu").style.backgroundColor= "white";
            document.getElementById("logo").style.backgroundColor= "white";
            document.getElementById("last-name").style.color= "black";

            var navElements = document.getElementsByTagName("nav");

            var navLinks = document.getElementsByClassName("navLink");
  
            for (var i = 0; i < navLinks.length; i++) {
                
                navLinks[i].style.color = "black"; 
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

    
    var iconElement = document.querySelector("#menuIcon i");

    $(window).resize(function() {

        let width = $(document).width();

        if (width <= 900)
        {
            iconElement.classList.remove("fa-xmark");
            iconElement.classList.add("fa-bars");
            $( "nav" ).css( "display", "none" );
    
        }else if(width > 900)
        {
            $( "nav" )
                .css("align-items", "end")
                .css('display' ,'flex')
                .css( "flex-direction","row")
                .css("paddingTop","0")
                .css("right","5%")
                .css("top","")
                .css("border-top","none");

        }
    });


    let position = $(window).scrollTop();
    var iconElement = document.querySelector("#menuIcon i");

    $(window).scroll(function() 
    {
        let scroll = $(window).scrollTop();
        let width = $(document).width();

        if(scroll > position && width < 800)
        {
            $('nav').slideUp(200);
            iconElement.classList.remove("fa-xmark");
            iconElement.classList.add("fa-bars");

        }else if (scroll < position && width < 800)
        {
            $('nav').slideUp(200);
            iconElement.classList.remove("fa-xmark");
            iconElement.classList.add("fa-bars");
    
            /* $( "nav" ).css( "display", "none");*/
        }
        position = scroll;
    });

    