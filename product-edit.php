<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="PChomeSEA 包辦所有跨境大小事，一站式電子商務解決方案，讓你在東南亞銷售像在台灣一樣容易">
<meta property="og:title" content="跟著PChomeSEA賣向東南亞" />
<meta property="og:description" content="PChomeSEA 包辦所有跨境大小事，一站式電子商務解決方案，讓你在東南亞銷售像在台灣一樣容易" />
<meta property="og:image" content="https://www.pchomesea.com/img/PChomeSEA_FB.jpg" />
<meta property="og:url" content="https://www.pchomesea.com" />
<meta property="og:site_name" content="PChomeSEA" />
<!-- favicon.ico-->
<link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00AFEB">
<meta name="msapplication-TileColor" content="#00AFEB">
<meta name="theme-color" content="#00AFEB">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/plugin/normalize.css">

<!-- PAGE -->
<link rel="stylesheet" type="text/css" href="css/product.css">

<!-- Icon Font -->
<link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">

<!-- BS grid -->
<link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

<title>PChomeSEA | 編輯商品</title>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WDQH45W');
</script>
<!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDQH45W" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- 說明FOR RD: 填寫資料正確送出 請跑這一個區塊的LOADING-->
    <div class="sea-ui loading-overlay-main" style="display: none;">
        <div class="loading-circle-main">
            <div class="circle-loader">
                <div class="checkmark draw"></div>
            </div>
        </div>
    </div>

    <section id="sea-main">
        <!-- PChomeSEA Header -->
        <?php include("assets/header.php"); ?>
        <!-- PChomeSEA Header end-->

        <!-- PChomeSEA Menu_mobile -->
        <?php include("assets/menu-mobile.php"); ?>
        <!-- PChomeSEA Menu_mobile end-->

        <!-- 內容寬度 1200 區塊 -->
        <div class="container sea-gutters container-min-height">
            <div class="section-outer">

                <div class="row">
                    <div class="col-md-3">
                        <!-- PChomeSEA Menu_pc -->
                        <?php include("assets/menu-pc.php"); ?>
                        <!-- PChomeSEA Menu_pc end-->
                    </div>
                    <div class="col-md-9">
                        <section id="sea-section-content">



                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-productedit"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>商品管理</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>編輯商品</li>
                                </ul>
                            </div>
                            <p class="product-add-alert"><span class="sea-seller-icon icon-alert"></span>新增商品前，請先參閱 <a href="prohibited_restricted.php" target="_blank">禁運及受限商品列表</a>，以維護您的權益。謝謝！</p>
                            <!--商品圖片-->
                            <div class="content-block">
                                <div class="content-title">設定商品圖片</span></div>
                                <div class="content-description">
                                    <p class="description-text">尺寸 600px X 600px 以上享有局部放大功能，買家能看到更多商品細節 (格式限JPG, PNG, 或GIF)。</p>
                                    <div class="upload-product-img">
                                        <div class="upload-img-num"><span class="eng-num">
                                                <span class="current">8</span>/10</span>張照片</div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill primary">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="primary-tag">封面照片</div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_04.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_03.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_02.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="sea-seller-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="sea-seller-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg" style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD: 上傳照片送出後等待過場loading-->
                                        <div class="sea-ui img-manager">
                                            <div class="content-fill processing">
                                                <div class="sea-ui loading-overlay">
                                                    <div class="loading-circle small"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sea-ui img-manager">
                                            <div class="content-upload">
                                                <label id="filedrag">
                                                    <div class="sea-seller-icon icon-picture"></div>
                                                    <p><span class="sea-seller-icon icon-plus"></span>上傳</p>
                                                    <input type="file" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="description-text">您可以拖曳圖片改變順序，設定商品封面照片。</p>
                                    <span class="error-notification-tooltip-inline"><span class="sea-seller-icon icon-alert"></span> 至少上傳一張圖片</span>
                                </div>
                            </div>

                            <!--商品標題/規格-->
                            <div class="content-block">
                                <div class="content-title">商品名稱與價格</div>
                                <div class="content-description">
                                    <!-- <div class="sea-ui tab-nav-bar"> -->
                                    <!--目前不分語系-->
                                    <!-- <div class="sea-ui tab-pointing">
                                            <ul class="tab-items" data-tabgroup="tab-panel">
                                                <li><a href="#thai" class="active"><span class="icon-overseas th"></span>泰文</a></li>
                                            </ul>
                                        </div> -->

                                    <!-- <div id="tab-panel" class="tab-panel"> -->
                                    <!-- <div id="thai"> -->
                                    <div class="sea-ui form-label form-m-break">
                                        <label for="" class="required">商品名稱</label>
                                        <div class="sea-ui form">
                                            <input type="text" placeholder="請輸入商品名稱" value="Casio G-Shock 雙衛星 GPS 全球定位腕錶">
                                            <div class="error-notification-tooltip-inline">商品名稱為必填且不可超過500字元</div>
                                            <a href="#" class="sea-ui btn-sm btn-primary-outlined inputGroup-btn">Google 翻譯中翻英</a>
                                            <input type="text" placeholder="商品英文名稱" value="Casio G-Shock Analog-Digital GA-800SC-6ADR CMG">
                                            <p class="break-text">自動翻譯功能由 Google 翻譯所提供，PChomeSEA 不保證翻譯內容之正確性！您可自行修正翻譯結果。</p>
                                        </div>
                                    </div>

                                    <div class="sea-ui form-textarea-label fluid form-m-break">
                                        <label class="required">商品描述</label>
                                        <div class="sea-ui form">
                                            <textarea placeholder="請輸入商品簡介（上限 150 字）">可測量溫度與濕度 (DIGITAL HYGROMETER) 心率與海拔高度</textarea>
                                            <div class="error-notification-tooltip-inline">商品描述為必填且不可超過500字元</div>
                                        </div>
                                    </div>

                                    <div class="sea-ui form">
                                        <div class="sea-ui form-label product-title">
                                            <label class="required">商品品牌</label>
                                            <div class="sea-ui form">
                                                <input type="text" placeholder="請輸入商品品牌名稱" value="Casio">
                                                <div class="error-notification-tooltip-inline">商品品牌名稱為必填且不可超過500字元</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 說明For RD: 尚未選擇分類時 只會出現一個下拉選單 選完第一層分層後 才會出現第二層分類的下拉選單 以此類推 -->
                                    <div class="sea-ui form-label product-category form-m-break">
                                        <label for="" class="required">商品分類</label>
                                        <div class="column-form">
                                            <div class="sea-ui form select">
                                                <select>
                                                    <option value="0">手錶</option>
                                                    <option value="1">女生服裝</option>
                                                    <option value="2">男生服裝</option>
                                                </select>
                                            </div>
                                            <div class="sea-ui form select">
                                                <select>
                                                    <option value="0">男錶</option>
                                                    <option value="1">上衣</option>
                                                    <option value="2">褲子</option>
                                                    <option value="3">外套</option>
                                                </select>
                                            </div>
                                            <div class="sea-ui form select">
                                                <select>
                                                    <option value="0">運動錶</option>
                                                    <option value="1">長褲</option>
                                                    <option value="2">短褲</option>
                                                    <option value="3">內褲</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-column">
                                        <div class="sea-ui form-label two-column ">
                                            <label for="" class="required">商品售價</label>
                                            <div>
                                                <div class="sea-ui form product-price-TWdollar unit-before">
                                                    <input type="tel" value="2497">
                                                </div>
                                                <!-- <div class="sea-ui form product-price-USdollar unit-before">
                                                    <input type="tel" value="2480">
                                                </div> -->
                                            </div>

                                        </div>
                                        <div class="sea-ui form-label two-column">
                                            <label>促銷售價</label>
                                            <div>
                                                <div class="sea-ui form product-price-TWdollar unit-before">
                                                    <input type="tel" value="1626">
                                                </div>
                                                <!-- <div class="sea-ui form product-price-USdollar unit-before">
                                                    <input type="tel" value="1620">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 參考匯率說明文字 -->
                                    <!-- <div class="sea-ui form exchangeRate">
                                        <span class="form-introduction">按照每日浮動匯率計算美金價格<br />參考匯率：<span>29.991</span><span>(DD/MM/YYYY)</span>
                                        </span>
                                    </div> -->

                                    <div class="sea-ui form-label product-title">
                                        <label><a href="#" class="aboutHScodeBtn">HS CODE <span class="sea-seller-icon icon-information tooltips-blue"></span></a></label>
                                        <div class="sea-ui form ">
                                            <input type="text" placeholder="" value="91011100007">
                                            <a href="https://portal.sw.nat.gov.tw/APGQ/LoginFree?request_locale=zh_TW&breadCrumbs=JTdCJTIyYnJlYWRDcnVtYnMlMjIlM0ElNUIlN0IlMjJuYW1lJTIyJTNBJTIyJUU1JTg1JThEJUU4JUFEJTg5JUU2JTlGJUE1JUU4JUE5JUEyJUU2JTlDJThEJUU1JThCJTk5JTIyJTJDJTIydXJsJTIyJTNBJTIyJTIyJTdEJTJDJTdCJTIybmFtZSUyMiUzQSUyMiVFNyVBOCU4NSVFNSU4OSU4NyVFNyVBOCU4NSVFNyU4RSU4NyVFNiU5RiVBNSVFOCVBOSVBMiUyMiUyQyUyMnVybCUyMiUzQSUyMmNoYW5nZU1lbnVVcmwyKCclRTclQTglODUlRTUlODklODclRTclQTglODUlRTclOEUlODclRTYlOUYlQTUlRTglQTklQTInJTJDJ0FQR1FfNycpJTIyJTdEJTJDJTdCJTIybmFtZSUyMiUzQSUyMihHQzQxMSklRTclQTglODUlRTUlODklODclRTclQTglODUlRTclOEUlODclRTclQjYlOUMlRTUlOTAlODglRTYlOUYlQTUlRTglQTklQTIlRTQlQkQlOUMlRTYlQTUlQUQlMjIlMkMlMjJ1cmwlMjIlM0ElMjJvcGVuTWVudSgnJTJGQVBHUSUyRkdDNDExJyklMjIlN0QlMkMlN0IlN0QlMkMlN0IlN0QlNUQlMkMlMjJwYXRoVXJsJTIyJTNBJTIyJTIzTUVOVV9BUEdRJTJDJTIzTUVOVV9BUEdRXzclMkMlMkZBUEdRJTJGR0M0MTElMjIlN0Q=" target="_blank" class="sea-ui btn-sm btn-primary-outlined inputGroup-btn">代碼查詢</a>
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label">
                                        <label>預估關稅</label>
                                        <div class="sea-ui form text-with-input">
                                            <input type="text" placeholder="" value="15">
                                            <p class="align-right">％</p>
                                        </div>
                                    </div>

                                    <div class="sea-ui form">
                                        <div class="sea-ui form-label product-title">
                                            <label>自訂商品編號</label>
                                            <div class="sea-ui form">
                                                <input type="text" placeholder="自訂商品編號(上限150字)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品庫存與規格-->
                            <div class="content-block">
                                <div class="content-title">商品規格與庫存</div>
                                <div class="content-description">

                                    <div class="sea-ui form-label form-sm-break">
                                        <label for="">商品情況</label>
                                        <div class="radio-wrap">
                                            <div class="sea-ui form radio">
                                                <input type="radio" id="newProduct" name="radio-group2" checked="">
                                                <label for="newProduct">新品</label>
                                            </div>
                                            <div class="sea-ui form radio">
                                                <input type="radio" id="usedProduct" name="radio-group2">
                                                <label for="usedProduct">二手</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label form-sm-break">
                                        <label for="">商品規格</label>

                                        <div class="radio-wrap">
                                            <div class="sea-ui form radio">
                                                <input type="radio" id="singleVaritation" name="radio-group1" checked="">
                                                <label for="singleVaritation">單一規格</label>
                                            </div>
                                            <div class="sea-ui form radio">
                                                <input type="radio" id="multipleVaritation" name="radio-group1">
                                                <label for="multipleVaritation">多種規格</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="variations single">
                                        <div class="sea-ui form-label form-sm-break">
                                            <label for="" class="required">庫存數</label>
                                            <div class="sea-ui form text-with-input">
                                                <input type="text" placeholder="" value="499" class="stock-num">
                                                <p class="align-right">單一商品庫存數量上限為 <span class="eng-num">499</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="variations multiple">
                                        <div class="sea-ui form-label product-price">
                                            <label for="" class="required">規格與庫存數</label>
                                        </div>
                                        <p class="description-text">範例：A商品有「顏色」、「尺寸」等2種規格，規格可填寫成「紅色 > M」等。單一商品庫存數量上限為 499。<a class="specsampleBtn"><span class="sea-seller-icon icon-information"></span> 規格填寫範例</a></p>

                                        <div class="variation-box">
                                            <div class="spec-wrap">
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格 <span>1</span></label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="sea-seller-icon icon-angle-right"></div>
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sea-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="sea-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                        <div class="variation-box">
                                            <div class="spec-wrap">
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格 <span>2</span></label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="sea-seller-icon icon-angle-right"></div>
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sea-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="sea-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                            <div class="sea-seller-icon icon-trash"></div>
                                        </div>
                                        <!--說明 FOR RD: 新增規格後長出第三條規格輸入區-->
                                        <div class="variation-box">
                                            <div class="spec-wrap">
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格 <span>3</span></label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="sea-seller-icon icon-angle-right"></div>
                                                <div class="sea-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sea-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="sea-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                            <div class="sea-seller-icon icon-trash"></div>
                                        </div>
                                        <a class="sea-ui sea-seller-icon-btn btn add-variation"><span class="sea-seller-icon icon-plus"></span>新增規格</a>
                                    </div>
                                </div>
                            </div>

                            <!--商品運費設定-->
                            <div class="content-block">
                                <div class="content-title">運費與備貨時間</div>
                                <div class="content-description">

                                    <div class="sea-ui form-label form-m-break">
                                        <label for="">出貨地</label>
                                        <div class="sea-ui form form-readonly">
                                            <input type="text" placeholder="" value="台灣 Taiwan" readonly="readonly">
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label form-m-break">
                                        <label for="" class="required">
                                            <a href="#" class="parcelWeightBtn">包裹重量<span class="sea-seller-icon icon-information tooltips-blue "></span></a>
                                        </label>
                                        <div class="sea-ui form product-weight unit-after">
                                            <input type="text" placeholder="" value="1.96">
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label volumatic">
                                        <label for="" class="required">
                                            <a href="#" class="parcelVolumeBtn">包裹材積<span class="sea-seller-icon icon-information tooltips-blue"></span></a>
                                        </label>
                                        <div class="column-form">
                                            <div class="sea-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="長" value="13.6">
                                            </div>
                                            <div class="sea-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="寬" value="11.2">
                                            </div>
                                            <div class="sea-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="高" value="8.4">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label form-m-break">
                                        <label for="">物流方式</label>
                                        <div class="sea-ui form form-textList">
                                            <p>(1) 若訂單來源為泰國，且 PChomeSEA 支援物流方式不適用您的商品，您可選擇啟用＂賣家自行配送＂。</p>
                                            <p class="alert">(2) 請確實輸入商品包裹的重量及材積，我們會依照您所輸入的資訊向買家收取適當的國際運費。詳見【<a href="https://w3.pchome.co.th/guide_j/guide__ship__new_03">運費如何計算</a>】</p>
                                            <p>(3) 海外出貨目前以單一商品為一個包裹來計算運費，譬如：買家購買同商品x2，會計算為兩個包裹、兩筆運費。</p>
                                            <p>(4) 提醒您，包裹重量小於 2kg，材積相加不超過 90cm 的包裹將優先以「國際e小包」計算運費並且進行配送，但若您輸入的包裹重量或材積與實際寄送時計量結果不符而導致運費少收，將以物流商計算的運費金額為主，並且列為運費補收項目於提領時補扣。</p>
                                            <p>(5) 若您的商品重量或材積為 PChomeSEA 所支援的跨境物流無法配送的規格，則【賣家自行配送】為必須啟用，且可能無法支援開賣到其他地區。</p>
                                        </div>
                                    </div>

                                    <!--說明For RD:  若未選擇物流商，此區塊請整塊隱藏 包含 <div class="logistic-wrap operation"> 這層-->
                                    <div class="logistic-wrap operation">
                                        <p class="description-text">PChomeSEA 支援物流 （泰國賣場限定）</p>

                                        <!--說明For RD:  已輸入材積的顯示狀態，自動帶入運費 -->
                                        <div class="sea-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_roc_post.png" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">中華郵政 EMS國際快捷</div>
                                                        <div class="caption-subTitle">關稅-買家自付</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box"> NT$ 500 </div>
                                                <div class="caption-switch">
                                                    <div class="sea-ui form-label">
                                                        <div class="sea-ui switch-toggle">
                                                            <input id="SwitchCheckbox_1" class="switch-checkbox" type="checkbox">
                                                            <label for="SwitchCheckbox_1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li>重量限制: <span class="highlight"> 30kg以下 </span></li>
                                                        <li>尺寸限制: 任何一邊不得超過<span class="highlight"> 150cm </span>，長寬高總和不得超過<span class="highlight"> 300cm </span></li>
                                                        <li>若材積重大於實重，則取材積重計價 長 × 寬 × 高 (cm) ÷ 6,000 = 材積重量 (kg)</li>
                                                        <li>預計寄達天數 3～4 天</li>
                                                        <li>運費含保價費，依商品售價計算</li>
                                                        <li>若有必要，買家需自行清關繳稅</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  尚未輸入材積的顯示狀態 -->
                                        <div class="sea-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_roc_ePacket.png" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">中華郵政 國際e小包</div>
                                                        <div class="caption-subTitle">關稅-買家自付</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <div class="hint-text"><span class="sea-seller-icon icon-alert"></span>需輸入重量</div>
                                                </div>
                                                <div class="caption-switch">
                                                    <div class="sea-ui form-label">
                                                        <div class="sea-ui switch-toggle">
                                                            <input id="SwitchCheckbox_2" class="switch-checkbox" type="checkbox">
                                                            <label for="SwitchCheckbox_2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li>重量限制: <span class="highlight"> 2kg以下 </span></li>
                                                        <li>尺寸限制: 包裹不得小於 <span class="highlight">14 x 9cm</span> ，單邊最長不超過 <span class="highlight">60cm</span>，長寬高總和不超過 <span class="highlight">90cm</span></li>
                                                        <li>預計寄達天數 6～8 天</li>
                                                        <li>無保價費</li>
                                                        <li>若有必要，買家需自行清關繳稅</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  已輸入材積的顯示狀態，自動帶入運費 -->
                                        <div class="sea-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon_logistic_sfl.png" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">翔丰物流 包稅快遞</div>
                                                        <div class="caption-subTitle">關稅-內含</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">不支援</div>
                                                <div class="caption-switch">
                                                    <div class="sea-ui form-label">
                                                        <div class="sea-ui switch-toggle">
                                                            <input id="SwitchCheckbox_3" class="switch-checkbox" type="checkbox">
                                                            <label for="SwitchCheckbox_3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li><span class="alert">＊</span><span class="note">泰國部分郵遞區號為 9 開頭的地區，可能無法支援配送。包括但不限於 Song Khla, Stoon, Trang, Pattalung, Pattani, Yala, Naratiwat 等區。</span></li>
                                                        <li>重量限制: <span class="highlight"> 30kg以下 </span></li>
                                                        <li>尺寸限制: 任何一邊不得超過<span class="highlight"> 85cm </span></li>
                                                        <li>預計寄達天數 6～8 天</li>
                                                        <li>商品金額限於 台幣 2700 元 / 美金 90 元 / 泰銖 3000 以內</li>
                                                        <li>無保價費</li>
                                                        <li>運費包含關稅，買家無需自行清關</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <p class="description-text">非支援物流（泰國賣場限定）</p>
                                    <div class="logistic-wrap seller">
                                        <!--說明For RD:  以下兩個為兩種狀態Demo 判斷後呈現其中一種 -->
                                        <!--說明For RD:  預設為設定運費的連結（未設定運費前） -->
                                        <div class="sea-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">賣家自行配送</div>
                                                        <div class="caption-subTitle"></div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <a class="editshippingBtn">設定</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  填入後為顯示運費與修改運費icon -->
                                        <div class="sea-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">賣家自行配送</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box"> $ 500 <a class="sea-seller-icon icon-edit editshippingBtn"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sea-ui form-label form-sm-break">
                                        <label for="">備貨時間</label>
                                        <div class="sea-ui form text-with-input">
                                            <p class="align-left">我需要 </p>
                                            <input type="text" placeholder="" value="3" class="processing-day">
                                            <p class="align-right">天備貨。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--商品保固-->
                            <div class="content-block product-description">
                                <div class="content-title">商品保固</div>
                                <div class="content-description">
                                    <div class="sea-ui form-label product-warranty">
                                        <label for="">購買此商品的是否提供保固？</label>
                                        <div class="sea-ui switch-toggle">
                                            <input id="switch-checkbox-warranty" class="switch-checkbox" type="checkbox">
                                            <label for="switch-checkbox-warranty"></label>
                                        </div>
                                    </div>
                                    <div class="warrantytime">
                                        <div class="sea-ui form-label form-sm-break">
                                            <label for="">保固時間</label>
                                            <div class="sea-ui form text-without-input">
                                                <p class="align-left">自購買日起 <span class="eng-num">1</span>年。</p>
                                                <a class="sea-ui btn-xs btn warrantytimeBtn"><span class="sea-btn-icon icon-edit"></span>修改</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品詳細描述-->
                            <div class="content-block product-description">
                                <div class="content-title">商品詳細描述</div>
                                <div class="content-description">
                                    <textarea class="ckeditor" id="intro" cols="80" name="intro" rows="10" style="visibility: hidden; display: none;"></textarea>
                                    <div id="cke_intro" class="cke_3 cke cke_reset cke_chrome cke_editor_intro cke_ltr cke_browser_webkit" dir="ltr" lang="zh" role="application" aria-labelledby="cke_intro_arialbl"><span id="cke_intro_arialbl" class="cke_voice_label">RTF 編輯器, intro</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span id="cke_3_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_10" class="cke_voice_label">編輯器工具列</span><span id="cke_3_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_10" onmousedown="return false;"><span id="cke_13" class="cke_toolbar" aria-labelledby="cke_13_label" role="toolbar"><span id="cke_13_label" class="cke_voice_label">剪貼簿/復原</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_14" class="cke_button cke_button__cut cke_button_disabled " href="javascript:void('剪下')" title="剪下" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__cut_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -312px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__cut_label" aria-hidden="false">剪下</span></a><a id="cke_15" class="cke_button cke_button__copy cke_button_disabled " href="javascript:void('複製')" title="複製" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__copy_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -264px;background-size:auto;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__copy_label" aria-hidden="false">複製</span></a><a id="cke_16" class="cke_button cke_button__paste cke_button_off" href="javascript:void('貼上')" title="貼上" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span class="cke_button_icon cke_button__paste_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -360px;background-size:auto;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__paste_label" aria-hidden="false">貼上</span></a><a id="cke_17" class="cke_button cke_button__pastetext cke_button_off" href="javascript:void('貼成純文字')" title="貼成純文字" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span class="cke_button_icon cke_button__pastetext_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__pastetext_label" aria-hidden="false">貼成純文字</span></a><a id="cke_18" class="cke_button cke_button__pastefromword cke_button_off" href="javascript:void('自 Word 貼上')" title="自 Word 貼上" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__pastefromword_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__pastefromword_label" aria-hidden="false">自 Word 貼上</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_19" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('復原')" title="復原" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -2232px;background-size:auto;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">復原</span></a><a id="cke_20" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('取消復原')" title="取消復原" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -2184px;background-size:auto;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">取消復原</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_21" class="cke_toolbar" aria-labelledby="cke_21_label" role="toolbar"><span id="cke_21_label" class="cke_voice_label">編輯選項</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_22" class="cke_button cke_button__scayt cke_button_off" href="javascript:void('拼字檢查')" title="拼字檢查" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span class="cke_button_icon cke_button__scayt_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1824px;background-size:auto;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__scayt_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_23" class="cke_toolbar" aria-labelledby="cke_23_label" role="toolbar"><span id="cke_23_label" class="cke_voice_label">連結</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_24" class="cke_button cke_button__link cke_button_off" href="javascript:void('連結')" title="連結" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span id="cke_24_label" class="cke_button_label cke_button__link_label" aria-hidden="false">連結</span></a><a id="cke_25" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('取消連結')" title="取消連結" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1320px;background-size:auto;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">取消連結</span></a><a id="cke_26" class="cke_button cke_button__anchor cke_button_off" href="javascript:void('錨點')" title="錨點" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span class="cke_button_icon cke_button__anchor_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__anchor_label" aria-hidden="false">錨點</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_27" class="cke_toolbar" aria-labelledby="cke_27_label" role="toolbar"><span id="cke_27_label" class="cke_voice_label">插入</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_28" class="cke_button cke_button__image cke_button_off" href="javascript:void('圖片')" title="圖片" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__image_label" aria-hidden="false">圖片</span></a><a id="cke_29" class="cke_button cke_button__table cke_button_off" href="javascript:void('表格')" title="表格" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -2064px;background-size:auto;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__table_label" aria-hidden="false">表格</span></a><a id="cke_30" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('插入水平線')" title="插入水平線" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_30_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -960px;background-size:auto;">&nbsp;</span><span id="cke_30_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">插入水平線</span></a><a id="cke_31" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('插入特殊字元')" title="插入特殊字元" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_31_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -2040px;background-size:auto;">&nbsp;</span><span id="cke_31_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">插入特殊字元</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_32" class="cke_toolbar" aria-labelledby="cke_32_label" role="toolbar"><span id="cke_32_label" class="cke_voice_label">工具</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_33" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('最大化')" title="最大化" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(47,event);" onfocus="return CKEDITOR.tools.callFunction(48,event);" onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span class="cke_button_icon cke_button__maximize_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span id="cke_33_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">最大化</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_34" class="cke_toolbar" aria-labelledby="cke_34_label" role="toolbar"><span id="cke_34_label" class="cke_voice_label">文件</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_35" class="cke_button cke_button__source cke_button_off" href="javascript:void('原始碼')" title="原始碼" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(50,event);" onfocus="return CKEDITOR.tools.callFunction(51,event);" onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span class="cke_button_icon cke_button__source_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span id="cke_35_label" class="cke_button_label cke_button__source_label" aria-hidden="false">原始碼</span></a></span><span class="cke_toolbar_end"></span></span><span class="cke_toolbar_break"></span><span id="cke_36" class="cke_toolbar" aria-labelledby="cke_36_label" role="toolbar"><span id="cke_36_label" class="cke_voice_label">基本樣式</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_37" class="cke_button cke_button__bold cke_button_off" href="javascript:void('粗體')" title="粗體" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_37_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(53,event);" onfocus="return CKEDITOR.tools.callFunction(54,event);" onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_37_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">粗體</span></a><a id="cke_38" class="cke_button cke_button__italic cke_button_off" href="javascript:void('斜體')" title="斜體" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_38_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_38_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">斜體</span></a><a id="cke_39" class="cke_button cke_button__strike cke_button_off" href="javascript:void('刪除線')" title="刪除線" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_39_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">刪除線</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_40" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('移除格式')" title="移除格式" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(62,event);" onfocus="return CKEDITOR.tools.callFunction(63,event);" onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1776px;background-size:auto;">&nbsp;</span><span id="cke_40_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">移除格式</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_41" class="cke_toolbar" aria-labelledby="cke_41_label" role="toolbar"><span id="cke_41_label" class="cke_voice_label">段落</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_42" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('插入/移除編號清單清單')" title="插入/移除編號清單清單" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_42_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(65,event);" onfocus="return CKEDITOR.tools.callFunction(66,event);" onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span id="cke_42_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">插入/移除編號清單清單</span></a><a id="cke_43" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('插入/移除項目符號清單')" title="插入/移除項目符號清單" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(68,event);" onfocus="return CKEDITOR.tools.callFunction(69,event);" onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1368px;background-size:auto;">&nbsp;</span><span id="cke_43_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">插入/移除項目符號清單</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_44" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('減少縮排')" title="減少縮排" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_44_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(71,event);" onfocus="return CKEDITOR.tools.callFunction(72,event);" onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span id="cke_44_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">減少縮排</span></a><a id="cke_45" class="cke_button cke_button__indent cke_button_off" href="javascript:void('增加縮排')" title="增加縮排" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(74,event);" onfocus="return CKEDITOR.tools.callFunction(75,event);" onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span id="cke_45_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">增加縮排</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_46" class="cke_button cke_button__blockquote cke_button_off" href="javascript:void('引用段落')" title="引用段落" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_46_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(77,event);" onfocus="return CKEDITOR.tools.callFunction(78,event);" onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span class="cke_button_icon cke_button__blockquote_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 -216px;background-size:auto;">&nbsp;</span><span id="cke_46_label" class="cke_button_label cke_button__blockquote_label" aria-hidden="false">引用段落</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_47" class="cke_toolbar" aria-labelledby="cke_47_label" role="toolbar"><span id="cke_47_label" class="cke_voice_label">樣式</span><span class="cke_toolbar_start"></span><span id="cke_11" class="cke_combo cke_combo__styles cke_combo_off" role="presentation"><span id="cke_11_label" class="cke_combo_label">樣式</span><a class="cke_combo_button" title="Formatting Styles" tabindex="-1" href="javascript:void('Formatting Styles')" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(81,event,this);" onfocus="return CKEDITOR.tools.callFunction(82,event);" onclick="CKEDITOR.tools.callFunction(80,this);return false;"><span id="cke_11_text" class="cke_combo_text cke_combo_inlinelabel">樣式</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_12" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_12_label" class="cke_combo_label">格式</span><a class="cke_combo_button" title="段落格式" tabindex="-1" href="javascript:void('段落格式')" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(84,event,this);" onfocus="return CKEDITOR.tools.callFunction(85,event);" onclick="CKEDITOR.tools.callFunction(83,this);return false;"><span id="cke_12_text" class="cke_combo_text cke_combo_inlinelabel">格式</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_48" class="cke_toolbar" aria-labelledby="cke_48_label" role="toolbar"><span id="cke_48_label" class="cke_voice_label">about</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_49" class="cke_button cke_button__about cke_button_off" href="javascript:void('關於 CKEditor')" title="關於 CKEditor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(86,event);" onfocus="return CKEDITOR.tools.callFunction(87,event);" onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span class="cke_button_icon cke_button__about_icon" style="background-image:url('https://cimg-my.pchome.co.th//res/other/th/ckedit/plugins/icons.png?t=G4CD');background-position:0 0px;background-size:auto;">&nbsp;</span><span id="cke_49_label" class="cke_button_label cke_button__about_label" aria-hidden="false">關於 CKEditor</span></a></span><span class="cke_toolbar_end"></span></span></span></span>
                                            <div id="cke_3_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><span id="cke_54" class="cke_voice_label">按下 ALT 0 取得說明。</span><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" style="width: 100%; height: 100%;" title="RTF 編輯器, intro" aria-describedby="cke_54" tabindex="0" allowtransparency="true"></iframe></div><span id="cke_3_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;"><span id="cke_3_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="調整大小" onmousedown="CKEDITOR.tools.callFunction(1, event)">◢</span><span id="cke_3_path_label" class="cke_voice_label">元件路徑</span><span id="cke_3_path" class="cke_path" role="group" aria-labelledby="cke_3_path_label"><span class="cke_path_empty">&nbsp;</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!--說明For RD:  有錯誤訊息時 請帶入 error 的 class <div class="seller-action-bar-fixed error">  alert-box 就會顯示-->
                <div class="seller-action-bar-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="action-bar-wrap">
                                    <div class="alert-box">
                                        <p><span class="sea-seller-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <ul>
                                            <li>至少上傳一張圖片</li>
                                            <li>商品名稱為必填且不可超過500字元</li>
                                            <li>商品簡介超過150個字</li>
                                            <li>商品館別錯誤</li>
                                            <li>商品原價有誤</li>
                                            <li>產品重量有誤，重量範圍為0~20公斤</li>
                                            <li>請輸入材積長，長寬高單邊數值需大於0cm</li>
                                            <li>請輸入材積寬，長寬高單邊數值需大於0cm</li>
                                            <li>請填寫賣家指定運費</li>
                                            <li>請輸入材積高，長寬高單邊數值需大於0cm</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="sea-ui btn-lg">取消</a>
                                        <a href="#" class="sea-ui btn-lg btn-primary">確定送出</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--說明For RD:  有錯誤訊息時 請帶入 error 的 class <div class="seller-action-bar error">  alert-box 就會顯示-->
                <div class="seller-action-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="action-bar-wrap">
                                    <div class="alert-box">
                                        <p><span class="sea-seller-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <!-- <ul id="errMsgList"><li>至少上傳一張圖片</li><li>商品名稱為必填且不可超過500字元</li><li>商品簡介超過150個字</li><li>商品館別錯誤</li><li>商品原價有誤</li><li>產品重量有誤，重量範圍為0~20公斤</li><li>請輸入材積長，長寬高單邊數值需大於0cm</li><li>請輸入材積寬，長寬高單邊數值需大於0cm</li><li>請填寫賣家指定運費</li><li>請輸入材積高，長寬高單邊數值需大於0cm</li></ul> -->
                                        <ul>
                                            <li>至少上傳一張圖片</li>
                                            <li>商品名稱為必填且不可超過500字元</li>
                                            <li>商品簡介超過150個字</li>
                                            <li>商品館別錯誤</li>
                                            <li>商品原價有誤</li>
                                            <li>產品重量有誤，重量範圍為0~20公斤</li>
                                            <li>請輸入材積長，長寬高單邊數值需大於0cm</li>
                                            <li>請輸入材積寬，長寬高單邊數值需大於0cm</li>
                                            <li>請填寫賣家指定運費</li>
                                            <li>請輸入材積高，長寬高單邊數值需大於0cm</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="sea-ui btn-lg">取消</a>
                                        <a href="#" class="sea-ui btn-lg btn-primary">確定送出</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 內容寬度 1200 區塊 end-->

        <!-- PChomeSEA footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChomeSEA footer end-->
    </section>

    <!-- PChomeSEA lightBox -->
    <section id="sea-lightbox">
        <div class="sea-lightBox_backGround"></div>
        <div class="sea-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <?php include("assets/lightbox/product/lightbox-product.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->

    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->


    <!--商品管理 JS-->
    <script type="text/javascript" src="js/js_product.js"></script>
    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(5)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>
</body>

</html>