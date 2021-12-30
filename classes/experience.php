<?php

class Experience
{
    public $titre;
    public $nomEntreprise;
    public $dateDebut;
    public $dateFin;
    public $site;
    public $detail;

    public function __construct(
        $titre,
        $nomEntreprise,
        $dateDebut,
        $dateFin,
        $site,
        $detail
    ) {
        $this->titre = $titre;
        $this->nomEntreprise = $nomEntreprise;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->site = $site;
        $this->detail = $detail;
    }
}
?>
