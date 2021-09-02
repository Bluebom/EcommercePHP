<?php
Class Conexao extends Config{
    private static $host, $user, $senha, $banco;

    protected $obj, $itens = array(), $prefix;


    function __construct()
    {
        self::$host = self::BD_HOST;
        self::$user = self::BD_USER;
        self::$senha = self::BD_SENHA;
        self::$banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try{

            if(self::conectar() == NULL){
                self::conectar();
            }

        } catch (Exception $e){
            exit($e->getMessage().'<h2> Não foi possivel conectar ao banco de dados </h2>');
        }

    }

    private static function conectar(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );

        $link = new PDO("mysql:host=".self::$host.";dbname=".self::$banco, self::$user,self::$senha,
        $options);
        return $link;
    }

    public function executeSQL($query, array $params = NULL){
        $this->obj = self::conectar()->prepare($query);
        return $this->obj->execute();
    }

    public function listarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    public function totalDados(){
        return $this->obj->rowCount();
    }

    public function getItens(){
        return $this->itens;
    }

}