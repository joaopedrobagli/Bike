<?php

class Produto{

    protected $nome;
    protected $valor;
    protected $imagem;


    public function __construct($nome, $valor, $imagem)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->imagem = $imagem;
    }

    public function get_nome(){
        return($this->nome);
    }

    public function set_nome($Nome){
        $this->nome = $Nome;
    }



    public function get_valor(){
        return($this->valor);
    }
    
    
    public function set_valor($valor){
        $this->valor = $valor;
    }

}

?>