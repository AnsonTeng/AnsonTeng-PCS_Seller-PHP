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
    <link rel="stylesheet" type="text/css" href="css/shop.css">

    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

    <title>PChome SEA | 收款設定</title>
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
                                <span class="pct-icon icon-seller-shop"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>賣場設定</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>收款設定</li>
                                </ul>
                            </div>

                            <div class="content-block shop-pay">
                                <div class="content-title">PChomePay收款設定</div>
                                <div class="content-description">
                                    <!-- <p class="description-title ">開啟哪種收款方式?</p> -->
                                    <p class="description-text">
                                        開啟PChomePay收款方式，可選擇讓買家使用信用卡，或泰國銀行帳戶轉帳的付款方式，並提供買家七天內可退貨的保護服務。
                                    </p>

                                    <div class="payment_up_wrap">
                                        <!-- 銀行臨櫃繳款 -->
                                        <div class="pct-ui accordion payment_counter">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_counter.svg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title">銀行及臨櫃繳款</div>
                                                    </div>
                                                </div>
                                                <div class="pct-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-bank" class="switch-checkbox"
                                                        type="checkbox" value="mainopenBank">
                                                    <label for="switch-checkbox-bank"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text">買家可以選擇下方任一個通路完成繳款：</div>
                                                    <dl>
                                                        <dd><img src="img/footer/logo_familymart.png"
                                                                alt="logo_familymart" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bigc.png" alt="logo_bigc"
                                                                class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_tesco.png"
                                                                alt="logo_pay_tesco" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_payatpost.png"
                                                                alt="logo_pay_payatpost" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_truemoney.png"
                                                                alt="logo_bank_truemoney" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_tot.png" alt="logo_bank_tot"
                                                                class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_aispay.png" alt="logo_aispay"
                                                                class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_TMB.png" alt="logo_bank_TMB"
                                                                class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Kasikorn.png"
                                                                alt="logo_bank_Kasikorn" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_siam.png"
                                                                alt="logo_bank_siam" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_bangkok.png"
                                                                alt="logo_bank_bangkok" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_Krungsri.png"
                                                                alt="logo_bank_Krungsri" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_bank_KTB.png" alt="logo_bank_KTB"
                                                                class="img-fluid"></dd>

                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 信用卡 -->
                                        <div class="pct-ui accordion payment_card">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_card.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title"><img src="img/icon_pchomepay.svg"
                                                                alt="pchomepay">信用卡/金融卡</div>
                                                        <div class="caption-text">免手續費</div>
                                                    </div>
                                                </div>
                                                <div class="pct-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-card" class="switch-checkbox"
                                                        type="checkbox" value="mainopenCard">
                                                    <label for="switch-checkbox-card"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text">可以使用以下信用卡/金融卡</div>
                                                    <dl>
                                                        <dd><img src="img/footer/logo_pay_visa.png" alt="logo_pay_visa"
                                                                class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_master.png"
                                                                alt="logo_pay_master" class="img-fluid"></dd>
                                                        <dd><img src="img/footer/logo_pay_jcb.png" alt="logo_pay_jcb"
                                                                class="img-fluid"></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ATM 轉帳-->
                                        <div class="pct-ui accordion payment_atm">
                                            <!--摺疊標題-->
                                            <div class="accordion-caption">
                                                <div class="caption-inner">
                                                    <div class="caption-figure">
                                                        <img src="img/icon-payment_atm.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="caption-title-box">
                                                        <div class="caption-title"><img src="img/icon_pchomepay.svg"
                                                                alt="pchomepay">銀行繳款</div>
                                                        <div class="caption-text">免手續費</div>
                                                    </div>
                                                </div>
                                                <div class="pct-ui switch-toggle mainTogglePay">
                                                    <input id="switch-checkbox-atm" class="switch-checkbox"
                                                        type="checkbox" value="mainopenAtm">
                                                    <label for="switch-checkbox-atm"></label>
                                                </div>
                                                <div class="caption-icon">
                                                    <div class="pct-icon icon-angle-down"></div>
                                                </div>
                                            </div>
                                            <!--摺疊內容下拉-->
                                            <div class="accordion-liquid-container">
                                                <div class="liquid-container-inner">
                                                    <div class="liquid-container-text fw-b">
                                                        包含 網路銀行, 手機網路銀行, 臨櫃, ATM
                                                        <a href="https://www.pchome.co.th/guide/guide/swpage/8-1-guide_buy3"
                                                            target="_blank">操作說明</a></div>
                                                    <div class="liquid-container-text">
                                                        繳款方式 <a class="productMobilebankBtn" href="#">查詢各通路繳款方式</a>
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


        <!-- PChome Thai footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChome Thai footer end-->

    </section>


    <!-- PChome Thai lightBox -->
    <section id="pct-lightbox">
        <div class="pct-lightBox_backGround"></div>
        <div class="pct-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <?php include("assets/lightbox/shop/lightbox-shop.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->


    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->


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