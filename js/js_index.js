 $(document).ready(function() {
 	
    //-－－－ 燈箱按鈕偵聽 －－－－－

    // 申請P-Mall燈箱
    $('.PMallApplyBtn').on('click', function() {
        $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#sea-lightbox-PMallApply').show();
        $('#sea-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody()
        return false;
    });


    // 申請P-Mall審核未通過燈箱
    $('.PMallApplyFailBtn').on('click', function() {
        $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
        // 要顯示的燈箱ＩＤ名稱
        $('#sea-lightbox-PMallApplyFail').show();
        $('#sea-lightbox').toggle();
        // 鎖住背景物件滑動函式
        lockBody()
        return false;
    });

});
