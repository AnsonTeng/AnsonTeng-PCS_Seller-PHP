$(document).ready(function() {
    // 購買多件商品
    $(".buymanyBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-buymany").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    //-－－－ 燈箱按鈕偵聽 －－－－－

    // 燈箱－回覆評價
    $(".replyreviewsBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-replyreview").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
    // 燈箱－過去評價
    $(".historyreviewsBtn").on("click", function() {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-historyreview").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});
