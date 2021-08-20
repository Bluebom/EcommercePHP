<?php
    class Rotas
    {
        public static $pag;


        public static function get_SiteHome(){
            return Config::SITE_URL . '/' . Config::SITE_PASTA;
        }

        public static function get_SiteRoot(){
            return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
        }


        public static function get_page(){
            if(isset($_GET['url'])){
                
                $page = $_GET['url'];
                self::$pag = explode('/', $page);
                
                $page = 'Controller/' . self::$pag[0] . '.php';
                if(file_exists($page)){
                    include $page;
                } else{
                    include './erro404.php';
                }
            }
        }
    }
    
?>