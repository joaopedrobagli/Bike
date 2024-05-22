<?php
class ControladorBD {
    private static $instanciaBanco;

    public static function obterInstanciaBanco($host, $login, $senha, $dataBase) {
        if (!self::$instanciaBanco) {
            self::$instanciaBanco = BancoDeDados::obterInstancia($host, $login, $senha, $dataBase);
        }
        return self::$instanciaBanco;
    }
}
?>
