<? function renderItem ($num = 1, $stock = false) {
?>
<div class="item" data-num="<?=$num?>">
    <div class="item__img-shadow item__img-shadow_top-right">
        <div class="item__img-shadow item__img-shadow_bottom-left">

            <div class="color-choice item__img-choice">
                <ul class="color-choice__list">
                    <?
                    $colors = array('fca61b', 'd04298', '2fa0cc', '5eb15f');
                    $active = rand(0, count($colors) - 1);
                    shuffle($colors);
                    foreach($colors as $i => $color) { ?>
                    <li class="color-choice__item <? if ($i == $active) { echo 'color-choice__item_active'; } ?>">
                        <i class="color-choice__color" style="background-color: <?='#'.$color;?>"></i>
                    </li>
                    <? } ?>
                </ul>
            </div>

            <img class="item__img" src="img/content/item_<?=$num?>.jpg">

            <a class="item__rotator" href="#"></a>

            <? if ($stock) { ?><div class="item__stock-img"></div><? } ?>
        </div>
    </div>

    <div class="item__name-link-wrap">
        <p class="item__name-link">Rhythmic Gymnastics Leotard <span class=""># <?=$num?></span></p>
    </div>


    <div class="item__bottom">
        <?
            $price = rand(10, 1111);
        ?>
        <div class="item__price <? if ($stock) { ?>item__price_stock<? } ?>">
            <? if ($stock) { ?><i class="item__price-striker"></i><? } ?>
            <i class="fa fa_fs_light fa-eur"></i><span><?=($price + 50)?></span>
        </div>
        <? if ($stock) { ?>
            <div class="item__price item__price_red">
                <i class="fa fa_fs_light fa-eur"></i>
                <span><?=$price?></span>
            </div>
        <? } ?>

        <div class="item__btn-zone">
            <button class="item__btn baton baton_green">Add to <i class="ic ic-buy-white baton__icon"></i></button>
            <span class="item__count">(<u>2</u>)</span>
        </div>
    </div>
</div>
<?
}?>