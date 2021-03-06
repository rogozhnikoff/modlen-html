<!DOCTYPE html>
<html>
<head>
    <title>Modlen</title>

    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/clearfix.css"/>
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/foot.css"/>
    <link rel="stylesheet" href="css/icons.css"/>
    <link rel="stylesheet" href="css/head.css"/>
    <link rel="stylesheet" href="css/order.css"/>
    <link rel="stylesheet" href="css/product.css"/>
    <link rel="stylesheet" href="css/item.css"/>
    <link rel="stylesheet" href="css/sign-in.css"/>
    <link rel="stylesheet" href="css/breadcrumb.css"/>
    <link rel="stylesheet" href="css/popup.css"/>
    <link rel="stylesheet" href="css/method-list.css"/>
    <link rel="stylesheet" href="css/navi-list.css"/>
    <link rel="stylesheet" href="css/payment.css"/>
    <link rel="stylesheet" href="css/summary.css"/>
    <link rel="stylesheet" href="css/btn.css"/>
    <link rel="stylesheet" href="css/order-info.css"/>
    <link rel="stylesheet" href="css/option.css"/>
    <link rel="stylesheet" href="css/info.css"/>
    <link rel="stylesheet" href="css/cancel.css"/>
    <link rel="stylesheet" href="css/like-this.css"/>
    <link rel="stylesheet" href="css/price.css"/>
    <link rel="stylesheet" href="css/option-list.css"/>
    <link rel="stylesheet" href="css/color-choice.css"/>
    <link rel="stylesheet" href="css/size-list.css"/>
    <link rel="stylesheet" href="css/measure-list.css"/>
    <link rel="stylesheet" href="css/delivery.css"/>
    <link rel="stylesheet" href="css/foot-banner.css"/>
    <link rel="stylesheet" href="css/data-list.css"/>
    <link rel="stylesheet" href="css/ic.css"/>
    <link rel="stylesheet" href="css/lang.css"/>
    <link rel="stylesheet" href="css/baton.css"/>
    <link rel="stylesheet" href="css/modlen.css"/>
    <link rel="stylesheet" href="css/badge.css"/>
    <link rel="stylesheet" href="css/poster.css"/>
    
    


    <script type="text/javascript" src="javascript/vendor/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="javascript/vendor/masonry.js"></script>
    <script type="text/javascript" src="javascript/vendor/lazyload.js"></script>

    <script type="text/javascript" src="javascript/check-heart.js"></script>
    <script type="text/javascript" src="javascript/choose-color.js"></script>
    <script type="text/javascript" src="javascript/currency.js"></script>
    <script type="text/javascript" src="javascript/flatty.js"></script>
    <script type="text/javascript" src="javascript/gallery.js"></script>
    <script type="text/javascript" src="javascript/item.js"></script>
    <script type="text/javascript" src="javascript/like.js"></script>
    <script type="text/javascript" src="javascript/method-click.js"></script>
    <script type="text/javascript" src="javascript/navi.js"></script>
    <script type="text/javascript" src="javascript/options.js"></script>
    <script type="text/javascript" src="javascript/order.js"></script>
    <script type="text/javascript" src="javascript/pass.js"></script>
    <script type="text/javascript" src="javascript/popup.js"></script>

    <!-- fotorama.css & fotorama.js. -->
	<link  href="javascript/fotorama/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="javascript/fotorama/fotorama.js"></script> <!-- 16 KB -->
</head>
<body>
<div class="wrapper">
    <header class="head container">
        <div class="head__theme"></div>

        <div class="head__content">
            <div class="head__left">
	          <div class="head__left_into">
                <div class="head__logo">
                    <a href="#" class="head__logo-link"><img src='img/content/logo.svg'></a>
                </div>
                <div class="head__quality">
                    <h1><a href="#" class="head__quality-link">Quality</a></h1>
                    <h1><a href="#" class="head__quality-link">Beauty</a></h1>
                    <h1><a href="#" class="head__quality-link">Accessibility</a></h1>
                </div>
	          </div>  
            </div>

            <div class="head__right">
                <div class="head__top">
                    <div class="head__my">
                        <!--<div class="head__like">-->
                        <!--<div class="like-this">-->
                        <!--<a class="like-this__heart" href=""><span class="like-this__num">0</span></a>-->
                        <!--</div>-->
                        <!--</div>-->

                        <div class="head__cart">
                            <i class="ic ic-cart head__cart-icon"></i>
                            <a href="" class="head__cart-link">Cart</a>
							<? $headcartcount = rand(1, 111); ?>
                            <span class="head__cart-count"><?=($headcartcount)?></span>
                        </div>

                        <a href="#popup-mymodlen" class="head__my-link dashed popup-link"><u>My Modlen</u></a>
                    </div>
                    <div class="head__free">
                        <a href="#" class="head__shipping-link">Free shipping</a>
                        to your hands<!--to New York <span class="head__and">&</span> USA-->
                    </div>
            <div class="currency">
				<p class="currency__text currency__text_bl"><i class="fa fa-eur"></i></p>
				<p class="currency__text currency__text_border active"><i class="fa fa-usd"></i></p>
				<p class="currency__text currency__text_br"><i class="fa fa-gbp"></i></p>
			</div>
           </div>
               

                <div class="head__navi-list">
                    <ul class="navi-list">
                        <li class="navi-list__item active">
                            <a class="navi-list__link" href="#"><span>Rhythmic Gymnastics <!-- Leotards--></span><!--<span class="overflow">Leotards</span>--></a>
                        </li>
                        <li class="navi-list__item">
                            <a class="navi-list__link" href="#"><span>Acrobatic Gymnastics<!-- Dress--></span></a>
                        </li>
                        <li class="navi-list__item ">
                            <a class="navi-list__link" href="#"><span>Ice Figure Skating<!-- Dress--></span></a>
                        </li>
                        <li class="navi-list__item ">
                            <a class="navi-list__link" href="#"><span>Accessories<!-- Dress--></span></a>
                        </li>
                    </ul>
                </div>
                <div class="head__social-list">
                    <ul class="social-list">
                        <li class="social-list__item social-list__item_mr_20">
                            <a href="http://modlenstudio.com/" class="social-list__link">STUDIO</a> on

                            <a href="#" class="head__fb-link"><i class="icon-fb"></i></a>
                            <a href="#" class="head__instagram-link"><i class="icon-instagram"></i></a>
                            <a href="#" class="head__pinterest-link"><i class="icon-pinterest"></i></a>
                        </li>
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">STORE</a> on
                            <a href="#" class="head__etsy-link"><i class="icon-etsy"></i></a>
                        </li>
                        <li class="social-list__item social-list__item_ml_20">
                            <a href="#" class="social-list__link">HAPPY CUSTOMERS</a>
                        </li>
                        <li class="social-list__item social-list__item_ml_20">
                            <a href="#" class="social-list__link">ANSWERS</a>
                        </li>
                        <li class="social-list__item social-list__item_ml_17">
                            <a href="mailto:elena@modlengymnastics.com" class="social-list__link">WRITE US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <i class="head__lang-line"></i>
        <a class="head__lang-switcher popup-link" href="#popup-lang" data-clone-el=".head__lang-line">
            <span class="head__lang-current"><u>en</u></span>
        </a>
    </header>
    <div class="content container">