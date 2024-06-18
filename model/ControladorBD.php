<?php
class ControladorBD {
    public static function criarBancoDeDados($host, $login, $senha, $dataBase) {
        return BancoDeDados::obterInstancia($host, $login, $senha, $dataBase);
    }
}
?>
