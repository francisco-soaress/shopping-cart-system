$(function(){
    $('.forma-pagamento').click(function(){
        var choice = $(this).val();

        if (choice == "boleto"){
            $('.cartao_credito_escolha').fadeOut(0);
            $('.boleto_bancario_escolha').fadeIn();            
        }else{
            $('.boleto_bancario_escolha').fadeOut(0);
            $('.cartao_credito_escolha').fadeIn();
        }
    });
});