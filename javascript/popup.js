$(function () {
    var $body = $('body'),
        wrapper = $('.wrapper'),
        timeAnimate = 300;

    $body.on('click', '.popup-link:not(.is-cloned)', function (ev) {
        ev.preventDefault();

        var link = $(this),
            id = (link.attr('href') || link.data('href')).slice(1),
            popup = $('.popup#' + id);

        if(popup.length < 1) throw 'Popup with id ' + id + ' doesnt exist';

        var linkOffset = link.offset(),
            linkPosition = $.extend(linkOffset, {
                right: linkOffset.left + link.width(),
                bottom: linkOffset.top + link.height()
            }),
            closeButton = popup.find('.popup__close'),
            clone = (function(selector){
                return (selector ? link.add($(selector)) : link).clone().addClass('is-cloned').insertBefore(popup)
            })(link.data('clone-el')),
            closePopup = function(){
                popup.animate({
                    opacity: 0
                }, {
                    duration: timeAnimate,
                    complete: function(){
                        popup.css({display: 'none'});
                        clone.remove();
                        wrapper.removeClass('wrapper-onpopup');
                    }
                });
                $body.off('click.popup');
            };

        $body.on('click.popup', function(ev){
            if ($(ev.target).closest('.popup').length < 1) {
                closePopup();
            }
        });
        closeButton.on('click', closePopup);


        // show
        clone.css({
            position: 'absolute',
            zIndex: 20,
            left: linkPosition.left,
            top: linkPosition.top,
            background: 'white',
            display: 'block'
        });
        popup.css({
            display: 'block',
            left: linkPosition.left,
            top: linkPosition.bottom + 10,
            width: popup.data('width') || 250
        }).animate({
            opacity: 1
        }, timeAnimate);

        wrapper.addClass('wrapper-onpopup');

    });
});

/*
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
 });*/
