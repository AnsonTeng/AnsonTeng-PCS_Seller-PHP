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
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#e21e26">
    <meta name="msapplication-TileColor" content="#e21e26">
    <meta name="theme-color" content="#e21e26">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugin/normalize.css">
    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/qareview.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChome SEA | 訂單留言回覆</title>
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
                            <!-- 頁面標題與麵包屑 -->
                            <div class="pct-ui breadcrumb-back">
                                <span class="pct-icon icon-callcenter"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>聊聊&評價</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>訂單留言</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>內容回覆</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->

                            <a id="replyGroup" name="replyGroup"></a>
                            <div class="content-block">

                                <div class="content-description no-padding">
                                    <!-- 訂單明細群組 -->
                                    <div class="qareview-ordertListGroup">

                                        <!-- 商品資訊群組（圖＋文） -->
                                        <div class="qareview-ordertList-info productInfoGroup">
                                            <!-- 商品圖片 -->
                                            <div class="productInfo-img">
                                                <a href="#"><img class="img-fluid"
                                                        src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02"
                                                        alt="Product-Picture"></a>
                                            </div>
                                            <!-- </div> -->

                                            <!-- 商品資訊 -->
                                            <div class="productInfo-info">

                                                <!-- 訂單編號 -->
                                                <div class="productInfo-info-orderNum">
                                                    <span class="productInfo-info-orderNum-title">訂單編號</span>
                                                    <span
                                                        class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                </div>

                                                <!-- 商品名稱 -->
                                                <div class="productInfo-info-title">
                                                    <span class="productInfo-info-title-text">
                                                        <a href="#">韓版氣質V領复古大擺裙純色收腰開叉洋裝韓版氣質</a>
                                                        <span>
                                                </div>

                                                <!-- 訂單內商品數量 -->
                                                <div class="orderlist_amount hidden-xs-up">
                                                    <span>Total</span>
                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                    <span>items</span>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- 訂單內商品數量 -->
                                        <div class="qareview-ordertList-amount hidden-xs-down">
                                            <div class="orderlist_amount">
                                                <span>Total</span>
                                                <span class="orderlist_amount_num eng-num">90</span>
                                                <span>items</span>
                                            </div>
                                        </div>


                                        <!-- 訂單明細按鈕 -->
                                        <div class="qareview-ordertList-action">
                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger"
                                                data-panel="orderDetails" href="#">訂單明細</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="content-block">
                                <div class="content-description no-padding">
                                    <div class="replyGroup">
                                        <p class="description-title">回覆訂單留言</p>

                                        <!-- 輸入框 -->
                                        <div class="replyGroup-qa replyGroup-answer replyGroup-answer-reply">
                                            <!-- 內容 -->
                                            <div class="qa-contentBox">

                                                <div class="contentBox-dialog input-msg">

                                                    <!-- 賣家回覆群組 -->
                                                    <div class="dialog-reply">
                                                        <div class="pct-ui form select">
                                                            <select>
                                                                <option value="0">預設回應（會以泰文顯示給買家）</option>
                                                                <option value="1">ขณะนี้สินค้าหมดชั่วคราว 目前缺貨 Currently
                                                                    out of stock. </option>
                                                                <option value="2">สินค้าพร้อมส่ง สั่งสินค้าได้เลย 有貨請下單
                                                                    In stock, please place an order. </option>
                                                                <option value="3">ราคารวมค่าจัดส่งแล้ว 結帳金額包括運費 The
                                                                    shipping is included when you check out. </option>
                                                                <option value="4">นค้าเป็นสินค้าใหม่ 這商品是全新的 This item
                                                                    is first hand.</option>
                                                                <option value="5">สินค้าเป็นสินค้ามือสอง 這商品是二手的 This
                                                                    item is second hand. </option>
                                                                <option value="6">สินค้านี้จัดส่งมาจากไต้หวัน 這商品是從台灣出貨
                                                                    This item is shipped from Taiwan. </option>
                                                                <option value="7">
                                                                    สินค้าเป็นของแท้และผ่านการตรวจสอบมาตรฐานแล้ว
                                                                    這商品通過檢驗和正版授權，請放心 This item is QC passed and
                                                                    authentic so please feel free.</option>
                                                                <option value="8">เราไม่สามารถลดราคาสินค้าได้แล้ว 沒辦法再降價
                                                                    We cannot lower down the price. </option>
                                                                <option value="9">ราคาสินค้ารวมภาษีนำเข้าแล้ว
                                                                    คุณไม่ต้องกังวลเรื่องพิธีศุลกากร 我們會為您處理關稅與清關 This
                                                                    price is including import tax you don’t have to
                                                                    worry about custom clearance.</option>
                                                                <option value="10">รณจะได้รับสินค้าภายใน... 你將收到商品...
                                                                    You will receive item in... </option>
                                                                <option value="11">沒問題，歡迎到新賣場連結下單：</option>
                                                                <option value="12">很抱歉，此商品限購 __ 件</option>
                                                                <option value="13">很抱歉，此商品無法合併包裹寄送，請個別下單。</option>
                                                            </select>
                                                        </div>

                                                        <div class="pct-ui form">
                                                            <textarea placeholder="在這裡以英文或泰文輸入您的回覆"></textarea>
                                                            <div class="form__keyin__btn">
                                                                <a href="https://translate.google.com.tw/?hl=zh-TW"
                                                                    class="pct-ui btn-xs btn"
                                                                    target="_blank">使用google翻譯</a>
                                                            </div>
                                                        </div>

                                                        <div class="reply-action">
                                                            <!-- <a class="pct-ui btn-sm btn-cta-outlined" href="qareview-order.php">返回列表</a> -->
                                                            <a class="pct-ui btn btn-primary-outlined">取消重填</a>
                                                            <a class="pct-ui btn btn-primary">確定送出</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="description-title">訂單留言回覆紀錄
                                            <a class="pct-ui btn-xs btn" id="lightBox__translate-msg-01__Btn"
                                                href="#">google翻譯所有留言</a>
                                        </p>

                                        <!-- 問 -->
                                        <div class="replyGroup-qa replyGroup-question">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/buyer_avator_default.svg');">
                                                    </div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">so*****************om</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/09/30<time>19:14</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>可以刷卡嗎？</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 答 -->
                                        <div class="replyGroup-qa replyGroup-answer">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/brand/brand_01.jpg');"></div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">Diptyque
                                                        Paris Shop</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>14:03</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>貨量很充足唷，喜歡的話請直接下單。<br />謝謝!!</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 答 -->
                                        <div class="replyGroup-qa replyGroup-answer">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/brand/brand_01.jpg');"></div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">Diptyque
                                                        Paris Shop</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>14:01</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>我跟倉庫確認一下數量，請稍等一下唷。</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 問 -->
                                        <div class="replyGroup-qa replyGroup-question">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/buyer_avator_default.svg');">
                                                    </div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">so*****************om</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>13:28</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>請問這商品還有貨嗎？<br />謝謝!!</span>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- 問 -->
                                        <div class="replyGroup-qa replyGroup-question">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/buyer_avator_default.svg');">
                                                    </div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">so*****************om</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/09/30<time>19:14</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>可以刷卡嗎？</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 答 -->
                                        <div class="replyGroup-qa replyGroup-answer">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/brand/brand_01.jpg');"></div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">Diptyque
                                                        Paris Shop</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>14:03</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>貨量很充足唷，喜歡的話請直接下單。<br />謝謝!!</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 答 -->
                                        <div class="replyGroup-qa replyGroup-answer">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/brand/brand_01.jpg');"></div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">Diptyque
                                                        Paris Shop</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>14:01</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>我跟倉庫確認一下數量，請稍等一下唷。</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 問 -->
                                        <div class="replyGroup-qa replyGroup-question">
                                            <!-- 標頭 -->
                                            <div class="qa-titleBox">
                                                <div class="itemInfoGroup">
                                                    <div class="list__itemInfo-userImg img-bg"
                                                        style="background-image: url('img/buyer_avator_default.svg');">
                                                    </div>
                                                    <span
                                                        class="list__itemInfo list__itemInfo-userName orderlistDetail__itemInfo-userName">so*****************om</span>
                                                </div>
                                                <div class="date-time">
                                                    <span class="eng-num date-time">2018/08/28<time>13:28</time></span>
                                                </div>
                                            </div>

                                            <!-- 內容 -->
                                            <div class="qa-contentBox">
                                                <div class="triangle_top"></div>
                                                <div class="contentBox-dialog">
                                                    <span>請問這商品還有貨嗎？<br />謝謝!!</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="scroll-to-message">
                                            <a class="pct-ui btn btn-primary-outlined"
                                                href="qareview-order.php">返回列表</a>
                                            <a class="pct-ui btn btn-primary scroll-link" href="#replyGroup">回覆留言</a>
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

    <!-- PChome Thai Panel -->
    <?php include("assets/slide-panel/panel-global.php"); ?>
    <!-- PChome Thai Panel end-->


    <!-- PChome Thai lightBox -->
    <section id="pct-lightbox">
        <div class="pct-lightBox_backGround"></div>
        <div class="pct-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <?php include("assets/lightbox/qareview/lightbox-qareview.php"); ?>
            <!--頁面會出現的lightbox放這裡-->
            <?php include("assets/lightbox/orderlist/lightbox-orderlist.php"); ?>
            <!--頁面與面板都會出現的lightbox放這裡-->
            <?php include("assets/slide-panel/lightbox/panel-lightbox-orderdetail.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->

    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->

    <!--評價 JS-->
    <script type="text/javascript" src="js/js_qareview.js"></script>

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

    <!-- 主選單預設開啟（編號） -->
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(6)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>



</body>

</html>