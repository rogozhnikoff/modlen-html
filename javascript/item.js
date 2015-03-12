//$(function () {
//    var items = $('.item');
//
//    items.imagesLoaded()
//        .always(function (instance) {
//            console.log('all images loaded');
//        })
//        .done(function (instance) {
//            console.log('all images successfully loaded');
//
//            $('.more-btn').click(function (e) {
//                e.preventDefault();
//                var imgs = $('#putinHuilo').find('img');
//
//                imgs.attr('src', function () {
//                    return $(this).data('src');
//                });
//                $('#putinHuilo').toggle('display', 'block')({});
//            });
//            $.DrLazyload();
//            //checHeartNum();
//        })
//        .fail(function () {
//            console.log('all images loaded, at least one is broken');
//        })
//        .progress(function (instance, image) {
//            var result = image.isLoaded ? 'loaded' : 'broken';
//            console.log('image is ' + result + ' for ' + image.img.src);
//        });
//
//
//});

function square(x) {
    return x * x;
}
function getHypotenuse(x, y) {
    return Math.sqrt(
        square(x) + square(y)
    );
}

function orientByDiagonal(hyp, parent) {
    var width = parent.width(),
        height = parent.height(),
        diagonal = getHypotenuse(width, height),
        degree = (Math.asin(width / diagonal) * 180) - 35;


    console.log(degree);

    hyp.css({
        width: diagonal,
        transform: 'rotate(' + degree + 'deg)'
    });
}

$(function () {
    $('.item').each(function () {
        var $item = $(this),
            $stockprice = $item.find('.item__price_stock');

        if ($stockprice.length) {
            orientByDiagonal(
                $stockprice.find('.item__price-striker'),
                $stockprice
            );
        }
    });
});