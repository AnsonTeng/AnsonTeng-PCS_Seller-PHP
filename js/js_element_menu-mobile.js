// 全域變數
var $indexLevel_1 = 0;
var $indexLevel_2 = -1;
var $indexLevel_3 = -1;
var $indexLevel = [$indexLevel_1, $indexLevel_2, $indexLevel_3];


// 初始化
$(document).ready(function() {
	// 商品類別選單 點擊父層選單偵聽函式
    $('.category-item').on("click", function(e) {
        // console.log('點到父層 -');
        $indexLevel[0] = $(this).index();
        $indexLevel[1] = -1;
        $indexLevel[2] = -1;
        // console.log("選單索引值 = " + $indexLevel);
        // 子選單滑入
        movelistIn();
        e.stopPropagation();
    });

    // 商品類別選單 點擊子孫層偵聽函式
    $('.category-item-inner').find("li").on("click", function(e) {
        // var $goBackSwitch = false;

        // 如果是點到『看全部類別』
        if ($(this).hasClass('seeAll')) {
            // console.log("See All");
            e.stopPropagation();
        }

        // 如果是點到『返回上一層』
        if ($(this).hasClass('goBack')) {
            // console.log("GoBack");
            // 子孫選單滑出函式
            console.log("選單索引值 = " + $indexLevel);
            movelistOut();
            return false;
        }

        // 如果是點到『子層標題』
        if ($(this).parent().hasClass('category-item-inner')) {
            // console.log('點到子層 - -');
            $indexLevel[1] = $(this).index();
            $indexLevel[2] = -1;
            // console.log("選單索引值 = " + $indexLevel);

            // 如果是點到『有子選單的標題』
            if ($(this).hasClass('hasChild')) {
                // 子孫選單滑入
                movelistIn();
            } else {
                // 直接開啟連結;
            }
        }

        // 如果是點到『孫層標題』
        if ($(this).parent().parent().parent().hasClass('category-item-inner')) {
            // console.log('點到孫層 - - -');
            $indexLevel[1] = $(this).parent().parent().index();
            $indexLevel[2] = $(this).index();
            // 子孫選單滑入
            movelistIn();
        }
        // console.log("選單索引值 = " + $indexLevel);
        e.stopPropagation();
    });


	// 商品類別選單、其他類別選單、幫助中心、關於我們... 標題 點擊偵聽函式
    $(".menuMobileTitle").on('click', function(e) {

        if ($(this).hasClass('menuMobileTitle-lock')) {
        	// console.log("LOCK");
        } else {
            if ($(this).hasClass('menuMobileTitle-close')) {
                $(this).removeClass('menuMobileTitle-close');
                $(this).addClass('menuMobileTitle-open');
                $(this).children('div').children('.pct-icon').removeClass('icon-plus');
                $(this).children('div').children('.pct-icon').addClass('icon-minus');
                $(this).next().slideDown(300, showCategoryItemInner);

                
                // console.log("OPEN");
            } else if($(this).hasClass('menuMobileTitle-open')) {
                $(this).removeClass('menuMobileTitle-open');
                $(this).addClass('menuMobileTitle-close');
                $(this).children('div').children('.pct-icon').removeClass('icon-minus');
                $(this).children('div').children('.pct-icon').addClass('icon-plus');
                $(this).next().slideUp(300, hideCategoryItemInner);
                // console.log("CLOSE");
            }
            // $(this).next().slideToggle(300);
        }
    });


    // 商品類別選單、其他類別選單、幫助中心、關於我們...預設展開
    $(".menuMobileTitle-open").next().slideDown(0);
    // icon -
    $(".menuMobileTitle-open").children('div').children('.pct-icon').addClass('icon-minus');    

    // 商品類別選單、其他類別選單、幫助中心、關於我們...預設關閉
    $(".menuMobileTitle-close").next().slideUp(0);
    // icon +
    $(".menuMobileTitle-close").children('div').children('.pct-icon').addClass('icon-plus');

    // 
    // showCategoryItemInner();
});





