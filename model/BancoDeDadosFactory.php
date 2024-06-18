
<?php


class BancoDeDadosFactory {
    public static function criarBancoDeDados($host, $usuario, $senha, $nomeBanco) {
        return BancoDeDados::obterInstancia($host, $usuario, $senha, $nomeBanco);
    }
}

?>