<?php
    class Rotas
    {
        public static function get_page(){
            if(isset($_GET['url'])){
                $page = 'Controller/' . $_GET['url'] . '.php';
                if(file_exists($page)){
                    include $page;
                } else{
                    include './erro404.php';
                }
            }
        }
    }
    
?>