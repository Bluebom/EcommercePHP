<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();


$smarty->assign('PRODUTOS', 'Lista de produtos');
$smarty->assign("CAMINHO_IMG", Rotas::get_ImageURL());
$smarty->assign('PRO', $produtos->getItens());
$smarty->display('produtos.tpl');

// echo '<pre>';
// var_dump($produtos->getItens());
// echo '</pre>';
