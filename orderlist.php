<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="PChome Online Inc. เป็นกลุ่มบริษัทอีคอมเมิร์ซที่ใหญ่ที่สุดในไต้หวัน ขณะนี้เราได้เปิดให้บริการในประเทศไทยฟรีสำหรับทั้งผู้ขายและผู้ซื้อ คุณอยากจะขายหรืออยากจะซื้อของอะไรก็ได้ทั้งนั้นที่ PChome Thai ไม่ว่าจะเครื่องสำอาง, เสื้อผ้าแฟชั่น, เครื่องใช้ไฟฟ้า, หนังสือ, ของเล่น และอื่นๆ อีกมากมาย">
    <meta property="og:title" content="ออนไลน์ช้อปปิ้ง ที่ทุกสิ่งเป็นเรื่องแสนง่ายและสนุก" />
    <meta property="og:description" content="หาได้ทุกอย่างที่ต้องการที่ พีซีโฮมไทย - เครื่องสำอาง,เสื้อผ้าแฟชั่น, อุปกรณ์ไฟฟ้า, หนังสือ, ของเล่น และอื่นอีกมากมาย" />
    <meta property="og:image" content="http://cimg.pchome.co.th/fb/PchomeShop.jpg" />
    <meta property="og:url" content="http://www.pchome.co.th" />
    <meta property="og:site_name" content="PChome SEA" />
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
    <link rel="stylesheet" type="text/css" href="css/orderlist.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

    <title>PChome SEA | 所有訂單</title>
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
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52F2P7M" height="0" width="0" style="display:none;visibility:hidden"></iframe>
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
                                <span class="pct-icon icon-orderlist"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>訂單管理</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>所有訂單</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->
                            <!-- 訂單搜尋開始-->
                            <div class="orderlistSearch">

                                <!-- 商品搜尋開始-->
                                <div class="inputGroupWithOption">
                                    <div class="inputGroupWithOption-inner">
                                        <div class="pct-ui form inputGroup">
                                            <div class="inputGroup-inputBox">
                                                <div class="pct-ui form">
                                                    <input type="text" placeholder="請輸入訂單編號或商品名稱查詢">
                                                </div>
                                            </div>
                                            <a href="#" class="pct-ui btn-sm btn-secondary inputGroup-btn">搜尋訂單</a>
                                        </div>
                                    </div>
                                    <a class="add_condition">新增更多搜尋條件<span class="pct-icon icon-plus"></span></a>
                                </div>

                                <!-- 訂單搜尋＿新增條件-->
                                <div class="orderlistSearch__advanceSearch" style="display: none;">
                                    <!-- 日期區間 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">訂單成立日期</p>
                                        <div class="orderlistSearch__items">
                                            <div class="pct-ui form">
                                                <input class="form-control datepicker" type="text" placeholder="開始：MM/DD/YYYY" readonly="true">
                                            </div>
                                            <span> </span>
                                            <div class="pct-ui form">
                                                <input class="form-control datepicker" type="text" placeholder="結束：MM/DD/YYYY" readonly="true">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 訂單狀態 -->
                                    <div class="orderlistSearch__advanceSearch__list">
                                        <p class="orderlistSearch__itemTitle">訂單狀態</p>
                                        <div class="pct-ui form select">
                                            <select>
                                                <option value="0">請選擇狀態</option>
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
                                        <div class="pct-ui form select">
                                            <select>
                                                <option value="0">請選擇狀態</option>
                                                <option value="1">未出貨</option>
                                                <option value="2">待出貨(已付款)</option>
                                                <option value="3">已出貨</option>
                                                <option value="4">已收貨</option>
                                                <option value="5">送件失敗</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 訂單搜尋結束-->
                            <!-- 訂單列表總數 金額 與顯示筆數選單 -->
                            <div class="searchBarGroup">
                                <div class="pct-section-header sub-header">
                                    <h4>
                                        <div class="sub-header-text">共 <span class="eng-num">23</span> 筆</div>
                                        <div class="sub-header-text">總金額 <span class="eng-num">125,200</span> 元</div>
                                    </h4>

                                </div>
                                <div class="hidden-sm-down">
                                    <div class="pct-ui form select ">
                                        <select>
                                            <option value="20">顯示10筆</option>
                                            <option value="10">顯示20筆</option>
                                            <option value="30">顯示30筆</option>
                                            <option value="50">顯示50筆</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- 標籤導航 -->
                            <div class="pct-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="pct-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">
                                                <!-- คำสั่งซื้อทั้งหมด -->所有訂單 (15)</a></li>
                                        <li><a href="#tab2">
                                                <!-- คำสั่งซื้อทั้งหมด -->待付款 (5)</a></li>
                                        <li><a href="#tab3">
                                                <!-- รอการจัดส่ง -->待出貨 (4)</a></li>
                                        <li><a href="#tab4">
                                                <!-- อยู่ระหว่างการขนส่ง -->運送中 (3)</a></li>
                                        <li><a href="#tab5">
                                                <!-- ยกเลิกแอปพลิเคชัน -->訂單取消申請 (2)</a></li>
                                        <li><a href="#tab6">
                                                <!-- แอปพลิเคชั่นคืนเงิน -->退款申請 (1)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 整體表格 -->
                            <div class="tableBox tableBox-orderlist">
                                <!-- <div class="table__thead">
                                    <table>
                                        <colgroup>
                                            <col class="table--w45">
                                            <col class="table--w25">
                                            <col class="table--w30">
                                        </colgroup>

                                        <thead>
                                            <tr>
                                                <th>商品</th>
                                                <th>訂單總金額</th>
                                                <th>物流狀態</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div> -->
                                <div class="table__tbody table-orderlist">
                                    <table>
                                        <!-- colgroup -->
                                        <colgroup>
                                            <col class="table--w45">
                                            <col class="table--w25">
                                            <col class="table--w30">
                                        </colgroup>

                                        <!-- 單筆訂單-改版 待付款 未出貨-->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-wait icon-back icon-back-red"></i>待付款</span>
                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <!-- 訂單內商品數量 -->
                                                            <div class="orderlist_amount hidden-md-up">
                                                                <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>
                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">
                                                                    <!--PChome Thai Supported
                                                                    Shipping Internation Delivery(Without Tax)-->
                                                                    PChome Thai 支援的國際物流（不含稅）</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            <a class="pct-ui btn-xs btn-primary confirmpaymentBtn" href="#">確認收款</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->



                                        <!-- 單筆訂單 （賣家）取消訂單申請中 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-wait icon-back icon-back-red"></i>待付款</span>
                                                            </div>
                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_subtitle orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            <a class="pct-ui btn-xs btn-primary cancelresonBtn" href="#">取消訂單</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->




                                        <!-- 單筆訂單-改版 已付款 未出貨-->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">

                                                            <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>已付款
                                                            </span>

                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>
                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <div class="table_inlineBox">
                                                                <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            </div>

                                                            <!--說明FOR RD: 判斷該商品選擇何種物流方式 只顯示一顆按鈕 並呼叫不同彈跳視窗 -->
                                                            <div class="table_inlineBox">
                                                                <a class="pct-ui btn-xs btn-primary dispatchListEmsBtn" href="#">我要出貨
                                                                    <!--中華郵政--></a>
                                                                <a class="pct-ui btn-xs btn-primary dispatchListSflBtn" href="#">我要出貨(測:翔丰)</a>
                                                                <a class="pct-ui btn-xs btn-primary dispatchListAcsBtn" href="#">我要出貨(測:ACS)</a>
                                                                <a class="pct-ui btn-xs btn-primary dispatchListSellerBtn" href="#">我要出貨(測:賣家自配)</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->


                                        <!-- 單筆訂單-改版 已付款 通知已出貨-->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                                            </div>

                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>
                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">賣家自行配送</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            <a class="pct-ui btn-xs btn-primary informdispatchBtn" href="#">通知已出貨</a>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->





                                        <!-- 單筆訂單 已完成 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                                            </div>
                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">

                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">
                                                                    <a class="trackingLogBtn" href="#">運送中</a>
                                                                    <span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <div class="table_inlineBox">
                                                                <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單 End -->



                                        <!-- 單筆訂單 已完成 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-checked icon-back icon-back-green"></i>已完成</span>
                                                            </div>
                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">

                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">
                                                                    <a class="dispatchdetailBtn" href="#">已收貨</a>
                                                                    <span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <div class="table_inlineBox">
                                                                <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單 End -->






                                        <!-- 單筆訂單 （買家）取消訂單申請中 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-wait icon-back icon-back-red"></i>取消訂單申請中</span>
                                                            </div>


                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">

                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                            <a class="pct-ui btn-xs btn-primary agreecancelBtn" href="#">回覆取消申請</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->



                                        <!-- 單筆訂單 （買家）取消訂單申請中 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-wait icon-back icon-back-red"></i>取消訂單申請中</span>
                                                            </div>

                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">

                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>

                                                            <a class="pct-ui btn-xs btn-primary refundBtn" href="#">同意退款申請</a>

                                                            <a class="pct-ui btn-xs btn-primary disputeBtn" href="#">申請爭議處理</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->



                                        <!-- 單筆訂單 失效訂單 -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">
                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-delete icon-back icon-back-gray"></i>失效訂單</span>
                                                            </div>

                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
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
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_subtitle orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">

                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>

                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                            <a class="pct-ui btn-xs btn-primary-outlined js-pct-panel-trigger" data-panel="orderDetails" href="#">訂單明細</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->



                                        <!-- 暫時不用 -->
                                        <!-- 單筆訂單 (黑名單)  -->
                                        <tbody>
                                            <tr class="table_row_header">
                                                <td colspan="3">
                                                    <div class="tableData-header">
                                                        <!-- 訂單狀態 -->
                                                        <div class="table_flexBox table_flexBox-between">

                                                            <div class="table_inlineBox">
                                                                <span class="list__itemInfo list_status"><i class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                                            </div>

                                                            <div class="contanctSeller">
                                                                <a class="pct-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="pct-btn-icon icon-comment"></i>聯絡買家
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="table_row_body orderlist-disable">
                                                <td data-title="商品">
                                                    <div class="tableDeta-box">
                                                        <!-- 商品資訊群組（圖＋文） -->
                                                        <div class="productInfoGroup">
                                                            <!-- 商品圖片 -->
                                                            <div class="productInfo-img">
                                                                <a href="#"><img class="img-fluid" src="https://cimg.pchome.co.th/prods/052/047/3011905204743_b_0.jpg?uid=1a7c47e6cc2e4429ab18167d7a66ce02" alt="Product-Picture"></a>
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
                                                                    <span class="productInfo-info-title-text"><a href="#">เปลัดขิก หลวงพ่อกลั่น วัดอินทราวาส
                                                                            อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร
                                                                            เก่ามาก สวย สมบูรณ์ หายากมาก</a><span>
                                                                </div>

                                                                <!-- 商品規格 -->
                                                                <div class="productInfo-info-subtitle">
                                                                    <span class="productInfo-info-subtitle-text">Size /
                                                                        Color / Type / Size / Color / Type / Size /
                                                                        Color / Type / Size / Color / Type<span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-title="訂單總金額">
                                                    <div class="tableDeta-box">
                                                        <!-- 訂單總金額 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title-inline orderlist_title-icon"><img src="img/icon_pcprotect_badge.svg"></span>
                                                                    <span class="orderlist_title-inline orderlist_title-withicon eng-num">฿124,200<span>
                                                            </div>
                                                            <div class="orderlist_titleBox text__align--center hidden-md-up">
                                                                <span class="orderlist_subtitle orderlist_amount">
                                                                    <span>Total</span>
                                                                    <span class="orderlist_amount_num eng-num">90</span>
                                                                    <span>items</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td data-title="物流狀態">
                                                    <div class="tableDeta-box">
                                                        <!-- 物流狀態 -->
                                                        <div class="table_inlineBox-flex">
                                                            <div class="orderlist_titleBox text__align--center">
                                                                <span class="orderlist_title">未出貨<span>
                                                            </div>
                                                            <div class="orderlist_subtitleBox text__align--center">
                                                                <span class="orderlist_subtitle">中華郵政 EMS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 按鈕 -->
                                            <tr class="table_row_bottom">
                                                <td colspan="3">
                                                    <div class="table_flexBox table_flexBox-between">
                                                        <!-- 訂單內商品數量 -->
                                                        <div class="orderlist_amount hidden-md-down">
                                                            <span>Total</span>
                                                            <span class="orderlist_amount_num eng-num">90</span>
                                                            <span>items</span>
                                                        </div>

                                                        <!-- 操作按鈕欄 -->
                                                        <div class="table_flexBox table_flexBox-right table_flexBox-wrap">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- 單筆訂單-改版 End -->
                                    </table>
                                </div>
                            </div>
                            <!-- 整體表格結束 -->
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
                            <div class="pct-btn-loadcontent hidden-sm-up">
                                <a href="#" class="pct-ui btn btn-primary btn-load">LOAD MORE</a>
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


    <!--訂單管理 JS-->
    <script type="text/javascript" src="js/js_orderlist.js"></script>
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