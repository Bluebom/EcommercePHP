<?php
class Config
{
    //Informações Básicas do SITE
    const SITE_URL = "http://localhost",
        SITE_PASTA = "dashboard/EcommercePHP",
        SITE_NOME = "Loja - PHP7 e MySQL",
        SITE_EMAIL_ADM = "lojadofreitas@gmail.com";

    // Informações do banco de dados
    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "lojaphp",
        BD_PREFIX = "";

    // INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com",
        EMAIL_USER = "lojadofreitas@gmail.com",
        EMAIL_NAME = "Franklin",
        EMAIL_PASS = "SENHA",
        EMAIL_PORT = 587,
        EMAIL_SMTPAUTH = true,
        EMAIL_SMTPSECURITY = 'tls',
        EMAIL_CC = "lojadofreitas@gmail.com";
}
?>