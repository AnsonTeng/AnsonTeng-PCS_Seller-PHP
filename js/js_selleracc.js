$(document).ready(function() {
    // 發票設定-個人
    $(".setPersonalInvoiceBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-setInvoice-personal").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 發票設定-公司
    $(".setCompanyInvoiceBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-setInvoice-company").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 提領款項
    $(".withdrawalBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-withdrawal").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 結算狀態說明
    $(".settlementStatusBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-settlementStatus").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－款項狀態()
    $(".accountStepBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-accountStep").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－款項狀態()
    $(".accountStepCompleteBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-accountStep-complete").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領狀態
    $(".withdrawalStepBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-withdrawalStep").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－繳交費用
    $(".payFeeBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-payFee").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態01
    $(".deleteVerifiedBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-delete-varified").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態03/04
    $(".deleteVerifyfailedBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-delete-verifyfailed").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態03/04 失敗原因
    $(".failedinfoBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-delete-failedinfo").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});
