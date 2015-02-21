<? include '_header.php'; ?>
<div class="container">
    <div class="container__in">
        <div class="processing-order__my">
            <div class="my-wrap">
                <ul class="my-list">
                    <li class="my-list__item my-list__item_w_128">My orders:</li>
                    <li class="my-list__item my-list__item_w_96"><a class="my-list__link active" href="#">processing</a>
                    </li>
                    <li class="my-list__item my-list__item_w_95"><a class="my-list__link"
                                                                    href="#">completed</a></li>
                    <li class="my-list__item my-list__item_w_176"><a class="my-list__link" href="#">cancelled</a>
                    </li>
                    <li class="my-list__item"><a class="my-list__link" href="#">settings</a></li>
                </ul>
            </div>
        </div>
        <div class="change-mail-wrap">
            <div class="change-mail">
                <div class="box box_bt" style="width: 557px">
                    <div class="box__inner box__inner_offset">
                        <div class="change-mail__top">
                            <form action="">
                                <div class="change-mail__head change-mail__head_mb_12">Change email and/or
                                    password
                                </div>
                                <div class="input-wrap input-wrap_mb">
                                    <label for="MailChange"
                                           class="input-label input-label_pr_29">E-mail</label>
                                    <input type="text" id="MailChange" class="input input_w_154"/>
                                </div>
                                <div class="input-wrap">
                                    <label for="PassChange" class="input-label">Password</label>
                                    <input type="text" id="PassChange" class="input input_w_154"/>
                                </div>
                            </form>
                        </div>
                        <div class="change-mail__bottom">
                            <!--<input class="btn btn_green btn_box-shadow" type="submit" value="Change"/>-->
                            <a href="#" class="btn btn_green btn_box-shadow"><span class="btn_in-shadow">Change</span></a>
                            <a href="#" class="change-mail__unsubscribe change-mail__unsubscribe_ml dashed"><u>Unsubscribe
                                teh email news</u></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<? include '_footer.php'; ?>