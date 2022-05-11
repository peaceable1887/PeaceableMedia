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

        }else
        {
            document.getElementById("menu").style.fontSize = "";
            document.getElementById("menu").style.borderBottom = "";
        }
    }

    $(window).scroll(function()
    {
        if ($(window).scrollTop() > 500)
        {
            $('.logo').slideUp(300);

        }else
        {
            $('.logo').slideDown(300);
        }
    });



    $(window).resize(function() {

        let width = $(document).width();

        if (width < 800)
        {
            $( "nav" ).css( "display", "none" );

        }else if(width > 800)
        {
            $( "nav" ).css( "display", "flex" );

        }
    });