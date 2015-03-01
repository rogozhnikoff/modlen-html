$(function () {

    //Options
    var items = $('.measure-list').find('input'),
        active = 'measure-list__item_blue',
        wrongItem = 'measure-list__item_error',
        wrongLabel = 'measure-list__label_error',
        wrongInput = 'measure-list__input_error',
        activeInput = 'measure-list__input_blue',
        img = $('.option__mirror-img').find('img'),
        imgText = $('.option__mirror-info'),
        imgTextA = $('.option__videoguide'),
        arrow = $('<span>').addClass('measure-list__arrow'),
        x = 110,
        text = {};

    $.getJSON('../../js/options.json', function (data) {
        text = data;
    });

    items.on('focus', function (ev) {
        var parent = $(this).addClass(activeInput).parent().addClass(active),
            lab = parent.find('label'),
            src = 'img/options/' + lab.attr('for') + '.jpg';
        img.attr('src', src);
        img.load(function () {
            var hFull = img.height(),
                index = parseInt(parent.find('span').text()),
                y = Math.round(hFull * index / 16) + $(this).offset().top - parent.offset().top - 15,
                alpha = Math.round(-Math.atan2(y, x) * 180 / Math.PI - 180);

            //
            if (lab.attr('for') != 'Name' && lab.attr('for') != 'Age') {
                arrow.css({
                    'width': Math.round(Math.sqrt(x * x + y * y)),
                    'transform': 'rotate(' + alpha + 'deg)'
                }).appendTo(parent);
            }
            $(this).off();
        });
        imgText.html(text[lab.attr('for')].text);
        imgTextA.attr('href', text[lab.attr('for')].url);
    });

    items.on('blur', function (ev) {
        var parent = $(this).parent().removeClass(active);
        if (!validateOption($(this))) {
            parent.addClass(wrongItem);
            $(this).addClass(wrongInput).removeClass(activeInput);
            parent.find('label').addClass(wrongLabel);
        } else {
            parent.removeClass(wrongItem);
            $(this).removeClass(wrongInput).removeClass(activeInput);
            parent.find('label').removeClass(wrongLabel);
        }
    });

    function validateOption($el) {
        var value = parseInt($el.val());
        if ($el.parent().find('label').text().indexOf('name') != -1) return true;
        return !(isNaN(value) || value < 1 || value > 250)
    }

    $("form#new_user").bind("ajax:success", function (e, data, status, xhr) {
        if (data.success) {
            $('.popup-sign__close').click();
            $('.head__my-link u').text(data.user.email);
        } else {
            alert('failure!');
        }
    });
    $("form#user_form_main").bind("ajax:success", function (e, data, status, xhr) {
        if (data.success) {
            $('.head__my-link u').text(data.user.email);
            $('.option-sign-in').remove();
        } else {
            alert('failure!');
        }
    });
})