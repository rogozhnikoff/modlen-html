<? include '_header.php'; ?>

<div class="container">
<div class="container__in">
<div class="payment-top">
	<div class="breadcrumb-wrap breadcrumb-wrap_ml_220  left">
		<ul class="breadcrumb">
			<li class="breadcrumb__item"><a class="breadcrumb__link" href="#">CUSTOM FIT</a></li>
			<li class="breadcrumb__item"><i class="breadcrumb__arrow"></i></li>
			<li class="breadcrumb__item"><a class="breadcrumb__link breadcrumb__link_active" href="#">CART</a></li>
			<li class="breadcrumb__item"><i class="breadcrumb__arrow"></i></li>
			<li class="breadcrumb__item"><a class="breadcrumb__link breadcrumb__link_next" href="#">CHECKOUT</a></li>
		</ul>
	</div>

	<div class="currency right">
		<p class="currency__text currency__text_bl"><i class="fa fa-eur"></i></p>

		<p class="currency__text currency__text_border active"><i class="fa fa-usd"></i></p>

		<p class="currency__text currency__text_br"><i class="fa fa-gbp"></i></p>
	</div>
</div>
<div class="payment-wrap clearfix">
	<div class="coupon left">
		<p class="coupon__top">Have a <a href="#" class="coupon__link">discount code</a></p>

		<form action="">
			<input type="text" class="input input_w_162" />

			<p class="coupon__invalid">invalid coupon code</p>
		</form>
	</div>

	<div class="processing-order__wrap left">
		<div class="order-info order-info_ml0">
			<div class="box box_bt">
				<div class="order-info__inner">


					<div id="closed">

						<div class="order-info__your-order total__row_mt_15">
							<p class="order-info__subsection order-info__subsection_pt">Your order</p>

							<div class="order-info__all-item order-info__r_mr_87">

								<div class="order-info__item">
									<a href="#" class="order-info__img-link"><img src="img/icon/item-small.png" alt="" /></a>

									<div class="order-info__item-wrap">
										<div class="order__number">Order #973-1 Custom fit</div>
										<a href="#" class="order__name-link order__name-link_fs_15">Rhythmic Gymnastics Leotard № 24</a>
									</div>
								</div>

								<div class="order-info__item">
									<a href="#" class="order-info__img-link"><img src="img/icon/item-small.png" alt="" /></a>

									<div class="order-info__item-wrap">
										<div class="order__number">Order #973-1 Adult M</div>
										<a href="#" class="order__name-link order__name-link_fs_15">Rhythmic Gymnastics Leotard № 24</a>
									</div>
								</div>

								<div class="order-info__item">
									<a href="#" class="order-info__img-link"><img src="img/icon/item-small.png" alt="" /></a>

									<div class="order-info__item-wrap">
										<div class="order__number">Order #973-1 Adult S</div>
										<a href="#" class="order__name-link order__name-link_fs_15">Rhythmic Gymnastics Leotard № 24</a>
									</div>
								</div>

							</div>
						</div>

						<div class="order-info__delivery">
							<p class="order-info__subsection">Delivery</p>

							<div class="order-info__delivery-address total__r_w_78">
								<p class="order-info__user-name">MartinBrown <a href="mailto:" class="order-info__user-mail">martin@brown.com</a>
								</p>

								<p class="order-info__address">
									64 Hawthorne Crescent
									Dodworth, Barnsley
									South Yorkshire, S75 3JZ
									United Kingdom
								</p>
							</div>
						</div>

						<div class="order-info__paid">
							<p class="order-info__subsection">To pay</p>

							<div class="order-info__price"><i class="fa fa-usd"></i>357.-</div>
						</div>

						<div class="order-info__guarantee">
							<p class="order-info__subsection">Guarantee</p>

							<p class="order-info__guarantee-text">If your leotards are not perfect exchange them free of
							                                      charge for another or get a complete refund.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="payment">
	<div class="payment__left">
		<div class="payment__bank-card">
		</div>
		<p class="payment__card-description">
			CVV/CVC code is on the back side of the card in the field after the signature of the owner of the card number
		</p>
	</div>

	<div class="payment__right">
		<div class="payment__method-list">

			<ul class="method-list">
				<li class="method-list__payment">Payment</li>
				<li class="method-list__item method-list__item_br_left method-list__item_active" data-class="first">
					<a href="" class="method-list__link method-list__link_visa"></a></li>
				<li class="method-list__item" data-class="second">
					<a href="" class="method-list__link method-list__link_paypal"></a>
				</li>
				<li class="method-list__item method-list__item_w" data-class="third">
					<a href="" class="method-list__link method-list__link_west"></a>
				</li>
				<li class="method-list__item method-list__item_br_right" data-class="forth">
					<a href="#" class="method-list__link method-list__link_lh" data-class="forth">Bank transfer</a>
				</li>
			</ul>

		</div>
		<div class="tabs">

			<div data-class="" class="payment__card payment__card_first active ">
				<div class="payment__data-card">
					<div class="payment__card-info payment__card-info_mb_19">Card No.</div>
					<label class="payment__card-info" for="nameCard">Name on card</label>

					<div class="payment__card-info">Expires</div>
					<label class="payment__card-info" for="cvv">CVV/CVC<span class="payment__arrow"></span></label>
				</div>
				<div class="payment__field">
					<div class="payment__input-wrap">
						<input type="text" step="4" class="input payment__input-num" maxlength="4" value="" />
						<input type="text" class="input payment__input-num" maxlength="4" />
						<input type="text" class="input payment__input-num" maxlength="4" />
						<input type="text" class="input payment__input-num" maxlength="4" />
					</div>
					<div class="payment__input-wrap">
						<input type="text" class="input payment__input-name" id="nameCard" />
						<span class="payment__input-desc">As written on the card</span>
					</div>
					<div class="payment__input-wrap payment__input-wrap_mb">
						<span href="#" class="payment__month-choice">1 - january <i class="fa fa-sort"></i></span>
						<span href="#" class="payment__year-choice">2014 <i class="fa fa-sort"></i></span>
					</div>
					<div class="payment__input-wrap payment__input-wrap_mb_0">
						<input type="text" class="input payment__input-cvv" maxlength="4"  id="cvv" />
					</div>
				</div>
			</div>

			<div class="payment__card payment__card_second">
				<h2>{TAb2}</h2>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>
			</div>

			<div class="payment__card payment__card_third">
				<h2>{Tab3}</h2>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>
			</div>

			<div class="payment__card payment__card_forth">
				<h2>{Some 4}</h2>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>

				<p>Lore Ipsum, take this place and show, what do you want:)</p>
			</div>
		</div>

		<div class="payment__billing">
			Billing address <span class="payment__billing-same">Same as delivery address</span>
			<a href="#" class="payment__change dashed"><u>Change</u></a>
		</div>
	</div>

