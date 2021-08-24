<?php
/* Smarty version 3.1.39, created on 2021-08-23 02:29:47
  from 'C:\xampp\htdocs\dashboard\EcommercePHP\View\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122ebfb7088f9_34144024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e729853351e0f99d8f8f0296f439407b65372fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EcommercePHP\\View\\index.tpl',
      1 => 1629678585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122ebfb7088f9_34144024 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <section class="nav">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Contato</a></li>
                <li><select name="cat" id="Cat">
                    <option value="" selected disabled hidden>Categorias</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></li>
            </ul>
        </nav>
    </section>
    <footer></footer>
</body>
</html><?php }
}
