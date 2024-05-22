<?php

class Cliente{

    protected $nome;
    protected $email;
    protected $cpf;
    protected $senha;


    public function __construct($Nome, $email, $Cpf,$senha)
    {
        $this->nome = $Nome;
        $this->email = $email;
        $this->cpf = $Cpf;
        $this->senha = $senha;
    }

    public function get_nome(){
        return($this->nome);
    }

    public function set_nome($Nome){
        $this->nome = $Nome;
    }



    public function get_cpf(){
        return($this->cpf);
    }
    
    
    public function set_cpf($Cpf){
        $this->cpf = $Cpf;
    }


    public function get_email(){
        return($this->email);
    }
   
    public function set_email($email){
        $this->email = $email;
    }
    
    public function get_senha(){
        return($this->senha);
    }
    public function set_senha($senha){
        $this->senha = $senha;
    }
}

?>