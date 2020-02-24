<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

sleep(1);

$jSON = array();
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($getPost['selecao_produto'])):
    $jSON['erro'] = true;

else:
    $Post = array_map('strip_tags', $getPost);
    $Action = $Post['selecao_produto'];
    unset($Post['selecao_produto']);

    switch($Action):
        case 'produtos_selecionados':
            $jSON['success'] = true;            
        break;
    endswitch;
endif;

echo json_encode($jSON);