<!--結算款項燈箱 -->
<div id="sea-lightbox-withdrawal" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">結算</div>
    <div class="scrolling-tall modal-content">

        <!-- 區塊－金額統計 -->
        <div class="section-outer section-accounting">
            <!-- 結算帳戶 -->
            <div class="accountingBox">
                <!-- 總金額 -->
                <div class="accountingItem">
                    <!-- 總金額組合 -->
                    <div class="items item-amountTotalBox">
                        <div class="item-totalBox">
                            <!-- 圖片包 -->
                            <div class="item-amountBox-pic">
                                <img src="img/icon-selleracc-money.svg">
                            </div>
                            <!-- 文字包 -->
                            <div class="item-amountBox-text">
                                <!-- <div class="subtitle"><span class="subtitle-text">Amount Available for Withdrawal</span></div> -->
                                <div class="subtitle"><span class="subtitle-text">
                                        <!-- ยอดเงินที่เบิกถอนได้ -->可結算金額</span></div>
                                <div class="amount eng-num">994,566.42</div>
                            </div>
                        </div>
                    </div>
                    <!-- 運算符號 = -->
                    <div class="items item-operations item-operations-equal">
                        <i class="sea-seller-icon icon-equal"></i>
                    </div>
                    <!-- 細項金額 -->
                    <div class="items item-amountBox-left">
                        <!-- 文字包 -->
                        <div class="item-amountBox-text">
                            <div class="subtitle"><span class="subtitle-text">
                                    <!-- Amount Available -->
                                    <!-- ยอดที่ถอนได้ -->可用貨款金額</span></div>
                            <div class="amount eng-num">102,130.32</div>
                        </div>
                    </div>
                    <!-- 運算符號 +/- -->
                    <div class="items item-operations item-operations-plus">
                        <i class="sea-seller-icon icon-minus"></i>
                    </div>
                    <!-- 細項金額 -->
                    <div class="items item-amountBox-right">
                        <!-- 文字包 -->
                        <div class="item-amountBox-text">
                            <div class="subtitle"><span class="subtitle-text"><a href="selleracc-fee.php" target="_blank">
                                        <!-- Due Fee -->
                                        <!-- ค่าธรรมเนียมที่ต้องชำระ -->未繳費用<i class="sea-seller-icon icon-information"></i></a></span></div>
                            <div class="amount eng-num">157,946.45</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <div class="sea-ui form-select-label break-label">
                <label for="">選擇結算銀行</label>
                <!-- 說明For RD: 第一筆為預設帳號"-->
                <div class="sea-ui form select">
                    <select>
                        <option value="1">002 Bangkok Bank (BBL) [預設帳號]</option>
                        <option value="2">024 United Overseas Bank (Thai) (UOBT)</option>
                        <option value="3">034 Bank for Agriculture and Agricultural Cooperatives (AGRI)</option>
                    </select>
                </div>
            </div>
            <div class="sea-ui form-label break-label">
                <label for="">輸入結算金額</label>
                <!-- <div class="sea-ui form"> -->
                <div class="sea-ui form product-price-USdollar unit-before">
                    <input type="tel" placeholder="0">
                </div>
            </div>
            <p class="alert-red">* 實際到帳金額，為結算金額扣除轉帳手續費，約10~30泰銖。此筆費用為銀行收取之作業費用。</p>
        </div>
    </div>
    <div class="modal-actions">
        <!--清除-->
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <!--確定結算-->
        <a href="#" class="sea-ui btn btn-primary">確定結算</a>
    </div>
</div>
<!-- 燈箱結束-->


<!-- 發票設定  -->
<div id="sea-lightbox-setInvoice-personal" class="sea-ui modal medium">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="sea-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">個人發票設定</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="title">發票抬頭：<span>（自動帶入）</span></div>
            <div class="title">Tax ID：<span>（自動帶入）</span></div>

            <div class="sea-ui form-select-label break-label">
                <label for="">戶籍地址</label>
                <div class="sea-ui form">
                    <textarea placeholder="請輸入戶籍地址"></textarea>
                </div>

                <div class="sea-ui form select">
                    <select>
                        <option value="0">省／府</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                    </select>
                </div>
                <div class="sea-ui form select">
                    <select>
                        <option value="4">區</option>
                        <option value="5">Option 01</option>
                        <option value="6">Option 02</option>
                        <option value="7">Option 03</option>
                    </select>
                </div>

            </div>
            <div class="sea-ui form-label break-label">
                <label for="">郵遞區號</label>
                <div class="sea-ui form">
                    <input type="text" placeholder="請輸入郵遞區號">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="sea-ui btn btn-primary">確定儲存</a>
    </div>
