<!--聯絡我們燈箱 -->
<div id="sea-lightbox-contactus" class="sea-ui modal contactus large">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">聯絡我們</div>
    <div class="modal-content">
        <div class="description">
            <div class="sea-ui form-label">
                <!--Email信箱-->
                <label for="">聯絡信箱</label>
                <div class="sea-ui form">
                    <input type="text" placeholder="xxxx@example.com">
                </div>
            </div>
            <div class="sea-ui form-select-label">
                <!--問題類型-->
                <label for="">問題選項</label>
                <div class="sea-ui form select">
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
            <div class="sea-ui form fluid">
                <textarea placeholder="請輸入留言訊息，我們將盡快回復您"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <!--清除-->
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">清空重寫</a>
        <!--確定發問-->
        <a href="#" class="sea-ui btn btn-primary">確定送出</a>
    </div>
</div>
<!-- 燈箱結束-->



<!--提領設定燈箱 -->
<div id="sea-lightbox-withdrawsetting" class="sea-ui modal medium lightbox-setbank">
    <!-- FOR RD: After Submit Show In Progress Loading  -->
    <div class="sea-ui loading-overlay" style="display: none">
        <div class="loading-circle small"></div>
    </div>

    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <!-- <div class="modal-header">提領設定</div> -->
    <div class="modal-header">銀行帳號設定</div>
    <div class="modal-content scrolling">
        <div class="description">
            <div class="modal-icon-img hidden-sm-down">
                <img src="img/bankaccount_setting.svg" alt="" class="img-fluid">
            </div>

            <div class="sea-ui form-label break-label">
                <div class="sea-ui form-select-label break-label">
                    <label for="">銀行名稱</label>
                    <div class="sea-ui form select">
                        <select>
                            <option value="0">請選擇</option>
                            <option value="004">004 臺灣銀行</option>
                            <option value="005">005 土地銀行</option>
                            <option value="011">011 上海銀行</option>
                        </select>
                    </div>
                </div>
                <div class="sea-ui form-select-label break-label">
                    <label for="">分行代碼</label>
                    <div class="sea-ui form">
                        <input type="tel" placeholder="請輸入您的銀行分行代碼">
                    </div>
                </div>
                <div class="sea-ui form-select-label break-label">
                    <label for="">銀行帳號</label>
                    <div class="sea-ui form">
                        <input type="tel" placeholder="請輸入您的銀行帳號">
                    </div>
                </div>

                <div class="sea-ui form-select-label break-label">
                    <label for="">銀行戶名</label>
                    <div class="sea-ui form">
                        <input type="text" placeholder="請輸入您的銀行戶名">
                    </div>
                </div>
                <p class="alert-red">＊提醒您，提領銀行戶名需與身分認證的公司名稱相同，否則會導致提領失敗。</p>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="sea-ui btn btn-primary">確定送出</a>
    </div>
</div>
<!-- 燈箱結束-->




<!-- 編輯頭像燈箱 -->
<div id="sea-lightbox-avataredit" class="sea-ui modal small">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定你相片的位置和大小</div>
    <div class="scrolling modal-content">
        <div class="description">
            <img class="demo-cropper" id="avatar-cropper" src="http://sophia-0.com/PCH/seller/img/brand/brand_01.jpg" style="display: none;" />
            <div id="img-crop">
                <div id="step-upload">
                    <div class="img-crop-title">選擇您的相片</div>
                    <p class="img-crop-text">圖片尺寸建議 <span class="eng-num">500 x 500 px</span> ｜ 圖片格式 <span class="eng-num">.png .jpg .gif</span></p>
                    <div class="block">
                        <div class="stage">
                            <label id="filedrag">
                                <div class="add-icon-box"><span class="sea-seller-icon icon-plus"></span></div>
                                <div class="sea-seller-icon icon-picture"></div>
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
                        <div onClick="cropRotate(-90);" class="sea-seller-icon icon-rotate"></div>
                        <button class="sea-ui btn btn-primary-outlined" id="prev" onclick="cropCancel();">重新選擇</button>
                        <button class="sea-ui btn btn-primary" id="next" onclick="cropResult();">預覽圖片</button>

                    </div>
                </div>
                <div id="step-result">
                    <div class="img-crop-title">預覽圖像</div>
                    <div class="block">
                        <div class="stage"><img src="" /></div>
                        <button class="sea-ui btn btn-primary-outlined" id="prev" onclick="cropCancel();">重新選擇</button>
                        <button class="sea-ui btn btn-primary">確定送出</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束 -->

<!--請輸入您的號碼-->
<div id="sea-lightbox-idverify" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的帳號身分</div>
            <div class="modal-icon-img">
                <img src="img/password_verify.svg" alt="" class="img-fluid">
            </div>
            <div class="sea-ui form-label break-label">
                <label for="">身份證號碼 或 公司商業登記號碼 (公司戶賣家)</label>
                <div class="sea-ui form fluid">
                    <input type="password" placeholder="請輸入您的密碼">
                </div>
                <a href="#" class="sea-ui btn btn-fluid btn-primary">確認送出</a>
            </div>

            <div class="sea-item-link">
                <a class="lightbox_close">忘記你的號碼？</a>
            </div>

        </div>
    </div>
