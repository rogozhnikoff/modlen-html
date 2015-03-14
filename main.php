<? include '_header.php'; ?>
<? include '_item.php'; ?>

<div class="banner">
    <div class="banner__bottline">
        <h2 class="banner__title">Rhythmic Gymnastics Leotards </h2>

        <div class="banner__links">
            <div class="green-arrow-item">
                <a class="" href="#">Stock for Sale</a>

                <p class="banner_txt">Leotard from <span class="fa fa-eur"></span>89</p>
            </div>
            <div class="green-arrow-item">
                <a class=" " href="#"><u>Discounts for Team</u></a>

                <p class="banner_txt">Up to 25% discount</p>
            </div>
            <div class="green-arrow-item">
                <a class="" href="#">Very Bright Leotard </a>

                <p class="banner_txt">A lot of shiny crystals</p>
            </div>
        </div>
    </div>
</div>
<div class="item-main" id="container">
    <? renderItem(1, false) ?>
    <? renderItem(2, true) ?>
    <? renderItem(3, false) ?>
    <? renderItem(4, true) ?>
    <div style="" class="item item_adv">
        <img data-lazy-src="img/items/krug.jpg" src="img/items/krug.jpg">

        <div class="item__bottom">
            <div class="item__sub-title">
                Lore Ipsum,
                <p class="item__txt">
                    is not different, some moments has take our crystal end explode!
                </p>
            </div>
        </div>
    </div>
    <? renderItem(5, false) ?>
    <? renderItem(6, true) ?>
    <div style="" class="item item-bords">
        <div class="item__code">
            <p><b>10% DISCOUNT</b> YOURSELF <br/>
            AND TO FRIEND.</p>

            <p>Tell a friend coupon code</p>
            XY18A14
            <p>and get a discount of 10% each!</p>
        </div>
    </div>
    <? renderItem(7, false) ?>
    <? renderItem(8, true) ?>
    <? renderItem(9, false) ?>

</div>


<!--<div class="btn-wrap">-->
<!--<div class="more">-->
<!--<div class="more__top">-->
<!--<a href="#" class="btn btn_green btn_box-shadow btn_font more-btn"><span class="btn_in-shadow">More Leotards</span></a>-->
<!--</div>-->
<!--<div class="more__info">Show 18 leotards from previous collection</div>-->
<!--<div class="more__img-wrap">-->
<!--<img src='img/texture/arrow-green-down.png'>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
</div>


<? include '_footer.php'; ?>

