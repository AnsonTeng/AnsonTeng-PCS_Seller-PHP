$(document).ready(function() {
    // 購買多件商品
    $(".buymanyBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-buymany").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    //-－－－ 燈箱按鈕偵聽 －－－－－

    // 燈箱－回覆評價
    $(".replyreviewsBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-replyreview").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
    // 燈箱－過去評價
    $(".historyreviewsBtn").on("click", function() {
        $("#pct-lightbox")
            .children(".pct-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#pct-lightbox-historyreview").show();
        $("#pct-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});
