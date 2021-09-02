<?php
/* Smarty version 3.1.39, created on 2021-09-02 04:14:40
  from 'C:\xampp\htdocs\dashboard\EcommercePHP\View\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61303390115b37_53698693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ece609bed42d8788907231222e7723b10d89f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EcommercePHP\\View\\produtos.tpl',
      1 => 1630548879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61303390115b37_53698693 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
<h3>
<hr>
<!-- paginacao superior -->
<section id="paginacaoS" class="container">
    Paginas
</section>
<!-- começa a lista dos produtos -->
<section id="produtos">
    <ul class="container lista">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <li>
            <div class="thumbnail">
                <a href="#">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['CAMINHO_IMG']->value;
echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
" width="200">
                    <article>
                        
                        <h4 class="name">
                            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

                        </h4>
                        <h3 class="price">
                            R$<?php echo number_format($_smarty_tpl->tpl_vars['P']->value['pro_valor'],2,'.','');?>

                        </h3>
                    </article>
                </a>
            </div>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</section>
<!-- paginacao inferior -->
<section id="paginacaoI" class="container">
    Paginas
</section><?php }
}
