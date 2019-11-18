//TABS NAVIGATIONS 標籤導航
$('.tab-panel > div').show();
setTimeout(function() { $('.tab-panel > div').hide(); }, 100);
setTimeout(function() { $('.tab-panel > div:first-of-type').show(); }, 100);


$('.tab-items a').click(function(e) {
    e.preventDefault();
    var $this = $(this),
        tabpanel = '#' + $this.parents('.tab-items').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabpanel).children('div').hide();
    $(target).show();

});


//折疊內容
var accordionebox = document.getElementsByClassName("accordion-caption");
var i;


for (i = 0; i < accordionebox.length; i++) {

    accordionebox[i].onclick = function() {
        this.classList.toggle("active");

        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;

            $(this).find(".pct-ui.switch-toggle.mainToggle").show();

        } else {
            panel.style.maxHeight = panel.scrollHeight + 300 + "px";
            $(this).find(".pct-ui.switch-toggle.mainToggle").hide();
        }
    }


}




// LightBox 燈箱（背景點擊偵聽）
$('.pct-lightBox_backGround , .lightbox_close').click(function() {
    $('#pct-lightbox').toggle();
    // 解鎖背景物件滑動函式
    unlockBody();
});




//操作bar顯示/隱藏

$(window).scroll(function (event) {

    if($('.breadcrumb-back').length === 0){return;}
    
    var height =  $(window).height()*0.2;
    var scroll = $(window).scrollTop();
    var last = $("body").height( )- $(window).height() - height;

    if (scroll <= $('.breadcrumb-back').offset().top ){
         $('.seller-action-bar').removeClass('float-bar');
         $('.seller-action-bar').removeClass('shrink-float-bar');

    } else if (scroll >= last){
         $('.seller-action-bar').removeClass('float-bar');
         $('.seller-action-bar').addClass('shrink-float-bar');

    } else if (scroll >= $('.breadcrumb-back').offset().top ){

         $('.seller-action-bar').addClass('float-bar');
         $('.seller-action-bar').removeClass('shrink-float-bar');

    } 

});


//-- 展開隱藏選單 --
// 進階搜尋＋－
$(".add_condition").click(function() {

    if($(this).children().hasClass('icon-plus')){
        $(this).children().removeClass('icon-plus');
        $(this).children().addClass('icon-minus');
    }else{
        $(this).children().removeClass('icon-minus');
        $(this).children().addClass('icon-plus');
    }

    $(".add_condition").children().toggleClass("addBox");
    $(".orderlistSearch__advanceSearch").slideToggle(400);
});