// ---全域變數----

// ::::::::: 測試用 :::::::::::::::::::::

// 登入狀態
var $login = true;
//var $login = false;

// 購物車內商品狀態
var $shoppingCartEmpty = true;
//var $shoppingCartEmpty = false;

// 通知中心內訊息狀態
var $notificationCenterEmpty = true;
//var $notificationCenterEmpty = false;

// 啟用搜尋類別按鈕
// var $searchTypeBarSwitch = true;
var $searchTypeBarSwitch = false;

// ::::::::: 測試用 :::::::::::::::::::::






// ---全域變數----

// 螢幕寬度
var $screenWidth;

// 是否使用行動裝置
var $useMobile;
var $isMobile ;

// 漢堡選單開關：關
var $burgerSwitch = false;

//手機版搜尋BAR狀態：關
var $searchBarSwitch = false;

//手機版搜尋BAR推薦搜尋BAR狀態：關
var $searchBarInnerBarSwitch = false;

// Header 下拉選單開關：關
var $headerDropdownSwitch = false;



// 手機左方選單寬度
var $navWidth_mobile = 290;



// 網頁可見視窗 滾輪移動距離
var $windowScrollTop;


// 燈箱開關：關
var $lightBoxSwitch = false;



// 檢查使用者裝置函式
function checkDevice() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $useMobile = true;
        $isMobile = true;
        // console.log("使用行動裝置! Mobile!");
    } else {
        $useMobile = false;
        $isMobile = false;
        // console.log("使用桌上型裝置! Desktop!");
    }
}


// 檢查螢幕寬度函式
function checkzScreenWidth() {
    $screenWidth = $(window).width();
    // console.log($screenWidth);
    if($screenWidth <= 768){
        $useMobile = true;
        console.log("改用行動裝置! Mobile!");
    }else{
        $useMobile = false;
        console.log("改用桌上型裝置! Desktop!");
    }
}

