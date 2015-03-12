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
                                <i class="fa fa-circle color-choice__link" style="color: <?='#'.$color;?>"></i>
                            </li>
                            <? } ?>
                        </ul>
                    </div>

                    <img class="item__img" src="img/content/item_<?=$num?>.jpg">
                </div>
            </div>

            <div class="item__name-link-wrap">
                <p class="item__name-link">Rhythmic Gymnastics Leotard <span class=""># <?=$num?></span></p>
            </div>
            <? if ($stock) { ?><div class="item__stock-img"></div><? } ?>

            <div class="item__bottom">
                <div class="item__price item__price_strike"><i class="fa fa_fs_light fa-eur"></i><span class="">100</span>
                </div>
                <div class="item__price item__price_red"><i class="fa fa_fs_light fa-eur"></i><span class="">150</span>
                </div>
                <a class="item__rotator" href="#"></a>
                <a class="item__like-off" href="#"></a>
            </div>
        </div>
<?
}?>