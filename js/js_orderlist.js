$(document).ready(function () {
    //-－－－ 燈箱按鈕偵聽 －－－－－

    // 燈箱－同意退款
    $(".refundBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-refund").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－我要出貨（中華郵政）
    $(".dispatchListEmsBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-dispatchList-EMS").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－我要出貨（翔丰物流）
    $(".dispatchListSflBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-dispatchList-SFL").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－我要出貨（ACS快遞）
    $(".dispatchListAcsBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-dispatchList-ACS").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－我要出貨（賣家自行配送）
    $(".dispatchListSellerBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-dispatchList-Seller").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－通知出貨明細
    $(".informdispatchBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-informdispatch").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－確認付款資料
    $(".confirmpaymentBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-confirmpayment").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－同意取消訂單申請
    $(".agreecancelBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-agreecancel").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－申請爭議處理
    $(".disputeBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-dispute").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－聯絡買家
    $(".contactbuyerBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-contactbuyer").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－取消原因說明
    $(".cancelresonBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-cancelreson").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－取消訂單
    $(".cancelorderlistBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-cancelorderlist").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－匯出訂單
    // $(".exportOrderListBtn").on("click", function () {
    //     $("#sea-lightbox")
    //         .children(".sea-lightBox_inner")
    //         .children("div")
    //         .hide();
    //     // 要顯示的燈箱ＩＤ名稱
    //     $("#sea-lightbox-cexportOrderList").show();
    //     $("#sea-lightbox").toggle();
    //     // 鎖住背景物件滑動函式
    //     lockBody();
    //     return false;
    // });
});