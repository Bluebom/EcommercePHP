<?php
    class Rotas
    {
        public static $pag;
        private static $pasta_controller = 'Controller';
        private static $pasta_view = 'View';


        public static function get_SiteHome(){
            return Config::SITE_URL . '/' . Config::SITE_PASTA;
        }

        public static function get_SiteRoot(){
            return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
        }

        public static function get_SiteTema(){
            return self::get_SiteHome() . '/' . self::$pasta_view;
        }

        public static function pag_carrinho(){
            return self::get_SiteHome() . '/carrinho';
        }

        public static function pag_minhaConta(){
            return self::get_SiteHome() . '/minhaconta';
        }

        public static function pag_contato(){
            return self::get_SiteHome() . '/contato';
        }

        public static function get_page(){
            if(isset($_GET['url'])){
                
                $page = $_GET['url'];
                self::$pag = explode('/', $page);
                
                $page = self::$pasta_controller .'/' . self::$pag[0] . '.php';
                if(file_exists($page)){
                    include $page;
                } else{
                    include self::$pasta_controller .'/erro404.php';
                }
            }
        }
    }
    
?>