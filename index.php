<?php

require_once './lib/autoload.php';

$smarty = new Template();
Rotas::get_page();




//valores para o template
$smarty->assign('NOME', 'Franklin Henrique');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());


echo Rotas::get_SiteTema(); 

// LastLine
$smarty->display('index.tpl');
?>
