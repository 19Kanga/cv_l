<?php

class Competence
{
    public $nomC;
    public $typeC;
    public $valeur;

    public function __construct($nomC,$typeC,$valeur) {
        $this->nomC=$nomC;
        $this->typeC=$typeC;
        $this->valeur=$valeur;
    }
}
?>
