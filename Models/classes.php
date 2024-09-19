<?php

class Prodotto{
    public $nome;
    public $image;
    public $prezzo;
    public $categoria;

    function __construct($_nome, $_prezzo, $_image, Categoria $_categoria) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
        $this->categoria = $_categoria;
    }

    //funzione che mostra le info

    public function getProductInfos(){
        return "Nome prodotto: ".$this->nome." | prezzo: ".$this->prezzo;
    }
}

//istanze Prodotto


class Categoria extends Prodotto{
    public $nomeCategoria;
    public $icon;

    function __construct($_nomeCategoria, $_icon) {
        $this->nomeCategoria = $_nomeCategoria;
        $this->icon = $_icon;
    }
}

//istanze Categoria


?>