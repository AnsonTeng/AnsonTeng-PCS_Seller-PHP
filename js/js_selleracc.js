$(document).ready(function() {
    // 發票設定-個人
    $(".setPersonalInvoiceBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-setInvoice-personal").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 發票設定-公司
    $(".setCompanyInvoiceBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-setInvoice-company").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 提領款項
    $(".withdrawalBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-withdrawal").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 結算狀態說明
    $(".settlementStatusBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-settlementStatus").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－款項狀態()
    $(".accountStepBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-accountStep").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－款項狀態()
    $(".accountStepCompleteBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-accountStep-complete").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領狀態
    $(".withdrawalStepBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-withdrawalStep").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－繳交費用
    $(".payFeeBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-payFee").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態01
    $(".deleteVerifiedBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-delete-varified").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態03/04
    $(".deleteVerifyfailedBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-delete-verifyfailed").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 燈箱－提領設定--狀態03/04 失敗原因
    $(".failedinfoBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-delete-failedinfo").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});
