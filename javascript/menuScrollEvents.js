let position = window.scrollY;
let iconElement = document.querySelector("#menuIcon i");

function changeMenuStyle()
{
    let menu = document.getElementById("menu");
    let logo = document.getElementById("logo");
    let navItems = document.getElementById("navItems");

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
    {
        menu.classList.add("scrolled");
        logo.classList.add("scrolled");
        navItems.classList.add("scrolled");
        menu.style.fontSize = "";
        menu.style.borderBottom = "";
        menu.style.boxShadow = "rgba(0, 0, 0, 0.15) 0px 1.95px 2.6px";

        document.getElementById("last-name").style.color= "white";
      
        let navLinks = document.getElementsByClassName("navLink");

        for (let i = 0; i < navLinks.length; i++) 
        {
            
            navLinks[i].style.color = "white"; 
           
            navLinks[i].addEventListener("mouseenter", function() 
            {
                this.style.color = "#0f5dc4"; 
            });

            navLinks[i].addEventListener("mouseleave", function() 
            {
                this.style.color = "white"; 
            });
            
        }

        let navElements = document.getElementsByTagName("nav");

        for (let i = 0; i < navElements.length; i++) 
        {
            navElements[i].style.position = "absolute";
        }

    }else
    {
        menu.classList.remove("scrolled");
        logo.classList.remove("scrolled");
        navItems.classList.remove("scrolled");
        menu.style.fontSize = "";
        menu.style.borderBottom = "";
        menu.style.boxShadow = "";
        document.getElementById("last-name").style.color= "black";
        

        let navElements = document.getElementsByTagName("nav");

        let navLinks = document.getElementsByClassName("navLink");

        for (let i = 0; i < navLinks.length; i++) 
        {
        
            navLinks[i].style.color = "black"; 

            navLinks[i].addEventListener("mouseenter", function() 
            {
                this.style.color = "#0f5dc4"; 
            });

            navLinks[i].addEventListener("mouseleave", function() 
            {             
                this.style.color = "black";         
            });
        }

        for (let i = 0; i < navElements.length; i++) 
        {
            navElements[i].style.position = "absolute";
        }
    }
}

function changeBurgerMenuIcon()
{
    let scroll = window.scrollY;
    let width = document.documentElement.clientWidth;

    let nav = document.querySelector("nav");

    if (scroll > position && width < 900) 
    {
        nav.style.display = "none";
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");

    } else if (scroll < position && width < 900)
    {
        nav.style.display = "none";
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");
    }

    position = scroll;
}

function foldInMenu()
{
    let scroll = window.scrollY;
    let width = document.documentElement.clientWidth;

    let nav = document.querySelector("nav");

    if (scroll > position && width < 900) 
    {
        nav.style.display = "none";
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");

    } else if (scroll < position && width < 900)
    {
        nav.style.display = "none";
        iconElement.classList.remove("fa-xmark");
        iconElement.classList.add("fa-bars");
    }

    position = scroll;
}

document.addEventListener('scroll', () => 
{
    changeMenuStyle();
    changeBurgerMenuIcon();
    foldInMenu();
});

document.addEventListener('DOMContentLoaded', () => 
{
    changeMenuStyle();
    changeBurgerMenuIcon();
    foldInMenu();
});