<!--聯絡我們燈箱 -->
<div id="pct-lightbox-contactus" class="pct-ui modal contactus large">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">聯絡我們</div>
    <div class="modal-content">
        <div class="description">
            <div class="pct-ui form-label">
                <!--Email信箱-->
                <label for="">聯絡信箱</label>
                <div class="pct-ui form">
                    <input type="text" placeholder="xxxx@example.com">
                </div>
            </div>
            <div class="pct-ui form-select-label">
                <!--問題類型-->
                <label for="">問題選項</label>
                <div class="pct-ui form select">
                    <select>
                        <option value="1">問題選項</option>
                        <option value="1">會員註冊</option>
                        <option value="2">訂單問題</option>
                        <option value="4">帳戶問題</option>
                        <option value="5">付款方式問題</option>
                        <option value="6">其他</option>
                    </select>
                </div>
            </div>
            <div class="pct-ui form fluid">
                <textarea placeholder="請輸入留言訊息，我們將盡快回復您"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <!--清除-->
        <a href="#" class="pct-ui btn btn-cta-outlined lightbox_close">清空重寫</a>
        <!--確定發問-->
        <a href="#" class="pct-ui btn btn-cta">確定送出</a>
    </div>
</div>
<!-- 燈箱結束-->

<!--提領設定燈箱 -->
<div id="pct-lightbox-withdrawsetting" class="pct-ui modal lightbox-setbank">
    <!-- FOR RD: After Submit Show In Progress Loading  -->
    <div class="pct-ui loading-overlay" style="display: none">
        <div class="loading-circle small"></div>
    </div>

    <i class="pct-icon icon-delete lightbox_close"></i>
    <!-- <div class="modal-header">提領設定</div> -->

    <div class="modal-content">
        <div class="description">
            <div class="title">銀行帳號設定</div>
            <div class="modal-icon-img">
                <img src="img/bankaccount_setting.svg" alt="" class="img-fluid">
            </div>

            <div class="pct-ui form-label break-label">
                <!-- 說明FOR RD:  直接帶入KYC戶名 -->
                <div class="pct-ui form-label break-label">
                    <label for="">銀行戶名</label>
                    <div class="pct-ui form text-without-input">
                        <p class="data-text align-left">Sherry Hsu Snow Lily</p>
                    </div>
                </div>
                <div class="pct-ui form-select-label break-label">
                    <label for="">銀行名稱</label>
                    <div class="pct-ui form select">
                        <select>
                            <option value="0">請選擇</option>
                            <option value="1">002 Bangkok Bank (BBL)</option>
                            <option value="2">002 Bangkok Bank (BBL)</option>
                            <option value="3">002 Bangkok Bank (BBL)</option>
                        </select>
                    </div>
                </div>
                <label for="">銀行帳號</label>
                <div class="pct-ui form">
                    <input type="tel" placeholder="請輸入您的銀行帳號">
                </div>

                <p class="alert-atc">＊提醒您，銀行帳戶所有人必需與個人資料一致，否則會導致提領失敗。</p>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-cta-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-cta">確定送出</a>
    </div>
</div>
<!-- 燈箱結束-->

<!-- 編輯頭像燈箱 -->
<div id="pct-lightbox-avataredit" class="pct-ui modal small">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定你相片的位置和大小</div>
    <div class="scrolling modal-content">
        <div class="description">
            <img class="demo-cropper" id="avatar-cropper" src="http://sophia-0.com/PCH/seller/img/brand/brand_01.jpg"
                style="display: none;" />
            <div id="img-crop">
                <div id="step-upload">
                    <div class="img-crop-title">選擇您的相片</div>
                    <p class="img-crop-text">圖片尺寸建議 <span class="eng-num">500 x 500 px</span> ｜ 圖片格式 <span
                            class="eng-num">.png .jpg .gif</span></p>
                    <div class="block">
                        <div class="stage">
                            <label id="filedrag">
                                <div class="add-icon-box"><span class="pct-icon icon-plus"></span></div>
                                <div class="pct-icon icon-picture"></div>
                                <input type="file" id="fileselect" name="fileselect" accept="image/*" />
                            </label>
                        </div>
                    </div>
                </div>
                <div id="step-crop">
                    <!--  <div class="img-crop-title">設定你相片的位置和大小</div> -->
                    <div class="block">
                        <div class="stage">
                            <div id="croppie"></div>
                        </div>
                        <div onClick="cropRotate(-90);" class="pct-icon icon-rotate"></div>
                        <button class="pct-ui btn btn-cta-outlined" id="prev" onclick="cropCancel();">重新選擇</button>
                        <button class="pct-ui btn btn-cta" id="next" onclick="cropResult();">預覽圖片</button>

                    </div>
                </div>
                <div id="step-result">
                    <div class="img-crop-title">預覽圖像</div>
                    <div class="block">
                        <div class="stage"><img src="" /></div>
                        <button class="pct-ui btn btn-cta-outlined" id="prev" onclick="cropCancel();">重新選擇</button>
                        <button class="pct-ui btn btn-cta">確定送出</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束 -->

<!--請輸入您的號碼-->
<div id="pct-lightbox-idverify" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的帳號身分</div>
            <div class="modal-icon-img">
                <img src="img/password_verify.svg" alt="" class="img-fluid">
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">身份證號碼 或 公司商業登記號碼 (公司戶賣家)</label>
                <div class="pct-ui form fluid">
                    <input type="password" placeholder="請輸入您的密碼">
                </div>
                <a href="#" class="pct-ui btn btn-fluid btn-cta">確認送出</a>
            </div>

            <div class="pct-item-link">
                <a class="lightbox_close">忘記你的號碼？</a>
            </div>

        </div>
    </div>
</div>


