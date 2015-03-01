$(function(){
    var like = $('.head__cart-circle'),
        numb = like.text(), //забираем строку
        numint = parseInt(numb); //приводим к числу

    like.each(function addLikes() {
        if (numint >= 1) { // Если равно или больше 1, добавляем класс
            like.addClass("active");
        } else {
            like.removeClass("active"); //В другом случае, убираем
        }
    });
});

