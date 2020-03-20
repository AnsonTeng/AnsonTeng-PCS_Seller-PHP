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
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00afeb">
    <meta name="msapplication-TileColor" content="#00afeb">
    <meta name="theme-color" content="#00afeb">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugin/normalize.css">

    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/notification.css">

    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

    <title>PChome Thai | ออนไลน์ช้อปปิ้ง ที่ทุกสิ่งเป็นเรื่องแสนง่ายและสนุก</title>
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
        <div class="container pct-gutters  container-min-height">
            <div class="section-outer">
                <div class="row">
                    <div class="col-md-3">
                        <!-- PChome Thai Menu_pc -->
                        <?php include("assets/menu-pc.php"); ?>
                        <!-- PChome Thai Menu_pc end-->
                    </div>

                    <div class="col-md-9">
                        <section id="pct-section-content">
                            <!-- 頁面標題與麵包屑 -->
                            <div class="pct-ui breadcrumb-back">
                                <span class="pct-icon icon-orderlist"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>通知中心</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>全部通知</li>
                                </ul>
                            </div>

                            <div class="pct-ui tab-nav-bar">
                                <div class="pct-ui tab-pointing">
                                    <ul class="tab-items">
                                        <li><a href="#" class="active">全部通知 (30)</a></li>
                                        <li><a href="#">未讀通知 (0)</a></li>
                                        <li><a href="#">訂單狀態通知 (0)</a></li>
                                        <li><a href="#">系統通知(0)</a></li>
                                        <li><a href="#">代收通知(0)</a></li>
                                        <li><a href="#">促銷活動通知 (0)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 說明FOR RD-->
                            <!-- .notification-list-item 通知列表預設都帶入：unread 已讀項目為：read -->
                            <div class="notification-read-all">
                                <a href="#" class="pct-ui btn-sm btn-secondary btn-read-all">
                                    <li class="pct-btn-icon icon-checked"></li>全部設為已讀
                                </a>
                            </div>
                            <!-- 通知訊息列表 -->
                            <div class="section-outer section-notification-list">
                                <div class="notification-list-wrap">
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_payment.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>มาฉลอง "คริสต์มาส 2018 กับ Pinkoi” กัน! ไปเลือกของขวัญเลย!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item read">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_system.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>3 วันสุดท้าย ของกิจกรรมครบรอบ Pinkoi แล้ว! พลาดครั้งนี้
                                                        ต้องรอถึงปีหน้าเลยนะ </p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_sales.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>11.11 เริ่มแล้ว วันเดียวเท่านั้น!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_payment.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>กิจกรรม [ฉลองครบรอบ Pinkoi 2018- จุดเริ่มต้นงานดีไซน์] เริ่มแล้ว!
                                                        งานดีไซน์และโปรโมชั่นพิเศษมากมายรอคุณอยู่!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>11.11 Big Sale ลดอลัง ปังทุกดีล ช้อปต่อแรงอย่าตก
                                                        เพราะดีลแรงยังไม่หมด แจก Coins เพิ่มให้อีกใน Shopee Shake Shake
                                                        รอบสามทุ่ม ช้อปกันยาวๆ ถึงเที่ยงคืน
                                                        พร้อมส่งฟรีไม่มีขั้นต่ำทุกออเดอร์ ช้อปเลย</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="notificationListBtn">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_order.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>PChome訂單確認通知</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>訂單編號04590534590已收到</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item read">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_sales.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>11.11 เริ่มแล้ว วันเดียวเท่านั้น!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_payment.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>กิจกรรม [ฉลองครบรอบ Pinkoi 2018- จุดเริ่มต้นงานดีไซน์] เริ่มแล้ว!
                                                        งานดีไซน์และโปรโมชั่นพิเศษมากมายรอคุณอยู่!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>11.11 Big Sale ลดอลัง ปังทุกดีล ช้อปต่อแรงอย่าตก
                                                        เพราะดีลแรงยังไม่หมด แจก Coins เพิ่มให้อีกใน Shopee Shake Shake
                                                        รอบสามทุ่ม ช้อปกันยาวๆ ถึงเที่ยงคืน
                                                        พร้อมส่งฟรีไม่มีขั้นต่ำทุกออเดอร์ ช้อปเลย</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="notificationListBtn">
                                        <div class="notification-list-item read">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_order.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>PChome訂單確認通知</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>訂單編號04590534590已收到</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_payment.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>มาฉลอง "คริสต์มาส 2018 กับ Pinkoi” กัน! ไปเลือกของขวัญเลย!</p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.pchome.co.th/" target="_blank">
                                        <div class="notification-list-item unread">
                                            <div class="list-figure">
                                                <div class="list-figure-inner">
                                                    <!-- 圖片規格： 1:1 正方形-->
                                                    <div class="list-figure-img img-bg"
                                                        style="background-image: url('img/drawer_notification_system.svg');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-list-content">
                                                <div class="notification-list-title">
                                                    <p>3 วันสุดท้าย ของกิจกรรมครบรอบ Pinkoi แล้ว! พลาดครั้งนี้
                                                        ต้องรอถึงปีหน้าเลยนะ </p>
                                                </div>
                                                <div class="notification-content">
                                                    <p>ปีนี้ Pinkoi จะทำให้คริสต์มาสของคุณไม่น่าเบื่ออีกต่อไป
                                                        กับไอเดียการฉลองคริสต์มาสใหม่ๆมานำเสนอคุณมากมายแคมเปญคริสต์มาส
                                                        14 พ.ย. – 25 ธ.ค. นี้ Pinkoi
                                                        ได้ชวนเหล่าดีไซเนอร์มาแชร์คริสต์มาสในฝันของพวกเขา
                                                        พร้อมทั้งแนะนำของขวัญส่งท้ายปี</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- PC 版 列出所有頁碼 -->
                                <div class="pct-ui page-pagination hidden-sm-down">
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
                                <div class="pct-btn-loadcontent hidden-xs-up">
                                    <a href="#" class="pct-ui btn btn-primary btn-load">LOAD MORE</a>
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
        </div>
    </section>
    <!-- PChome Thai lightBox end-->


    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->

    <!--分類頁 JS-->
    <script type="text/javascript" src="js/js_notification.js"></script>

    <!-- 主選單預設開啟（編號） -->
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(8)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>


</body>

</html>