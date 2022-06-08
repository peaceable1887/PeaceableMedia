$('nav a').on('click', function()
{
    let scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

    $('header, body,html').animate({
        scrollTop: scrollPoint
    }, 80);

    return false;

})
$(window).scroll(function()
{
    let windscroll = $(window).scrollTop();
    if (windscroll >= 800)
    {
        $('nav').addClass('fixed');
        $('section').each(function(i)
        {
            if ($(this).position().top <= windscroll +100)
            {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });
    } else
        {
        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

}).scroll();



