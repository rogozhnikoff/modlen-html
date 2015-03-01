// Скриваем/показываем пароль
var pass = $('#pass'),
    eye = $('.input-wrap__eye');

eye.click(function(e) {
    e.preventDefault();
    if (pass.attr('type') === ('password')) {
        pass.attr('type', 'text');
    } else {
        pass.attr('type', 'password')
    }
});