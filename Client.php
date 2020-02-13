<?php
class Client {

    private $nom;
    private $prenom;

    function __construct($n, $p)
    {
        echo "constructeur de Test";
        $this->nom = $n;
        $this->prenom = $p;
    }

    public function Affiche() {
        echo "Details " . $this->nom . " " . $this->prenom;
    }
}