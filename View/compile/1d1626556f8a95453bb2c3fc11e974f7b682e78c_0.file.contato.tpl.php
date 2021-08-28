<?php
/* Smarty version 3.1.39, created on 2021-08-28 02:20:56
  from 'C:\xampp\htdocs\dashboard\EcommercePHP\View\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6129816867ff66_89109356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d1626556f8a95453bb2c3fc11e974f7b682e78c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\EcommercePHP\\View\\contato.tpl',
      1 => 1630110050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6129816867ff66_89109356 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contato">
    <div class="flutuante">
        <h2>Contato</h2>
    </div>
    <div class="border-area">
        <form method="POST">
            <label><span>Nome </span><input type="text" name="nome" id="Name" placeholder="Escreva seu nome completo"></label>
            <label><span>Email </span><input type="mail" name="email" id="Mail" placeholder="Digite um email válido"></label>
            <label><span>Mensagem </span><textarea name="mensagem" id="Message" cols="30" rows="5" placeholder="Escreva aqui!"></textarea></label>
            <p><input type="submit" value="Enviar" name="acao" class="btn"></p>

        </form>

    </div>
</section><?php }
}
