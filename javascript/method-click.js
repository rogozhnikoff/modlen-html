$(function(){
    $('.method-list__item').click(function(ev) {
        ev.preventDefault();

        var item = $(this).closest('.method-list__item'),
            tabs = $('.payment__card'),
            itemPos = item.data('class');

        console.log(itemPos, 1);

        tabs.filter('.payment__card_' + itemPos)
            .addClass('active')
            .siblings().removeClass('active');
        item
            .addClass('method-list__item_active')
            .siblings().removeClass('method-list__item_active');
    });
});