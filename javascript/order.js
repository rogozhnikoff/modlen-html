$(function(){
    // Схлопываем заказ
    var closed = $('.order-info__icon');

    closed.click(function() {
        $('#closed').slideToggle(800);

        if (closed.hasClass('fa-plus-square-o')) {
            closed.removeClass('fa-plus-square-o');
        } else {
            closed.addClass('fa-plus-square-o');
        }
    });
});


$(function() {
    var card = $('.payment__input-num');

    card.keypress(function(e) {

        var value = $(this).val().length;
        var thisVal = card.attr('maxlength');

        if (value >= thisVal) {
            $(this).next(':input').focus()
        }
    });
});