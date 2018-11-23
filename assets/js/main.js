$(window).scroll(function(){
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '1px 10px')
    } else {
        $('#navbar').css('padding', '10px')
    }
})