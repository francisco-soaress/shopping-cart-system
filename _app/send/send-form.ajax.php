<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

sleep(1);

$jSON = array();
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($getPost['selecao_produto'])):
    $jSON['erro'] = true;

else:
    // link de referencia: https://www.youtube.com/watch?v=Len-JjpV4zI
    $Post = array_map('strip_tags', $getPost);
    $Action = $Post['selecao_produto'];
    unset($Post['selecao_produto']);

    switch($Action):
        case 'produtos_selecionados':

            //inicio da sessão
            session_start();
            $_SESSION['cart-shopping'] = [];
            array_push($_SESSION['cart-shopping'], $Post);
            
            $jSON['success'] = true;            
        break;
    endswitch;
endif;

echo json_encode($jSON);