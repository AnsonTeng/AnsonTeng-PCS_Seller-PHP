<!-- 滑動面板 -->

<!-- orderListDetail 訂單明細 -->
<div class="sea-panel sea-panel--from-right js-sea-panel-batchedit">
    <!-- 標題與關閉按鈕 -->
    <header class="sea-panel__header">
        <div class="sea-panel__header-title">大量編輯</div>
        <a href="#0" class="sea-panel__close js-sea-close"><i class="sea-seller-icon icon-delete"></i></a>
    </header>


    <!-- 內容容器 -->
    <div class="sea-panel__container">
        <div class="sea-panel__content">
            <div class="sea-panel__content-addMarginBottom">

                <!-- 表格－大量編輯 -->
                <div class="tableBox tableBox-batchedit">
                    <!-- 表格（分類標題） -->
                    <div class="table__thead hidden-md-down">
                        <table>
                            <!-- colgroup -->
                            <colgroup>
                                <col class="table--w25">
                                <col class="table--w15">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w10">
                                <col class="table--w12">
                            </colgroup>
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th>名稱</th>
                                    <th>價格</th>
                                    <th>重量</th>
                                    <th>材積</th>
                                    <th>規格</th>
                                    <th>數量</th>
                                    <th>狀態</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <!-- 表格（單一商品＋大量編輯按鈕） -->
                    <div class="table__tbody md-break-table">
                        <table class="normal-table">
                            <colgroup>
                                <col class="table--w25">
                                <col class="table--w15">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w10">
                                <col class="table--w12">
                            </colgroup>


                            <!-- 說明FOR RD: 商品單一規格時，直接編輯商品數量-->
                            <tbody>
                                <!-- 商品編輯欄 -->
                                <tr class="categories">
                                    <!-- 分類欄 -->
                                    <!-- <td colspan="7" data-title="分類"> -->
                                    <td colspan="7" data-title="Category">
                                        <div class="tableData-header">
                                            <!-- <div class="table_flexBox table_flexBox-column table_flexBox-left categoriesGroup"> -->
                                            <div class="categoriesGroup">

                                                <div class="table_inlineBox">
                                                    <span class="categoriesTitle hidden-md-down">分類：</span>
                                                    <ul class="categoriesList">
                                                        <li>
                                                            <span>生鮮食品</span>
                                                        </li>
                                                        <li class="sea-seller-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>爬蟲類</span>
                                                        </li>
                                                        <li class="sea-seller-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>４足以上</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="table_inlineBox categoriesGroup-action">
                                                    <div class="table_flexBox-column">
                                                        <div class="table_inlineBox">
                                                            <a class="sea-ui btn-xs btn pexhlistBtn" style="flex-shrink:0;"><span class="sea-btn-icon icon-edit"></span>修改</a>
                                                        </div>
                                                        <div class="table_inlineBox">
                                                            <a class="sea-ui btn-xs btn-primary batchedit-applyAllBtn">套用以下館別</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- <td data-title="名稱"> -->
                                    <td data-title="名稱">
                                        <div class="tableDeta-box">
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <img class="img-fluid" src="https://cf.shopee.tw/file/6577b8ee142362e1a43100fdd82d1619_tn" alt="Product-Picture">
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">Winter short tube Chelsea boots Martin work boots<span>
                                                    </div>
                                                    <a class="sea-ui btn-xs btn batchedit-editNameBtn"><span class="sea-btn-icon icon-edit"></span>修改</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- <td data-title="價格"> -->
                                    <td data-title="價格">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-price-USdollar unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                    <!-- <td data-title="重量"> -->
                                    <td data-title="重量">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-weight-kilogram unit-after">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_inlineBox">
                                                <a class="sea-ui btn-xs btn btn-fluid btn-apply batchedit-applyAllBtn">以下套用</a>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="材積"> -->
                                    <td data-title="材積">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="長">
                                                    </div>
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="寬">
                                                    </div>
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="高">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_inlineBox">
                                                <a class="sea-ui btn-xs btn btn-fluid btn-apply batchedit-applyAllBtn">以下套用</a>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="規格"> -->
                                    <td data-title="規格">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="sea-ui form text-with-input">
                                                    <p class="single">單一規格</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td data-title="數量"> -->
                                    <td data-title="數量">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">

                                                    <!-- <div class="sea-ui form-label form-sm-break"> -->
                                                    <!-- <label for="" class="required">數量</label> -->
                                                    <div class="sea-ui form ">
                                                        <input type="tel" placeholder="" value="0" class="stock-num">
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="狀態"> -->
                                    <td data-title="狀態">
                                        <div class="tableDeta-box">
                                            <!-- <div class="content-block"> -->
                                            <!-- <div class="content-description"> -->

                                            <!-- <div class="sea-ui form-label form-sm-break"> -->
                                            <div class="radio-wrap">
                                                <div class="sea-ui form radio">
                                                    <input type="radio" id="1" name="radio-group">
                                                    <label for="1">上架中</label>
                                                </div>
                                                <div class="sea-ui form radio">
                                                    <input type="radio" id="2" name="radio-group" checked="">
                                                    <label for="2">下架中</label>
                                                </div>
                                            </div>
                                            <!-- </div>  -->

                                            <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- 單筆商品＋大量編輯按鈕 End -->



                            <!-- 說明FOR RD: 商品多種規格時，編輯數量/規格 需點擊燈箱-->
                            <tbody>
                                <!-- 商品編輯欄 -->
                                <tr class="categories">
                                    <!-- 分類欄 -->
                                    <!-- <td colspan="7" data-title="分類"> -->
                                    <td colspan="7" data-title="Category">
                                        <div class="tableData-header">
                                            <div class="table_flexBox-column table_flexBox-left categoriesGroup">

                                                <div class="table_inlineBox">
                                                    <span class="categoriesTitle hidden-md-down">分類：</span>
                                                    <ul class="categoriesList">
                                                        <li>
                                                            <span>女生服裝</span>
                                                        </li>
                                                        <li class="sea-seller-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>褲子</span>
                                                        </li>
                                                        <li class="sea-seller-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>丹寧褲</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="table_inlineBox categoriesGroup-action">
                                                    <div class="table_flexBox-column">

                                                        <div class="table_inlineBox">
                                                            <a class="sea-ui btn-xs btn pexhlistBtn" style="flex-shrink:0;"><span class="sea-btn-icon icon-edit"></span>修改</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <!-- <td data-title="名稱"> -->
                                    <td data-title="名稱">
                                        <div class="tableDeta-box">
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <img class="img-fluid" src="https://cf.shopee.tw/file/66f156cc8015d87c0cb7db109cb772ab_tn" alt="Product-Picture">
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">Winter short tube Chelsea boots Martin work boots<span>
                                                    </div>
                                                    <a class="sea-ui btn-xs btn batchedit-editNameBtn"><span class="sea-btn-icon icon-edit"></span>修改</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td data-title="價格"> -->
                                    <td data-title="價格">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-price-USdollar unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td data-title="重量"> -->
                                    <td data-title="重量">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-weight-kilogram unit-after">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td data-title="材積"> -->
                                    <td data-title="材積">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="長">
                                                    </div>
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="寬">
                                                    </div>
                                                    <div class="sea-ui form product-length-centimeter unit-after">
                                                        <input type="tel" placeholder="高">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td colspan="2" data-title="數量與規格">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <a href="" class="sea-ui btn-sm btn batchedit-editspecstockBtn"><span class="sea-btn-icon icon-edit"></span>修改規格與數量</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                    <!-- <td data-title="狀態"> -->
                                    <td data-title="狀態">
                                        <div class="tableDeta-box">
                                            <!-- <div class="content-block"> -->
                                            <!-- <div class="content-description"> -->

                                            <!-- <div class="sea-ui form-label form-sm-break"> -->
                                            <div class="radio-wrap">
                                                <div class="sea-ui form radio">
                                                    <input type="radio" id="3" name="radio-group-001" checked="">
                                                    <label for="3">上架中</label>
                                                </div>
                                                <div class="sea-ui form radio">
                                                    <input type="radio" id="4" name="radio-group-001">
                                                    <label for="4">下架中</label>
                                                </div>
                                            </div>
                                            <!-- </div>  -->

                                            <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- 單筆商品 End -->
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- 操作按鈕 -->
        <div class="sea-panel__content-actions">
            <a href="#" class="sea-ui btn btn-primary js-sea-close">取消</a>
            <a href="#" class="sea-ui btn btn-primary">確定</a>
        </div>

    </div> <!-- sea-panel__container -->
</div> <!-- sea-panel -->