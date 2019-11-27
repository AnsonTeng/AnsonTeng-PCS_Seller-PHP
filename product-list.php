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
    <title>PChome SEA | 商品列表</title>
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
                                    <li>商品列表</li>
                                </ul>
                            </div>

                            <!-- PChome Thai Alert -->
                            <!--說明For RD: 提醒內容請使用“有商品庫存數不足請補貨”相關內容 -->
                            <div class="msgbar">
                                <div class="alert">
                                    <span class="pct-icon icon-alert"></span>
                                    <span class="pct-icon icon-delete"
                                        onclick="this.parentElement.style.display='none';"></span>
                                    有 <span>4</span> 個商品售完，請儘快補庫存。
                                </div>
                            </div>
                            <!-- PChome Thai Alert end-->


                            <!-- 搜尋群組-->
                            <div class="searchBarGroup productList-searchBarGroup">
                                <!-- 商品搜尋開始-->
                                <div class="pct-ui form inputGroup">
                                    <div class="pct-ui form select">
                                        <select>
                                            <option value="0">關鍵字</option>
                                            <option value="1">商品編號</option>
                                            <option value="2">自訂編號</option>
                                        </select>
                                    </div>

                                    <div class="inputGroup-inputBox">
                                        <div class="pct-ui form">
                                            <input type="text" placeholder="請輸入商品名稱">
                                        </div>
                                    </div>
                                    <!-- <a href="demo-product-clearsearch.php"
                                        class="pct-ui btn-sm btn-secondary inputGroup-btn">搜尋</a> -->
                                    <a href="demo-product-clearsearch.php"
                                        class="inputGroup-btn searchBarGroup-searchBtn"><span
                                            class="pct-icon icon-search"></span></a>
                                </div>
                                <!-- 商品搜尋結束-->

                                <div class="searchBarGroup-selectGroup">
                                    <div class="selectBox select-arrayOption">
                                        <div class="pct-ui form select">
                                            <select>
                                                <option value="a1">最近更新</option>
                                                <option value="a2">最熱銷</option>
                                                <option value="a3">最受歡迎</option>
                                                <option value="b1">價格：由低到高</option>
                                                <option value="b2">價格：由高到低</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="selectBox hidden-sm-down">
                                        <div class="pct-ui form select">
                                            <select>
                                                <option value="20">顯示10筆</option>
                                                <option value="10">顯示20筆</option>
                                                <option value="30">顯示30筆</option>
                                                <option value="50">顯示50筆</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- 商品列表總數 金額 與顯示筆數選單 -->
                            <div class="product-list-statistics">
                                <!-- <div> -->
                                <div class="product-list-statistics-subHeader">
                                    <div class="pct-ui form checkbox selectBtn selectBtn-selected">
                                        <label for="scales">
                                            <input type="checkbox" name="all"> <span>全選</span>
                                        </label>
                                    </div>
                                    <div class="subHeader-textBox">
                                        <div class="subHeader-text">
                                            已選擇
                                            <span class="eng-num">2</span>
                                            項商品
                                        </div>

                                        <div class="subHeader-text">
                                            總商品數
                                            <span class="eng-num">86</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-statistics-btnGroup">
                                    <a href="#" class="pct-ui btn-xs btn-secondary sellAllBtn">
                                        <!-- All List -->
                                        <!-- ชั้นวางทั้งหมด --> 全部上架</a>
                                    <!-- <a href="#" class="pct-ui btn-xs btn-secondary readyOnTheMarketBtn">搬家商品全部上架</a> -->
                                </div>
                            </div>


                            <!-- 標籤導航 -->
                            <div class="pct-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="pct-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">
                                                <!-- คำสั่งซื้อทั้งหมด --> 全部商品 (15)</a></li>
                                        <li><a href="#tab2">
                                                <!-- คำสั่งซื้อทั้งหมด --> 上架商品 (5)</a></li>
                                        <li><a href="#tab3">
                                                <!-- รอการจัดส่ง --> 無庫存 (4)</a></li>
                                        <li><a href="#tab4">
                                                <!-- อยู่ระหว่างการขนส่ง -->下架商品 (3)</a></li>
                                        <li><a href="#tab4">垃圾桶 (93)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--商品格子內容區-->
                            <div class="grid-content">

                                <!--說明FOR RD: 沒有任何搜尋紀錄時 -->
                                <div class="section-default_empaty" style="display: none;">
                                    <div class="message-text">沒有評價資料</div>
                                </div>

                                <div class="block-grid-2-4">
                                    <a href="product-edit.php">
                                        <div class="pct-ui card-edit-add">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img">
                                                            <div class="pct-cion icon-picture"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="add-to-list"><span class="pct-icon icon-plus"></span>
                                                    </div>
                                                    <div class="add-to-list-text">新增商品到賣場</div>
                                                    <div class="card-content-title">
                                                        <h2></h2>
                                                    </div>
                                                    <div class="card-content-tag"></div>
                                                    <div class="card-content-pricestock"></div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save"></div>
                                                        <div class="card-footer-sold"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-edit-action"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/6577b8ee142362e1a43100fdd82d1619_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag" style="display: none;">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <!-- 說明 FOR RD: 商品下架中狀態 -->
                                                    <div class="unlist-overlay">
                                                        <p><span class="pct-icon icon-arrow-down"></span> 商品下架中</p>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/d5e6600a34d04b156236833e579c498b_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>94</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-up"></span>上架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/8bbd08cd09111faed7ce6904107f949b_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="mutiple-spec-tag" style="display: none;">
                                                            <span class="pct-icon icon-productedit"></span>多種規格
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">Inventory<span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>List</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>Preview</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">

                                                    <!-- 說明 FOR RD: 商品待上架狀態 -->
                                                    <div class="unlist-overlay pending">
                                                        <p><span class="pct-icon icon-alert"></span> 商品待上架</p>
                                                    </div>
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/bda6507fc563143a84c5d65fd956ea55_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">
                                                            <div class="replen-stock-block"> <span
                                                                    class="pct-icon icon-alert"></span> <!-- 補庫存再賣 -->
                                                                Refill to sell</div>
                                                            庫存 <span>0</span>
                                                        </div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/0fbe22a6c159638b8b5a6858a9841ea3_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock">
                                                        <div class="current-stock">สินค้าเหลือ<span
                                                                class="eng-num">499</span></div>
                                                        <div class="current-price eng-num"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>เก็บสินค้า</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>ลบ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/66f156cc8015d87c0cb7db109cb772ab_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>20</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/f26255f66b4b7a9a70c9e99a1d1ae6aa_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a href="product-edit.php" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/bda6507fc563143a84c5d65fd956ea55_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag" style="display: none;">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">
                                                            <div class="replen-stock-block"> <span
                                                                    class="pct-icon icon-alert"></span> 補庫存再賣</div>
                                                            庫存 <span>0</span>
                                                        </div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <!-- 說明 FOR RD: 商品下架中狀態 -->
                                                    <div class="unlist-overlay">
                                                        <p><span class="pct-icon icon-arrow-down"></span> 商品下架中</p>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/fa5daeb3623c40fe11fcd0e9200d279b_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="mutiple-spec-tag">
                                                            <span class="pct-icon icon-productedit"></span>多種規格
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">Inventory<span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-up"></span>แสดงสินค้า</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>ลบ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a href="product-edit.php" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/8bbd08cd09111faed7ce6904107f949b_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="mutiple-spec-tag" style="display: none;">
                                                            <span class="pct-icon icon-productedit"></span>多種規格
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">Inventory<span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>Unlist</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>Preview</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/0fbe22a6c159638b8b5a6858a9841ea3_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock">
                                                        <div class="current-stock">สินค้าเหลือ<span
                                                                class="eng-num">499</span></div>
                                                        <div class="current-price eng-num"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>เก็บสินค้า</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>ลบ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a href="product-edit.php" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/66f156cc8015d87c0cb7db109cb772ab_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>45</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/f26255f66b4b7a9a70c9e99a1d1ae6aa_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/8bbd08cd09111faed7ce6904107f949b_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="mutiple-spec-tag" style="display: none;">
                                                            <span class="pct-icon icon-productedit"></span>多種規格
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">Inventory<span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>Unlist</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>Preview</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/bda6507fc563143a84c5d65fd956ea55_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">
                                                            <div class="replen-stock-block"> <span
                                                                    class="pct-icon icon-alert"></span> 補庫存再賣</div>
                                                            庫存 <span>0</span>
                                                        </div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/66f156cc8015d87c0cb7db109cb772ab_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>20</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/f26255f66b4b7a9a70c9e99a1d1ae6aa_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/bda6507fc563143a84c5d65fd956ea55_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag" style="display: none;">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">
                                                            <div class="replen-stock-block"> <span
                                                                    class="pct-icon icon-alert"></span> 補庫存再賣</div>
                                                            庫存 <span>0</span>
                                                        </div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off no-js"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-grid-2-4">
                                    <div class="pct-ui card-edit">
                                        <div class="pct-ui form checkbox md selectBtn">
                                            <label for="productId">
                                                <input type="checkbox" name="productId" value="" />
                                            </label>
                                        </div>
                                        <a onclick="location.href='product-edit.php'" class="pct-item-card-link">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="delete-btn edit-btn">
                                                        <li class="pct-icon icon-trash"></li>
                                                    </div>
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img img-bg"
                                                            style="background-image: url('https://cf.shopee.tw/file/6577b8ee142362e1a43100fdd82d1619_tn');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-content-title">
                                                        <h2>นาฬิกาข้อมือ Casio G-Shock Analog-Digital รุ่น GA-800SC-6ADR
                                                            ประกัน CMG</h2>
                                                    </div>
                                                    <div class="card-content-tag">
                                                        <div class="card-content-tag">
                                                            <div class="mutiple-spec-tag" style="display: none;">
                                                                <span class="pct-icon icon-productedit"></span>多種規格
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-content-pricestock eng-num">
                                                        <div class="current-stock">庫存 <span>499</span></div>
                                                        <div class="current-price"><span>฿</span>1,620</div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save">
                                                            <div class="pct-icon icon-heart-off"></div>
                                                            <div class="card-footer-save-text eng-num">72</div>
                                                        </div>
                                                        <div class="card-footer-sold">
                                                            <div class="card-footer-sold-title">已售出</div>
                                                            <div class="card-footer-sold-text eng-num">1894</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card-edit-action">
                                            <a href="#"><span class="pct-icon icon-arrow-down"></span>下架</a>
                                            <a href="https://www.pchome.co.th/pro/content/show/3031804163971"
                                                target="blank" class="previewProductBtn"> <span
                                                    class="pct-icon icon-preview"></span>預覽</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--商品格子內容區 end-->




                            <!-- PC 版 列出所有頁碼 -->
                            <div class="pct-ui page-pagination">
                                <ul class="eng-num">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="pagination-jump-next"></li>
                                    <li>
                                        <a class="pagination-next" href="#">
                                            <span class="pct-icon icon-angle-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <!-- 手機版 Load more-->
                            <div class="pct-btn-loadcontent hidden-sm-up">
                                <a href="#" class="pct-ui btn btn-cta btn-load">LOAD MORE</a>
                            </div>
                        </section>
                    </div>
                </div>
                <!--說明For RD: 有錯誤訊息時 請帶入 error 的 class <div class="seller-action-bar-fixed error">  alert-box 就會顯示-->
                <div class="seller-action-bar-fixed seller-action-bar-fixed-hidden product-list-actionBar float-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="action-bar-wrap">
                                    <div class="alert-box">
                                        <!--說明For RD: 判斷是否有選取商品 -->
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <ul>
                                            <li>您未選取任何商品</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">

                                        <!--說明For RD:  -->
                                        <a href="#" class="pct-ui btn onTheMarketBtn">上架</a>
                                        <a href="#" class="pct-ui btn takenOffStoreBtn">下架</a>
                                        <a href="#" class="pct-ui btn removeProductBtn">
                                            <span class="pct-icon icon-trash hidden-xxs-up"></span>
                                            <span class="hidden-xxs-down">刪除</span>
                                        </a>

                                        <!-- 說明For RD: 若已選取商品２項以上 則開啟“大量編輯“面板（加上 js-pct-panel-trigger 這個樣式） -->
                                        <a href="#"
                                            class="pct-ui btn btn-secondary js-pct-panel-trigger action-btn-box-batchedit"
                                            data-panel="batchedit">
                                            <span class="pct-icon icon-edit hidden-xxs-up"></span>
                                            <span class="hidden-xxs-down">大量編輯</span>
                                        </a>
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

    <!-- PChome Thai Panel -->
    <?php include("assets/slide-panel/panel-product-batchedit.php"); ?>
    <!-- PChome Thai Panel end-->

    <!-- PChome Thai lightBox -->
    <section id="pct-lightbox">
        <div class="pct-lightBox_backGround"></div>
        <div class="pct-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <!--頁面內會出現的lightbox放這裡-->
            <?php include("assets/lightbox/product/lightbox-product.php"); ?>
            <!--滑動面板內會出現的lightbox放這裡-->
            <?php include("assets/slide-panel/lightbox/panel-lightbox-batchedit.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->


    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->


    <!--商品管理 JS-->
    <script type="text/javascript" src="js/js_product.js"></script>

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

    <!--選擇館別 JS-->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/catalogmenu.js"></script>

    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(4)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>
</body>

</html>