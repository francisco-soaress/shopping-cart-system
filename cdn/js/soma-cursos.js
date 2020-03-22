$(function(){
    // $("input").click(function(){
    //     var id = $(this).val();
    //     var total =+ id;
    //     console.log(total);
    //     $('.total_cursos').html("Total: <strong>" + total + "</strong>");

    //     link video https://www.youtube.com/watch?v=42orJosT7S8
    // });

    function somaCursos(){
        var result = $("input:checked");
        var total  = 0;
        
        for(var i = 0; i < result.length; i++){
            total = total + parseFloat(result[i].value);
        }
        
        if(total <= 0){     
            $('#botao_comprar').html("<button disabled class='main_finalizar_compra bt-radius bt-lightgray'>Comprar</button>");
            $('.total_cursos').html("<i class='fas fa-shopping-cart icon-lightgray'></i> Total: <strong>R$ " + total + "</strong>");  
        }
        else{
            $('.total_cursos').html("<i class='fas fa-shopping-cart icon-lightgray'></i> Total: <strong> " + total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) + "</strong>");  
            $('#botao_comprar').html("<button class='main_finalizar_compra bt-radius bt-blue'>Comprar</button>"); 
        }
               
    }

    $(':checkbox').click(somaCursos);
});