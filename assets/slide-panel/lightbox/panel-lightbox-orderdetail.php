<!-- 操作類 -->

<!--01.通知出貨明細-->
<div id="pct-lightbox-informdispatch" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">通知出貨明細</div>
    <div class="modal-content">
        <div class="description">
            <div class="pct-ui form-label break-label">
                <label for="">出貨日期</label>
                <div class="pct-ui form">
                    <input class="form-control datepicker" type="text" placeholder="MM/DD/YYYY" readonly="true">
                </div>
            </div>
            <div class="pct-ui form-select-label break-label">
                <label for="">寄送方式</label>
                <div class="pct-ui form select">
                    <select>
                        <option value="0">請選擇</option>
                        <option value="1">Kerry</option>
                        <option value="2">ThaiPost-EMS</option>
                        <option value="3">ThaiPost-Registerd Mail</option>
                        <option value="4">aCommerce</option>
                        <option value="5">CJ GLS</option>
                        <option value="6">DHL</option>
                        <option value="7">Fedex</option>
                        <option value="8">Others</option>
                    </select>
                </div>
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">追蹤單號</label>
                <div class="pct-ui form">
                    <input type="text" value="EU70050639TH">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-primary">確定送出</a>
    </div>
</div>

<!--02.列印出貨單（泰）-->
<div id="pct-lightbox-dispatchList" class="pct-ui modal medium">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">我要出貨</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="title">請先確認寄件者資訊後，再列印出貨單。</div>

            <div class="pct-ui form-label break-label">
                <label for="">您的姓名</label>
                <div class="pct-ui form">
                    <input type="text" placeholder="請輸入您的姓名">
                </div>
            </div>
            <div class="pct-ui form-select-label break-label">
                <label for="">寄送失敗時要退回的地址</label>
                <div class="pct-ui form select">
                    <select>
                        <option value="0">請選擇</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                    </select>
                </div>
                <div class="pct-ui form select">
                    <select>
                        <option value="4">請選擇</option>
                        <option value="5">Option 01</option>
                        <option value="6">Option 02</option>
                        <option value="7">Option 03</option>
                    </select>
                </div>
                <div class="pct-ui form">
                    <textarea placeholder="請輸入寄送失敗時要退回的完整地址"></textarea>
                </div>
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">郵遞區號</label>
                <div class="pct-ui form">
                    <input type="text" placeholder="請輸入郵遞區號">
                </div>
            </div>
            <p class="alert-atc">＊提醒您，寄件者資料將會自動帶入出貨單中，請確認正確無誤後再送出。</p>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-primary">確定送出</a>
    </div>
</div>




