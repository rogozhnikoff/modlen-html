$(function() {
    $('.item').imagesLoaded()
        .always(function(instance) {
            console.log('all images loaded');
        })
        .done(function(instance) {
            console.log('all images successfully loaded');

            $('.more-btn').click(function(e) {
                e.preventDefault();
                var imgs = $('#putinHuilo').find('img');

                imgs.attr('src', function() {
                    return $(this).data('src');
                });
                $('#putinHuilo').toggle('display', 'block')({});
            });
            $.DrLazyload();
            //checHeartNum();
        })
        .fail(function() {
            console.log('all images loaded, at least one is broken');
        })
        .progress(function(instance, image) {
            var result = image.isLoaded ? 'loaded' : 'broken';
            console.log('image is ' + result + ' for ' + image.img.src);
        });
});