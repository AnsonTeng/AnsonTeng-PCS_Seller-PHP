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
    <link rel="stylesheet" type="text/css" href="css/qareview.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChomeSEA | 訂單留言</title>
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
        <!-- PChomeSEA Account Header -->

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

                            <!-- 頁面標題與麵包屑 -->
                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-callcenter"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>客服管理</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>訂單留言版</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->

                            <!-- 搜尋群組-->
                            <div class="searchBarGroup">

                                <div class="sea-ui form inputGroup">
                                    <div class="inputGroup-inputBox">
                                        <div class="sea-ui form">
                                            <input type="text" placeholder="請輸入訂單編號">
                                        </div>
                                    </div>
                                    <a href="#" class="sea-ui btn-sm btn-primary inputGroup-btn">搜尋</a>
                                </div>

                                <div class="hidden-sm-down">
                                    <div class="sea-ui form select ">
                                        <select>
                                            <option value="20">顯示20筆</option>
                                            <option value="10">顯示10筆</option>
                                            <option value="30">顯示30筆</option>
                                            <option value="50">顯示50筆</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- 搜尋結束-->


                            <!-- 標籤導航 -->
                            <div class="sea-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="sea-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">所有訂單留言<span>(86)</span></a></li>
                                        <li><a href="#tab2">未讀取<span>(70)</span></a></li>
                                        <li><a href="#tab3">待回覆<span>(10)</span></a></li>
                                        <li><a href="#tab4">已回覆<span>(6)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 整體表格 -->
                            <div class="tableBox tableBox-qareview-product tableBox-qareview-order">
                                <div class="table__tbody">

                                    <!--說明FOR RD: 沒有任何留言時 -->
                                    <div class="table_default_empaty" style="display: none;">
                                        <div class="message-text">沒有留言紀錄</div>
                                    </div>

                                    <table>
                                        <!-- colgroup -->
                                        <colgroup>
                                            <col class="table--w45">
                                            <col class="table--w55">
                                        </colgroup>


                                        <!-- 單筆訂單留言 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="2">
                                                    <div class="tableData-header">

                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>已回覆</span>
                                                            </div>

                                                            <div class="date-time">
                                                                <span class="eng-num date-time">2018/05/28<time>01:28</time></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="table_row_body">
                                                <td data-title="商品">
                                                    <div class="tableDeta-box">
                                                        <!-- 商品資訊群組（圖＋文） -->
                                                        <div class="productInfoGroup">
                                                            <!-- 商品圖片 -->
                                                            <div class="productInfo-img">
                                                                <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                            </div>
                                                            <!-- </div> -->

                                                            <!-- 商品資訊 -->
                                                            <div class="productInfo-info">

                                                                <!-- 訂單編號 -->
                                                                <div class="productInfo-info-orderNum">
                                                                    <span class="productInfo-info-orderNum-title">訂單編號</span>
                                                                    <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                                </div>

                                                                <!-- 商品名稱 -->
                                                                <div class="productInfo-info-title">
                                                                    <span class="productInfo-info-title-text"><a href="#">韓版氣質V領复古大擺裙純色收腰開叉洋裝韓版氣質</a><span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="買家留言">
                                                    <div class="tableDeta-box">
                                                        <div class="buyer-messageBox">
                                                            <!-- 買家資訊 -->
                                                            <div class="itemInfoGroup">
                                                                <div class="list__itemInfo-userImg img-bg" style="background-image: url('img/buyer_avator_default.svg');">
                                                                </div>
                                                                <span class="list__itemInfo list__itemInfo-userName">so*****************om<span class="list__itemInfo-country">SG</span></span>
                                                                </div>
                                                                <!-- 買家留言 -->
                                                                <span class="msg-text">我還沒有收到商品，請問什麼時候會到貨呢？請老闆麻煩幫忙確認一下。</span>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="2">

                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-xs-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">

                                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>

                                                            <a class="sea-ui btn-xs btn-primary" href="qareview-order-reply.php">留言</a>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單留言 End -->




                                        <!-- 單筆訂單留言 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="2">
                                                    <div class="tableData-header">
                                                        <div class="table_flexBox table_flexBox-between">

                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="sea-btn-icon icon-alert-nofill icon-back icon-back-red"></i>待回覆</span>
                                                            </div>

                                                            <div class="date-time">
                                                                <span class="eng-num date-time">2018/05/28<time>01:28</time></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="table_row_body">
                                                <td data-title="商品">
                                                    <div class="tableDeta-box">
                                                        <!-- 商品資訊群組（圖＋文） -->
                                                        <div class="productInfoGroup">
                                                            <!-- 商品圖片 -->
                                                            <div class="productInfo-img">
                                                                <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                            </div>
                                                            <!-- </div> -->

                                                            <!-- 商品資訊 -->
                                                            <div class="productInfo-info">

                                                                <!-- 訂單編號 -->
                                                                <div class="productInfo-info-orderNum">
                                                                    <span class="productInfo-info-orderNum-title">訂單編號</span>
                                                                    <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                                </div>

                                                                <!-- 商品名稱 -->
                                                                <div class="productInfo-info-title">
                                                                    <span class="productInfo-info-title-text"><a href="#">韓版氣質V領复古大擺裙純色收腰開叉洋裝韓版氣質</a><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="買家留言">
                                                    <div class="tableDeta-box">
                                                        <div class="buyer-messageBox">
                                                            <!-- 買家資訊 -->
                                                            <div class="itemInfoGroup">
                                                                <div class="list__itemInfo-userImg img-bg" style="background-image: url('img/buyer_avator_default.svg');">
                                                                </div>
                                                                <span class="list__itemInfo list__itemInfo-userName">so*****************om<span class="list__itemInfo-country">SG</span></span>
                                                                </div>
                                                                <!-- 買家留言 -->
                                                                <span class="msg-text">請幫忙取消訂單，因為我想重新下單一次。謝謝!!</span>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="2">

                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-xs-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">

                                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>

                                                            <a class="sea-ui btn-xs btn-primary" href="qareview-order-reply.php">回覆留言</a>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單留言 End -->



                                        <!-- 單筆訂單留言 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="2">
                                                    <div class="tableData-header">

                                                        <div class="table_flexBox table_flexBox-between">

                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="sea-btn-icon icon-alert-nofill icon-back icon-back-red"></i>未讀取</span>
                                                            </div>

                                                            <div class="date-time">
                                                                <span class="eng-num date-time">2018/05/28<time>01:28</time></span>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="table_row_body">
                                                <td data-title="商品">
                                                    <div class="tableDeta-box">
                                                        <!-- 商品資訊群組（圖＋文） -->
                                                        <div class="productInfoGroup">
                                                            <!-- 商品圖片 -->
                                                            <div class="productInfo-img">
                                                                <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                            </div>
                                                            <!-- </div> -->

                                                            <!-- 商品資訊 -->
                                                            <div class="productInfo-info">

                                                                <!-- 訂單編號 -->
                                                                <div class="productInfo-info-orderNum">
                                                                    <span class="productInfo-info-orderNum-title">訂單編號</span>
                                                                    <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                                </div>

                                                                <!-- 商品名稱 -->
                                                                <div class="productInfo-info-title">
                                                                    <span class="productInfo-info-title-text"><a href="#">韓版氣質V領复古大擺裙純色收腰開叉洋裝韓版氣質</a><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="買家留言">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="buyer-messageBox">
                                                            <!-- 買家資訊 -->
                                                            <div class="itemInfoGroup">
                                                                <div class="list__itemInfo-userImg img-bg" style="background-image: url('img/buyer_avator_default.svg');">
                                                                </div>
                                                                <span class="list__itemInfo list__itemInfo-userName">so*****************om<span class="list__itemInfo-country">SG</span></span>
                                                                </div>
                                                                <!-- 買家留言 -->
                                                                <span class="msg-text">請問您已經出貨了嗎？請問您已經出貨了嗎？請問您已經出貨了嗎？我還沒有收到商品！我還沒有收到商品！我還沒有收到商品！請問什麼時候會到貨呢？請老闆麻煩幫忙確認一下。</span>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="2">

                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-xs-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">

                                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>

                                                            <a class="sea-ui btn-xs btn-primary" href="qareview-order-reply.php">回覆留言</a>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單留言 End -->


                                    </table>
                                </div>
                            </div>
                            <!-- 整體表格結束 -->
                            <!-- PC 版 列出所有頁碼 -->
                            <div class="sea-ui page-pagination hidden-sm-down">
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
                            <div class="sea-btn-loadcontent hidden-sm-up">
                                <a href="#" class="sea-ui btn btn-primary btn-load">LOAD MORE</a>
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
    <!-- PChomeSEA Panel -->
    <?php include("assets/slide-panel/panel-global.php"); ?>
    <!-- PChomeSEA Panel end-->
    <!-- PChomeSEA lightBox -->
    <section id="sea-lightbox">
        <div class="sea-lightBox_backGround"></div>
        <div class="sea-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <!--頁面會出現的lightbox放這裡-->
            <?php include("assets/lightbox/orderlist/lightbox-orderlist.php"); ?>
            <!--頁面與面板都會出現的lightbox放這裡-->
            <?php include("assets/slide-panel/lightbox/panel-lightbox-orderdetail.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->
    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->
    <!-- 主選單預設開啟（編號） -->
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(6)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

</body>

</html>