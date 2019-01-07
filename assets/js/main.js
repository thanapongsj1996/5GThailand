(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(window).scroll(function(){
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '1px 10px')
    } else {
        $('#navbar').css('padding', '10px')
    }
})

$('.to-top').click(function(){
    $('html, body').animate({scrollTop: '0px'}, 800 )
})

jarallax(document.querySelectorAll('.jarallax'));