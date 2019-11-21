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
        <a href="#" class="pct-ui btn btn-cta-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-cta">確定送出</a>
    </div>
</div>
<!--02.列印出貨單-->   
<div id="pct-lightbox-printdispatch" class="pct-ui modal medium">
    <!--說明 FOR RD: 若送出需較長時間請執行以下loading-->
    <div class="pct-ui loading-overlay" style="display: none;">
        <div class="loading-circle small"></div>
    </div>
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">列印出貨單</div>
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

            <p class="alert-red">＊提醒您，寄件者資料將會自動帶入出貨單中，請確認正確無誤後再送出。</p>

        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-cta-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-cta">確定送出</a>
    </div>
</div>

<!--02-1.列印出貨單:下載pdf-->
<div id="pct-lightbox-printdispatch-2" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">列印出貨單</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="title eng-num"> Kerry Drop-Off</div>
            <p> 1) 若買家選擇【Kerry】(Drop-off)，PChome會分配一組貨號讓賣家於 Kerry Kiosk 刷入辨識包裹寄送資訊。</p>
            <p> 2) 確認訂單相關資訊後，點擊【下載出貨單】。</p>
            <p> 4) 至櫃台秤重並遞交包裹，您無須支付運費，PChome會另外與 Kerry 結算運費。</p>
            <p> 5) 成功遞件後您就可以安心回家等候寄送通知</p>   
            <br/>
            <p class="alert-red">＊提醒您，為確保能順利送件，請遵守 Kerry 規範的包裹大小及重量限制。</p>
            <p>- 包裹大小 : 包裹長+寬+高 合計不得超過 120cm，單邊長度不得超過 60cm</p>
            <p>- 包裹重量 : 寄送包裹重量不得超過 20kg</p>
            <br/>
            <p>Kerry Drop-Off Service 注意事項 : <a href="https://www.pchome.co.th/info/KETH_PackagingGuideline_TH_0218.pdf">ไทย</a>  /  <a href="https://www.pchome.co.th/info/KETH_PackagingGuideline_EN_0218.pdf">English</a></p>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-cta">下載出貨單</a>
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
        <a href="#" class="pct-ui btn btn-cta">確認收款</a>
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
                    <div class="list-box-text">若要送出取消訂單的申請，請在''訂單詳情''的頁面中點選''取消訂單''，選擇一個取消的原因並繼續。 銀行轉帳尚未完成轉帳付款前，買家即可直接取消訂單。 賣家接受取消： 若您的訂單未符合以上「立即取消」的條件，表示訂單已經進入處理程序，您的取消訂單申請必須經由賣家同意，若賣家未於兩天內回覆，訂單將自動取消。</div>    
                </div> 
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-cta-outlined">不同意取消</a>
        <a href="#" class="pct-ui btn btn-cta">同意取消</a>
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
                               <div class="pct-cion icon-picture"></div> 
                               <p class="filedrag-text">上傳圖片</p>
                              <input type="file" id="fileselect" name="fileselect" accept="image/*">
                            </label>
                        </div>
                        <!-- 說明FOR RD: 上傳圖片後的preview -->
                        <div class="upload-img-result">
                            <div class="img-result-inner">
                                <img src="img/report_payment_receipt.gif" alt="" class="img-fluid">
                            </div>
                            <div class="delete-btn edit-btn"><li class="pct-icon icon-delete lightbox_close"></li></div>
                            <div class="rotate-btn edit-btn"><li class="pct-icon icon-rotate"></li></div>
                        </div>

                     </div>                                       
                    </div>   
                </div> 
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-cta-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-cta">確認送出</a>
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
        <a href="#" class="pct-ui btn btn-cta-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-cta">確定送出</a>
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
        <a href="" class="pct-ui btn btn-cta-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-cta">同意退款</a>
    </div>
</div>


<!-- 明細類 -->

<!--04.商品頁截圖-->
<div id="pct-lightbox-productscreenshot"  class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品頁截圖</div>
    <div class="scrolling-tall  modal-content">
        <div class="description">
            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                 <div class="payment-img">
                   <!--  <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png" alt="付款憑證" class="img-fluid"></a> -->
                </div>
                 <div class="view-img-original">
                    <a href="img/report_payment_receipt.gif" target="_blank"><span class="pct-icon icon-search"></span>檢視原圖</a>
                 </div>                                     
                </div>
            </div>       
            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                 <div class="payment-img">
                    <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png" alt="付款憑證" class="img-fluid"></a>
                </div>
                 <div class="view-img-original">
                    <a href="img/report_payment_receipt.gif" target="_blank"><span class="pct-icon icon-search"></span>檢視原圖</a>
                 </div>                                     
                </div>
            </div>

            <div class="payment-img-wrap">
                <div class="payment-img-preview">
                 <div class="payment-img">
                    <a href="img/report_payment_receipt.gif" target="_blank"><img src="img/screenshot.png" alt="付款憑證" class="img-fluid"></a>
                </div>
                 <div class="view-img-original">
                    <a href="img/report_payment_receipt.gif" target="_blank"><span class="pct-icon icon-search"></span>檢視原圖</a>
                 </div>                                     
                </div>
            </div>
        </div>
    </div>
</div>