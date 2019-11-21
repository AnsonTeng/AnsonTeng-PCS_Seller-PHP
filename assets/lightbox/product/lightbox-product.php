<!-- 商品管理-確認一鍵上架-->
<div id="pct-lightbox-sellAll" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">一鍵上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">是否要將所有商品上架開賣？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確認</a>
    </div>
</div>

<!-- 商品管理- 商品上架-->
<div id="pct-lightbox-onTheMarket" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要將商品上架？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確認</a>
    </div>
</div>

<!-- 商品管理-商品下架-->
<div id="pct-lightbox-takenOffStore" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品下架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要將商品下架？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確認</a>
    </div>
</div>

<!-- 商品管理-移除商品-->
<div id="pct-lightbox-removeProduct" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">移除商品</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要移除商品？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確認</a>
    </div>
</div>

<!--待上架商品上架確認-->
<div id="pct-lightbox-readyOnTheMarket" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title">確定要將所有待上架商品上架？</div>
            <div class="pct-ui form checkbox">
                <label for="ok">
                    <input type="checkbox" name="ok" value="ok" checked><span>我已了解並同意<a
                            href="http://www.sophia-0.com/PCH/seller/shopmoving-term.php"
                            target="_blank">委託刊登同意書</a></span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確定</a>
    </div>
</div>


<!--規格填寫範例-->
<div id="pct-lightbox-specsample" class="pct-ui modal large">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">規格填寫範例</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <img src="img/spec-sample.png" alt="" class="img-fluid hidden-md-down">
            <img src="img/spec-sample-m.png" alt="" class="img-fluid hidden-md-up">
        </div>
    </div>

</div>


<!--設定商品保固時間-->
<div id="pct-lightbox-warrantytime" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定商品保固時間</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="pct-ui form-label break-label">
                <label for="">自商品購買日起</label>
                <div class="warranty-wrap">
                    <div class="pct-ui form number">
                        <div class="number-controller">
                            <div class="number-btn"> <span class="pct-icon icon-minus number__decrement"></span> </div>
                            <div>
                                <input type="number" value="1">
                            </div>
                            <div class="number-btn"> <span class="pct-icon icon-plus"></span> </div>
                        </div>
                    </div>
                    <div class="pct-ui form select">
                        <select>
                            <option value="1">年</option>
                            <option value="1">月</option>
                            <option value="2">週</option>
                            <option value="3">天</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-secondary-outlined lightbox_close">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確定送出</a>
    </div>
</div>

<!--賣家指定運費編輯運費-->
<div id="pct-lightbox-editShipping" class="pct-ui modal">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">賣家指定運費</div>
    <div class="modal-content">
        <div class="description">
            <div class="pct-ui form fluid shippingcost">
                <input class="form-control" type="text">
            </div>

        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-secondary-outlined">取消重填</a>
        <a href="#" class="pct-ui btn btn-secondary">確定送出</a>
    </div>
</div>


<!--商品規格判斷-->
<!-- 說明FOR RD: 若多種規格輸入資料後，切換回單一規格時，跳此POPUP詢問user是否要捨棄已輸入規格，因為資料會清空 -->
<div id="pct-lightbox-speccheck" class="pct-ui modal">
    <div class="modal-header">商品規格</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title">確定要捨棄以輸入的商品規格？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="pct-ui btn btn-secondary-outlined">取消</a>
        <a href="#" class="pct-ui btn btn-secondary">確定</a>
    </div>
</div>


<!--大量上傳錯誤說明-->
<div id="pct-lightbox-xlserror" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">上傳結果錯誤說明</div>
    <div class="scrolling modal-content">
        <div class="description">
            <div class="description-list">
                <div class="description-list-box">
                    <div class="list-box-item eng-num">201</div>
                    <div class="list-box-text">館別不存在</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">202</div>
                    <div class="list-box-text">產品名稱重覆</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">203</div>
                    <div class="list-box-text">庫存不可為空</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">204</div>
                    <div class="list-box-text">規格和庫存數量不合</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">205</div>
                    <div class="list-box-text">新增失敗</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">206</div>
                    <div class="list-box-text">商品售價不可為空或不符規則</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">207</div>
                    <div class="list-box-text">商品建議售價不可為空或不符規則</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">208</div>
                    <div class="list-box-text">產品名稱為空</div>
                </div>
                <div class="description-list-box">
                    <div class="list-box-item eng-num">209</div>
                    <div class="list-box-text">商品售價高於商品建議售價</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--大量上傳步驟說明-->
<div id="pct-lightbox-xlsstep" class="pct-ui modal medium">
    <i class="pct-icon icon-delete lightbox_close"></i>
    <div class="modal-header">大量上傳步驟說明</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="xsl-download-img"><img src="img/icon-bulklist-xsl.svg" alt="" class="img-fluid"></div>
            <div class="title"><span class="eng-num">STEP 01.</span> 最新大量上架範本 </div>
            <p>請先<a href="/sellers/batchprod/downloadxls">下載excel上架資料</a>，按照上面說明填寫，單次excel上架資料筆數上限為1000筆。 一天最多只能上傳3次。
            </p><br><br>
            <div class="title"><span class="eng-num">STEP 02.</span> 最新大量上架範本 </div>
            <p>資料填寫完畢後，請將檔案以csv格式轉存。上傳檔案，請上傳您的csv檔及相關圖檔。請務必將所有檔案壓縮成zip檔上傳(壓縮檔內不可含資料夾)。圖檔格式只接受.jpg或.gif
                ，圖檔名稱請勿使用中文，請使用英文小寫。</p><br><br>
            <div class="title"><span class="eng-num">STEP 03.</span> 查詢上架進度及成功/失敗筆數</div>
            <p>執行上傳，上傳檔案必需每筆商品資料均正確，才可成功上架整批資料。
                賣家可自行下載錯誤參考檔，最後一欄會附上資料異常原因，賣家可自行修正後再重新上傳。整批資料上傳，系統將會於2-3個工作天批次處理，賣家可至商品上架>大量上架紀錄 中查詢 進度及成功失敗筆數。</p><br>
        </div>
    </div>
</div>