//燈箱

// 電話驗證-輸入驗證碼
$('.modifyphonenumberBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-modifyphonenumber').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});

// 電話驗證-輸入電話
$('.inputphonenumberBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-inputphonenumber').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});

// 電話驗證-輸入新的驗證碼
$('.newmodifyphonenumberBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-modifynewphonenumber').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody();
    return false;
});


// 編輯資料燈箱（退貨地址與收件者）
$('.editinformationBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-editinformation').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody()
    return false;
});


// 備貨天數燈箱
$('.processingDayBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-stockPrepare').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody()
    return false;
});



// 付款方式燈箱
$('.mobilebankingBtn').on('click', function () {
    $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
    // 要顯示的燈箱ＩＤ名稱
    $('#sea-lightbox-mobilebanking').show();
    $('#sea-lightbox').toggle();
    // 鎖住背景物件滑動函式
    lockBody()
    return false;
});