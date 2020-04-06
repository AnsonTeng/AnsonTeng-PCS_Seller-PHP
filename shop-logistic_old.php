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
<link rel="stylesheet" type="text/css" href="css/shop.css">

<!-- Icon Font -->
<link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">

<!-- BS grid -->
<link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

<title>PChomeSEA | 物流設定</title>
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
                        <section id="sea-section-content" class="logistic-option">
                            <!-- PChomeSEA Account Header -->
                            <!--說明For RD：手機版不出現-->
                            <?php include("assets/account-header.php"); ?>
                            <!-- PChomeSEA Account Header end-->

                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-seller-shop"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>賣場設定</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>物流設定</li>
                                </ul>
                            </div>
                            <div class="content-block shop-logistic-list">
                                <div class="content-title">國際物流</div>
                                <div class="content-description">
                                    <p class="description-text">以下為 PChomeSEA 提供的國際物流方式。</p>
                                    <p class="description-text">1.若您勾選其一為全店預設物流，每次新增商品皆會將設定該物流方式（提醒您，您選擇的物流方式也可能會無法支援寄送特定商品，上架前請仔細確認）。-若無勾選，您則需於每次上架時，為個別商品分別設定。</p>
                                    <p class="description-text">2.請依照商品包裹的重量、材積和商品分類選擇適合的物流方式，我們會依照您的設定向買家收取適當國際運費。</p>
                                    <p class="description-text">3. 提醒您，若您所勾選的物流方式不符合導致運費短收，將列為運費補收於提領時扣抵。</p>
                                    <!-- <p class="description-text">目前預設物流設定為: 國際EMS</p> -->

                                    <div class="sea-ui modal">
                                        <div class="modal-content">
                                            <div class="description">
                                                <div class="title">目前預設物流設定為: 國際EMS</div>
                                                <div class="description-list description-list-shrink">
                                                    <div class="list-column-up">
                                                        <div class="description-list-box box-displayflex">
                                                            <div class="list-box-item">預設物流</div>
                                                            <div class="list-box-text">
                                                                <div class="sea-ui switch-toggle">
                                                                    <input id="switch-checkbox-openlogistic-seller" class="switch-checkbox" type="checkbox" value="openseller" checked="">
                                                                    <label for="switch-checkbox-openlogistic-seller"></label>
                                                                </div>
                                                            </div>
                                                            <div class="list-box-text">
                                                                <div class="sea-ui switch-toggle">
                                                                    <input id="switch-checkbox-defaultlogistic-seller" class="switch-checkbox" type="checkbox">
                                                                    <label for="switch-checkbox-defaultlogistic-seller"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">物流商</div>
                                                            <div class="list-box-text"><span class="eng-num">中華郵政 EMS</span></div>
                                                            <div class="list-box-text"><span class="eng-num">順丰速運</span>
                                                            </div>
                                                        </div>
                                                        <div class="description-list-box box-displayflex">
                                                            <div class="list-box-item">計費方式</div>
                                                            <div class="list-box-text"><span class="eng-num">包裹重量為主，若材積重大於實重則取材積重計價</span></div>
                                                            <div class="list-box-text"><span class="eng-num">包裹重量為主，若材積重大於實重則取材積重計價</span></div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">寄送天數</div>
                                                            <div class="list-box-text"><span class="eng-num">3-4天</span>
                                                            </div>
                                                            <div class="list-box-text"><span class="eng-num">3-4天</span>
                                                            </div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">限重</div>
                                                            <div class="list-box-text"><span class="eng-num">20
                                                                    KG</span></div>
                                                            <div class="list-box-text"><span class="eng-num">20
                                                                    KG</span></div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">尺寸限制</div>
                                                            <div class="list-box-text"><span class="eng-num">任一邊不超過150cm，長寬高總和不超過300cm</span>
                                                            </div>
                                                            <div class="list-box-text"><span class="eng-num">任一邊不超過150cm，長寬高總和不超過210cm</span>
                                                            </div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">可寄送地區</div>
                                                            <div class="list-box-text"><span class="eng-num">泰國全區</span>
                                                            </div>
                                                            <div class="list-box-text"><span class="eng-num">泰國全區</span>
                                                            </div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">關稅</div>
                                                            <div class="list-box-text"><span class="eng-num">買家自行清關</span></div>
                                                            <div class="list-box-text"><span class="eng-num">預收關稅
                                                                    順丰代清關</span></div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">禁運項目</div>
                                                            <div class="list-box-text"><span class="eng-num"><a href="https://www.post.gov.tw/post/internet/Postal/index.jsp?ID=2010201#txt_AF598FA9-B75B-4450-B275-B24A94C8F4B9" target="_blank">查看</a></span></div>
                                                            <div class="list-box-text"><span class="eng-num"><a href="http://www.sf-express.com/tw/tc/dynamic_function/more/regulation/" target="_blank">查看</a></span></div>
                                                        </div>
                                                        <div class="description-list-box  box-displayflex">
                                                            <div class="list-box-item">出貨方式</div>
                                                            <div class="list-box-text"><span class="eng-num">1.賣家寄貨至PChome台北辦公室<br>2.
                                                                    連科代寄國際快捷</span></div>
                                                            <div class="list-box-text"><span class="eng-num">1.
                                                                    上門取件<br>2. 直寄泰國</span></div>
                                                        </div>

                                                        <div class="content-description">
                                                            <p class="description-text">注意事項：</p>
                                                            <p class="description-text">1. 我們會提供您及買家追蹤貨號，讓您可全程追蹤貨物寄件狀態。
                                                            </p>
                                                            <p class="description-text">2.
                                                                提醒您，PChome所估列的運費僅做為參考，若您輸入的包裹重量與物流商實際秤重有差異，將以物流商現場計算的重量為準。若因包裹尺寸或重量不符導致寄送國際運費短收，將列為運費補收於提領時扣抵。
                                                            </p>
                                                            <p class="description-text">3. 退貨退款：PChomeSEA
                                                                目前尚未支援退換貨的物流服務。敬請賣家自行於【賣場設定】維護賣場英文地址供買家寄回處理。</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
            <?php include("assets/lightbox/shop/lightbox-shop.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->


    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->


    <!--賣場設定 JS-->
    <script type="text/javascript" src="js/js_shop.js"></script>
    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(5)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });

        var collapsebox = document.getElementsByClassName("accordion-caption");
        var i;
        //賣家指定預設開啟
        collapsebox[3].onclick()
    </script>

</body>

</html>