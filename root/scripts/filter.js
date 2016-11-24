var $rows = $('.list-group .list-group-item');
$('.btn-filtrer').click(function() {
    /* var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase(); */
    val = $.trim($('#spesifikasjoner').val()).replace(/ +/g, ' ').toLowerCase();
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});