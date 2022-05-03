/*let header = document.getElementById("menuDIV")
let btns = header.getElementsByClassName("activeLink");

    for (let i = 0; i < btns.length; i++)
    {
        btns[i].addEventListener("click", function()
        {
          let current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
}*/

$('nav a').on('click', function() {

    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

    $('header, body,html').animate({
        scrollTop: scrollPoint
    }, 80);

    return false;

})
$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 800) {
        $('nav').addClass('fixed');
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll +100) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });
    } else {

        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

}).scroll();


/*const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll("nav #menuDIV ul li");

window.addEventListener("scroll", ()=> {
    let current = "";
    sections.forEach(section =>{
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if(pageXOffset >= sectionTop){
            current = section.getAttribute("id");
        }
    })
    navLi.forEach(li =>{
        li.classList.remove("active");
        if(li.classList.contains(current)){
            li.classList.add("active")
            console.log(current);
        }
    })
})*/


