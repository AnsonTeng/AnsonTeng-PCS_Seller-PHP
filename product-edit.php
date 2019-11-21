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
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#e21e26">
    <meta name="msapplication-TileColor" content="#e21e26">
    <meta name="theme-color" content="#e21e26">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">

    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/product.css">

    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

    <title>PChome Thai | มุมลูกค้า</title>
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
                            <!--商品圖片-->
                            <div class="content-block">
                                <div class="content-title">設定商品圖片 <span class="required">＊</span></div>
                                <div class="content-description">
                                    <p class="description-text">尺寸600px x 600px 以上享有局部放大功能，買家能看到更多商品細節 (格式限JPG, PNG,
                                        或GIF)</p>

                                    <div class="upload-product-img">
                                        <div class="upload-img-num">共<span class="eng-num"> <span class="current">
                                                    8</span>/10 </span>張照片</div>
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill primary">
                                                <div class="upload-figure">
                                                    <div class="rotate-btn">
                                                        <li class="pct-icon icon-rotate"></li>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="primary-tag">Cover Photo</div>
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
                                                    <div class="pct-cion icon-picture"></div>
                                                    <p><span class="pct-icon icon-plus"></span>上傳</p>
                                                    <input type="file" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品標題/規格-->
                            <div class="content-block">
                                <div class="content-title">商品名稱與規格</div>
                                <div class="content-description no-padding">
                                    <div class="pct-ui tab-nav-bar">
                                        <!--目前不分語系-->
                                        <!--                                         <div class="pct-ui tab-pointing">
                                            <ul class="tab-items" data-tabgroup="tab-panel">
                                                <li><a href="#thai" class="active"><span class="icon-overseas th"></span>泰文</a></li>
                                            </ul>
                                        </div> -->

                                        <div id="tab-panel" class="tab-panel">
                                            <div id="thai">
                                                <div class="pct-ui form-label product-title form-m-break">
                                                    <label for="" class="required">商品名稱
                                                        <!-- Product Name--></label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品名稱">
                                                    </div>
                                                </div>
                                                <div class="pct-ui form-textarea-label fluid form-m-break">
                                                    <label for="" class="required">商品描述
                                                        <!-- Product Intro --></label>
                                                    <div class="pct-ui form">
                                                        <textarea placeholder="請輸入商品描述"></textarea>
                                                    </div>
                                                </div>
                                                <div class="pct-ui form-label form-sm-break">
                                                    <label for="">商品規格
                                                        <!-- Product Name--></label>

                                                    <div class="radio-wrap">
                                                        <div class="pct-ui form radio">
                                                            <input type="radio" id="singleVaritation" name="radio-group"
                                                                checked="">
                                                            <label for="singleVaritation">單一規格</label>
                                                        </div>
                                                        <div class="pct-ui form radio">
                                                            <input type="radio" id="multipleVaritation"
                                                                name="radio-group">
                                                            <label for="multipleVaritation">多種規格</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="variations single">
                                                    <div class="pct-ui form-label form-sm-break">
                                                        <label for="" class="required">庫存數</label>
                                                        <div class="pct-ui form text-with-input">
                                                            <input type="text" placeholder="" value="0"
                                                                class="stock-num">
                                                            <p class="align-right">單一商品庫存數量上限為 <span
                                                                    class="eng-num">499</span>。</p>
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
                                                                <label for="">Spec 1</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">Spec</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="非必填">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">Stock</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">Spec 2</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">Spec</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="非必填">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">Stock</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                        <div class="pct-icon icon-trash"></div>
                                                    </div>
                                                    <!--說明 FOR RD: 新增規格後長出第三條規格輸入區-->
                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">Spec 3</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格(建議英文)">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">Spec</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="非必填">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">Stock</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                        <div class="pct-icon icon-trash"></div>
                                                    </div>
                                                    <a class="pct-ui btn add-variation">
                                                        <li class="pct-btn-icon icon-plus"></li>新增規格
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--商品價格/情況/保固-->
                            <div class="content-block product-description">
                                <div class="content-title">商品基本資訊</div>
                                <div class="content-description">
                                    <div class="pct-ui form-label product-price form-sm-break">
                                        <label for="">商品價格</label>
                                        <div class="column-form">
                                            <div class="pct-ui form text-with-input product-price">
                                                <p class="align-left required">原價 ฿</p>
                                                <input type="text">
                                            </div>
                                            <div class="pct-ui form text-with-input product-price">
                                                <p class="no-align">特價 ฿</p>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pct-ui form-label product-category form-lg-break">
                                        <label for="" class="required">商品分類</label>
                                        <div class="column-form">
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
                                                    <option value="0">請選擇</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                </select>
                                            </div>
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">請選擇</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                </select>
                                            </div>
                                        </div>
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

                            <!--商品運費設定-->
                            <div class="content-block">
                                <div class="content-title">運費設定</div>
                                <div class="content-description">
                                    <p class="description-text">若您輸入的包裹重量與物流商實際秤重有差異，將以物流商計算的重量為準。</p>
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

                                    <!--說明For RD:  若未選擇物流商，此區塊請整塊隱藏 包含 <div class="logistic-wrap operation"> 這層-->
                                    <div class="logistic-wrap operation">
                                        <p class="description-text">已啟用物流 (有顯示為<img alt="pchome-protectiont"
                                                class="icon-img"
                                                src="https://cimg.pchome.co.th/res/other/coth/img/icon_pcprotect_badge.svg"
                                                style="width:18px;"> PChome支援物流）</p>

                                        <!--說明For RD:  尚未輸入材積的顯示狀態 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_thaipostEMS.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">THAI POST - EMS</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <div class="hint-text"><span
                                                            class="pct-icon icon-alert"></span>需輸入重量</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  已輸入材積的顯示狀態，自動帶入運費 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_thaipost.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">THAI POST - Registered Mail
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    ฿ 5000
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  尚未輸入材積的顯示狀態 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_kerry.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title eng-num">Kerry Drop-off</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box hint-text">
                                                    <div class="hint-text"><span class="pct-icon icon-alert"></span>Need
                                                        to enter weight</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="logistic-wrap seller">

                                        <!--說明For RD:  以下兩個為兩種狀態Demo 判斷後呈現其中一種 -->
                                        <!--說明For RD:  預設為設定運費的連結 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">Seller Appointed Methods</div>
                                                    </div>
                                                </div>
                                                <div class="caption-text-box">
                                                    <a class="editshippingBtn">Set Shipping Costs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--說明For RD:  填入後為顯示運費與修改運費 -->
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-logistic_sellerMethod.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">Seller Appointed Methods</div>
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
                                            <input type="text" placeholder="" value="0" class="processing-day">
                                            <p class="align-right">天備貨。</p>
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
                                        <a href="#" class="pct-ui btn-lg btn-cta">確定送出</a>
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
                                        <a href="#" class="pct-ui btn-lg btn-cta">確定送出</a>
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