</div>


<!-- KYC 銀行/SMS驗證相關 共用燈箱-->

<!--電話驗證-點選驗證電話號碼才會發送驗證碼到手機-->
<div id="sea-lightbox-sendtelverify" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的手機號碼</div>
            <p class="align-center">為了帳戶安全，請驗證 <span class="eng-num">+886926693639</span></p>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <a href="#" class="sea-ui btn btn-fluid btn-primary">驗證電話號碼</a>
            <div class="sea-item-link">
                <a href="shop-intro.php#editTel">編輯電話號碼</a>
            </div>

        </div>
    </div>
</div>

<!--電話驗證-輸入驗證碼-->
<div id="sea-lightbox-verifycode" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">驗證您的手機號碼</div>

            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="sea-ui form-label break-label">
                <label for="">已將驗證碼傳送至手機</label>
                <div class="sea-ui form text-without-input">
                    <p class="data-text align-left eng-num">+886 926693639</p>
                    <a href="shop-intro.php#editTel" class="sea-ui btn-xs btn">
                        <li class="sea-seller-icon icon-edit"></li>修改號碼
                    </a>
                </div>
            </div>
            <div class="sea-ui form-label break-label">
                <label for="">請輸入驗證碼</label>

                <div class="verify-box">
                    <div class="sea-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="sea-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="sea-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                    <div class="sea-ui form national-code">
                        <input type="text" maxlength="4" placeholder="- - - -">
                    </div>
                </div>
                <a href="#" class="sea-ui btn btn-fluid btn-primary">送出驗證碼</a>
            </div>
            <!-- 說明FOR RD:  倒數 帶入processing 超過次數 帶入樣式unsucess -->
            <div class="sea-item-link">
                <a href="#">重新傳送驗證碼 <span class="eng-num">(6)</span> </a>
                <p>您今天已經超過驗證次數！</p>
            </div>

        </div>
    </div>
</div>

<!--電話驗證-輸入電話-->
<div id="sea-lightbox-telverify" class="sea-ui modal lightbox-telverify">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">輸入您的手機號碼</div>
            <div class="modal-icon-img">
                <img src="img/tel-verify.svg" alt="" class="img-fluid">
            </div>
            <div class="tel-number-box">
                <span class="sea-seller-icon icon-plus"></span>
                <div class="sea-ui form text-without-input national-code">
                    <p class="data-text align-left eng-num">66</p>
                </div>
                <div class="sea-ui form tel-number">
                    <input type="text" placeholder="請輸入您的電話">
                </div>
            </div>
            <a href="#" class="sea-ui btn btn-fluid btn-primary">取得驗證碼</a>
        </div>
    </div>
</div>


<!--  提領設定--狀態05 舊會員 重送銀行認證申請 -->
<div id="sea-lightbox-verify-again" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">重新認證銀行帳號</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">我們會盡快進行您的銀行認證。</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>
<!-- 燈箱結束-->


<!-- KYC 銀行/SMS驗證相關 共用燈箱 END-->

<!--訂單--確認已收款-->
<div id="sea-lightbox-paymentdone" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">本次付款資料</div>
    <div class="scrolling-tall  modal-content">
        <div class="description">
            <div class="title">付款資訊</div>
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">匯款日期</div>
                    <div class="list-box-text eng-num">2020/09/13</div>
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
                        <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/report_payment_receipt.gif" alt="付款憑證" class="img-fluid"></a>
                    </div>
                    <div class="view-img-original">
                        <a href="img/report_payment_receipt.gif" target="_blank"><span class="sea-seller-icon icon-search"></span>檢視原圖</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--訂單--退款明細-->
<div id="sea-lightbox-refunddetail" class="sea-ui modal large">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">退款明細</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">退款日</div>
                    <div class="list-box-text eng-num">2020/09/13 14:13:18</div>
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
<div id="sea-lightbox-dispatchdetail" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">出貨明細</div>
    <div class="modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">出貨日期</div>
                    <div class="list-box-text eng-num">2020/09/13 14:13:18</div>
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


