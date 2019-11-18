<!-- Mobile Nav-->
<!-- 選單整體-->
<div class="menu--mobile menu--mobile--close">
    <!--選單底部黑影-->
    <div class="menuBackGround" id="menuBackGround">
        <div class="pct-icon icon-delete"></div>
    </div>
    <!-- 選單主體-->
    <div class="menuMobile">
        <div class="menuMobile-inner">
            <!-- 使用者資訊-->
            <div class="header">
                <div class="headerInner">
                    <div class="header-user">
                        <div class="header-user-head">
                            <div class="pct-icon icon-avatar-face"></div>
                        </div>
                        <div class="header-user-name"><span>Hi, </span><span>User Name</span></div>
                    </div>
                    <div class="header-logout">
                        <a class="pct-icon icon-logout"></a>
                    </div>
                </div>
            </div>


            <!-- 管理用選單 -->
            <div class="managerBtnGroup">
                <div class="headerBtn managerBtn-buyer"><span>買家中心</span></div>
                <!-- <div class="headerBtn managerBtn-seller"><span>賣家中心</span></div> -->
                <a href="http://sophia-0.com/PCH/seller/index.php">
                    <div class="headerBtn managerBtn-seller"><span>賣家中心</span></div>
                </a>
            </div>
            <!-- 語言選單-->
            <div class="language">
                <div class="language-icon">
                    <div class="pct-icon icon-globe"></div>
                </div>
                <div class="languageBtnGroup">
                    <div class="languageBtn languageBtn-select languageBtn-th"><span>ไทย</span></div>
                    <div class="languageBtn languageBtn-ch"><span>中文</span></div>
                    <div class="languageBtn languageBtn-en"><span>English</span></div>
                </div>
            </div>

            <!-- 主要選單 -->
            <div class="sidebar-panel-wrap">
                <ul>
                    <li class="nosub">
                        <a class="seller-nav-link" href="" onclick="window.location.href='index.php' "> <span
                                class="no-circle pct-icon icon-homepage"></span> 賣家中心首頁</a>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"> <span class="pct-icon icon-orderlist"></span>訂單管理</a>
                        <ul>
                            <li><a href="" onclick="window.location.href='orderlist.php' ">所有訂單</a> </li>
                            <li><a href="" onclick="window.location.href='orderlist.php' ">待付款</a></li>
                            <li><a href="" onclick="window.location.href='orderlist.php' ">待出貨</a></li>
                            <li><a href="" onclick="window.location.href='orderlist.php' ">訂單取消申請</a></li>
                            <li><a href="" onclick="window.location.href='orderlist.php' ">退款申請</a></li>
                        </ul>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"><span class="pct-icon icon-payment"></span>代收款項</a>
                        <ul>
                            <li><a href="" onclick="window.location.href='selleracc-withdrawal.php' ">款項提領</a></li>
                            <li><a href="" onclick="window.location.href='selleracc-fee.php' ">費用查詢</a></li>
                            <li><a href="" onclick="window.location.href='selleracc-wdset.php' ">提領設定</a></li>
                        </ul>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"><span class="pct-icon icon-productedit"></span>商品管理</a>
                        <ul>
                            <li><a href="shop-intro.php" onclick="window.location.href='product-list.php' ">商品列表</a>
                            </li>
                            <li><a href="shop-logistic.php" onclick="window.location.href='product-edit.php' ">新增商品</a>
                            </li>
                            <li><a href="shop-pay.php" onclick="window.location.href='product-xlslist.php' ">大量上架</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"><span class="pct-icon icon-seller-shop"></span>賣場設定</a>
                        <ul class="nav__sublink">
                            <li><a href="" onclick="window.location.href='shop-intro.php' ">賣場介紹</a></li>
                            <li><a href="" onclick="window.location.href='shop-logistic.php' ">物流設定</a></li>
                            <li><a href="" onclick="window.location.href='shop-pay.php' ">收款設定</a></li>
                        </ul>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"><span class="pct-icon icon-moving"></span>快速搬家</a>
                        <ul class="nav__sublink">
                            <li class="eng-num"><a href="" onclick="window.location.href='shopmoving.php' ">搬家設定</a>
                            </li>
                            <li><a href="" onclick="window.location.href='shopmoving-term.php' ">委託刊登同意書</a></li>
                        </ul>
                    </li>
                    <li class="hassub">
                        <a class="seller-nav-link" href="#"><span class="pct-icon icon-callcenter"></span>聊聊&評價</a>
                        <ul class="nav__sublink">
                            <li><a href="" onclick="window.location.href='qareview-product.php' ">商品留言版</a></li>
                            <li><a href="" onclick="window.location.href='qareview-order.php' ">買賣留言版</a></li>
                            <li><a href="" onclick="window.location.href='qareview-review.php' ">評價</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>