<!-- KYC 銀行/SMS驗證相關 共用燈箱-->

<!--電話驗證-點選驗證電話號碼才會發送驗證碼到手機-->
<div id="pct-lightbox-sendtelverify" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的手機號碼</div>
            <p class="align-center">為了帳戶安全，請驗證 <span class="eng-num">+886926693639</span></p>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <a href="#" class="pct-ui btn btn-fluid btn-cta">驗證電話號碼</a>
            <div class="pct-item-link">
                <a href="shop-intro.php#editTel">編輯電話號碼</a>
            </div>

        </div>
    </div>
</div>

<!--電話驗證-輸入驗證碼-->
<div id="pct-lightbox-verifycode" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的手機號碼</div>

            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">已將驗證碼傳送至手機</label>
                <div class="pct-ui form text-without-input">
                    <p class="data-text align-left eng-num">+886 926693639</p>
                    <a href="shop-intro.php#editTel" class="pct-ui btn-xs btn">
                        <li class="pct-icon icon-edit"></li>修改號碼
                    </a>
                </div>
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">請輸入驗證碼</label>

                <div class="verify-box">
                    <div class="pct-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="pct-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="pct-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="pct-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                </div>
                <a href="#" class="pct-ui btn btn-fluid btn-cta">送出驗證碼</a>
            </div>
            <!-- 說明FOR RD:  倒數 帶入processing 超過次數 帶入樣式unsucess -->
            <div class="pct-item-link">
                <a href="#">重新傳送驗證碼 <span class="eng-num">(6)</span> </a>
                <p>您今天已經超過驗證次數！</p>
            </div>

        </div>
    </div>
</div>

<!--電話驗證-輸入電話-->
<div id="pct-lightbox-telverify" class="pct-ui modal lightbox-telverify">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">輸入您的手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="tel-number-box">
                <span class="pct-icon icon-plus"></span>
                <div class="pct-ui form text-without-input national-code">
                    <p class="data-text align-left eng-num">66</p>
                </div>
                <div class="pct-ui form tel-number">
                    <input type="text" placeholder="請輸入您的電話">
                </div>
            </div>
            <a href="#" class="pct-ui btn btn-fluid btn-cta">取得驗證碼</a>
        </div>
    </div>
</div>


<!--  提領設定--狀態05 舊會員 重送銀行認證申請 -->
<div id="pct-lightbox-verify-again" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">重新認證銀行帳號</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">我們會盡快進行您的銀行認證。</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-cta-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-cta">確定</a>
    </div>
</div>
<!-- 燈箱結束-->


<!-- KYC 銀行/SMS驗證相關 共用燈箱 END-->

<!--訂單--確認已收款-->
<div id="pct-lightbox-paymentdone" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">本次付款資料</div>
    <div class="scrolling-tall  modal-content">
        <div class="description">
            <div class="title">付款資訊</div>
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">匯款日期</div>
                    <div class="list-box-text eng-num">2018/09/13</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">匯款銀行</div>
                    <div class="list-box-text eng-num">002 Bangkok Bank (BBL)</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">匯款帳號</div>
                    <div class="list-box-text eng-num">12345678</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">匯款至</div>
                    <div class="list-box-text eng-num">002 Bangkok Bank (BBL)</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">匯款金額</div>
                    <div class="list-box-text eng-num">5300</div>
                </div>
            </div>
            <div class="title">付款憑證</div>

            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                    <div class="payment-img">
                        <a href="img/report_payment_receipt.gif" target="_blank"><img
                                src="img/report_payment_receipt.gif" alt="付款憑證" class="img-fluid"></a>
                    </div>
                    <div class="view-img-original">
                        <a href="img/report_payment_receipt.gif" target="_blank"><span
                                class="pct-icon icon-search"></span>檢視原圖</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--訂單--退款明細-->
<div id="pct-lightbox-refunddetail" class="pct-ui modal large">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">退款明細</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">退款日</div>
                    <div class="list-box-text eng-num">2018/09/13 14:13:18</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">退款原因</div>
                    <div class="list-box-text">沒有收到商品</div>
                </div>
                <!-- 說明 FOR RD: 若沒有填寫原因描述，請整個原因描述的description-list-box隱藏-->
                <div class="description-list-box">
                    <div class="list-box-item">原因描述</div>
                    <div class="list-box-text">若要送出取消訂單的申請，請在''訂單詳情''的頁面中點選''取消訂單''，選擇一個取消的原因並繼續。
                        銀行轉帳尚未完成轉帳付款前，買家即可直接取消訂單。 賣家接受取消：
                        若您的訂單未符合以上「立即取消」的條件，表示訂單已經進入處理程序，您的取消訂單申請必須經由賣家同意，若賣家未於兩天內回覆，訂單將自動取消。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">退款狀態</div>
                    <div class="list-box-text">退款中</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">賣家回覆</div>
                    <div class="list-box-text">無</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--訂單--出貨明細/收貨明細-->
<div id="pct-lightbox-dispatchdetail" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">出貨明細</div>
    <div class="modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">出貨日期</div>
                    <div class="list-box-text eng-num">2018/09/13 14:13:18</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">寄送方式</div>
                    <div class="list-box-text eng-num">ThaiPost-EMS</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">貨物追蹤碼</div>
                    <div class="list-box-text eng-num"><a href="#">991256748935574</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("assets/lightbox/notification/lightbox-notification.php"); ?>


<!--圖片裁切-->
<link rel="stylesheet" type="text/css" href="css/plugin/croppie.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script type="text/javascript" src="js/plugin/croppie/croppie.js"></script>
<!-- <script type="text/javascript" src="js/plugin/croppie/exif.js"></script> -->
<script src="js/js_photo_crop.js"></script>