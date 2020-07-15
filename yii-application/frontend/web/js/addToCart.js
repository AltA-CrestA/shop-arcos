$(document).ready(function () {
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/add',
            data: {id: id},
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                $('#cart-count-qty').html(obj.qty);
                $('#cart-count-sum').html(obj.sum + " руб.");
            }
        })
    });
});