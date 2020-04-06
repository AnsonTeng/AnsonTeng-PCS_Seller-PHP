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
    <link rel="stylesheet" type="text/css" href="css/orderlist.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

    <title>PChomeSEA | 所有訂單</title>
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

                            <!-- PChomeSEA Account Header -->
                            <!--說明For RD：手機版不出現-->
                            <?php include("assets/account-header.php"); ?>
                            <!-- PChomeSEA Account Header end-->

                            <!-- 頁面標題與麵包屑 -->
                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-orderlist"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>訂單管理</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>所有訂單</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->

                            <!-- 訂單搜尋開始-->
                            <div class="orderlistSearch">
                                <!-- 商品搜尋開始-->
                                <div class="inputGroupWithOption">
                                    <div class="inputGroupWithOption-inner">
                                        <div class="sea-ui form inputGroup">
                                            <div class="inputGroup-inputBox">
                                                <div class="sea-ui form">
                                                    <input type="text" placeholder="請輸入訂單編號或商品名稱查詢">
                                                </div>
                                            </div>
                                            <a href="#" class="sea-ui btn-sm btn-primary inputGroup-btn">搜尋訂單</a>
                                        </div>
                                    </div>
                                    <a class="add_condition">新增更多搜尋條件<span class="sea-seller-icon icon-plus"></span></a>
                                </div>

                                <!-- 訂單搜尋＿新增條件-->
                                <div class="orderlistSearch__advanceSearch" style="display: none;">
                                    <!-- 日期區間 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">訂單成立日期</p>
                                        <div class="orderlistSearch__items">
                                            <div class="sea-ui form">
                                                <input class="form-control datepicker" type="text" placeholder="開始：MM/DD/YYYY" readonly="true">
                                            </div>
                                            <span></span>
                                            <div class="sea-ui form">
                                                <input class="form-control datepicker" type="text" placeholder="結束：MM/DD/YYYY" readonly="true">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 訂單狀態 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">訂單狀態</p>
                                        <div class="sea-ui form select">
                                            <select>
                                                <option value="0">請選擇</option>
                                                <option value="1">待付款</option>
                                                <option value="2">已付款</option>
                                                <option value="3">收款完成</option>
                                                <option value="4">退款申請</option>
                                                <option value="5">訂單取消</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- 物流狀態 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">物流狀態</p>
                                        <div class="sea-ui form select">
                                            <select>
                                                <option value="0">請選擇</option>
                                                <option value="1">未出貨</option>
                                                <option value="2">待出貨</option>
                                                <option value="3">已出貨</option>
                                                <option value="4">已收貨</option>
                                                <option value="5">送件失敗</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- 訂單來源 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">訂單來源</p>
                                        <div class="sea-ui form select">
                                            <select>
                                                <option value="th">TH</option>
                                                <option value="vn">VN</option>
                                                <option value="sg">SG</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 訂單搜尋結束-->

                            <!-- 訂單列表總數 金額 與顯示筆數選單 -->
                            <div class="searchBarGroup">
                                <div class="sea-section-header sub-header">
                                    <h4>
                                        <div class="sub-header-text">共<span class="eng-num">23</span>筆</div>
                                        <div class="sub-header-text">總金額<span class="eng-num">125,200</span>元</div>
                                    </h4>
                                    <!-- 匯出訂單 -->
                                    <div class="exportOrderList">
                                        <a class="sea-ui btn-sm btn"><i class="sea-btn-icon icon-orderlist hidden-xxs-down"></i>匯出訂單</a>
                                    </div>

                                </div>
                                <div class="quantity-select hidden-sm-down">
                                    <div class="sea-ui form select ">
                                        <select>
                                            <option value="20">顯示10筆</option>
                                            <option value="10">顯示20筆</option>
                                            <option value="30">顯示30筆</option>
                                            <option value="50">顯示50筆</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- 訂單列表總數 金額 與顯示筆數選單 結束 -->

                            <!-- 標籤導航 -->
                            <div class="sea-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="sea-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">所有訂單 (15)</a></li>
                                        <li><a href="#tab2">待付款 (5)</a></li>
                                        <li><a href="#tab3">待出貨 (4)</a></li>
                                        <li><a href="#tab4">運送中 (3)</a></li>
                                        <li><a href="#tab5">訂單取消申請 (2)</a></li>
                                        <li><a href="#tab6">退款申請 (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 標籤導航 結束 -->

                            <!-- 所有訂單容器 -->
                            <div class="orderlistBox">

                                <!--說明FOR RD: 沒有任何訂單時 -->
                                <div class="table_default_empaty">
                                    <div class="message-text">沒有訂單紀錄</div>
                                </div>
                                <div class="table_default_empaty" style="display: none;">
                                    <div class="message-text">沒有訂單紀錄</div>
                                </div>

                                <!-- 單筆訂單-改版 待付款 未出貨-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>待付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>
                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->



                                <!-- 單筆訂單 已付款 通知已出貨-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                            <!--中華郵政-->
                                            <a class="sea-ui btn-xs btn-primary dispatchListEmsBtn" href="#">我要出貨</a>
                                            <a class="sea-ui btn-xs btn-primary dispatchListSflBtn" href="#">我要出貨(測:翔丰)</a>
                                            <a class="sea-ui btn-xs btn-primary dispatchListAcsBtn" href="#">我要出貨(測:ACS)</a>
                                            <a class="sea-ui btn-xs btn-primary dispatchListSellerBtn" href="#">我要出貨(測:賣家自配)</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <!-- 單筆訂單 已付款 未出貨-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                            <a class="sea-ui btn-xs btn-primary informdispatchBtn" href="#">通知已出貨</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <!-- 單筆訂單 已付款 已出貨-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">已出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                            <a class="sea-ui btn-xs btn-primary trackingLogBtn" href="#">運送進度</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->



                                <!-- 單筆訂單 已收款 已收貨-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">已收貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->




                                <!-- 單筆訂單（買家）取消訂單申請中-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>取消訂單申請中</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                            <a class="sea-ui btn-xs btn-primary agreecancelBtn" href="#">回覆取消申請</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->




                                <!-- 單筆訂單（買家）取消訂單申請中-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>退款申請中</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                            <a class="sea-ui btn-xs btn-primary refundBtn" href="#">同意退款</a>
                                            <a class="sea-ui btn-xs btn-primary disputeBtn" href="#">爭議處理</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->





                                <!-- 單筆訂單 失效訂單-->
                                <div class="orderlistBox-orderlist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable orderlist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-delete icon-back icon-back-gray"></i>付款失敗</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                    <!-- 訂單資訊群組 -->
                                    <div class="flexTable orderlist-infoBar">
                                        <div class="flexTable infoBar-orderNumBox">
                                            <!-- 訂單編號 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單編號</span>
                                                <span class="orderlist-title eng-num">9041800006091</span>
                                            </div>
                                            <!-- 訂單日期 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單日期</span>
                                                <span class="orderlist-title eng-num">2020/07/26</span>
                                            </div>
                                        </div>
                                        <div class="flexTable infoBar-orderSourseBox">
                                            <!-- 訂單來源 -->
                                            <div class="orderNumBox-orderNum">
                                                <span class="orderlist-subtitle">訂單來源</span>
                                                <span class="orderlist-title eng-num">SG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單商品內容群組 -->
                                    <div class="flexTable orderlist-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                    <!-- 商品規格 -->
                                                    <div class="productInfo-info-subtitle">
                                                        <span class="productInfo-info-subtitle-text">Size / Color / Type / Size / Color / Type / Size / Color / Type / Size / Color / Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 商品金額 -->
                                        <div class="flexTable productBar-total">
                                            <!-- 訂單內商品數量（手機版顯示） -->
                                            <div class="total-quantity hidden-md-up">
                                                <span class="orderlist-subtitle">共</span>
                                                <span class="orderlist-title eng-num">90</span>
                                                <span class="orderlist-subtitle">件商品</span>
                                            </div>
                                            <!-- 訂單總金額 -->
                                            <div class="total-amount">
                                                <span class="orderlist-title eng-num"><img src="img/icon_pcprotect_badge.svg">$124,200</span>
                                            </div>
                                        </div>

                                        <!-- 商品物流狀態 -->
                                        <div class="flexTable productBar-logistic">
                                            <div class="logistic-status">
                                                <span class="orderlist-title">未出貨</span>
                                            </div>
                                            <div class="logistic-company" style="display: none">
                                                <span class="orderlist-subtitle">中華郵政 EMS</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar">
                                        <!-- 訂單內商品數量 （電腦版顯示） -->
                                        <div class="hidden-md-down">
                                            <span class="orderlist-subtitle">共</span>
                                            <span class="orderlist-title eng-num">90</span>
                                            <span class="orderlist-subtitle">件商品</span>
                                        </div>
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary-outlined js-sea-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->






                            </div> <!-- 所有訂單容器 結束 -->

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

    <!--訂單管理 JS-->
    <script type="text/javascript" src="js/js_orderlist.js"></script>

    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(2)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>



    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>
    <!-- 月曆用JS/CSS-->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-datepicker.standalone.min.css">
    <script type="text/javascript" src="js/plugin/bootstrap/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugin/bootstrap/locales/bootstrap-datepicker.zh-TW.js"></script>
    <script>
    //說明FOR RD: 多國語系月曆判斷在此 
    //- bootstrap4 月曆
    $('.datepicker').datepicker({
        orientation: 'bottom',
        autoclose: true,
        language: 'zh-TW'
        // language: 'uk' 英文語系
        //language: 'th' 泰文語系
    });
    </script>


</body>

</html>