$(function(){
    var color = $('.color-choice__item'),
        colorin = 'color-choice__item_active',
        link = $('.color-choice__link');

    color.click(function() {
        $(this).addClass('color-choice__item_active');
        $(this).siblings().removeClass(colorin);
    });


    var cvc = $('.payment__input-cvv');
    $(cvc).focus(function() {
        $('.payment__arrow').show();
        $('.payment__bank-card').addClass('payment__bank-card_code');
        $('.payment__card-description').show();

    });
    cvc.blur(function() {
        $('.payment__bank-card').removeClass('payment__bank-card_code');
        $('.payment__arrow').hide();
        $('.payment__card-description').hide();
    });
});
