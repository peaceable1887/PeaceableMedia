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
        let width = $(document).width();

        if ($(window).scrollTop() > 500 && width > 800)
        {
            $('.logo').slideUp(300);

        }else if ($(window).scrollTop() < 500 && width > 800)
        {
            $('.logo').slideDown(300);

        }else if ($(window).scrollTop() > 500 && width < 800)
        {

        }
    });

    $(window).resize(function() {

        let width = $(document).width();

        if (width <= 800)
        {
            $( "nav" ).css( "display", "none" );
            $('.logo').slideDown(0);

        }else if(width > 800)
        {
            $( "nav" )
                .css("align-items", "end")
                .css('display' ,'flex')
                .css( "flex-direction","row")
                .css("paddingTop","0");
        }
    });

    let position = $(window).scrollTop();

    $(window).scroll(function() {

        let scroll = $(window).scrollTop();
        let width = $(document).width();

        if(scroll > position && width < 800)
        {
            $('nav').slideUp(200);
        }else if (scroll < position && width < 800)
        {
            $('nav').slideUp(200);
            /* $( "nav" ).css( "display", "none");*/
        }
        position = scroll;
    });