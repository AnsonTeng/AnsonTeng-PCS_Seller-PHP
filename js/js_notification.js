
$('.btn-read-all').click(function() {
    $(this).removeClass('btn-cta');
    $(this).addClass('btn-disabled');
    $('.notification-list-item').removeClass('unread');
    $('.notification-list-item').addClass('read');
});

$('.notification-list-item').click(function() {
    $(this).removeClass('unread');
    $(this).addClass('read');
});