</div>

<div class="payment-bottom">
	<div class="payment__desc">
		<div class="payment__desc-inner">
			<p class="payment__desc-top">
				Pressing "Finish order" button means that i agree with the following.
			</p>
			<h5 class="payment__desc-head">Delivery</h5>

			<p class="payment__desc-bottom">We have several options depending in your shipping address.Shipping
			                                costs per each delivery method available in your region are</p>
		</div>
		<a href="#" class="payment__desc-link">Read in a new window</a>
	</div>

	<div class="submit-order">
		<div class="submit-order__inner">
			<div class="submit-order__left">
				<a href="#" class="btn btn_green btn_box-shadow left"><span class="btn_in-shadow">Submit order</span></a>
			</div>
			<div class="submit-order__right">
				<div class="submit-order__text">
					Order will be placed right now and after payment you will be redirected to your order tracking
				</div>
			</div>
		</div>
	</div>

	<div class="cancel cancel_mt">
		<div class="cancel__left cancel__left_w_190">
			<a href="#" class="cancel__order-link">Go back</a>
			if something wrong
		</div>
		<div class="cancel__right cancel__right_w_320">
			<p class="cancel__specify">It remains to specify:
				<a href="#" class="cancel__red-link dashed"><u>Card No.</u></a>,
				<a href="#" class="cancel__red-link dashed"><u>Name on card</u></a>,
				<a href="#" class="cancel__red-link dashed"><u>CVV/CVC</u></a>
			</p>
		</div>
	</div>

</div>
</div>

<? include '_footer.php'; ?>