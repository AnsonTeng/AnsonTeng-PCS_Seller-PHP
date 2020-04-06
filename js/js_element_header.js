// 目前開啟的選單號碼
var $headerBtnIndex = -1;

// 初始化
$(document).ready(function() {
    // var lan = getCookie('lan');
    // var cnt = 0;
    // var kwordArr = [];
    // var tid;
    // var cinput = false;
    // var cartOpen = false;
    // var delcarpro = false;

    // 隱藏 點擊關閉用黑底
    $(".clickBack").hide();

    //PC 一般版搜尋ＢＡＲ點擊偵聽
    $(".search-Bar").focus(function(e) {
        $(".search-list").addClass("search-list--focus");

        // 如果點選搜尋BAR了 要隱藏被打開的搜尋類別按鈕
        if ($(".search-type-toggle").hasClass("search-type-toggle--focus")) {
            $(".search-type-toggle").toggleClass("search-type-toggle--focus");
        }
        e.stopPropagation();
    });
    $(".search-Bar").focusout(function(e) {
        $(".search-list").removeClass("search-list--focus");

        e.stopPropagation();
    });

    // 檢查搜尋BAR是否要開啟搜尋類別按鈕選單（例：搜尋商品或商店）
    if ($searchTypeBarSwitch) {
        $(".searchBarBox")
            .find(".search-typeBtn")
            .show();
        $(".search-typeBtn")
            .next()
            .css("border-radius", "0px");

        // 啟動按鈕偵聽
        $(".search-typeBtn").on("click", function(e) {
            $(".search-type-toggle").toggleClass("search-type-toggle--focus");
            e.stopPropagation();
        });
        // 啟動內容按鈕偵聽
        $(".other-search-type").on("click", function(e) {
            $(".search-type-toggle").toggleClass("search-type-toggle--focus");
            e.stopPropagation();
        });

        // 隱藏電腦版的類別搜尋選項
        $(".search-list")
            .find(".search-list-hints-type")
            .hide();
        // 隱藏手機版的類別搜尋選項
        $(".mb-Search-lists")
            .find(".search-list-hints-type")
            .hide();
    } else {
        $(".searchBarBox")
            .find(".search-typeBtn")
            .hide();

        // 顯示電腦版的類別搜尋選項
        $(".search-list")
            .find(".search-list-hints-type")
            .show();
        // 顯示手機版的類別搜尋選項
        $(".mb-Search-lists")
            .find(".search-list-hints-type")
            .show();
    }

    //Mobile 一般版搜尋ＢＡＲ點擊偵聽
    $(".mb-SearchBar-inner-Bar").focus(function(e) {
        $(".mb-Search-lists").addClass("mb-search-list--focus");
        $searchBarInnerBarSwitch = true;
        // console.log("開啟－搜尋建議");
        e.stopPropagation();
    });
    $(".mb-SearchBar-inner-Bar").focusout(function(e) {
        $(".mb-Search-lists").removeClass("mb-search-list--focus");
        $searchBarInnerBarSwitch = false;
        // console.log("關閉－搜尋建議");
        e.stopPropagation();
    });

    //Mobile 不同搜尋狀態版搜尋ＢＡＲ點擊偵聽
    $(".search-type-toggle").focus(function(e) {
        $(".other-search-type").addClass("other-search-type--focus");
        e.stopPropagation();
    });
    $(".search-type-toggle").focusout(function(e) {
        $(".other-search-type").removeClass("other-search-type--focus");
        e.stopPropagation();
    });
    // 避免冒泡事件
    $(".search-type-toggle").on("click", function(e) {
        e.stopPropagation();
    });

    //Mobile 左側主選單按鈕偵聽（漢堡）
    $("#btnBurger").on("click", burgerClickListener);
    $("#menuBackGround").on("click", burgerClickListener);

    //Mobile 搜尋按鈕偵聽（放大鏡）
    $("#mb-SearchBtn .mb-SearchBar-title").on("click", function(e) {
        if ($headerDropdownSwitch == true) {
            // 關閉下拉選單
            resetHeaderDropdown(-1);
        }
        checkMobileSearchBar();

        e.stopPropagation();
    });

    // 黑色陰影背景點擊偵聽
    $(".clickBack").on("click", function(e) {
        // 如果搜尋建議欄沒有開啟
        if ($searchBarInnerBarSwitch == false) {
            if ($searchBarSwitch == true) {
                checkMobileSearchBar();
            }
        } else {
            // console.log("搜尋建議欄有開啟");
        }
        // e.stopPropagation();
        $(".clickBack").hide();
    });

    // 檢查購物車有無商品
    if ($shoppingCartEmpty == false) {
        // 沒商品
        $("#shoppingCart .drawer-info").show();
        $("#shoppingCart .sea-seller-icon.icon-delete").hide();
        $("#shoppingCart .drawer-header").hide();
        $("#shoppingCart .drawer-actions").hide();
        $("#shoppingCart .drawer-content").removeClass("scrolling");
        // 測試用（ＲＤ會動態塞資料進去）
        $("#shoppingCart .drawer-list-item").hide();
        // console.log("購物車沒商品");
    } else {
        // 有商品
        $("#shoppingCart .drawer-info").hide();
        $("#shoppingCart .sea-seller-icon.icon-delete").show();
        $("#shoppingCart .drawer-header").show();
        $("#shoppingCart .drawer-actions").show();
        $("#shoppingCart .drawer-content").addClass("scrolling");
        // 測試用（ＲＤ會動態塞資料進去）
        $("#shoppingCart .drawer-list-item").show();
        // console.log("購物車有商品");
    }

    // 點擊整體畫面偵聽
    $(document).on("click", function(e) {
        $headerBtnIndex = -1;
        // 如果搜尋建議欄沒有開啟
        if ($searchBarInnerBarSwitch == false) {
            // console.log("搜尋建議欄--沒有開啟");
            // 如果有下拉選單開啟
            if ($headerDropdownSwitch == true) {
                // 關閉下拉選單
                resetHeaderDropdown(-1);
                if ($useMobile == true) {
                    unlockBody();
                    $(".clickBack").hide();
                }
            }
        } else {
            // console.log("搜尋建議欄--有開啟");
            // 不知道為什麼 如果這裡沒有做任何事會有ＢＵＧ 就來阻止一下泡泡吧
            e.stopPropagation();
        }
        e.stopPropagation();
    });

    // 點擊 Header 右上角選單按鈕
    $(".headerBtn").click(function(e) {
        if ($headerBtnIndex != $(this).index()) {
            $headerBtnIndex = $(this).index();
            // 檢查手機搜尋BAR狀態(如果是打開的 就關掉)
            if ($searchBarSwitch == true) {
                checkMobileSearchBar();
            }
            // 開啟相對應的下拉選單
            resetHeaderDropdown($(this).index());
            if ($useMobile) {
                $(".clickBack").offset({ top: $(document).scrollTop() });
                $(".clickBack").show();
                if ($useMobile) {
                    $(".clickBack").css("top", "54px");
                } else {
                    $(".clickBack").css("top", "88px");
                }
                lockBody();
            }
        } else {
            $headerBtnIndex = -1;
            resetHeaderDropdown($headerBtnIndex);
            $(".clickBack").hide();
            unlockBody();
        }
        e.stopPropagation();
    });

    // 點擊『購物車』按鈕
    $(".header-cart")
        .children(".sea-seller-icon")
        .click(function(e) {
            // 如果使用手機時 點選購物車直接連去外部結帳頁面
            // console.log("useMobile = "+$useMobile);
            if ($useMobile == false) {
                e.preventDefault();
            }
        });

    // 點擊下拉選單內的關閉按鈕 Ｘ
    $(".drawer-closeBtn").on("click", function(e) {
        // console.log("CLOSE");
        resetHeaderDropdown(-1);
        if ($useMobile == true) {
            unlockBody();
            $(".clickBack").hide();
        }
        e.stopPropagation();
    });

    // 檢查是否已登入
    if ($login == false) {
        //Header 頭像
        $(".header-account")
            .children(".sea-seller-icon")
            .removeClass("icon-avatar-face");
        $(".header-account")
            .children(".sea-seller-icon")
            .addClass("icon-avatar");

        // －Mobile 登入選單按鈕－
        $(".header").hide();
        $(".logBtnGroup").show();
        $(".managerBtnGroup").hide();

        // －帳號管理相關－
        $("#account")
            .children("div")
            .removeClass("small");
        $("#account .drawer-info").show();
        $("#account .drawer-link").hide();
        $("#account .drawer-actions .nologin").show();

        // －通知中心相關－
        $("#notificationCenter .drawer-header").hide();
        $("#notificationCenter .drawer-actions.nologin").show();
        $("#notificationCenter .drawer-actions.login").hide();
        $("#notificationCenter .drawer-info").show();
        // 測試用（ＲＤ會動態塞資料進去）
        $("#notificationCenter .drawer-list-item").hide();
        // console.log("未登入");
    } else {
        //Header 頭像
        $(".header-account")
            .children(".sea-seller-icon")
            .addClass("icon-avatar-face");
        $(".header-account")
            .children(".sea-seller-icon")
            .removeClass("icon-avatar");

        // －Mobile 登入選單按鈕－
        $(".header").show();
        $(".logBtnGroup").hide();
        $(".managerBtnGroup").show();

        // －帳號管理相關－
        $("#account")
            .children("div")
            .addClass("small");
        // $('#account').find('.drawer-triangle').css("left","74px")
        $("#account .drawer-info").hide();
        $("#account .drawer-link").show();
        $("#account .drawer-actions").hide();
        // －通知中心相關－
        $("#notificationCenter .drawer-actions.nologin").hide();
        $("#notificationCenter .drawer-actions.login").show();
        // $('#notificationCenter .drawer-info').hide();
        // console.log("已登入");
        // 檢查通知中心內是否有訊息
        if ($notificationCenterEmpty == false) {
            $("#notificationCenter .drawer-info").show();
            $("#notificationCenter .sea-seller-icon.icon-delete").hide();
            $("#notificationCenter .drawer-header").hide();
            $("#notificationCenter .drawer-content").removeClass("scrolling");
            // 測試用（ＲＤ會動態塞資料進去）
            $("#notificationCenter .drawer-list-item").hide();
            // console.log("通知中心沒訊息");
        } else {
            $("#notificationCenter .drawer-info").hide();
            $("#notificationCenter .sea-seller-icon.icon-delete").show();
            $("#notificationCenter .drawer-header").show();
            $("#notificationCenter .drawer-content").addClass("scrolling");
            // 測試用（ＲＤ會動態塞資料進去）
            $("#notificationCenter .drawer-list-item").show();
            // console.log("通知中心有訊息");
        }
    }
});

