$(function(){
    $('.send_form').submit(function(){
        var dados = $(this).serialize();
        var url = 'https://localhost/_sites/_udemy/git-github/_web-fr/shopping-cart-system/';

        $.ajax({
            url: url + '_app/send/send-form.ajax.php',
            data: dados,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(){
                $('.box_send').fadeIn().css('display', 'flex');
            },
            success: function(data){
                console.clear();
                console.log(data);

                if(data.success){
                    window.setTimeout(function(){
                        window.location.href = 'https://localhost/_sites/_udemy/git-github/_web-fr/shopping-cart-system/checkout/';
                    }, 5000);
                }
            }            
        });
        return false;
        // fim do ajax
    });
});