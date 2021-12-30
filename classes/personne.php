<?php

class Personne
{
    public $nom;
    public $prenom;
    public $statut;
    public $dateN;
    public $region;
    public $stmt;
    public $residence;
    public $ville;
    public $pays;
    public $tel;
    public $typeTel;
    public $mail;
    public $typemail;

    public function __construct(
        $nom,
        $prenom,
        $statut,
        $dateN,
        $region,
        $stmt,
        $residence,
        $ville,
        $pays,
        $tel,
        $typeTel,
        $mail,
        $typemail
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->statut = $statut;
        $this->dateN = $dateN;
        $this->region = $region;
        $this->stmt = $stmt;
        $this->residence = $residence;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->tel = $tel;
        $this->typeTel = $typeTel;
        $this->mail = $mail;
        $this->typemail = $typemail;
    }
}
?>
