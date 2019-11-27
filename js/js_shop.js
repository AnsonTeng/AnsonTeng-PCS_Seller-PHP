//燈箱

// 電話驗證-輸入驗證碼
$('.modifyphonenumberBtn').on('click', function() {
    $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#pct-lightbox-modifyphonenumber').show();
    $('#pct-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});

// 電話驗證-輸入電話
$('.inputphonenumberBtn').on('click', function() {
    $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#pct-lightbox-inputphonenumber').show();
    $('#pct-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});

// 電話驗證-輸入新的驗證碼
$('.newmodifyphonenumberBtn').on('click', function() {
    $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#pct-lightbox-modifynewphonenumber').show();
    $('#pct-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});


// 編輯資料燈箱（退貨地址與收件者）
$('.editinformationBtn').on('click', function() {
    $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#pct-lightbox-editinformation').show();
    $('#pct-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody()
    return false;
});


// 備貨天數燈箱
$('.processingDayBtn').on('click', function() {
    $('#pct-lightbox').children('.pct-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#pct-lightbox-stockPrepare').show();
    $('#pct-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody()
    return false;
});



