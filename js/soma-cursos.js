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
        $('.total_cursos').html("<i class='fas fa-shopping-cart icon-lightgray'></i> Total: <strong>R$ " + total + "</strong>");        
    }

    $(':checkbox').click(somaCursos);
});