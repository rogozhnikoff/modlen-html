$(window).load(function() {
    var $items = $('.item');

    if($items.length > 0) {
        $('#container').masonry({
            itemSelector: '.item',
            isFitWidth: true,
            //gutter: 35,
            columnWidth: 290
            //columnWidth: 315,
            //singleMode: false
            //isResizable: true,
            //isAnimated: true,
            //animationOptions: {
            //    queue: false,
            //    duration: 500
            //}
        });
    }
});
