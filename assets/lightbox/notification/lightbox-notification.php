<!--訂單相關LightBox-->
<div id="sea-lightbox-notification" class="sea-ui modal large">
    <i class="sea-seller-icon icon-delete lightbox_close"></i>
    <div class="modal-header">PChomeSEA 訂單確認通知</div>
    <div class="scrolling modal-content">
        <div class="description">
            親愛的 {$mem_name} 您好:<br><br>
            您已成功下訂訂單：{$to_orderid}，銀行轉帳資訊如下：<br>
            您可上網站顧客中心再次確認繳款帳號及金額。<br><br>
            {foreach from=$bank item=bank}
            <div style="border-bottom:1px dashed #ccc;color:#666;padding:0 5px 10px 5px;font-size:14px"> 轉帳銀行：{$bank.tb_bankname}<br>銀行帳號：{$bank.ta_acc}</div>
            {/foreach}
            <div style="color:#666;padding:0px 5px;font-size:14px">
                應繳金額： ${$otatm} 元<br>
                * 完成轉帳後請至顧客中心的「<a href="https://cadm.pchome.co.th/buyer/border/list" target="_blank">我的訂單</a>」發送付款通知給賣家題醒出貨喔！<br>
                【訂單查詢】您可以至顧客中心的「<a href="https://cadm.pchome.co.th/buyer/border/list" target="_blank">我的訂單</a>」，登入查詢您的訂單處理情形。<br>
                【訂單疑問】如有相關疑問，歡迎至顧客中心使用「<a href="https://cadm.pchome.co.th/buyer/ombord/list" target="_blank">訂單留言版</a>」進行查詢及留言。<br>
                感謝您的愛護與支持 !!
            </div>
        </div>
    </div>
</div>