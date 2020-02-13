<?php

class Test {

    private $nom;
    private $prenom;

    public function getNomComplet() {
        return $this->prenom . " " . $this->nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($n) {
        $this->nom = htmlentities($n);
    }

    public function Affiche() {
        echo "Details " . $this->nom . " " . $this->prenom;
    }
}


$t1 = new Test();
$t1->setNom("Toto");
// //$t1->prenom = "Titi";
echo $t1->getNom();

$t2 = new Test();
$t2->setNom("Tutu");
$t2->Affiche();

