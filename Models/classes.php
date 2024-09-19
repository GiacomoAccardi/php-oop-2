<?php

class Prodotto{
    public $nome;
    public $image;
    public $prezzo;
    public $categoria;
    public $tipologia;

    function __construct($_nome, $_prezzo, $_image, Categoria $_categoria, tipologia $_tipologia) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
        $this->categoria = $_categoria;
        $this->tipologia = $_tipologia;
    }

    //funzione che mostra le info

    public function getProductInfos(){
        return "Nome prodotto: ".$this->nome." | prezzo: ".$this->prezzo;
    }
}

class Categoria extends Prodotto{
    public $nomeCategoria;
    public $icon;

    function __construct($_nomeCategoria, $_icon) {
        $this->nomeCategoria = $_nomeCategoria;
        $this->icon = $_icon;
    }
}

class tipologia extends Prodotto{
    public $type;
    public $icon;

    function __construct($_type, $_icon) {
        $this->type = $_type;
        $this->icon = $_icon;
    }
}

?>