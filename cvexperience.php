<?php 
    require('classes/experience.php'); 

    $expe1=new Experience('Chef des projets technologiques','Ets. M DE M','juillet 2019','ce jour','http://mdem.cm','Chef du projet annuaire-universel.cm de l\'ART');
    $expe2=new Experience('Fondateur & DT','Startup ChickDev','juin 2015','ce jour','http://mdem.cm','Réalisation de plusieurs sites web et applications mobiles');
    $expe3=new Experience('Enseignant','INSTITUT UNIVERSITAIRE DE LA CÔTE','octobre 2011','ce jour','http://mdem.cm','\'Analyse UML & Merise\', \'BD SQL, Oracle et MySQL\', \'Dev ios et Android\', \'BI & BigData Talend DI & Hadoop\', 1, 2, 3, 4 Année ');
    $expe4=new Experience('Developpeur en chef','Kayroual group','Mai 2013','Juin 2015','http://mdem.cm','Realisation de multiple projets logiciels et web, infographie');
    $expe5=new Experience('Responsable commerciale','Bao Sarl','Decembre 2012','Juin 2013','http://mdem.cm','Realisation de multiple projets logiciels et web, infographie');
?>
<div class="experience carte">
                <div class="header">

                    <div class="header_infos">
                        <img class="img_company" src="icons/compagnie.ico">
                        <div>
                            <p class="texta"> Experience professional </p>
                            <p class="texta"><i> Expertise en entreprise </i></p>
                        </div>
                    </div>
                    <img src="icons/troisp.ico" class="img_menu">

                </div>
                <div class="scrollbar">
                    <div class="body_experience">
                        <div>
                            <p class="text1"><?= $expe1->titre; ?> - <b> @<?= $expe1->nomEntreprise; ?></b></p>
                            <p class="text1" style="color: #015f9f;">De <?= $expe1->dateDebut; ?> à <?= $expe1->dateFin; ?>  - <?= $expe1->site; ?> </p>
                            <p class="text1"><?= $expe1->detail; ?></p>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"><?= $expe2->titre; ?> - <b> @<?= $expe2->nomEntreprise; ?></b></b>
                            </p>
                            <p class="text1" style="color: #015f9f;">De <?= $expe2->dateDebut; ?> à <?= $expe2->dateFin; ?>  - <?= $expe2->site; ?></p>
                            <p class="text1"><?= $expe2->detail; ?></p>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"><?= $expe3->titre; ?> - <b> @<?= $expe3->nomEntreprise; ?></b></p>
                            <p class="text1" style="color: #015f9f;">De <?= $expe3->dateDebut; ?> à <?= $expe3->dateFin; ?> - <?= $expe3->site; ?></p>
                            <p class="text1"><?= $expe3->detail; ?></p>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"><?= $expe4->titre; ?> - <b> @<?= $expe4->nomEntreprise; ?></b>
                                <p class="text1" style="color: #015f9f;">De <?= $expe4->dateDebut; ?> a <?= $expe4->dateFin; ?> - </p>
                                <p class="text1"><?= $expe4->detail; ?></p>
                                <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"><?= $expe5->titre; ?> <b> @<?= $expe5->nomEntreprise; ?></b>
                                <p class="text1" style="color: #015f9f;">De <?= $expe5->dateDebut; ?> a <?= $expe5->dateFin; ?> - <?= $expe5->site; ?></p>
                                <p class="text1"><?= $expe5->detail; ?></p>
                        </div>

                    </div>
                </div>
            </div>