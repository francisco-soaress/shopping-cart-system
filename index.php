<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart System (Study)</title>

    <link rel="stylesheet" href="cdn/css/bootcss.css">
    <link rel="stylesheet" href="cdn/css/style.css">
    <link rel="stylesheet" href="cdn/css/modal.css">
    <link rel="stylesheet" href="cdn/css/icons-fontawesome/css/all.css">

</head>

<body>

    <?php
    require './cdn/modal/modal-loading.php';
    ?>

    <header class="container">
        <div class="content-95-900">
            <i class="fab fa-connectdevelop logo"></i>
            <h1>Escolha os cursos que deseja comprar</h1>
            <div class="clear"></div>
        </div>
    </header>

    <main>
        <h2 class="fontzero">Selecione um produto</h2>
        <section class="container">
            <div class="content-95-1000">
                <form name="" class="send_form" id="" method="POST" action="">
                    <input type="hidden" name="selecao_produto" value="produtos_selecionados">

                    <ul class="produtos-conteudos">
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-php" value="459.99">
                            <label for="curso-php">
                                <div class="produtos-icons"><i class="fab fa-php icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>PHP OO</strong></div>
                                <div class="label-valor">R$ 459,99</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-jquery" value="359.00">
                            <label for="curso-jquery">
                                <div class="produtos-icons"><i class="fab fa-js icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>JQuery</strong></div>
                                <div class="label-valor">R$ 359,00</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-bootstrap" value="359.00">
                            <label for="curso-bootstrap">
                                <div class="produtos-icons"><i class="fab fa-bootstrap icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>Bootstrap</strong></div>
                                <div class="label-valor">R$ 359,00</div>
                            </label>
                        </li>
                        <li class="produto-selecao">
                            <input type="checkbox" name="curso-php" class="curso-php" id="curso-html" value="300.00">
                            <label for="curso-html">
                                <div class="produtos-icons"><i class="fab fa-html5 icons-prod"></i></div>
                                <div class="label-txt">Curso de<br> <strong>HTML5</strong></div>
                                <div class="label-valor">R$ 300,00</div>
                            </label>
                        </li>
                    </ul>

                    <div class="content-95-1000 main_total grid-container">
                        <div class="box50">
                            <div class="total_cursos" id="total_cursos"><i class="fas fa-shopping-cart icon-lightgray"></i> Carrinho vazio!</div>
                        </div>
                        <div class="box50 botao_comprar" id="botao_comprar">
                            <button type="button" disabled class="main_finalizar_compra bt-radius bt-lightgray">Comprar</button>
                        </div>

                        <div class="clear"></div>
                    </div>
                </form>
                <div class="clear"></div>
            </div>

        </section>
    </main>

    <script src="cdn/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn/css/icons-fontawesome/js/all.js"></script>
    <script src="cdn/js/soma-cursos.js"></script>
    <script src="cdn/js/send-form.js"></script>
</body>

</html>