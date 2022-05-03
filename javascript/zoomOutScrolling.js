    window.onscroll = function()
    {
        scrollFunction()
    };

    function scrollFunction()
    {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "2px solid #000000";
        } else {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
        }
    }

    $(window).scroll(function()
    {
        if ($(window).scrollTop() > 500)
        {
            $('.logo').slideUp(300);
            $('.headline').slideUp(300);

        } else {
            $('.logo').slideDown(300);
            $('.headline').slideDown(300);

        }
    });