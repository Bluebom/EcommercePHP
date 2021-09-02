<?php
class Produtos extends Conexao
{
    public function __construct()
    {   
        parent::__construct();
    }

    public function GetProdutos(){
        $query = "SELECT * FROM " . $this->prefix . "produtos p INNER JOIN ". $this->prefix ."categorias c ON p.pro_categoria = c.cat_id";
        // $query .= "ORDER BY produto_id DESC";
        $this->executeSQL($query);
        return $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        // print_r($this->listarDados());
        while($lista = $this->listarDados()) :
            $this->itens[$i] = array(
                "pro_id" => $lista['pro_id'],
                "pro_nome"=>$lista['pro_nome'],
                "pro_desc"=>$lista['pro_desc'],
                "pro_peso"=>$lista['pro_peso'],
                "pro_valor"=>$lista['pro_valor'],
                "pro_altura"=>$lista['pro_altura'],
                "pro_largura"=>$lista['pro_largura'],
                "pro_comprimento"=>$lista['pro_comprimento'],
                "pro_img"=>$lista['pro_img'],
                "pro_slug"=>$lista['pro_slug'],
                "cat_nome"=>$lista['cat_nome'],
                "cat_id"=>$lista['cat_id']
            );
            $i++;
        endwhile;
    }
}
