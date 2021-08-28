<?php

require_once './lib/autoload.php';

$smarty = new Template();
// Rotas::get_page();

//valores para o template
$smarty->assign('NOME', 'Franklin Henrique');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_minhaConta());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());
$smarty->assign('TITLE_', Config::SITE_NOME);

$query = 'select * from categorias';
$db = new Conexao();
$db::executeSQL($query);
echo '<pre>';
print_r($db::listarDados());
echo '</pre>';
// LastLine
$smarty->display('index.tpl');
?>