<!--02-1.我要出貨（中華郵政）-->
<div id="pct-lightbox-dispatchList-EMS" class="pct-ui modal large">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">準備出貨 － 中華郵政</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="dispatch_prepare_text">
                <div class="dispatch_prepare_block"><span class="step__number">STEP 01. 包裝商品</span>
                    <p>
                        包裹重量小於
                        2kg，材積相加不超過90cm的包裹，將優先以國際e小包計算運費，並且進行配送。<br>若您輸入的包裹重量或材積與實際寄送時，計量結果不符而導致運費少收，將以物流商計算的運費金額為主，並且列為運費補收項目於提領時補扣。<br>敬請依照您預估的包裹重量及材積進行包裝，以利物流處理作業。
                    </p>
                    <div class="logistics_com">
                        <p class="logistics_com-title">中華郵政</p>
                        <div class="logistics_com-function">
                            <p class="logistics_com-function-subtitle">• 國際快捷 EMS</p>
                            <div class="dispatch_prepare_parcel">
                                <div class="line_box" data-title="重量">
                                    <p>20kg以下</p>
                                </div>
                                <div class="line_box" data-title="尺寸限制">
                                    <p>
                                        任何一邊不得超過150cm，<br>長寬高總和不得超過300cm。</p>
                                </div>
                                <div class="line_box" data-title="材積計算">
                                    <p>若材積重大於實重，則取材積重計價。</p>
                                    <p>長 × 寬 × 高 (cm) ÷ 6,000 = 材積重量 (kg)</p>
                                </div>
                            </div>
                        </div>
                        <div class="logistics_com-function">
                            <p class="logistics_com-function-subtitle">• 國際 e 小包</p>
                            <div class="dispatch_prepare_parcel">
                                <div class="line_box" data-title="重量">
                                    <p>2kg以下</p>
                                </div>
                                <div class="line_box" data-title="尺寸限制">
                                    <p>
                                        包裹最小不小於14x9cm，<br>單邊最長不得超過60cm，<br>長寬高總和不得超過90cm。</p>
                                </div>
                                <div class="line_box" data-title="材積計算">
                                    <p>無</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dispatch_prepare_block">
                    <div class="dispatch_prepare_group"><span class="step__number">STEP 02. 列印【商業發票】及【出貨單】
                        </span><a class="pct-ui btn-cta btn-sm" href="print_Commercial_Invoice.html"
                            target="_blank">下載檔案</a></div>
                    <ul>
                        <li class="span step__title">商業發票：</li>
                        <li>商業發票（Commercial Invoice）為國際寄件必備文件，附件PDF檔為一式兩份。</li>
                        <li>請列印出後，於SELLER欄位填上您的賣場英文名稱及您的姓名，於SELLER ADD/TEL處填上方便接收退件的收貨地址及連絡電話。  </li>
                        <li>第一聯 Customer Copy 請放置於包裹內提供給您的買家；</li>
                        <li>第二聯 Carrier Copy 請附於信封內黏貼於包裹外，提供給物流商為您辦理跨境寄送相關作業。</li>
                    </ul>
                    <ul>
                        <li class="span step__title"> 出貨單：</li>
                        <li>包裹請做兩層包裝，請於內包裝外層附上商業發票。外包裝貼上台灣指定收件倉庫的地址。</li>
                    </ul>
                </div>
                <div class="dispatch_prepare_block"><span class="step__number">STEP 03. 出貨</span>
                    <p>請將包裹寄送至以下指定收件倉庫地址。</p>
                    <p>轉運站收到您的包裹後，會代您將包裹寄送至泰國，您可透過【賣家中心】和【訂單明細】追蹤貨態。</p>
                    <ul>
                        <li class="span step__title">轉運中心地址</li>
                    </ul>
                    <div class="line_box">
                        <p>台北市大安區敦化南路二段105號12樓<br>連科通訊股份有限公司 (PChome Thai 代理服務) 收</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--02-2.我要出貨（翔丰物流）-->
