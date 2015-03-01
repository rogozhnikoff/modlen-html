$(function(){
    $('a.login_modal_a').click(function(ev) {
        ev.preventDefault();
        $(this).next().click();
    });


    var popupLink = $('.head__my-link'),
        popup = $('.pop-up-sign'),
        head = $('.wrapper'),
        footer = $('.foot'),
        close = $('.popup-sign__close'),
        blur = 'blurJS';

    popupLink.click(function(e) {
        if (popupLink.text() == 'My Modlen') {
            e.preventDefault();
            popup.addClass('active');
            head
                .add(head)
                .add(footer)
                .addClass(blur)
        }
    });
    close.click(function(e) {
        e.preventDefault();
        popup.removeClass('active');
        head
            .add(head)
            .add(footer)
            .removeClass(blur)
    });
});