<?php
/* Smarty version 3.1.39, created on 2021-08-21 04:09:34
  from 'C:\xampp\htdocs\dashboard\EcommercePHP\View\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6120605e4f5964_76347169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e729853351e0f99d8f8f0296f439407b65372fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EcommercePHP\\View\\index.tpl',
      1 => 1629511772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6120605e4f5964_76347169 (Smarty_Internal_Template $_smarty_tpl) {
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
    <section class="container">
        <div class="grid-6">
            Olá mundo
        </div>
        <div class="grid-10">
            eu sou <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>

        </div>
    </section>
</body>
</html><?php }
}
