<?php

class ClienteFactory {
    public static function criarCliente($nome, $email, $cpf, $senha) {
        return new Cliente($nome, $email, $cpf, $senha);
    }
}

?>