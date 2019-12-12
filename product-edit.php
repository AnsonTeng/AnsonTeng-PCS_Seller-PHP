<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="target-densitydpi=device-dpi, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description"
        content="PChome Online Inc. เป็นกลุ่มบริษัทอีคอมเมิร์ซที่ใหญ่ที่สุดในไต้หวัน ขณะนี้เราได้เปิดให้บริการในประเทศไทยฟรีสำหรับทั้งผู้ขายและผู้ซื้อ คุณอยากจะขายหรืออยากจะซื้อของอะไรก็ได้ทั้งนั้นที่ PChome Thai ไม่ว่าจะเครื่องสำอาง, เสื้อผ้าแฟชั่น, เครื่องใช้ไฟฟ้า, หนังสือ, ของเล่น และอื่นๆ อีกมากมาย">
    <meta property="og:title" content="ออนไลน์ช้อปปิ้ง ที่ทุกสิ่งเป็นเรื่องแสนง่ายและสนุก" />
    <meta property="og:description"
        content="หาได้ทุกอย่างที่ต้องการที่ พีซีโฮมไทย - เครื่องสำอาง,เสื้อผ้าแฟชั่น, อุปกรณ์ไฟฟ้า, หนังสือ, ของเล่น และอื่นอีกมากมาย" />
    <meta property="og:image" content="http://cimg.pchome.co.th/fb/PchomeShop.jpg" />
    <meta property="og:url" content="http://www.pchome.co.th" />
    <meta property="og:site_name" content="PChome Thai" />

    <!-- favicon.ico-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00afeb">
    <meta name="msapplication-TileColor" content="#00afeb">
    <meta name="theme-color" content="#00afeb">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">

    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/product.css">

    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

    <title>PChome SEA | 編輯商品</title>
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
    })(window, document, 'script', 'dataLayer', 'GTM-52F2P7M');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52F2P7M" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- 說明FOR RD: 填寫資料正確送出 請跑這一個區塊的LOADING-->
    <div class="pct-ui loading-overlay-main" style="display: none;">
        <div class="loading-circle-main">
            <div class="circle-loader">
                <div class="checkmark draw"></div>
            </div>
        </div>
    </div>


    <section id="pct-main">
        <!-- PChome Thai Header -->
        <?php include("assets/header.php"); ?>
        <!-- PChome Thai Header end-->


        <!-- PChome Thai Menu_mobile -->
        <?php include("assets/menu-mobile.php"); ?>
        <!-- PChome Thai Menu_mobile end-->

        <!-- PChome Thai Account Header -->

        <!--說明For RD：手機版不出現-->
        <div class="hidden-sm-down">
            <?php include("assets/account-header.php"); ?>
        </div>
        <!-- PChome Thai Account Header end-->

        <!-- 內容寬度 1200 區塊 -->
        <div class="container pct-gutters container-min-height">
            <div class="section-outer">

                <div class="row">
                    <div class="col-md-3">
                        <!-- PChome Thai Menu_pc -->
                        <?php include("assets/menu-pc.php"); ?>
                        <!-- PChome Thai Menu_pc end-->
                    </div>
                    <div class="col-md-9">

                        <section id="pct-section-content">

                            <div class="pct-ui breadcrumb-back">
                                <span class="pct-icon icon-productedit"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>商品管理</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>新增商品</li>
                                </ul>
                            </div>
                            <p class="product-add-alert"><span class="pct-icon icon-alert"></span>新增商品前，請先參閱 <a
                                    href="prohibited_restricted.php" target="_blank">禁運及受限商品列表</a>，以維護您的權益。謝謝！</p>
                            <!--商品圖片-->
                            <div class="content-block">
                                <div class="content-title">設定商品圖片 <span class="required">＊</span></div>
                                <div class="content-description">
                                    <p class="description-text">尺寸600px x 600px 以上享有局部放大功能，買家能看到更多商品細節 (格式限JPG, PNG,
                                        或GIF)。</p>

                                    <div class="upload-product-img">
                                        <div class="upload-img-num"><span class="eng-num">
                                                <span class="current">8</span>/10</span>張照片</div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill primary">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="primary-tag">封面照片</div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_04.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_03.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_02.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="figure-inner">
                                                        <div class="figure-img img-bg"
                                                            style="background-image: url('img/pro/pro_01.jpg');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD: 上傳照片送出後等待過場loading-->
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill processing">
                                                <div class="pct-ui loading-overlay">
                                                    <div class="loading-circle small"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-upload">
                                                <label id="filedrag">
                                                    <div class="pct-icon icon-picture"></div>
                                                    <p><span class="pct-icon icon-plus"></span>上傳</p>
                                                    <input type="file" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="description-text">您可以拖曳圖片改變順序，設定商品封面照片。</p>
                                </div>
                            </div>

                            <!--商品標題/規格-->
                            <div class="content-block">
                                <div class="content-title">商品名稱與價格</div>
                                <div class="content-description">
                                    <!-- <div class="pct-ui tab-nav-bar"> -->
                                    <!--目前不分語系-->
                                    <!-- <div class="pct-ui tab-pointing">
                                            <ul class="tab-items" data-tabgroup="tab-panel">
                                                <li><a href="#thai" class="active"><span class="icon-overseas th"></span>泰文</a></li>
                                            </ul>
                                        </div> -->

                                    <!-- <div id="tab-panel" class="tab-panel"> -->
                                    <!-- <div id="thai"> -->
                                    <div class="pct-ui form-label form-m-break">
                                        <label for="" class="required">商品名稱</label>
                                        <div class="pct-ui form">
                                            <input type="text" placeholder="請輸入商品名稱">
                                            <a href="#"
                                                class="pct-ui btn-sm btn-secondary-outlined inputGroup-btn">Google翻譯
                                                中翻泰</a>
                                            <input type="text" placeholder="商品泰文名稱">
                                            <p class="break-text">自動翻譯功能由 Google
                                                翻譯所提供，PChome不保證翻譯內容之正確性！您可自行修正翻譯結果。
                                            </p>
                                        </div>
                                    </div>

                                    <div class="pct-ui form">
                                        <div class="pct-ui form-label product-title form-m-break">
                                            <label></label>
                                            <div class="pct-ui form">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pct-ui form-textarea-label fluid form-m-break">
                                        <label for="" class="required">商品描述</label>
                                        <div class="pct-ui form">
                                            <textarea placeholder="請輸入商品簡介（上限 150 字）"></textarea>
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label product-category form-m-break">
                                        <label for="" class="required">商品分類</label>
                                        <div class="column-form">
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">請選擇</option>
                                                    <option value="1">女生服裝</option>
                                                    <option value="2">男生服裝</option>
                                                </select>
                                            </div>
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">請選擇</option>
                                                    <option value="1">上衣</option>
                                                    <option value="2">褲子</option>
                                                    <option value="3">外套</option>
                                                </select>
                                            </div>
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">請選擇</option>
                                                    <option value="1">長褲</option>
                                                    <option value="2">短褲</option>
                                                    <option value="3">內褲</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-column">
                                        <div class="pct-ui form-label two-column ">
                                            <label for="" class="required">商品售價</label>
                                            <div>
                                                <div class="pct-ui form product-price-TWdollar unit-before">
                                                    <input type="tel" value="">
                                                </div>
                                                <div class="pct-ui form product-price-THbaht unit-before">
                                                    <input type="tel" value="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="pct-ui form-label two-column">
                                            <label>促銷售價</label>
                                            <div>
                                                <div class="pct-ui form product-price-TWdollar unit-before">
                                                    <input type="tel" value="">
                                                </div>
                                                <div class="pct-ui form product-price-THbaht unit-before">
                                                    <input type="tel" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 參考匯率說明文字 -->
                                    <div class="pct-ui form exchangeRate">
                                        <span
                                            class="form-introduction">按照每日浮動匯率計算泰銖價格，參考匯率：<span>0.991</span><span>(DD/MM/YYYY)</span>
                                        </span>
                                    </div>


                                    <div class="pct-ui form-label form-sm-break">
                                        <label for="">商品情況
                                            <!--  Product Status --></label>
                                        <div class="radio-wrap">
                                            <div class="pct-ui form radio">
                                                <input type="radio" id="newProduct" name="radio-group2" checked="">
                                                <label for="newProduct">新品</label>
                                            </div>
                                            <div class="pct-ui form radio">
                                                <input type="radio" id="usedProduct" name="radio-group2">
                                                <label for="usedProduct">二手</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pct-ui form">
                                        <div class="pct-ui form-label product-title">
                                            <label>自訂商品編號</label>
                                            <div class="pct-ui form">
                                                <input type="text" placeholder="自訂商品編號(上限150字)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label product-title">
                                        <label><a href="#" class="aboutHScodeBtn">HS CODE <span
                                                    class="pct-icon icon-information"></span></a></label>
                                        <div class="pct-ui form ">
                                            <input type="text" placeholder="" value="">
                                            <a href="https://portal.sw.nat.gov.tw/APGQ/LoginFree?request_locale=zh_TW&breadCrumbs=JTdCJTIyYnJlYWRDcnVtYnMlMjIlM0ElNUIlN0IlMjJuYW1lJTIyJTNBJTIyJUU1JTg1JThEJUU4JUFEJTg5JUU2JTlGJUE1JUU4JUE5JUEyJUU2JTlDJThEJUU1JThCJTk5JTIyJTJDJTIydXJsJTIyJTNBJTIyJTIyJTdEJTJDJTdCJTIybmFtZSUyMiUzQSUyMiVFNyVBOCU4NSVFNSU4OSU4NyVFNyVBOCU4NSVFNyU4RSU4NyVFNiU5RiVBNSVFOCVBOSVBMiUyMiUyQyUyMnVybCUyMiUzQSUyMmNoYW5nZU1lbnVVcmwyKCclRTclQTglODUlRTUlODklODclRTclQTglODUlRTclOEUlODclRTYlOUYlQTUlRTglQTklQTInJTJDJ0FQR1FfNycpJTIyJTdEJTJDJTdCJTIybmFtZSUyMiUzQSUyMihHQzQxMSklRTclQTglODUlRTUlODklODclRTclQTglODUlRTclOEUlODclRTclQjYlOUMlRTUlOTAlODglRTYlOUYlQTUlRTglQTklQTIlRTQlQkQlOUMlRTYlQTUlQUQlMjIlMkMlMjJ1cmwlMjIlM0ElMjJvcGVuTWVudSgnJTJGQVBHUSUyRkdDNDExJyklMjIlN0QlMkMlN0IlN0QlMkMlN0IlN0QlNUQlMkMlMjJwYXRoVXJsJTIyJTNBJTIyJTIzTUVOVV9BUEdRJTJDJTIzTUVOVV9BUEdRXzclMkMlMkZBUEdRJTJGR0M0MTElMjIlN0Q="
                                                target="_blank"
                                                class="pct-ui btn-sm btn-secondary-outlined inputGroup-btn">代碼查詢</a>
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label">
                                        <label>預估關稅</label>
                                        <div class="pct-ui form text-with-input">
                                            <input type="text" placeholder="" value="0">
                                            <p class="align-right">％</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品庫存與規格-->
                            <div class="content-block">
                                <div class="content-title">商品規格與庫存</div>
                                <div class="content-description">

                                    <div class="pct-ui form-label form-sm-break">
                                        <label for="">商品規格
                                            <!-- Product Name--></label>

                                        <div class="radio-wrap">
                                            <div class="pct-ui form radio">
                                                <input type="radio" id="singleVaritation" name="radio-group1"
                                                    checked="">
                                                <label for="singleVaritation">單一規格</label>
                                            </div>
                                            <div class="pct-ui form radio">
                                                <input type="radio" id="multipleVaritation" name="radio-group1">
                                                <label for="multipleVaritation">多種規格</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="variations single">
                                        <div class="pct-ui form-label form-sm-break">
                                            <label for="" class="required">庫存數</label>
                                            <div class="pct-ui form text-with-input">
                                                <input type="text" placeholder="" value="0" class="stock-num">
                                                <p class="align-right">單一商品庫存數量上限為 <span class="eng-num">499</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="variations multiple">
                                        <div class="pct-ui form-label product-price">
                                            <label for="" class="required">規格與庫存數</label>
                                        </div>
                                        <p class="description-text">範例：A商品有「顏色」、「尺寸」等2種規格，規格可填寫成「紅色 >
                                            M」等。單一商品庫存數量上限為499。<a class="specsampleBtn"><span
                                                    class="pct-icon icon-information"></span> 規格填寫範例</a>
                                        </p>

                                        <div class="variation-box">

                                            <div class="spec-wrap">
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格 <span>1</span></label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="pct-icon icon-angle-right"></div>
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pct-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="pct-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                        <div class="variation-box">

                                            <div class="spec-wrap">
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格 <span>2</span></label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="pct-icon icon-angle-right"></div>
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pct-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="pct-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                            <div class="pct-icon icon-trash"></div>
                                        </div>
                                        <!--說明 FOR RD: 新增規格後長出第三條規格輸入區-->
                                        <div class="variation-box">

                                            <div class="spec-wrap">
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格 <span>3</span></label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                    </div>
                                                </div>
                                                <div class="pct-icon icon-angle-right"></div>
                                                <div class="pct-ui form-label break-label">
                                                    <label for="">規格</label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="非必填">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pct-ui form-label break-label spec-stock">
                                                <label for="">商品庫存數</label>
                                                <div class="pct-ui form">
                                                    <input type="text" placeholder="單一庫存數量上限為 499">
                                                </div>
                                            </div>
                                            <div class="pct-icon icon-trash"></div>
                                        </div>
                                        <a class="pct-ui pct-icon-btn btn add-variation">
                                            <span class="pct-icon icon-plus"></span>新增規格
                                        </a>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- </div> -->

                                <!-- </div> -->
                            </div>

                            <!--商品運費設定-->
                            <div class="content-block">
                                <div class="content-title">運費與備貨時間</div>
                                <div class="content-description">

                                    <div class="pct-ui form-label form-m-break">
                                        <label for="">出貨地</label>
                                        <div class="pct-ui form form-readonly">
                                            <input type="text" placeholder="" value="台灣 Taiwan" readonly="readonly">
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label form-m-break">
                                        <label for="" class="required">包裹重量</label>
                                        <div class="pct-ui form product-weight unit-after">
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label volumatic">
                                        <label for="" class="required">包裹材積</label>
                                        <div class="column-form">
                                            <div class="pct-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="長">
                                            </div>
                                            <div class="pct-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="寬">
                                            </div>
                                            <div class="pct-ui form product-volumatic unit-after">
                                                <input type="text" placeholder="高">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pct-ui form-label form-m-break">
                                        <label for="">物流方式</label>
                                        <div class="pct-ui form form-textList">
                                            <p class="alert">(1) 請確實輸入商品包裹的重量及材積，我們會依照您所輸入的資訊向買家收取適當的國際運費。詳見【<a
                                                    href="https://w3.pchome.co.th/guide_j/guide__ship__new_03">運費如何計算</a>】
                                            </p>
                                            <p>(2) 海外出貨目前以單一商品為一個包裹來計算運費，譬如買家購買同商品x2，會計算為兩個包裹、兩筆運費。</p>
                                            <p>(3) 提醒您，包裹重量小於
                                                2kg，材積相加不超過90cm的包裹將優先以國際e小包計算運費並且進行配送，但若您輸入的包裹重量或材積與實際寄送時計量結果不符而導致運費少收，將以物流商計算的運費金額為主，並且列為運費補收項目於提領時補扣。
                                            </p>
                                        </div>
                                    </div>



                                    <!--說明For RD:  若未選擇物流商，此區塊請整塊隱藏 包含 <div class="logistic-wrap operation"> 這層-->
                                    <div class="logistic-wrap operation">
                                        <p class="description-text">PChome 支援物流 (有顯示<img alt="pchome-protectiont"
                                                class="icon-img"
                                                src="https://cimg.pchome.co.th/res/other/coth/img/icon_pcprotect_badge.svg"
                                                style="width:18px;">為 PChome 支援物流）</p>

                                        <!--說明For RD:  已輸入材積的顯示狀態，自動帶入運費 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_roc_post.png" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">中華郵政 EMS國際快捷</div>
                                                        <div class="caption-subTitle">關稅-買家自付</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    NT$ 500
                                                </div>
                                                <div class="caption-switch">
                                                    <div class="pct-ui form">
                                                        <div class="pct-ui switch-toggle">
                                                            <input id="SwitchCheckbox_1" class="switch-checkbox"
                                                                type="checkbox">
                                                            <label for="SwitchCheckbox_1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li>可寄送地區: 泰國全區</li>
                                                        <li>重量限制: <span class="highlight"> 30kg以下 </span></li>
                                                        <li>尺寸限制: 任何一邊不得超過<span class="highlight"> 150cm
                                                            </span>，長寬高總和不得超過<span class="highlight"> 300cm </span></li>
                                                        <li>
                                                            若材積重大於實重，則取材積重計價
                                                            長 × 寬 × 高 (cm) ÷ 6,000 = 材積重量 (kg)
                                                        </li>
                                                        <li>預計寄達天數 3～4 天</li>
                                                        <li>運費含保價費，依商品售價計算</li>
                                                        <li>若有必要，買家需自行清關繳稅</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  尚未輸入材積的顯示狀態 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_roc_ePacket.png" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">中華郵政 國際e小包</div>
                                                        <div class="caption-subTitle">關稅-買家自付</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <div class="hint-text"><span
                                                            class="pct-icon icon-alert"></span>需輸入重量</div>
                                                </div>
                                                <div class="caption-switch">
                                                    <div class="pct-ui form">
                                                        <div class="pct-ui switch-toggle">
                                                            <input id="SwitchCheckbox_2" class="switch-checkbox"
                                                                type="checkbox">
                                                            <label for="SwitchCheckbox_2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li>可寄送地區: 泰國全區</li>
                                                        <li>重量限制: <span class="highlight"> 2kg以下 </span></li>
                                                        <li>尺寸限制: 包裹不得小於 <span class="highlight">14 x
                                                                9cm</span> ，單邊最長不超過 <span
                                                                class="highlight">60cm</span>，長寬高總和不超過 <span
                                                                class="highlight">90cm</span>
                                                        </li>
                                                        <li>預計寄達天數 6～8 天</li>
                                                        <li>無保價費</li>
                                                        <li>若有必要，買家需自行清關繳稅</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  已輸入材積的顯示狀態，自動帶入運費 -->
                                        <div class="pct-ui accordion">
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
                                                <div class="caption-text-box">
                                                    不支援
                                                </div>
                                                <div class="caption-switch">
                                                    <div class="pct-ui form">
                                                        <div class="pct-ui switch-toggle">
                                                            <input id="SwitchCheckbox_3" class="switch-checkbox"
                                                                type="checkbox">
                                                            <label for="SwitchCheckbox_3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <ul class="shipnotice">
                                                        <li>可寄送地區: 曼谷及泰國大部分地區 (郵遞區號若為 9 開頭不配送，包括但不限於 Song
                                                            Khla, Stoon, Trang, Pattalung, Pattani, Yala, Naratiwat )
                                                        </li>
                                                        <li>重量限制: <span class="highlight"> 30kg以下 </span></li>
                                                        <li>尺寸限制: 任何一邊不得超過<span class="highlight"> 85cm </span>
                                                        </li>
                                                        <li>預計寄達天數 6～8 天</li>
                                                        <li>商品金額限於 台幣 2700 元 / 美金 90 元 / 泰銖 3000 以內</li>
                                                        <li>無保價費</li>
                                                        <li>運費包含關稅，買家無需自行清關</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <p class="description-text">非支援物流</p>
                                    <div class="logistic-wrap seller">
                                        <!--說明For RD:  以下兩個為兩種狀態Demo 判斷後呈現其中一種 -->
                                        <!--說明For RD:  預設為設定運費的連結（未設定運費前） -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">
                                                            <!--Seller Appointed Method -->賣家自行配送</div>
                                                        <div class="caption-subTitle"></div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <a class="editshippingBtn">設定</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  填入後為顯示運費與修改運費icon -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">
                                                            <!--Seller Appointed Method -->賣家自行配送</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    ฿ 500 <a class="pct-icon icon-edit editshippingBtn"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pct-ui form-label form-sm-break">
                                        <label for="">備貨時間</label>
                                        <div class="pct-ui form text-with-input">
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

                                    <div class="pct-ui form-label product-warranty">
                                        <label for="">購買此商品的是否提供保固？</label>
                                        <div class="pct-ui switch-toggle">
                                            <input id="switch-checkbox-warranty" class="switch-checkbox"
                                                type="checkbox">
                                            <label for="switch-checkbox-warranty"></label>
                                        </div>
                                    </div>
                                    <div class="warrantytime">
                                        <div class="pct-ui form-label form-sm-break">
                                            <label for="">保固時間</label>
                                            <div class="pct-ui form text-without-input">
                                                <p class="align-left">自購買日起 <span class="eng-num">1</span>年。</p>
                                                <a class="pct-ui btn-xs btn warrantytimeBtn">
                                                    <li class="pct-btn-icon icon-edit"></li>修改
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品詳細描述-->
                            <div class="content-block product-description">
                                <div class="content-title">商品詳細描述</div>
                                <div class="content-description">
                                    HTML Editor
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
                                        <p><span class="pct-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <ul>
                                            <li>商品名稱</li>
                                            <li>商品描述</li>
                                            <li>庫存數</li>
                                            <li>商品價格</li>
                                            <li>商品分類</li>
                                            <li>包裹重量/材積</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="pct-ui btn-lg">取消</a>
                                        <a href="#" class="pct-ui btn-lg btn-secondary">確定送出</a>
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
                                        <p><span class="pct-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <!-- <ul id="errMsgList"><li>至少上傳一張圖片</li><li>商品名稱為必填且不可超過500字元</li><li>商品簡介超過150個字</li><li>商品館別錯誤</li><li>商品原價有誤</li><li>產品重量有誤，重量範圍為0~20公斤</li><li>請輸入材積長，長寬高單邊數值需大於0cm</li><li>請輸入材積寬，長寬高單邊數值需大於0cm</li><li>請填寫賣家指定運費</li><li>請輸入材積高，長寬高單邊數值需大於0cm</li></ul> -->
                                        <ul>
                                            <li>商品名稱</li>
                                            <li>商品描述</li>
                                            <li>庫存數</li>
                                            <li>商品價格</li>
                                            <li>商品分類</li>
                                            <li>包裹重量/材積</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="pct-ui btn-lg">取消</a>
                                        <a href="#" class="pct-ui btn-lg btn-secondary">確定送出</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 內容寬度 1200 區塊 end-->


        <!-- PChome Thai footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChome Thai footer end-->

    </section>


    <!-- PChome Thai lightBox -->
    <section id="pct-lightbox">
        <div class="pct-lightBox_backGround"></div>
        <div class="pct-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <?php include("assets/lightbox/product/lightbox-product.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->


    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->



    <!--商品管理 JS-->
    <script type="text/javascript" src="js/js_product.js"></script>
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(4)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>

</body>

</html>