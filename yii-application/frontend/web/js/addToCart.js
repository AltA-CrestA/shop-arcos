$(document).ready(function () {
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id'),
            qty = $('#qty'). val();
        $.ajax({
            url: '/cart/add',
            data: {id: id, qty: qty},
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                $('#cart-count-qty').html(obj.qty);
                $('#cart-count-sum').html(obj.sum + " руб.");
            }
        })
    });
});