<div id="pct-lightbox-dispatchList-SFL" class="pct-ui modal large">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">準備出貨 － 翔丰物流</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="dispatch_prepare_text">
                <div class="dispatch_prepare_block"><span class="step__number">STEP 01. 包裝商品</span>
                    <p>
                        包裹請做兩層包裝，內包裝黏貼上跨境託運單，並附上商業發票。外包裝僅貼上或貼上台灣指定收件倉庫的地址。<br>提醒您，若您輸入的包裹重量或材積與實際寄送時，計量結果不符而導致運費少收，將以物流商計算的運費金額為主，並且列為運費補收項目於提領時補扣。<br>敬請依照您預估的包裹重量及材積進行包裝，以利物流處理作業。
                    </p>
                    <div class="logistics_com">
                        <p class="logistics_com-title">翔丰物流</p>
                        <div class="logistics_com-function">
                            <p class="logistics_com-function-subtitle">• 包稅快遞 DDP</p>
                            <div class="dispatch_prepare_parcel">
                                <div class="line_box" data-title="重量">
                                    <p>30kg以下</p>
                                </div>
                                <div class="line_box" data-title="尺寸限制">
                                    <p>任何一邊不得超過85cm</p>
                                </div>
                                <div class="line_box" data-title="材積計算">
                                    <p>若材積重大於實重，則取材積重計價。</p>
                                    <p>長 × 寬 × 高 (cm) ÷ 5,000 = 材積重量 (kg)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dispatch_prepare_block">
                    <div class="dispatch_prepare_group"><span class="step__number">STEP 02. 列印【商業發票】及【託運單】 </span><a
                            class="pct-ui btn-cta btn-sm" href="print_Commercial_Invoice.html" target="_blank">下載檔案</a>
                    </div>
                    <ul>
                        <li class="span step__title">商業發票：</li>
                        <li>商業發票（Commercial Invoice）為國際寄件必備文件，附件PDF檔為一式兩份。</li>
                        <li>請列印出後，於SELLER欄位填上您的賣場英文名稱及您的姓名，於SELLER ADD/TEL處填上方便接收退件的收貨地址及連絡電話。</li>
                        <li>第一聯 Customer Copy 請放置於包裹內提供給您的買家；</li>
                        <li>第二聯 Carrier Copy 請附於信封內黏貼於包裹外，提供給物流商為您辦理跨境寄送相關作業。</li>
                    </ul>
                    <ul>
                        <li class="span step__title">跨境託運單：</li>
                        <li>包裹請做兩層包裝，內包裝黏貼上跨境託運單，並附上商業發票。外包裝僅貼上或貼上台灣指定收件倉庫的地址。</li>
                    </ul>
                </div>
                <div class="dispatch_prepare_block"><span class="step__number">STEP 03. 出貨</span>
                    <p>請將包裹寄送至以下指定收件倉庫地址。</p>
                    <p>轉運站收到您的包裹後，會代您將包裹寄送至泰國，您可透過【賣家中心】和【訂單明細】追蹤貨態。</p>
                    <ul>
                        <li class="span step__title">翔丰物流倉庫地址</li>
                    </ul>
                    <div class="line_box">
                        <p>地址：338 桃園市蘆竹區蘆興街10號3樓<br>電話：03-2121118<br>聯絡人：李小姐 (#11)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--02-3.我要出貨（ACS快遞）-->
<div id="pct-lightbox-dispatchList-ACS" class="pct-ui modal large">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">準備出貨 － ACS快遞(尚未開放)</div>
    <div class="scrolling-tall modal-content">
        <div class="description">

            <div class="dispatch_prepare_text">
                <div class="dispatch_prepare_block"><span class="step__number">STEP 01. 包裝商品</span>
                    <p>
                        包裹請做兩層包裝，內包裝黏貼上跨境託運單，並附上商業發票。外包裝僅貼上或貼上台灣指定收件倉庫的地址。<br>提醒您，若您輸入的包裹重量或材積與實際寄送時，計量結果不符而導致運費少收，將以物流商計算的運費金額為主，並且列為運費補收項目於提領時補扣。<br>敬請依照您預估的包裹重量及材積進行包裝，以利物流處理作業。
                    </p>
                    <div class="logistics_com">
                        <p class="logistics_com-title">ACS 國際快遞</p>
                        <div class="logistics_com-function">
                            <p class="logistics_com-function-subtitle">• 黑貓宅配</p>
                            <div class="dispatch_prepare_parcel">
                                <div class="line_box" data-title="重量">
                                    <p>20kg以下</p>
                                </div>
                                <div class="line_box" data-title="尺寸限制">
                                    <p>任何一邊不得超過 70cm，三邊加總不超過 120cm。</p>
                                </div>
                                <div class="line_box" data-title="材積計算">
                                    <p>若材積重大於實重，則取材積重計價。</p>
                                    <p>長 × 寬 × 高 (cm) ÷ 5,000 = 材積重量 (kg)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logistics_com">
                        <div class="logistics_com-function">
                            <p class="logistics_com-function-subtitle">• 全家店配</p>
                            <div class="dispatch_prepare_parcel">
                                <div class="line_box" data-title="重量">
                                    <p>5kg以下</p>
                                </div>
                                <div class="line_box" data-title="尺寸限制">
                                    <p>任何一邊不得超過 45cm，三邊加總不超過 105cm。</p>
                                </div>
                                <div class="line_box" data-title="材積計算">
                                    <p>若材積重大於實重，則取材積重計價。</p>
                                    <p>長 × 寬 × 高 (cm) ÷ 5,000 = 材積重量 (kg)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dispatch_prepare_block">
                    <div class="dispatch_prepare_group"><span class="step__number">STEP 02. 列印【商業發票】及【託運單】 </span>
                        <a class="pct-ui btn-cta btn-sm" href="print_Commercial_Invoice.html" target="_blank">下載檔案</a>
                    </div>
                    <ul>
                        <li class="span step__title">商業發票：</li>
                        <li>商業發票（Commercial Invoice）為國際寄件必備文件，附件PDF檔為一式兩份。</li>
                        <li>請列印出後，於SELLER欄位填上您的賣場英文名稱及您的姓名，於SELLER ADD/TEL處填上方便接收退件的收貨地址及連絡電話。</li>
                        <li>第一聯 Customer Copy 請放置於包裹內提供給您的買家；</li>
                        <li>第二聯 Carrier Copy 請附於信封內黏貼於包裹外，提供給物流商為您辦理跨境寄送相關作業。</li>
                    </ul>
                    <ul>
                        <li class="span step__title">跨境託運單：</li>
                        <li>包裹請做兩層包裝，內包裝黏貼上跨境託運單，並附上商業發票。外包裝僅貼上或貼上台灣指定收件倉庫的地址。</li>
                    </ul>
                </div>
                <div class="dispatch_prepare_block"><span class="step__number">STEP 03. 出貨</span>
                    <p>您可透過【黑貓宅配】或【全家店配】將包裹寄送至以下 指定收件倉庫 地址。</p>
                    <p>物流商收到您的包裹後，會代您將包裹寄送至泰國，您可透過【賣家中心】和【訂單明細】追蹤貨態。</p><br>
                    <ul>
                        <li class="span">1.黑貓宅配請於前一天郵件通知取件資訊，以利安排隔天提貨，聯絡方式 TBD</li>
                        <li class="span">2.全家店配倉店號：015358，收件人：李益全，手機：0966414093</li>
                    </ul><br>
                    <ul>
                        <li class="span step__title">ACS 物流倉庫地址</li>
                    </ul>
                    <div class="line_box">
                        <p>地址：(待提供)<br>電話：(待提供)<br>聯絡人：(待提供)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--02-4.我要出貨（賣家自行配送）-->
<div id="pct-lightbox-dispatchList-Seller" class="pct-ui modal large">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">準備出貨 － 賣家自行配送</div>
    <div class="scrolling-tall modal-content">
        <div class="description">

            <div class="dispatch_prepare_text">
                <div class="dispatch_prepare_block"><span class="step__number">STEP 01. 準備商品</span>
                    <p>請再次確認訂單資訊後再依照您所自訂的物流方式出貨。</p>
                    <ul>
                        <li class="span step__title">【商業發票】</li>
                        <li>若有需要，可下載商業發票附於包裹內提供給您的買家。

                            <a class="pct-ui btn-cta btn-sm" href="print_Commercial_Invoice.html"
                                target="_blank">下載檔案</a>


                        </li>
                    </ul>
                </div>
                <div class="dispatch_prepare_block">
                    <div class="dispatch_prepare_group"><span class="step__number">STEP 02. 寄送包裹 </span></div>
                    <ul>
                        <li class="span step__title">收件資訊：</li>
                    </ul>
                    <div class="line_box">
                        <div class="line_box_list"><span class="title">收件人姓名：</span><span>George Timothy Clooney</span>
                        </div>
                        <div class="line_box_list"><span class="title">收件地址：</span><span>191/54, 191/57, 18th Floor, CTI
                                Tower, Ratchadapisek Road,, Klongtoey, Bangkok 10110 Thailand</span></div>
                        <div class="line_box_list"> <span class="title">電話：</span><span>(+66) 0987654321</span></div>
                    </div><a class="pct-ui btn-primary-outlined btn-xs" href="#">複製收件資訊</a>
                </div>
                <div class="dispatch_prepare_block"><span class="step__number">STEP 03. 通知出貨</span>
                    <p>由於賣家自行寄送為 PChome 非支援物流方式，無法由系統進行物流追蹤；</p>
                    <p>敬請您出貨後，主動點入【通知出貨】，提供貨號等相關資訊供買家參考紀錄。</p>
                </div>
            </div>

        </div>
    </div>
</div>












<!--03.確認收款-->
<div id="pct-lightbox-confirmpayment" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">本次付款資料</div>
    <div class="scrolling-tall modal-content">
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
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary">確認收款</a>
    </div>
</div>

<!--04.同意消單申請-->
<div id="pct-lightbox-agreecancel" class="pct-ui modal large">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">回覆取消訂單申請</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item">訂單編號</div>
                    <div class="list-box-text eng-num">656545655545</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">留言內容</div>
                    <div class="list-box-text">若要送出取消訂單的申請，請在''訂單詳情''的頁面中點選''取消訂單''，選擇一個取消的原因並繼續。
                        銀行轉帳尚未完成轉帳付款前，買家即可直接取消訂單。 賣家接受取消：
                        若您的訂單未符合以上「立即取消」的條件，表示訂單已經進入處理程序，您的取消訂單申請必須經由賣家同意，若賣家未於兩天內回覆，訂單將自動取消。</div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined">不同意取消</a>
        <a href="#" class="pct-ui btn btn-primary">同意取消</a>
    </div>
</div>

<!--05.申請爭議處理-->
<div id="pct-lightbox-dispute" class="pct-ui modal large">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">申請爭議處理</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <p>請提供以下資訊，我們的客服會再與您聯繫。</p>
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item eng-num step-eng">STEP 01.</div>
                    <div class="list-box-form">
                        <div class="pct-ui form-label break-label">
                            <label for="">我要留言</label>
                            <div class="pct-ui form fluid">
                                <textarea placeholder="請輸入留言文字"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num step-eng">STEP 02.</div>
                    <div class="list-box-form">
                        <div class="pct-ui form-label break-label">
                            <label for="">輸入聯絡電話</label>
                            <div class="pct-ui form fluid">
                                <input type="text" placeholder="請輸入您的電話">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num step-eng">STEP 03.</div>
                    <div class="list-box-form">
                        <div class="pct-ui form-label break-label">
                            <label for="">請提供相關圖片以供證明</label>
                            <p>如果您已經將貨品寄出，可以在此上傳相關收據證明，這會幫助我們加速處理爭議退款。</p>
                            <div class="upload-img-wrap">
                                <label id="filedrag">
                                    <div class="pct-icon icon-picture"></div>
                                    <p class="filedrag-text">上傳圖片</p>
                                    <input type="file" id="fileselect" name="fileselect" accept="image/*">
                                </label>
                            </div>
                            <!-- 說明FOR RD: 上傳圖片後的preview -->
                            <div class="upload-img-result">
                                <div class="img-result-inner">
                                    <img src="img/report_payment_receipt.gif" alt="" class="img-fluid">
                                </div>
                                <div class="delete-btn edit-btn">
                                    <li class="pct-icon icon-delete lightbox_close"></li>
                                </div>
                                <div class="rotate-btn edit-btn">
                                    <li class="pct-icon icon-rotate"></li>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-primary">確認送出</a>
    </div>
</div>

<!--06.取消原因說明-->
<div id="pct-lightbox-cancelreson" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">取消原因說明</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="description-list-column">
                <div class="list-column-up">
                    <div class="description-list-box">
                        <div class="list-box-item">訂單編號</div>
                        <div class="list-box-text eng-num">656545655545</div>
                    </div>
                    <div class="description-list-box">
                        <div class="list-box-item">訂購日期</div>
                        <div class="list-box-text eng-num">2018/09/13</div>
                    </div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item">訂購人</div>
                    <div class="list-box-text eng-num">Sophia Lin</div>
                </div>
            </div>
            <div class="pct-ui form-label break-label">
                <label for="">取消說明</label>
                <div class="pct-ui form">
                    <textarea placeholder="請詳述取消訂單原因"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-primary">確定送出</a>
    </div>
</div>

<!--07.退款通知-->
<div id="pct-lightbox-refund" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">同意退款</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確認後，此訂單款項將退還給買家。</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-primary">同意退款</a>
    </div>
</div>


<!-- 明細類 -->

<!--04.商品頁截圖-->
<div id="pct-lightbox-productscreenshot" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品頁截圖</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                    <div class="payment-img">
                        <!--  <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png" alt="付款憑證" class="img-fluid"></a> -->
                    </div>
                    <div class="view-img-original">
                        <a href="img/report_payment_receipt.gif" target="_blank"><span
                                class="pct-icon icon-search"></span>檢視原圖</a>
                    </div>
                </div>
            </div>
            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                    <div class="payment-img">
                        <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png"
                                alt="付款憑證" class="img-fluid"></a>
                    </div>
                    <div class="view-img-original">
                        <a href="img/report_payment_receipt.gif" target="_blank"><span
                                class="pct-icon icon-search"></span>檢視原圖</a>
                    </div>
                </div>
            </div>

            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                    <div class="payment-img">
                        <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png"
                                alt="付款憑證" class="img-fluid"></a>
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