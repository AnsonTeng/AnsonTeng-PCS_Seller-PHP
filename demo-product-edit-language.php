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
    <link rel="stylesheet" type="text/css" href="css/product-manage.css">

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

                            <div class="content-block">
                                <div class="content-title">設定商品圖片 </div>
                                <div class="content-description">
                                    <p class="description-text">尺寸600px x 600px 以上享有局部放大功能，買家能看到更多商品細節 (格式限JPG, PNG,
                                        或GIF)</p>

                                    <div class="upload-product-img">
                                        <div class="pct-ui img-manager">
                                            <div class="content-fill primary">
                                                <div class="upload-figure">
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
                                                    <p><span class="pct-icon icon-plus"></span>上傳圖片</p>
                                                    <input type="file" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--商品標題/規格-->
                            <div class="content-block">
                                <div class="content-description no-padding">

                                    <div class="pct-ui tab-nav-bar">
                                        <div class="pct-ui tab-pointing">
                                            <ul class="tab-items" data-tabgroup="tab-panel">
                                                <li><a href="#thai" class="active"><span
                                                            class="icon-overseas th"></span>泰文</a></li>
                                                <li><a href="#tw"><span class="icon-overseas tw"></span> 中文</a></li>
                                                <li><a href="#eng"><span class="icon-overseas eng"></span>English</a>
                                                </li>
                                            </ul>
                                        </div>
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
                                                        M」等。單一商品庫存數量上限為499。</p>

                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                        <div class="pct-icon icon-trash"></div>
                                                    </div>
                                                    <a class="pct-ui btn add-variation">
                                                        <li class="pct-icon icon-plus"></li>新增規格
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="tw">
                                                <div class="pct-ui form-label product-title">
                                                    <label for="" class="required">商品名稱</label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品名稱">
                                                    </div>
                                                </div>
                                                <div class="pct-ui form-textarea-label fluid">
                                                    <label for="" class="required">商品描述</label>
                                                    <div class="pct-ui form">
                                                        <textarea placeholder="請輸入商品描述"></textarea>
                                                    </div>
                                                </div>

                                                <div class="variations multiple">
                                                    <div class="pct-ui form-label product-price">
                                                        <label for="" class="required">規格與庫存數</label>
                                                    </div>
                                                    <p class="description-text">範例：A商品有「顏色」、「尺寸」等2種規格，規格可填寫成「紅色 >
                                                        M」等。單一商品庫存數量上限為499。</p>

                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="eng">
                                                <div class="pct-ui form-label product-title">
                                                    <label for="" class="required">商品名稱</label>
                                                    <div class="pct-ui form">
                                                        <input type="text" placeholder="請輸入商品名稱">
                                                    </div>
                                                </div>
                                                <div class="pct-ui form-textarea-label fluid">
                                                    <label for="" class="required">商品描述</label>
                                                    <div class="pct-ui form">
                                                        <textarea placeholder="請輸入商品描述"></textarea>
                                                    </div>
                                                </div>
                                                <div class="variations multiple">
                                                    <div class="pct-ui form-label product-price">
                                                        <label for="" class="required">規格與庫存數</label>
                                                    </div>
                                                    <p class="description-text">範例：A商品有「顏色」、「尺寸」等2種規格，規格可填寫成「紅色 >
                                                        M」等。單一商品庫存數量上限為499。</p>

                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--說明 FOR RD: 新增規格後長出第二條規格輸入區-->
                                                    <div class="variation-box">

                                                        <div class="spec-wrap">
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                            <div class="pct-icon icon-angle-right hidden-sm-down"></div>
                                                            <div class="pct-ui form-label break-label">
                                                                <label for="">商品規格</label>
                                                                <div class="pct-ui form">
                                                                    <input type="text" placeholder="請輸入商品規格">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pct-ui form-label break-label spec-stock">
                                                            <label for="">庫存數</label>
                                                            <div class="pct-ui form">
                                                                <input type="text" placeholder="庫存數">
                                                            </div>
                                                        </div>
                                                    </div>
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
                                        <label for="" class="required">商品價格</label>
                                        <div class="column-form">
                                            <div class="pct-ui form text-with-input product-price">
                                                <p class="align-left">原價 ฿</p>
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
                                                    <option value="0">分類一</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                </select>
                                            </div>
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">分類二</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                </select>
                                            </div>
                                            <div class="pct-ui form select">
                                                <select>
                                                    <option value="0">分類三</option>
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
                                                <input type="radio" id="usedProduct" name="radio-group2" checked="">
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
                                                    <li class="pct-icon icon-edit"></li>修改
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

                                    <div class="logistic-wrap operation">
                                        <p class="description-text">PChome支援物流 (有顯示為<img alt="pchome-protectiont"
                                                class="icon-img"
                                                src="https://cimg.pchome.co.th/res/other/coth/img/icon_pcprotect_badge.svg"
                                                style="width:18px;"> PChome支援物流）</p>

                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
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
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
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
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
                                                            class="img-fluid">
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

                                    <p class="description-text">非支援物流</p>
                                    <div class="logistic-wrap seller">
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
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
                                        <div class="pct-ui accordion">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption no-accordion">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
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
            <?php include("assets/lightbox/product/lightbox-product-manage.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->


    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->



    <!--商品管理 JS-->
    <script type="text/javascript" src="js/js_prouct-manage.js"></script>
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(4)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>

</body>

</html>