<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>PChomeSEA | 商品列表</title>
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
                                    <li>商品列表</li>
                                </ul>
                            </div>

                            <!-- 搜尋群組-->
                            <div class="searchBarGroup productList-searchBarGroup">
                                <!-- 商品搜尋開始-->
                                <div class="sea-ui form inputGroup">
                                    <div class="sea-ui form select">
                                        <select>
                                            <option value="0">關鍵字</option>
                                            <option value="1">商品編號</option>
                                            <option value="2">自訂編號</option>
                                        </select>
                                    </div>

                                    <div class="inputGroup-inputBox">
                                        <div class="sea-ui form">
                                            <input type="text" placeholder="請輸入商品名稱">
                                        </div>
                                    </div>
                                    <a href="demo-product-clearsearch.php" class="inputGroup-btn searchBarGroup-searchBtn"><span class="sea-seller-icon icon-search"></span></a>
                                    <a href="product-list.php" class="sea-ui btn-sm inputGroup-btn" style="display: none"><span class="sea-btn-icon icon-delete"></span>清空</a>
                                </div>
                                <!-- 商品搜尋結束-->

                                <div class="searchBarGroup-selectGroup">
                                    <div class="selectBox select-arrayOption">
                                        <div class="sea-ui form select">
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
                                        <div class="sea-ui form select">
                                            <select>
                                                <option value="10">顯示10筆</option>
                                                <option value="20">顯示20筆</option>
                                                <option value="30">顯示30筆</option>
                                                <option value="50">顯示50筆</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 商品列表總數 金額 與顯示筆數選單 -->
                            <div class="product-list-statistics">
                                <div class="product-list-statistics-subHeader">
                                    <div class="sea-ui form checkbox selectBtn selectBtn-selected">
                                        <label for="scales">
                                            <input type="checkbox" name="all"> <span>全選</span>
                                        </label>
                                    </div>
                                    <div class="subHeader-textBox">
                                        <div class="subHeader-text">已選擇 <span class="eng-num">0</span> 項商品</div>
                                        <div class="subHeader-text">總商品數 <span class="eng-num">0</span></div>
                                    </div>
                                </div>
                                <div class="product-list-statistics-btnGroup">
                                    <a href="#" class="sea-ui btn-xs btn-primary sellAllBtn">全部上架</a>
                                    <!-- <a href="#" class="sea-ui btn-xs btn-primary readyOnTheMarketBtn">搬家商品全部上架</a> -->
                                </div>
                            </div>

                            <!-- 標籤導航 -->
                            <div class="sea-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="sea-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">全部商品 (0)</a></li>
                                        <li><a href="#tab2">上架商品 (0)</a></li>
                                        <li><a href="#tab3">無庫存 (0)</a></li>
                                        <li><a href="#tab4">下架商品 (0)</a></li>
                                        <li><a href="#tab4">垃圾桶 (0)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--商品格子內容區-->
                            <div class="grid-content">
                                <!--說明FOR RD: 沒有任何商品時 還是要顯示「新增商品到賣場」 -->
                                <div class="block-grid-2-4">
                                    <a href="product-edit.php">
                                        <div class="sea-ui card-edit-add">
                                            <div class="card-edit-info">
                                                <div class="card-figure">
                                                    <div class="card-figure-inner">
                                                        <div class="card-figure-img">
                                                            <div class="sea-seller-icon icon-picture"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="add-to-list"><span class="sea-seller-icon icon-plus"></span>
                                                    </div>
                                                    <div class="add-to-list-text">新增商品到賣場</div>
                                                    <div class="card-content-title">
                                                        <h2></h2>
                                                    </div>
                                                    <div class="card-content-tag"></div>
                                                    <div class="card-content-pricestock"></div>
                                                    <div class="card-footer">
                                                        <div class="card-footer-save"></div>
                                                        <div class="card-footer-price"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-edit-action"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--商品格子內容區 end-->

                            <!-- PC 版 列出所有頁碼 -->
                            <div class="sea-ui page-pagination hidden-sm-down" style="display:none">
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
                                            <span class="sea-seller-icon icon-angle-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- 手機版 Load more-->
                            <div class="sea-btn-loadcontent hidden-sm-up" style="display:none">
                                <a href="#" class="sea-ui btn btn-primary btn-load">LOAD MORE</a>
                            </div>
                        </section>
                    </div>
                </div>
                <!--說明For RD: 有錯誤訊息時 請帶入 error 的 class <div class="seller-action-bar-fixed error">  alert-box 就會顯示-->
                <div class="seller-action-bar-fixed product-list-actionBar float-bar">
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
                                        <a href="#" class="sea-ui btn onTheMarketBtn">上架</a>
                                        <a href="#" class="sea-ui btn takenOffStoreBtn">下架</a>
                                        <a href="#" class="sea-ui btn removeProductBtn">
                                            <span class="sea-seller-icon icon-trash hidden-xxs-up"></span>
                                            <span class="hidden-xxs-down">刪除</span>
                                        </a>

                                        <!-- 說明For RD: 若已選取商品２項以上 則開啟“大量編輯“面板（加上 js-sea-panel-trigger 這個樣式） -->
                                        <a href="#" class="sea-ui btn btn-primary js-sea-panel-trigger action-btn-box-batchedit" data-panel="batchedit">
                                            <span class="sea-seller-icon icon-edit hidden-xxs-up"></span>
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



        <!-- PChomeSEA footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChomeSEA footer end-->
    </section>

    <!-- PChomeSEA Panel -->
    <?php include("assets/slide-panel/panel-product-batchedit.php"); ?>
    <!-- PChomeSEA Panel end-->

    <!-- PChomeSEA lightBox -->
    <section id="sea-lightbox">
        <div class="sea-lightBox_backGround"></div>
        <div class="sea-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <!--頁面內會出現的lightbox放這裡-->
            <?php include("assets/lightbox/product/lightbox-product.php"); ?>
            <!--滑動面板內會出現的lightbox放這裡-->
            <?php include("assets/lightbox/slide-panel/lightbox-batchedit.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->


    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->

    <!--商品管理 JS-->
    <script type="text/javascript" src="js/js_product.js"></script>

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

    <!--選擇館別 JS-->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/catalogmenu.js"></script>

    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(5)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>
</body>

</html>