<!--電話驗證-輸入驗證碼-->
<div id="pct-lightbox-modifyphonenumber" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">為了帳戶安全<br>請驗證您原本賣家的手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="pct-ui form-label break-label">
                <div class="pct-ui form text-without-input">
                    <p class="data-text eng-num">+886 918875017</p>
                    <a class="pct-ui btn-xs btn" id="popup__chashout-01__Btn" href="chashout.html" target="_blank">傳送驗證碼
                        10</a>
                </div>
            </div>
            <div class="pct-ui form-label break-label">
                <div class="verify-box">
                    <div class="pct-ui form fluid national-code">
                        <input type="text" maxlength="10" name="verifycode" placeholder="請輸入驗證碼">
                    </div>
                </div>
                <a href="#" class="pct-ui btn btn-fluid btn-primary">確定送出</a>
            </div>

        </div>
    </div>
</div>




<!--電話驗證-輸入電話-->
<div id="pct-lightbox-inputphonenumber" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">修改連絡手機號碼<br></div>
            <div class="remark">訂單簡訊通知會發送到此手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="tel-number-box">
                <span class="pct-icon icon-plus"></span>
                <div class="pct-ui form national-code">
                    <input type="text" placeholder="國碼">
                </div>
                <div class="pct-ui form tel-number">
                    <input type="text" placeholder="請輸入您的電話">
                </div>
            </div>
            <a href="#" class="pct-ui btn btn-fluid btn-primary">確定送出</a>
        </div>
    </div>
</div>




<!--電話驗證-輸入驗證碼-->
<div id="pct-lightbox-modifynewphonenumber" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證手機號碼</div>
            <div class="remark">訂單簡訊通知會發送到此手機號碼</div>

            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="pct-ui form-label break-label">
                <div class="verify-box justify-content-center">
                    <div class="pct-ui form national-code ;">
                        <input type="text" maxlength="10" name="verifycode" placeholder="請輸入驗證碼">
                    </div>
                </div>

                <div class="modal-actions">
                    <a href="#" class="pct-ui btn btn-primary-outlined">重新傳送</a>
                    <a href="#" class="pct-ui btn btn-primary">確定送出</a>
                </div>

                <!-- <a href="#" class="pct-ui btn btn-fluid btn-primary">送出驗證碼</a> -->
            </div>

        </div>
    </div>
</div>





<!-- 出編輯資料燈箱（退貨地址與收件者） -->
<div id="pct-lightbox-editinformation" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">退貨地址與收件者修改</div>
    <div class="modal-content min-height">

        <div class="shop-address-box">
            <div class="shop-address">
                <div class="pct-ui form-label">
                    <label for="">退貨地址，請以英文填寫。</label>
                    <div class="form__keyin__btn">
                        <a href="https://translate.google.com.tw/?hl=zh-TW" class="pct-ui btn-xs btn"
                            target="_blank">使用google翻譯</a>
                    </div>
                </div>
            </div>
            <div class="address-form">
                <div class="form-column">
                    <div class="pct-ui form-label break-label two-column">
                        <label for="">地址</label>
                        <div class="pct-ui form">
                            <input type="text" placeholder="請輸入您的地址" value="No. 227 Sec.1 Xing Long Rd.">
                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="pct-ui form-label break-label three-column">
                        <label for="">縣市</label>
                        <div class="pct-ui form select">
                            <select class="formbox_rightSelect selectpicker " id="city" name="city2"
                                onchange="changeZone( &quot;ตลิ่งชัน&quot;, &quot;zh&quot;)">
                                <option value="">請選擇</option>
                                <option value="" selected="selected">台北市</option>
                                <option value="">新北市</option>
                                <option value="">基隆市</option>
                                <option value="">基隆縣</option>
                                <option value="">桃園市</option>
                                <option value="ขอนแก่น">桃園縣</option>
                            </select>
                        </div>
                    </div>
                    <div class="pct-ui form-label break-label three-column">
                        <label for="">市/區</label>
                        <div class="pct-ui form select">
                            <select class="formbox_rightSelect selectpicker" id="province1" name="province2"
                                onchange="showZipCode()">
                                <option value="">中正區</option>
                                <option value="">大安區</option>
                                <option value="">永和區</option>
                                <option value="">中和區</option>
                                <option value="">板橋區</option>
                                <option value="">三重區</option>
                            </select>
                        </div>
                    </div>
                    <div class="pct-ui form-label break-label zipcode">
                        <label for="">郵遞區號</label>
                        <div class="pct-ui form">
                            <input type="text" placeholder="郵遞區號">
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="pct-ui form-label break-label two-column">
                        <label for="">收件者</label>
                        <div class="pct-ui form">
                            <input type="text" value="SARRY HSU">
                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="pct-ui form-label break-label two-column">
                        <label for="">聯絡電話</label>
                        <div class="pct-ui form">
                            <div class="form__keyin">
                                <div class="countrycode">
                                    <input type="tel" name="countrycode" value="886">
                                </div>
                                <div class="phonenumber">
                                    <input type="tel" name="phonenumber" value="926693639">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-primary">送出</a>
    </div>
</div>
<!-- 燈箱結束 -->


<!-- 備貨天數設定燈箱 -->
<div id="pct-lightbox-stockPrepare" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定商品備貨天數</div>
    <div class="modal-content min-height">
        <div class="description">
            <div class="pct-ui form text-with-input">
                <p class="align-left">我需要 </p>
                <input type="text" placeholder="" value="3" class="processing-day">
                <p class="align-right">天備貨。</p>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-primary">送出</a>
    </div>
</div>