</div>

<!-- 發票設定－公司  -->
<div id="sea-lightbox-setInvoice-company" class="sea-ui modal medium">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="sea-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="sea-seller-icon icon-delete lightbox_close"></i>

    <div class="modal-header">公司發票設定</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="title">發票抬頭：<span>（自動帶入）</span></div>
            <div class="sea-ui form-label break-label">
                <label for="">公司英文名稱</label>
                <div class="sea-ui form">
                    <input type="text" placeholder="請填寫公司英文名稱">
                </div>
            </div>
            <div class="title">Tax ID：<span>（自動帶入）</span></div>



            <div class="sea-ui form-select-label break-label">
                <label for="">公司登記地址</label>
                <div class="sea-ui form">
                    <textarea placeholder="請輸入公司登記地址"></textarea>
                </div>
                <div class="sea-ui form select">
                    <select>
                        <option value="0">省／府</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                    </select>
                </div>
                <div class="sea-ui form select">
                    <select>
                        <option value="4">區</option>
                        <option value="5">Option 01</option>
                        <option value="6">Option 02</option>
                        <option value="7">Option 03</option>
                    </select>
                </div>
            </div>

            <div class="sea-ui form-label break-label">
                <label for="">郵遞區號</label>
                <div class="sea-ui form">
                    <input type="text" placeholder="請輸入郵遞區號">
                </div>
            </div>

        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="sea-ui btn btn-primary">確定儲存</a>
    </div>
</div>







<!-- 結算狀態說明 -->
<div id="sea-lightbox-settlementStatus" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">結算狀態說明</div>
    <div class="scrolling-tall  modal-content">
        <div class="description">
            <!-- <div class="title">結算狀態說明</div> -->

            <!-- 名稱 -->
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">貨款總金額</div>
                    <div class="list-box-text eng-num">銷售出的商品總金額。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">可結算金額</div>
                    <div class="list-box-text eng-num">已過 PChomeSEA 的保護期，可申請撥款。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">待轉可用貨款金額</div>
                    <div class="list-box-text eng-num">尚未過 PChomeSEA 的保護期，無法申請撥款。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">可結算金額</div>
                    <div class="list-box-text eng-num">已過 PChomeSEA 的保護期，可申請撥款。金額為扣除 PChomeSEA 成交手續費(商品價格5%+7%VAT)，與金流服務費等費用。</div>
                </div>

                <!-- 狀態 -->
                <div class="description-list-box">
                    <div class="list-box-item">買家代理人收到貨款</div>
                    <div class="list-box-text eng-num">買家已經付款。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">轉可用貨款</div>
                    <div class="list-box-text eng-num">過 PChomeSEA 的保護期可申請結算(金額尚未扣除相關費用)。</div>
                </div>

                <div class="description-list-box">
                    <div class="list-box-item">準備結算</div>
                    <div class="list-box-text eng-num">已申請結算，連科進行匯款程序。(實際入帳時間約需7-14個工作天)</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">匯款處理中</div>
                    <div class="list-box-text eng-num">台灣連科正處理匯款。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">撥款成功</div>
                    <div class="list-box-text eng-num">款項已匯入您的銀行帳戶中。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">撥款失敗</div>
                    <div class="list-box-text eng-num">款項無法匯入您的銀行帳戶中。</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">已轉可結算</div>
                    <div class="list-box-text eng-num">撥款失敗後回沖或退款回沖可再申請結算。</div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- 款項狀態 (完成代收) -->
