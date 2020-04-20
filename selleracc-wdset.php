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
    <link rel="stylesheet" type="text/css" href="css/selleracc.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChomeSEA | 結算設定</title>
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


                            <!-- 麵包屑 -->
                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-payment"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>代收款項</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>結算設定</li>
                                </ul>
                            </div>


                            <!-- 新增／修改 提領帳戶-->
                            <div class="content-block">
                                <div class="content-title">結算設定</div>
                                <div class="content-description content-bankAccountSetting">
                                    <div class="accountFlexbox">
                                        <div class="accountFlexbox-btnBox">
                                            <div class="accountFlexbox-btnBox-btnGroup">
                                                <img class="btnGroup-img" src="img/bankaccount_setting.svg">
                                                <a href="#" class="sea-ui btn-sm btn-fluid btn-primary selleridveriBtn">
                                                    <li class="sea-btn-icon icon-plus"></li> 修改帳戶
                                                </a>
                                            </div>
                                        </div>
                                        <div class="accountFlexbox-infoBox">
                                            <div class="infoBox-item">
                                                <div class="infoBox-title"><span>銀行名稱</span></div>
                                                <div class="infoBox-text"><span>004 臺灣銀行</span></div>
                                            </div>
                                            <div class="infoBox-item">
                                                <div class="infoBox-title"><span>分行代碼</span></div>
                                                <div class="infoBox-text"><span class="eng-num">0457</span></div>
                                            </div>
                                            <div class="infoBox-item">
                                                <div class="infoBox-title"><span>銀行帳號</span></div>
                                                <div class="infoBox-text"><span class="eng-num">08**********26522</span>
                                                </div>
                                            </div>
                                            <div class="infoBox-item">
                                                <div class="infoBox-title"><span>銀行戶名</span></div>
                                                <div class="infoBox-text"><span>小松菜奇阿<span class="alert-red-block">*銀行戶名需與身分認證的公司名稱相同</span></span></div>
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
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->
    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->


    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(4)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>
</body>

</html>