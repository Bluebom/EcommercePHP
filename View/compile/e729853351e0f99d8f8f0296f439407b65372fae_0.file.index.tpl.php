<?php
/* Smarty version 3.1.39, created on 2021-08-25 04:01:51
  from 'C:\xampp\htdocs\dashboard\EcommercePHP\View\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6125a48f3ab0b0_80500021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e729853351e0f99d8f8f0296f439407b65372fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EcommercePHP\\View\\index.tpl',
      1 => 1629856908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6125a48f3ab0b0_80500021 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header class="container"></header>
    <section class="nav">
        <nav class="container">
            <ul class="container">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Minha Conta</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contato</a></li>
                <li><select name="cat" id="Cat">
                    <option value="" selected disabled hidden>Categorias</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></li>
            </ul>
            <div class="menuHamburguer">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box grid-5">
                <input type="text" name="" class="search-txt" placeholder="Digite para buscar">
                <a href="#" class="search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </nav>
    </section>
    <section class="container" style="margin-top: 1rem;">
        <aside class="grid-3">
            <ul>
                    <li><h3>Categorias</h3></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                </ul>
                
        </aside>
        <main class="grid-13">
            <section class="breadcrumbs">
                <span><i class="fas fa-home"></i> Home</span>
                <span>/</span>
                <span>Produtos</span>
                <span>/</span>
                <span>Info</span>
            </section>
            <section class="main">
                <?php 
                Rotas::get_page();
                ?>
            </section>
        </main>
    </section>
    <footer></footer>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/menuHamburguer.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