//商品類別選單 子孫選單滑入函式
function movelistIn() {

    // 建立目標物件
    var $moveTarget;
    var $menuMobileTop = $('.menuMobile').scrollTop();
    // console.log("menuMobileTop = " + $('.menuMobile-inner').scrollTop());
    // console.log("menuMobileTop = " + $('.menuMobile-inner').offset().top);    

    var $menuMobileInnerTop = $('.menuMobile-inner').scrollTop();
    // console.log("menuMobileInnerTop = " + $('.menuMobile-inner').scrollTop());
    // console.log("menuMobileInnerTop = " + $('.menuMobile-inner').offset().top);

    // 限制整體網頁滑動
    $('body').css('overflow-y','hidden');

    // 如果陣列中 子層索引值不是負值
    if ($indexLevel[1] >= 0) {
        // 鎖住該子層選單
        $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul').css('overflow', 'hidden');
        // 移動孫層選單
        $moveTarget = $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul').children('li').eq($indexLevel[1]).children('ul');
        
        console.log("滑入孫層選單");
    } else {
        // 移動子層選單
        $moveTarget = $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul');
        $moveTarget.css('display', 'block');        
        $moveTarget.css('overflow', 'hidden');

        // 解鎖所有子層選單（有可能重複進出）
        $('.category-inner').children('.category-item').children('ul').css('overflow-y', 'auto');

        // 限制整體選單滑動
        $('.menuMobile').css('overflow-y','hidden');

        console.log("滑入子層選單");        
    }

    // 控制目標的ＴＯＰ
    // $moveTarget.offset({ top: $('.menuMobile-inner').scrollTop()});
    $moveTarget.offset({ top: $('.menuMobile').offset().top});

    // 控制目標的ＬＥＦＴ
    $moveTarget.animate({ left: 0 }, 200, 'easeInOutCubic');
}



//商品類別選單  子孫選單滑出函式
function movelistOut() {
    // 建立目標物件
    var $moveTarget;
    var $moveTargetTop = $('.menuMobile').scrollTop();

    // 如果陣列中 子層索引值不是負值
    if ($indexLevel[1] >= 0) {
        // 解鎖所有子層選單
        $('.category-inner').children('.category-item').children('ul').css('overflow-y', 'auto');
        // 移動孫層選單
        $moveTarget = $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul').children('li').eq($indexLevel[1]).children('ul');
        $indexLevel[1] = -1
        // console.log("滑出孫層選單");
    } else {
        // 移動子層選單
        $moveTarget = $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul');
        $indexLevel[0] = -1
        // 解除整體選單滑動限制
        $('.menuMobile').css('overflow-y','auto');
    }

    // 控制目標的ＴＯＰ
    $moveTarget.offset({ top: $('.menuMobile-inner').scrollTop() });
    // 控制目標的ＬＥＦＴ
    $moveTarget.animate({ left: $navWidth_mobile }, 200, 'easeInOutCubic');
}



function hideCategoryItemInner(){
    // $('.category-inner').children('.category-item').eq($indexLevel[0]).children('ul').css('display', 'none');
    $('.category-item-inner').css('display', 'none');
}


function showCategoryItemInner(){
    $('.category-item-inner').css('display', 'block');
}




// 重設選單函式
function reset_menu_mobile(){
    $indexLevel_1 = 0;
    $indexLevel_2 = -1;
    $indexLevel_3 = -1;

    console.log($indexLevel_1+" / "+$indexLevel_2+" / "+$indexLevel_3);
    
    // 將所有子孫選單(整個清單) 收起來
    $('.category').find('.category-item-inner').find('ul').offset({top: 100, left: $navWidth_mobile});
    hideCategoryItemInner();
    
    // 重設選單（偷懶取巧的方法：重複兩次就可以清子層跟孫層 小朋友不要學）
    // movelistOut();
    // movelistOut();

    $burgerSwitch = false;

    $(".menuMobile").scrollTop(0);
}