// 漢堡按鈕點擊函式
function burgerClickListener() {
    if ($burgerSwitch == false) {
        $(".menu--mobile").removeClass("menu--mobile--close");
        $(".menu--mobile").addClass("menu--mobile--open");
        $(".menu--mobile").animate(
            {
                left: 0
            },
            200,
            "easeInOutCubic",
            function() {
                $burgerSwitch = true;

                $(".menu--mobile").css("position", "fixed");
                // console.log("OPEN");

                // 如果搜尋ＢＡＲ有被打開的話
                // if($searchBarSwitch == true){
                //     checkMobileSearchBar();
                // }
                lockBody();
            }
        );
    } else {
        $(".menu--mobile").removeClass("menu--mobile--open");
        $(".menu--mobile").addClass("menu--mobile--close");
        $(".menu--mobile").animate(
            {
                left: 0 - $navWidth_mobile
            },
            200,
            "easeInOutCubic",
            function() {
                unlockBody();
                // 重設選單
                reset_menu_mobile();
                $(".menu--mobile").css("position", "absolute");
                // console.log("CLOSE");
            }
        );

        // 如果搜尋ＢＡＲ有被打開的話
        if ($searchBarSwitch == true) {
            checkMobileSearchBar();
        }
    }
}

// 檢查手機搜尋BAR狀態
function checkMobileSearchBar() {
    if ($searchBarSwitch == false) {
        $(".mb-SearchBar-inner").slideDown(200);
        $(".clickBack").show();

        if ($useMobile) {
            $(".clickBack").css("top", "54px");
        } else {
            $(".clickBack").css("top", "88px");
        }

        // 鎖住背景物件滑動函式
        lockBody();
        $searchBarSwitch = true;
        // console.log("打開搜尋BAR");
    } else {
        $(".mb-SearchBar-inner").slideUp(200);
        $(".clickBack").hide();
        unlockBody();
        $searchBarSwitch = false;
        // console.log("關閉搜尋BAR");
    }
}

