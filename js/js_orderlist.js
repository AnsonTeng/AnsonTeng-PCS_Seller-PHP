 $(document).ready(function() {
 	
    //-－－－ 燈箱按鈕偵聽 －－－－－
    // 燈箱－同意退款
    $('.refundBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-refund').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

        // 燈箱－列印出貨單
    $('.printdispatchBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-printdispatch').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－通知出貨明細
    $('.informdispatchBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-informdispatch').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－確認付款資料
    $('.confirmpaymentBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-confirmpayment').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－同意取消訂單申請
    $('.agreecancelBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-agreecancel').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－申請爭議處理
    $('.disputeBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-dispute').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－聯絡買家
    $('.contactbuyerBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-contactbuyer').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－取消原因說明
    $('.cancelresonBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-cancelreson').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－取消訂單
    $('.cancelorderlistBtn').on('click', function() {
        $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#pct-lightbox-cancelorderlist').show();
        $('#pct-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});
