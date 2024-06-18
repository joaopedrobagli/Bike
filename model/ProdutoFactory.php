
<?php


class ProdutoFactory {
    public static function criarProduto($nome, $valor, $imagem) {
        return new Produto($nome, $valor, $imagem);
    }
}


?>