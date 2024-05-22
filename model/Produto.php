<?php

class Produto{

    protected $nome;
    protected $valor;
    


    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
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