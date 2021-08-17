<?php

require_once './lib/autoload.php';

$smarty = new Template();
Rotas::get_page();




//valores para o template
$smarty->assign('NOME', 'Franklin Henrique');

// LastLine
$smarty->display('index.tpl');
?>
