<?php

require_once './lib/autoload.php';

$smarty = new Template();
// Rotas::get_page();

//valores para o template
$smarty->assign('NOME', 'Franklin Henrique');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());

// LastLine
$smarty->display('index.tpl');
?>
