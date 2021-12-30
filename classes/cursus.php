<?php

class Cursus
{
    public $diplome;
    public $lieuxObt;
    public $anneeObt;
    public $detail;

    public function __construct(
        $diplome,
        $lieuxObt,
        $anneeObt,
        $detail
    ) {
        $this->diplome= $diplome;
        $this->lieuxObt= $lieuxObt;
        $this->anneeObt= $anneeObt;
        $this->detail= $detail;
    }
}
?>