<!--電話驗證-輸入驗證碼-->
<div id="sea-lightbox-modifyphonenumber" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">為了帳戶安全<br>請驗證您原本賣家的手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="sea-ui form-label break-label">
                <div class="sea-ui form text-without-input">
                    <p class="data-text eng-num">+886 918875017</p>
                    <a class="sea-ui btn-xs btn" id="popup__chashout-01__Btn" href="chashout.html" target="_blank">傳送驗證碼 10</a>
                </div>
            </div>
            <div class="sea-ui form-label break-label">
                <div class="verify-box">
                    <div class="sea-ui form fluid national-code">
                        <input type="text" maxlength="10" name="verifycode" placeholder="請輸入驗證碼">
                    </div>
                </div>
                <a href="#" class="sea-ui btn btn-fluid btn-primary">確定送出</a>
            </div>
        </div>
    </div>
</div>



<!--電話驗證-輸入電話-->
<div id="sea-lightbox-inputphonenumber" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">修改連絡手機號碼<br></div>
            <div class="remark">訂單簡訊通知會發送到此手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="tel-number-box">
                <span class="sea-seller-icon icon-plus"></span>
                <div class="sea-ui form national-code">
                    <input type="text" placeholder="國碼">
                </div>
                <div class="sea-ui form tel-number">
                    <input type="text" placeholder="請輸入您的電話">
                </div>
            </div>
            <a href="#" class="sea-ui btn btn-fluid btn-primary">確定送出</a>
        </div>
    </div>
</div>




<!--電話驗證-輸入驗證碼-->
<div id="sea-lightbox-modifynewphonenumber" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證手機號碼</div>
            <div class="remark">訂單簡訊通知會發送到此手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="sea-ui form-label break-label">
                <div class="verify-box justify-content-center">
                    <div class="sea-ui form national-code ;">
                        <input type="text" maxlength="10" name="verifycode" placeholder="請輸入驗證碼">
                    </div>
                </div>
                <div class="modal-actions">
                    <a href="#" class="sea-ui btn btn-primary-outlined">重新傳送</a>
                    <a href="#" class="sea-ui btn btn-primary">確定送出</a>
                </div>
                <!-- <a href="#" class="sea-ui btn btn-fluid btn-primary">送出驗證碼</a> -->
            </div>
        </div>
    </div>
</div>




<!-- 出編輯資料燈箱（退貨地址與收件者） -->
<div id="sea-lightbox-editinformation" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">編輯退貨地址與收件者</div>
    <div class="scrolling-tall modal-content min-height">

        <div class="shop-address-box">
            <!-- <div class="shop-address">
                <div class="sea-ui form-label">
                    <label for="">退貨地址，請以英文填寫。</label>
                    <div class="form__keyin__btn">
                        <a href="https://translate.google.com.tw/?hl=zh-TW" class="sea-ui btn-xs btn" target="_blank">使用 Google 翻譯</a>
                    </div>
                </div>
            </div> -->
            <div class="address-form">
                <div class="form-column">
                    <div class="sea-ui form-label break-label two-column">
                        <label for="">地址</label>
                        <div class="sea-ui form">
                            <input type="text" placeholder="請輸入您的地址" value="No. 227 Sec.1 Xing Long Rd.">
                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="sea-ui form-label break-label three-column">
                        <label for="">縣市</label>
                        <div class="sea-ui form select">
                            <select class="formbox_rightSelect selectpicker " id="city" name="city2" onchange="changeZone()">
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
                    <div class="sea-ui form-label break-label three-column">
                        <label for="">市/區</label>
                        <div class="sea-ui form select">
                            <select class="formbox_rightSelect selectpicker" id="province1" name="province2" onchange="showZipCode()">
                                <option value="">中正區</option>
                                <option value="">大安區</option>
                                <option value="">永和區</option>
                                <option value="">中和區</option>
                                <option value="">板橋區</option>
                                <option value="">三重區</option>
                            </select>
                        </div>
                    </div>
                    <div class="sea-ui form-label break-label zipcode">
                        <label for="">郵遞區號</label>
                        <div class="sea-ui form">
                            <input type="text" placeholder="郵遞區號">
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="sea-ui form-label break-label two-column">
                        <label for="">收件者</label>
                        <div class="sea-ui form">
                            <input type="text" value="SARRY HSU">
                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="sea-ui form-label break-label two-column">
                        <label for="">聯絡電話</label>
                        <div class="sea-ui form">
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
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">送出</a>
    </div>
</div>
<!-- 燈箱結束 -->


<!-- 備貨天數設定燈箱 -->
<div id="sea-lightbox-stockPrepare" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定商品備貨天數</div>
    <div class="modal-content min-height">
        <div class="description">
            <div class="sea-ui form text-with-input">
                <p class="align-left">我需要 </p>
                <input type="text" placeholder="" value="3" class="processing-day">
                <p class="align-right">天備貨。</p>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">送出</a>
    </div>
</div>


<!-- 付款方式燈箱 -->

<div id="sea-lightbox-mobilebanking" class="sea-ui modal large">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>

    <div class="modal-header">各通路繳款方式</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="title">包含 網路銀行, 手機網路銀行, 臨櫃, ATM</div>
            <div class="bank-list-table md-break-table">
                <table class="normal-table">
                    <colgroup>
                        <col class="table--w40">
                        <col class="table--w10">
                        <col class="table--w10">
                        <col class="table--w10">
                        <col class="table--w10">
                    </colgroup>
                    <thead class="normallist-head">
                        <tr>
                            <th class="eng-num">Bank</th>
                            <th class="eng-num">Mobile Banking</th>
                            <th class="eng-num">Internet Banking</th>
                            <th class="eng-num">ATM</th>
                            <th class="eng-num">Counter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_bangkok.png" alt="bangkok">Bangkok Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                V
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_Kasikorn.png" alt="Kasikorn"> Kasikorn Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_SBC.png" alt="SBC"> Siam Commercial Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                --
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_KTB.png" alt="KTB"> KTB
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_Krungsri.png" alt="Krungsri">Bank of Ayudhya
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_Thanachart.png" alt="Thanachart">Thanachart Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                V
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_MIZUHO.png" alt="MIZUHO">Mizuho Bank
                            </td>
                            <td data-title="Mobile Banking">
                                --
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                --
                            </td>
                            <td data-title="Counter">
                                V
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_Kiatnakin.png" alt="Kiatnakin">Kiatnakin Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                V
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_GSB.png" alt="GSB">Government Savings Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                --
                            </td>
                            <td data-title="ATM">
                                --
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_TMB.png" alt="TMB"> TMB Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_CIMB.png" alt="CIMB"> CIMB Thai Bank
                            </td>
                            <td data-title="Mobile Banking">
                                --
                            </td>
                            <td data-title="Internet Banking">
                                --
                            </td>
                            <td data-title="ATM">
                                V
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_UOB.png" alt="UOB"> United Overseas Bank
                            </td>
                            <td data-title="Mobile Banking">
                                V
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                --
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                        <tr class="normallist-item">
                            <td>
                                <img src="img/footer/logo_bank_ICBC.png" alt="ICBC"> ICBC Thai
                            </td>
                            <td data-title="Mobile Banking">
                                --
                            </td>
                            <td data-title="Internet Banking">
                                V
                            </td>
                            <td data-title="ATM">
                                --
                            </td>
                            <td data-title="Counter">
                                --
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束 -->