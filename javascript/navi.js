$(function(){
    var navi = $('.navi-list__item'),
        navLink = $('.navi-list__link');

    navi.click(function(e) {
        e.preventDefault();
        navi.siblings().removeClass('active');
        $(this).addClass('active');
    });
});