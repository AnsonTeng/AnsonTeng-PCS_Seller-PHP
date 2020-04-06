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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChomeSEA | 海外賣家中心</title>
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

                            <!-- PChomeSEA Alert -->
                            <?php include("assets/alert.php"); ?>
                            <!-- PChomeSEA Alert end-->

                            <!-- PChomeSEA System Ticker -->
                            <?php include("assets/systemticker.php"); ?>
                            <!-- PChomeSEA System Ticker end-->

                            <div class="sea-reverse">
                                <!--代收款項-->
                                <div class="section-outer section-seller-bank-payment">

                                    <!--帳戶總金額-->
                                    <div class="current-balance">
                                        <div class="box-ttl">帳戶總金額 <span class="eng-num">THB</span></div>
                                        <div class="balance-num eng-num">
                                            <a href="selleracc-withdrawal.php"><span>$</span>19,843.87</a>
                                        </div>
                                    </div>

                                    <!--提領帳戶-->
                                    <div class="linked-bank-account">
                                        <div class="payment-setting"><a href="selleracc-wdset.php"> <span class="sea-seller-icon icon-setting-line"></span>提領設定</a></div>
                                        <div class="box-ttl">提領帳戶
                                            <!--說明For RD: 若顯示已認證銀行資料，需出現icon與已驗證文字 -->
                                            <div class="bankvarify-text"><span class="sea-seller-icon icon-bank-verified"></span>已認證</div>
                                        </div>
                                        <div class="bank-info">
                                            <div class="sea-seller-icon icon-bank"></div>
                                            <div class="linked-bank-account">

                                                <!-- 說明For RD: 狀態01: KYC審核未通過(全新帳戶)：無設定提領設定銀行--->
                                                <!-- 說明For RD: 若未過SMS OTP class請帶 class="btn-xs telveriBtn" 已通過SMS OTP 直接連結到kyc-identity.php--->
                                                <div class="bank-account" style="display: none"><span class="txt">未認證身分與銀行。</span> <a href="kyc-identity.php" class="btn-xs" class="btn-xs">申請認證</a></div>

                                                <!-- 說明For RD: 狀態02: KYC審核通過：有銀行帳號且提領成功過--->
                                                <div class="bank-account" style="display: none"> <span>002 Bangkok Bank
                                                        (BBL)</span></div>

                                                <!-- 說明For RD: 狀態03: KYC審核通過：提領設定銀行狀態- 認證中--->
                                                <div class="bank-account" style="display: none"> <span class="txt">銀行認證中。</span></div>

                                                <!-- 說明For RD: 狀態04: KYC審核通過：提領設定銀行狀態- 認證失敗 原因為：銀行帳戶相關--->
                                                <!-- 說明For RD: 若未過SMS OTP class請帶 class="btn-xs telveriBtn" 已通過SMS OTP 直接連結到kyc-identity.php--->
                                                <div class="bank-account" style="display: none"><span class="txt">銀行認證失敗。</span> <a class="btn-xs telveriBtn" class="btn-xs">修改</a></div>

                                                <!-- 說明For RD: 狀態05: KYC審核未通過：提領設定銀行狀態- 認證失敗 原因為：身份資料錯誤相關--->
                                                <div class="bank-account" style="display: none"> <span class="txt">銀行認證中。</span></div>

                                                <!-- 說明For RD: 狀態06: KYC審核通過：舊會員有KYC資料(通過)  有設定過銀行帳號  無提領紀錄--->
                                                <div class="bank-account" style="display: none"><span class="txt">銀行待認證。</span> <a class="btn-xs VerifyagainBtn" class="btn-xs">重送認證</a></div>

                                                <!-- 說明For RD: 狀態07: KYC審核未通過：舊會員有KYC資料(未通過)  有設定過銀行帳號  無提領紀錄--->
                                                <div class="bank-account" style="display: none"><span class="txt">銀行待認證。</span></div>

                                                <!-- 說明For RD: 狀態08: 無KYC有銀行帳號：舊會員無KYC資料  有設定過銀行帳號  無提領紀錄--->
                                                <!-- 說明For RD: 若未過SMS OTP class請帶 class="btn-xs telveriBtn" 已通過SMS OTP 直接連結到kyc-identity.php--->
                                                <div class="bank-account"><span class="txt">銀行待認證。</span> <a class="btn-xs telveriBtn" class="btn-xs">申請認證</a></div>

                                                <!--說明 FOR RD: 若沒有帳號與戶名時，請整塊隱藏-->
                                                <div class="bank-name-num">
                                                    <ul>
                                                        <li class="bank-name eng-num"> Sherry Hsu Snow Lily </li>
                                                        <li class="bank-num eng-num">
                                                            <!-- ***** 85241 -->5********07511</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--商品上架/帳戶總覽-->
                                <div class="section-outer section-seller-dashboard">
                                    <div class="upload-peoduct-wrap">
                                        <a href="product-add.php">
                                            <div class="upload-peoduct-card">
                                                <div class="upload-peoduct-inner">
                                                    <div class="inner-items">
                                                        <div class="sea-seller-icon icon-picture"></div>
                                                        <p><span class="sea-seller-icon icon-plus"></span>新增商品到賣場</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dashboard-panel">
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-orderlist"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num unread">20</li>
                                                            <li class="card-num-ttl">所有訂單</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot" style="display: none">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-dispatch"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num">0</li>
                                                            <li class="card-num-ttl">待出貨</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-replen"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num unread">3</li>
                                                            <li class="card-num-ttl">補庫存</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-ordermsg"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num unread">17</li>
                                                            <li class="card-num-ttl">訂單留言</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-comment"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num unread">6</li>
                                                            <li class="card-num-ttl">商品留言</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-odercancel"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num unread">4</li>
                                                            <li class="card-num-ttl">訂單取消</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dashboard-card-wrap">
                                            <a href="orderlist.php">
                                                <div class="dashboard-card">
                                                    <div class="dashboard-card-icon">
                                                        <!--未讀紅點-->
                                                        <div class="unread-reddot" style="display: none">
                                                            <div class="redot"></div>
                                                            <div class="ripple"></div>
                                                        </div>
                                                        <span class="sea-seller-icon icon-refund"></span>
                                                    </div>
                                                    <div class="dashboard-card-num">
                                                        <ul>
                                                            <li class="eng-num">0</li>
                                                            <li class="card-num-ttl">退款申請</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
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



    <!--首頁 JS-->
    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(1)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>

    <!--系統公告 JS-->
    <script type="text/javascript" src="js/plugin/ticker/tickerme.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#ticker').tickerme();
        });
    </script>
</body>

</html>