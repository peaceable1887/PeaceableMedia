    window.onscroll = function()
    {
        scrollFunction()
    };

    function scrollFunction()
    {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("menu").style.fontSize = "10px";
        } else {
            document.getElementById("menu").style.fontSize = "";
        }
    }

    $(window).scroll(function()
    {
        if ($(window).scrollTop() > 300)
        {
            $('.logo').slideUp(300);
            $('.headline').slideUp(300);

        } else {
            $('.logo').slideDown(300);
            $('.headline').slideDown(300);

        }
    });