<!--訂單--出貨包裹運送狀態-->
<div id="sea-lightbox-trackingLog" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">包裹運送狀態</div>
    <div class="modal-content scrolling">
        <div class="description">
            <div class="description-list-column">
                <div class="list-column-up">
                    <div class="description-list-box">
                        <div class="list-box-item">物流方式</div>
                        <div class="list-box-text eng-num">中華郵政-ePacket</div>
                    </div>
                    <div class="description-list-box">
                        <div class="list-box-item">貨運號碼</div>
                        <div class="list-box-text eng-num">EE123456789TW</div>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="modal__body__text">
                <div class="trakinglog_timeline">
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/12</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item active"><span class="sea-seller-icon icon-checked"></span>
                            </div>
                        </div>
                        <div class="parcel_status_text">包裹已簽收 Order paid, waiting shipment</div>
                    </div>
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/11</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item"><span class="sea-seller-icon icon-checked"></div>
                        </div>
                        <div class="parcel_status_text">包裹正在派送中。</div>
                    </div>
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/09</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item"><span class="sea-seller-icon icon-checked"></div>
                        </div>
                        <div class="parcel_status_text">包裹已清關完成，等待提貨。</div>
                    </div>
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/08</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item"><span class="sea-seller-icon icon-checked"></div>
                        </div>
                        <div class="parcel_status_text">包裹已抵達泰國，等待提貨清關。</div>
                    </div>
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/08</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item"><span class="sea-seller-icon icon-checked"></div>
                        </div>
                        <div class="parcel_status_text">包裹已安排航班，離開起運港。</div>
                    </div>
                    <div class="trakinglog_timeline_block">
                        <div class="parcel_status_time">
                            <ul>
                                <li class="eng">2020/10/06</li>
                                <li class="eng">04:25:00 PM</li>
                            </ul>
                        </div>
                        <div class="parcel_status_icon">
                            <div class="parcel_status_icon_item"><span class="sea-seller-icon icon-checked"></div>
                        </div>
                        <div class="parcel_status_text">包裹在高雄海關清關完成，等待發大財。</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--燈箱-帳號設定-->
<div id="sea-lightbox-accountSettings" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">帳號設定</div>
    <div class="modal-content">
        <div class="block-aboutme">
            <div class="account-header lightbox-accountheaderbg">
                <div class="container sea-gutters">
                    <div class="account-wrap">

                        <!-- <a href="" title=""> -->
                        <div class="avatar-wrap">
                            <div class="avatar-img" style="background-image: url('img/brand/brand_01.jpg');"></div>
                            <!-- <div class="avatar-edit"><span class="sea-seller-icon icon-camera"></span></div> -->
                        </div>
                        <!-- </a> -->
                        <div class="data-wrap">
                            <div class="data-box">
                                <span class="name">Diptyque Paris Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-changepassword">
            <div class="sea-ui form-label">
                <label for="">帳號</label>
                <div class="sea-ui form">
                    <div class="text eng-num">sophia@staff.pchome.co.th</div>
                </div>
            </div>
            <div class="sea-ui form-label">
                <label for="">舊密碼</label>
                <div class="sea-ui form">
                    <input type=password placeholder="輸入舊密碼">
                </div>
            </div>
            <div class="sea-ui form-label">
                <label for="">新密碼</label>
                <div class="sea-ui form">
                    <input type=password placeholder="輸入新密碼">

                    <!--說明For RD: 密碼強度區塊預設狀態-->
                    <div class="psw-meter">
                        <div class="level-box">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="level-text">
                            密碼強度：無
                        </div>
                    </div>
                    <!--說明For RD: 密碼強度：強-->
                    <!--  <div class="psw-meter">
                        <div class="level-box">
                            <ul>
                                <li style="background-color: #209E1B"></li>
                                <li style="background-color: #209E1B"></li>
                                <li style="background-color: #209E1B"></li>
                                <li style="background-color: #209E1B"></li>
                            </ul> 
                        </div>
                        <div class="level-text">
                            密碼強度：強
                        </div>
                    </div> -->
                    <!--說明For RD: 密碼強度：普通-->
                    <!--  <div class="psw-meter">
                        <div class="level-box">
                            <ul>
                                <li style="background-color: #FDD641"></li>
                                <li style="background-color: #FDD641"></li>
                                <li></li>
                                <li></li>
                            </ul>  
                        </div>
                        <div class="level-text">
                            密碼強度：普通
                        </div>
                    </div> -->
                    <!--說明For RD: 密碼強度：弱-->
                    <!--  <div class="psw-meter">
                        <div class="level-box">
                            <ul>
                                <li style="background-color: #AB0016;"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>  
                        </div>
                        <div class="level-text">
                            密碼強度：弱
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="sea-ui form-label">
                <label for="">確認密碼</label>
                <div class="sea-ui form">
                    <input type=password placeholder="再一次輸入密碼">
                </div>
            </div>
        </div>
    </div>
    <div class="content-action">
        <a href="#" class="sea-ui btn  btn-primary">重設密碼</a>
    </div>
</div>






<!--圖片裁切-->
<link rel="stylesheet" type="text/css" href="css/plugin/croppie.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script type="text/javascript" src="js/plugin/croppie/croppie.js"></script>
<!-- <script type="text/javascript" src="js/plugin/croppie/exif.js"></script> -->
<script src="js/js_photo_crop.js"></script>