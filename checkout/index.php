<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart System (Study)</title>

    <link rel="stylesheet" href="../cdn/css/bootcss.css">
    <link rel="stylesheet" href="../cdn/css/style.css">
    <link rel="stylesheet" href="../cdn/css/icons-fontawesome/css/all.css">

</head>

<body>
    <header class="container">
        <div class="content-95-900">
            <i class="fab fa-connectdevelop logo icon-lightgreen"></i>
            <h1>Finalize sua compra</h1>
            <div class="clear"></div>
        </div>
    </header>

    <main>
        <h2 class="fontzero">Selecione um produto</h2>
        <section class="container">
            <div class="content-95-900 main_finalizar_compra">

                <ul>
                    <li>
                        <div class="box25">
                            <i class="fab fa-js icons-prod-shopping-cart"></i>
                        </div>
                        <div class="box25">
                            <div class="title_shopping_cart">Curso de JQuery</div>
                        </div>
                        <div class="box25">
                            <div class="bt-radius-small bt-radius-line-red">X</div>
                        </div>
                        <div class="box25">
                            <div class="value_shopping_cart">R$ 259,00</div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="box25">
                            <i class="fab fa-js icons-prod-shopping-cart"></i>
                        </div>
                        <div class="box25">
                            <div class="title_shopping_cart">Curso de JQuery</div>
                        </div>
                        <div class="box25">
                            <div class="bt-radius-small bt-radius-line-red">X</div>
                        </div>
                        <div class="box25">
                            <div class="value_shopping_cart">R$ 259,00</div>
                        </div>
                        <div class="clear"></div>
                    </li>

                </ul>
                <div class="clear"></div>
            </div>

            <div class="content-95-900">
                <div class="total_checkout" id="total_checkout"><i class="fas fa-shopping-cart icon-lightgray"></i> R$ 500,00</div>
                <div class="clear"></div>
            </div>
        </section>

        <section class="container main_checkout_forma_pagamento">
            <div class="content-95-900">
                <h2>Forma de Pagamento</h2>

                <form name="checkout_form" class="checkout_form send_checkout" id="checkout_form" action="" method="post">

                    <div class="box100 p30-top-bottom">
                        <input type="radio" name="forma-pagamento" id="forma-pagamento">
                        <label for="forma-pagamento" class="label_checkout_forma_pagamento">Boleto Bancário</label>
                        <input type="radio" name="forma-pagamento" id="cartao-credito">
                        <label for="cartao-credito" class="label_checkout_forma_pagamento">Cartão de Crédito</label>
                    </div>
                    <div class="box100">
                        <div class="bt-radius-small bt-radius-line-green">Gerar boleto</div>
                    </div>

                    <div class="box100 p30-top">
                        <p>Pagamentos aceitos</p>
                        <i class="fab fa-cc-mastercard icons_checkout_form"></i>
                        <i class="fab fa-cc-visa icons_checkout_form"></i>
                    </div>

                    <div class="box100 p30-top">
                        <label for="nome-titular" class="label_checkout">Nome do titulo<br>
                            <input type="text" name="nome-titular" id="nome-titular" class="input_checkout" placeholder="Nome como impresso no cartão">
                        </label>
                    </div>
                    <div class="box100 p30-top">
                        <label for="cartao-credito" class="label_checkout">Numero do Crédito<br>
                            <input type="text" name="numero-cartao" id="numero-cartao" class="input_checkout" placeholder="0000 0000 0000 0000">
                        </label>
                    </div>
                    <div class="box50 p30-top p5-right">
                        <label for="cartao-credito" class="label_checkout">Validade do cartão (MM/AAAA)<br>
                            <input type="text" name="validade-cartao" id="validade-cartao" class="input_checkout" placeholder="MM/AAAA">
                        </label>

                    </div>
                    <div class="box50 p30-top p5-left">
                        <label for="cartao-credito" class="label_checkout">Código de segurança<br>
                            <input type="text" name="cod-seguranca-cartao" id="cod-seguranca-cartao" class="input_checkout" placeholder="3 ou 4 digitos">
                        </label>
                    </div>

                    <div class="box100 p30-top">
                        <label for="cartao-credito" class="label_checkout">Cartão de Crédito<br>
                            <select name="parcelas" id="parcelas" class="input_checkout">
                                <option value="1">1º Parcela</option>
                                <option value="2">2º Parcela</option>
                                <option value="3">3º Parcela</option>
                                <option value="4">4º Parcela</option>
                                <option value="5">5º Parcela</option>
                                <option value="6">6º Parcela</option>
                            </select>
                        </label>
                    </div>
                    <div class="box100 p30-top">
                        <button class="bt_checkout">Pagar</button>
                    </div>
                    <div class="clear"></div>
                </form>
                <div class="clear"></div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../cdn/css/icons-fontawesome/js/all.js"></script>
</body>

</html>