// 重新設定下拉式的選單
function resetHeaderDropdown($headerBtnIndex) {
    $headerDropdownSwitch = false;
    for (
        var i = 0;
        i < $(".headerBtnGroup").children(".headerBtn").length;
        i++
    ) {
        if ($headerBtnIndex == i) {
            var $headerBtn = $(".headerBtnGroup")
                .children(".headerBtn")
                .eq(i);
            $headerBtn.children(".headerDropdown").show();
            $headerBtn
                .children(".headerDropdown")
                .css("pointer-events", "auto");
            if ($useMobile) {
                $headerBtn
                    .children(".headerDropdown")
                    .animate(
                        { top: 54, left: 0, opacity: 1 },
                        200,
                        "easeInOutCubic"
                    );
            } else {
                $headerBtn
                    .children(".headerDropdown")
                    .animate(
                        { top: 42, left: 0, opacity: 1 },
                        200,
                        "easeInOutCubic"
                    );
            }
            // 開啟下拉選單
            $headerDropdownSwitch = true;
        } else {
            var $headerDropdown = $(".headerBtnGroup")
                .children(".headerBtn")
                .eq(i)
                .children(".headerDropdown");
            $headerDropdown.animate(
                { top: 66, opacity: 0 },
                200,
                "easeInOutCubic",
                function() {
                    $headerDropdown.hide();
                }
            );
            $headerDropdown.css("pointer-events", "none");
        }
    }
}

// 鎖住背景物件滑動函式
function lockBody() {
    // 記住鎖住前背景前的背景位置
    $windowScrollTop = $(window).scrollTop();
    // console.log("$windowScrollTop = " + $windowScrollTop);
    // 限制整體網頁滑動
    $("body").css("position", "fixed");
    $("body").offset({ top: 0 - $windowScrollTop });
}

// 解鎖背景物件滑動函式
function unlockBody() {
    // console.log("$windowScrollTop = " + $windowScrollTop);
    // 解鎖整體網頁滑動
    $("body").css("position", "static");
    $("body").offset({ top: 0 });
    // 畫面不要跑掉位置
    $(window).scrollTop($windowScrollTop);
    $headerBtnIndex = -1;
}
