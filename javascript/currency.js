$(function(){
    // Валюта
    var cur = $('.currency__text');

    cur.click(function(e) {
        e.preventDefault();
        cur.siblings().removeClass('active');
        $(this).addClass('active');
    });
});