<!-- 商品管理-確認一鍵上架-->
<div id="sea-lightbox-sellAll" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">一鍵上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">是否要將所有商品上架開賣？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確認</a>
    </div>
</div>

<!-- 商品管理- 商品上架-->
<div id="sea-lightbox-onTheMarket" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要將商品上架？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確認</a>
    </div>
</div>

<!-- 商品管理-商品下架-->
<div id="sea-lightbox-takenOffStore" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品下架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要將商品下架？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確認</a>
    </div>
</div>

<!-- 商品管理-移除商品-->
<div id="sea-lightbox-removeProduct" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">移除商品</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title align-center">確定要移除商品？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確認</a>
    </div>
</div>

<!--待上架商品上架確認-->
<div id="sea-lightbox-readyOnTheMarket" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">商品上架</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title">確定要將所有待上架商品上架？</div>
            <div class="sea-ui form checkbox">
                <label for="ok">
                    <input type="checkbox" name="ok" value="ok" checked><span>我已了解並同意<a href="http://www.sophia-0.com/PCH/seller/shopmoving-term.php" target="_blank">委託刊登同意書</a></span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>


<!--規格填寫範例-->
<div id="sea-lightbox-specsample" class="sea-ui modal large">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">規格填寫範例</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <img src="img/spec-sample.png" alt="" class="img-fluid hidden-md-down">
            <img src="img/spec-sample-m.png" alt="" class="img-fluid hidden-md-up">
        </div>
    </div>
</div>


<!--設定商品保固時間-->
<div id="sea-lightbox-warrantytime" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">設定商品保固時間</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="sea-ui form-label break-label">
                <label for="">自商品購買日起</label>
                <div class="warranty-wrap">
                    <div class="sea-ui form number">
                        <div class="number-controller">
                            <div class="number-btn"> <span class="sea-seller-icon icon-minus number__decrement__left"></span> </div>
                            <div>
                                <input type="number" value="1">
                            </div>
                            <div class="number-btn"> <span class="sea-seller-icon icon-plus number__decrement__right"></span> </div>
                        </div>
                    </div>
                    <div class="sea-ui form select">
                        <select>
                            <option value="y">年</option>
                            <option value="m">月</option>
                            <option value="w">週</option>
                            <option value="d">天</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined lightbox_close">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定送出</a>
    </div>
</div>

<!--賣家指定運費編輯運費-->
<div id="sea-lightbox-editShipping" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">賣家指定運費</div>
    <div class="modal-content">
        <div class="description">

            <div class="sea-ui form-select-label break-label">
                <label class="required">出貨地</label>
                <div class="sea-ui form select">
                    <select>
                        <option value="0">請選擇</option>
                        <option value="1">Taiwan / 台灣</option>
                        <option value="2">Japan / 日本</option>
                        <option value="3">Korea / 韓國</option>
                    </select>
                </div>
            </div>

            <div class="sea-ui form-label break-label">
                <label class="required">寄送天數</label>
                <div class="sea-ui form text-with-input deliveryDays">
                    <input type="tel" placeholder="5">
                    <p class="align-right">天<span class="secondary">（不含備貨時間）</span></p>
                </div>
            </div>

            <div class="sea-ui form-label break-label">
                <label class="required">商品運費</label>
                <div class="sea-ui form">
                    <div class="sea-ui form product-price-TWdollar unit-before">
                        <input type="tel" placeholder="">
                    </div>
                    <!-- <div class="sea-ui form product-price-USdollar unit-before">
                        <input type="tel" placeholder="">
                    </div> -->
                    <!-- <span class="form-introduction">按照每日浮動匯率計算美金價格，參考匯率：<span>29.991</span><span>(DD/MM/YYYY)</span> -->
                    </span>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined">取消重填</a>
        <a href="#" class="sea-ui btn btn-primary">確定送出</a>
    </div>
</div>


<!--商品規格判斷-->
<!-- 說明FOR RD: 若多種規格輸入資料後，切換回單一規格時，跳此POPUP詢問user是否要捨棄已輸入規格，因為資料會清空 -->
<div id="sea-lightbox-speccheck" class="sea-ui modal">
    <div class="modal-header">商品規格</div>
    <div class="modal-content">
        <div class="description min-height">
            <div class="title">確定要捨棄以輸入的商品規格？</div>
        </div>
    </div>
    <div class="modal-actions">
        <a href="#" class="sea-ui btn btn-primary-outlined">取消</a>
        <a href="#" class="sea-ui btn btn-primary">確定</a>
    </div>
</div>


<!--大量上傳錯誤說明-->
<div id="sea-lightbox-xlserror" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">結果錯誤說明</div>
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
<div id="sea-lightbox-xlsstep" class="sea-ui modal medium">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">大量上傳步驟說明</div>
    <div class="scrolling-tall modal-content">
        <div class="description">
            <div class="xsl-download-img"><img src="img/icon-bulklist-xsl.svg" alt="" class="img-fluid"></div>
            <div class="title"><span class="eng-num">STEP 01.</span> 最新大量新增商品範本 </div>
            <p>請先<a href="/sellers/batchprod/downloadxls">下載excel上架資料</a>，按照上面說明填寫，單次excel上架資料筆數上限為1000筆。 一天最多只能上傳3次。</p>
            <br />
            <br />
            <div class="title"><span class="eng-num">STEP 02.</span> 編輯 excel 商品資料完成後上傳 </div>
            <p>
                1. 資料填寫完畢後，請將檔案以csv格式轉存。<br />
                2. 上傳檔案，請上傳您的csv檔及相關圖檔。請務必將所有檔案壓縮成zip檔上傳(壓縮檔內不可含資料夾)。<br />
                3. 圖檔格式只接受.jpg或.gif，圖檔名稱請勿使用中文，請使用英文小寫。<br />
            </p>
            <p class="alert-red">* 受限於出口快遞貨物申報作業規定，商品價格請勿設定超過五萬元。</p>
            <br />
            <br />
            <div class="title"><span class="eng-num">STEP 03.</span> 查詢上架進度及成功/失敗筆數</div>
            <p>
                1. 上傳檔案必需每筆商品資料均正確，才可成功上架整批資料。 賣家可自行下載錯誤參考檔，最後一欄會附上資料異常原因，賣家可自行修正後再重新上傳。<br />
                2. 整批資料上傳，系統將會於2-3個工作天批次處理，賣家可至商品上架>商品大量新增商品紀錄 中查詢 進度及成功失敗筆數。</p><br>
        </div>
    </div>
</div>


<!-- 國際商品統一分類代碼 -->
<div id="sea-lightbox-aboutHScode" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">國際商品統一分類代碼 (HS Code)</div>
            <p>HS CODE 預設為系統依商品分類分配的代碼，若您知道自己商品的 HS Code，可自行輸入。有利於買家結帳時，為您的商品取得更準確的稅率進行運算。若您所輸入的 HS CODE 系統暫時對應不到，可以提交至
                PChomeSEA，我們會盡快將您所提交的 HS CODE 建入資料庫內。</p>
        </div>
    </div>
</div>

<!-- 包裹重量 -->
<div id="sea-lightbox-parcelWeight" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">包裹重量</div>
            <p>請仔細評估包裹重量，以便系統能更精準計算應代收的國際運費。</p>
        </div>
    </div>
</div>

<!-- 包裹材積 -->
<div id="sea-lightbox-parcelVolume" class="sea-ui modal">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-content">
        <div class="description">
            <div class="title">包裹材積</div>
            <p>若材積重大於實重，則取材積重計價。（詳細規則請見各物流商規範）</p>
        </div>
    </div>
</div>