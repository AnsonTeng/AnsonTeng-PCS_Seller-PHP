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

<title>PChomeSEA | 賣場介紹</title>
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
                                    <li>賣場介紹</li>
                                </ul>
                            </div>

                            <!--賣場介紹-->
                            <div class="content-block shop-intro">
                                <div class="content-title">賣場介紹賣場介紹（泰國賣場限定）</div>
                                <div class="content-description">
                                    <div class="form-column">
                                        <div class="account-avatar-box">
                                            <div class="account-avatar lg">
                                                <a href="#" class="avatareditBtn">
                                                    <div class="account-avatar-inner">
                                                        <div class="avatar-figure-edit"><span class="sea-seller-icon icon-camera"></span></div>
                                                        <div class="avatar-figure-img img-bg" style="background-image: url('img/brand/brand_01.jpg');">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="seller-info two-column">
                                            <div class="sea-ui form-label form-m-break">
                                                <label for="" class="required">賣場名稱</label>
                                                <!--說明 FOR RD: 有錯誤訊息時可帶 class="sea-ui form error" -->
                                                <div class="sea-ui form">
                                                    <input type="text" placeholder="請輸入賣場名稱">
                                                    <p class="break-text">買家會藉由搜尋找到您的賣場</p>
                                                </div>
                                            </div>
                                            <div class="sea-ui form-label form-m-break shop-intro-text">
                                                <label for="">賣場簡介</label>
                                                <div class="sea-ui form">
                                                    <textarea placeholder="請輸入賣場簡介（In English)"></textarea>
                                                    <div class="form__keyin__btn">
                                                        <a href="https://translate.google.com.tw/?hl=zh-TW" class="sea-ui btn-xs btn" target="_blank">使用 Google 翻譯</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--賣場可寄送的國家-->
                            <div class="content-block shop-intro">
                                <div class="content-title">賣場寄送國家</div>
                                <div class="content-description">
                                    <div class="form-column">
                                        <!--說明For RD:  尚未開放勾選時 請帶入 disabled 的 class <div class="ct-ui form checkbox disabled">  文字 就會變灰色-->
                                        <div class="sea-ui form checkbox">
                                            <!--說明For RD:  尚未開放勾選時 請修改input裡的資訊 checked="checked" 改成 disabled  即可無法勾選-->
                                            <input type="checkbox" id="Thailand" name="checkGroup" value="1" checked="checked">
                                            <label for="Thailand">
                                                <span>泰國</span>
                                            </label>
                                        </div>
                                        <div class="sea-ui form checkbox">
                                            <input type="checkbox" id="Singapore" name="checkGroup" value="2">
                                            <label for="Singapore">
                                                <span>新加玻</span>
                                            </label>
                                        </div>
                                        <div class="sea-ui form checkbox">
                                            <input type="checkbox" id="Vietnam" name="checkGroup" value="3">
                                            <label for="Vietnam">
                                                <span>越南</span>
                                            </label>
                                        </div>
                                        <div class="sea-ui form checkbox disabled">
                                            <input type="checkbox" id="Malaysia" name="checkGroup" value="4" disabled>
                                            <label for="Malaysia">
                                                <span>馬來西亞</span>
                                            </label>
                                        </div>
                                        <div class="sea-ui form checkbox disabled">
                                            <input type="checkbox" id="Philippines" name="checkGroup" value="5" disabled>
                                            <label for="Philippines">
                                                <span>菲律賓</span>
                                            </label>
                                        </div>
                                        <div class="sea-ui form checkbox disabled">
                                            <input type="checkbox" id="Indonesia" name="checkGroup" value="6" disabled>
                                            <label for="Indonesia">
                                                <span>印尼</span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="error-notification-tooltip-inline"><span class="sea-seller-icon icon-alert"></span>至少選擇一個國家</span>
                                </div>
                            </div>

                            <!--賣家聯絡資料-->
                            <div class="content-block shop-intro" id="editTel">
                                <div class="content-title">賣場聯絡資料</div>
                                <div class="content-description">
                                    <p class="description-text">您所修改的資料將於您在 PChomeSEA 會員的賣家帳戶資料同步更新</p>
                                    <div class="form-column">
                                        <div class="sea-ui form-label form-m-break two-column">
                                            <label for="" class="required">賣場聯絡人</label>
                                            <!--說明 FOR RD: 有錯誤訊息時可帶 class="sea-ui form error" -->
                                            <div class="sea-ui form">
                                                <input type="text" placeholder="請輸入賣場聯絡人">
                                            </div>
                                        </div>
                                        <div class="sea-ui form-label form-m-break two-column">
                                            <label for="" class="required">聯絡E-Mail</label>
                                            <!--說明 FOR RD: 有錯誤訊息時可帶 class="sea-ui form error" -->
                                            <div class="sea-ui form">
                                                <input type="email" placeholder="請輸入聯絡 E-Mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-column">
                                        <div class="sea-ui form-label form-m-break two-column">
                                            <label for="" class="required">聯絡電話</label>
                                            <div class="sea-ui form text-without-input">
                                                <p class="data-text align-left eng-num">+886 918875017</p>
                                                <a class="sea-ui btn-xs btn modifyphonenumberBtn">修改電話號碼</a>
                                                <p class="break-text">訂單簡訊通知到此手機號碼</p>
                                                <!-- toRD: 測試[修改電話號碼]流程用的呼叫燈箱按鈕 平時不會出現-->
                                                <a class="sea-ui btn-xs btn inputphonenumberBtn">測試用按鈕</a>
                                                <a class="sea-ui btn-xs btn newmodifyphonenumberBtn">測試用按鈕</a>
                                            </div>
                                        </div>

                                        <div class="sea-ui form-label form-m-break two-column">
                                            <label for="">賣場電話</label>
                                            <div class="sea-ui form">
                                                <input type="tel" placeholder="請輸入賣場電話">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-address-box">
                                        <div class="shop-address">
                                            <div class="sea-ui form-label">
                                                <label for="">賣場地址</label>
                                            </div>
                                        </div>
                                        <div class="address-form">
                                            <div class="form-column">
                                                <div class="sea-ui form-label break-label">Taiwan Taipei</div>
                                            </div>
                                            <div class="form-column">
                                                <div class="sea-ui form-label break-label two-column">
                                                    <label for="">地址</label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="請輸入您的地址">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-column">
                                                <div class="sea-ui form-label break-label three-column">
                                                    <label for="">縣市</label>
                                                    <div class="sea-ui form select">
                                                        <select class="formbox_rightSelect selectpicker " id="city" name="city2" onchange="changeZone()">
                                                            <option value="">請選擇</option>
                                                            <option value="" selected="selected">台北市</option>
                                                            <option value="">新北市</option>
                                                            <option value="">基隆市</option>
                                                            <option value="">基隆縣</option>
                                                            <option value="">桃園市</option>
                                                            <option value="ขอนแก่น">桃園縣</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="sea-ui form-label break-label three-column">
                                                    <label for="">市/區</label>
                                                    <div class="sea-ui form select">
                                                        <select class="formbox_rightSelect selectpicker" id="province1" name="province2" onchange="showZipCode()">
                                                            <option value="">中正區</option>
                                                            <option value="">大安區</option>
                                                            <option value="">永和區</option>
                                                            <option value="">中和區</option>
                                                            <option value="">板橋區</option>
                                                            <option value="">三重區</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="sea-ui form-label break-label zipcode">
                                                    <label for="">郵遞區號</label>
                                                    <div class="sea-ui form">
                                                        <input type="text" placeholder="郵遞區號">
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

                <!--說明For RD:  有錯誤訊息時 請帶入 error 的 class <div class="seller-action-bar-fixed error">  alert-box 就會顯示-->
                <div class="seller-action-bar-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="action-bar-wrap">
                                    <div class="alert-box">
                                        <p><span class="sea-seller-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <ul>
                                            <li>賣場名稱</li>
                                            <li>賣場聯絡人</li>
                                            <li>聯絡E-MAIL</li>
                                            <li>聯絡電話</li>
                                            <li>賣場電話</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="sea-ui btn-lg">取消</a>
                                        <a href="#" class="sea-ui btn-lg btn-primary">確定送出</a>
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
                                        <p><span class="sea-seller-icon icon-alert"></span> 送出前請完整填寫：</p>
                                        <!--說明For RD: 判斷哪些必填欄位未填寫 -->
                                        <ul>
                                            <li>賣場名稱</li>
                                            <li>賣場聯絡人</li>
                                            <li>聯絡E-MAIL</li>
                                            <li>聯絡電話</li>
                                            <li>賣場電話</li>
                                        </ul>
                                    </div>
                                    <div class="action-btn-box">
                                        <a href="#" class="sea-ui btn-lg">取消</a>
                                        <a href="#" class="sea-ui btn-lg btn-primary">確定送出</a>
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
    </script>

</body>

</html>