<div id="sea-lightbox-accountStep" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">款項狀態</div>

    <div class="withdrawal-step">
        <ul>
            <li class="point point-processing"><span class="num eng-num">1</span><span class="title">完成代收</span></li>
            <li class="point-line point-line-pending"></li>
            <li class="point point-pending"><span class="num eng-num">2</span><span class="title">可結算</span></li>
        </ul>
    </div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">訂單號碼</div>
                    <div class="list-box-text eng-num">202010100018</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">訂單日期</div>
                    <div class="list-box-text eng-num">2020/12/02</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">入帳日期</div>
                    <div class="list-box-text eng-num">2020/12/03</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束-->

<!-- 款項狀態(已轉可結算) -->
<div id="sea-lightbox-accountStep-complete" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">款項狀態</div>
    <div class="withdrawal-step">
        <ul>
            <li class="point point-solved"><span class="num eng-num">1</span><span class="title">完成代收</span></li>
            <li class="point-line point-line-solved"></li>
            <li class="point point-processing"><span class="num eng-num">2</span><span class="title">可結算</span></li>
        </ul>
    </div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">訂單號碼</div>
                    <div class="list-box-text eng-num">202010100018</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">訂單日期</div>
                    <div class="list-box-text eng-num">2020/12/02</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">入帳日期</div>
                    <div class="list-box-text eng-num">2020/12/03</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束-->




<!-- 結算狀態 -->
<div id="sea-lightbox-withdrawalStep" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">結算狀態</div>

    <div class="withdrawal-step">
        <ul>
            <li class="point point-solved"><span class="num eng-num">1</span><span class="title">準備結算</span></li>
            <li class="point-line point-line-solved"></li>
            <li class="point point-processing"><span class="num eng-num">2</span><span class="title">結算中</span></li>
            <li class="point-line"></li>
            <li class="point point-pending"><span class="num eng-num">3</span><span class="title">結算完成</span></li>
        </ul>
    </div>

    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">結算單號碼</div>
                    <div class="list-box-text eng-num">PT201810100018</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">結算日期</div>
                    <div class="list-box-text eng-num">2020/12/19</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">收款銀行</div>
                    <div class="list-box-text eng-num">DFSD</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">收款帳號</div>
                    <div class="list-box-text eng-num">27938232001</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">結算金額</div>
                    <div class="list-box-text eng-num"><span>$</span>3652</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">實際交易日</div>
                    <div class="list-box-text eng-num">2020/12/03</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束-->



<!--  繳交費用 -->
<div id="sea-lightbox-payFee" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">繳交費用項目</div>

    <div class="scrolling-tall modal-content">

        <div class="description">
            <div class="description-list">
                <div class="description-list-box description-list-box-title">
                    <div class="list-box-item">項目</div>
                    <div class="list-box-text eng-num">單據號碼</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">金流服務費</div>
                    <div class="list-box-text eng-num">9071700004255</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">ค่าบริการชำระเงิน</div>
                    <div class="list-box-text eng-num">9071700004255</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">Surchage</div>
                    <div class="list-box-text eng-num">9071700004255</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">金流服務費</div>
                    <div class="list-box-text eng-num">9031900008873</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">ค่าบริการชำระเงิน</div>
                    <div class="list-box-text eng-num">9031900008873</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">Surchage</div>
                    <div class="list-box-text eng-num">9031900008873</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">金流服務費</div>
                    <div class="list-box-text eng-num">9031900987452</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">ค่าบริการชำระเงิน</div>
                    <div class="list-box-text eng-num">9031900987452</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">Surchage</div>
                    <div class="list-box-text eng-num">9031900987452</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 燈箱結束-->


<!--  結算設定--刪除已認證銀行-->
<div id="sea-lightbox-delete-varified" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">刪除帳號</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要刪除已認證的銀行帳號?</div>
            <p class="align-center">之後新增銀行帳號需重新做認證。</p>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>
<!-- 燈箱結束-->

<!--  結算設定--刪除待認證/認證中銀行-->
<div id="sea-lightbox-delete-verifyfailed" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">刪除帳號</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要刪除銀行帳號?</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>
<!-- 燈箱結束-->


<!--  結算設定--認證失敗原因-->
<div id="sea-lightbox-delete-failedinfo" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">認證失敗說明</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">您的銀行認證失敗</div>
            <p class="align-center"> 銀行帳號和KYC的個人姓名不符</p>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>
<!-- 燈箱結束-->