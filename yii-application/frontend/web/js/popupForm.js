$(document).ready(function(){
    $('#submit-popup').click(function(){
        // собираем данные с формы
        var name   = $('#name-popup').val();
        var phone   = $('#phone-popup').val();
        // отправляем данные
        $.ajax({
            url: "/site/modal", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "name-popup":   name,
                "phone-popup":  phone
            },
            // после получения ответа сервера
            success: function(data){
                if (jQuery.isEmptyObject(data['failure'])) {
                    $('.popup__content').css({display: "none"});
                    $('.popup__message').html(data.success); // выводим ответ сервера
                    $('#popup').delay(2250).fadeOut("slow");
                } else {
                    $('.popup__message').html(data.failure);
                }
            }
        });
    });
});