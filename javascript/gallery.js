$(function(){
    //gallery in property
    var gallery = $('.property__img img');

    gallery.click(function(e) {
        e.preventDefault();
        var link = $(this),
            img = link.find('img'),
            src = img.attr('src'),
            imgLarge = $('.property__large-img img');


        imgLarge.attr('src', src);
        $('.property__large-img').show();

        imgLarge.click(function() {
            imgLarge.attr('src', 'none');
            $('.property__large-img').hide();
        });
    });
});