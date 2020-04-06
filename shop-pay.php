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

<title>PChomeSEA | 收款設定</title>
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
                        <section id="sea-section-content">
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
                                    <li>收款設定</li>
                                </ul>
                            </div>

                            <div class="content-block shop-pay">
                                <div class="content-title">PChomePay收款設定（泰國賣場限定）</div>
                                <div class="content-description">
                                    <p class="description-text">開啟 PChomePay 收款方式，可選擇讓買家使用信用卡，或泰國銀行帳戶轉帳的付款方式，並提供買家七天內可退貨的保護服務。</p>
                                    <div class="payment_up_wrap">
                                        <!-- 銀行臨櫃繳款 -->
                                        <div class="sea-ui accordion payment_counter">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">銀行及臨櫃繳款</div>
                                                    </div>
                                                </div>
                                                <div class="sea-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-bank" class="switch-checkbox" type="checkbox" value="mainopenBank">
                                                    <label for="switch-checkbox-bank"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text">買家可以選擇下方任一個通路完成繳款：</div>
                                                    <dl>
                                                        <dd><img src="img/footer/logo_familymart.png" alt="logo_familymart" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bigc.png" alt="logo_bigc" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_tesco.png" alt="logo_pay_tesco" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_payatpost.png" alt="logo_pay_payatpost" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_truemoney.png" alt="logo_bank_truemoney" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_tot.png" alt="logo_bank_tot" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_aispay.png" alt="logo_aispay" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_TMB.png" alt="logo_bank_TMB" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Kasikorn.png" alt="logo_bank_Kasikorn" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_siam.png" alt="logo_bank_siam" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_bangkok.png" alt="logo_bank_bangkok" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Krungsri.png" alt="logo_bank_Krungsri" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_KTB.png" alt="logo_bank_KTB" class="img-fluid"></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 信用卡 -->
                                        <div class="sea-ui accordion payment_card">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_card.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title"><img src="img/icon_pchomepay.svg" alt="pchomepay">信用卡/金融卡</div>
                                                        <div class="caption-text">免手續費</div>
                                                    </div>
                                                </div>
                                                <div class="sea-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-card" class="switch-checkbox" type="checkbox" value="mainopenCard">
                                                    <label for="switch-checkbox-card"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text">可以使用以下信用卡/金融卡</div>
                                                    <div class="liquid-container-text">
                                                        <span class="liquid-container-text-gray">金流服務費：</span>
                                                        <span class="liquid-container-text-gray liquid-container-text-line">2.5%</span>
                                                        <span class="liquid-container-text-red">［免手續費］</span>
                                                    </div>
                                                    <dl>
                                                        <dd><img src="img/footer/logo_pay_visa.png" alt="logo_pay_visa" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_master.png" alt="logo_pay_master" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_jcb.png" alt="logo_pay_jcb" class="img-fluid"></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ATM 轉帳-->
                                        <div class="sea-ui accordion payment_atm">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_atm.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title"><img src="img/icon_pchomepay.svg" alt="pchomepay">銀行繳款</div>
                                                        <div class="caption-text">免手續費</div>
                                                    </div>
                                                </div>
                                                <div class="sea-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-atm" class="switch-checkbox" type="checkbox" value="mainopenAtm">
                                                    <label for="switch-checkbox-atm"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="sea-seller-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text">買家可以選擇下方任一個通路完成繳款：</div>
                                                    <div class="liquid-container-text"><a class="mobilebankingBtn" href="#">查詢各通路繳款方式</a></div>
                                                    <div class="liquid-container-text">
                                                        <span class="liquid-container-text-gray">金流服務費：</span>
                                                        <span class="liquid-container-text-gray liquid-container-text-line">2.5%</span>
                                                        <span class="liquid-container-text-red">［免手續費］</span>
                                                    </div>
                                                    <dl>
                                                        <dd><img src="img/footer/logo_bank_bangkok.png" alt="logo_bank_bangkok" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_CIMB.png" alt="logo_bank_CIMB" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_GSB.png" alt="logo_bank_GSB" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_ICBC.png" alt="logo_bank_ICBC" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Kasikorn.png" alt="logo_bank_Kasikorn" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Kiatnakin.png" alt="logo_bank_Kiatnakin" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Krungsri.png" alt="logo_bank_Krungsri" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_KTB.png" alt="logo_bank_KTB" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_MIZUHO.png" alt="logo_bank_MIZUHO" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_siam.png" alt="logo_bank_siam" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_SBC.png" alt="logo_bank_SBC" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_thanachart.png" alt="logo_bank_thanachart" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_TMB.png" alt="logo_bank_TMB" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_UOB.png" alt="logo_bank_UOB" class="img-fluid"></dd>
                                                    </dl>
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
        collapsebox[0].onclick()
    </script>

</body>

</html>