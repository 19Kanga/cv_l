<?php
    require "classes/cursus.php";

    $curs1= new Cursus('Dipet 2 Electronique','ENSET de Douala','Aout 2016','Gestion d\'eclairage d\'une maison( Android + Adruino)');
    $curs2= new Cursus('Oracle Certified et Associate','Kentnix Sarl','Mars 2009','Oracle Database 11g Administration');
    $curs3= new Cursus('Oracle SQL certified','Kentnix Sarl','Decembre 2008','SQl 2, SQL 3, XML');
    $curs4= new Cursus('Licence professionelle','Douala Institute of Tech.','Octobre 2008','Telecommunication et Reseau');
    $curs5= new Cursus('DEC/BTS','CCNB Dieppe Canada','Septembre 2007','Programmation Appliquee pour internet');
    $curs6= new Cursus('Baccalaureat','Lycee Technique de Douala Bassa','Juin 2005','Electrotechnique, Mention Bien (Major de centre)');
    $curs7= new Cursus('Baccalaureat','Lycee Technique de Douala Bassa','Juin 2005','Electrotechnique, Mention Bien (Major de centre)');
    $curs8= new Cursus('Probatoire','Lycee Bilingue De Bobongo','Juin 2004','Serie D, Mention Bien (Major de centre)');
?>
<div class="academy carte">
                <div class="header">

                    <div class="header_infos">
                        <img class="img_company" src="image/academy.png">
                        <div>
                            <p class="texta"> Cursus academique </p>
                            <p class="texta"><i> Diplome et formations certifiantes </i></p>
                        </div>
                    </div>
                    <img src="icons/troisp.ico" class="img_menu">
                </div>

                <div class="scrollbartwo">
                    <div class="training">
                        <div>
                            <p class="text1"><?= $curs1->diplome; ?> - <b> @<?= $curs1->lieuxObt; ?></b></p>
                                <div class="training_year">
                                    <p class="text1" style="color: #015f9f;"><?= $curs1->anneeObt; ?> -</p>
                                    <i class="text1"><?= $curs1->detail; ?></i>
                                </div>
                                <hr class="ligne1">
                        </div>

                        <div>
                            <p class="text1"><?= $curs2->diplome; ?> - <b> @<?= $curs2->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs2->anneeObt; ?> - </p>
                                <i class="text1"><?= $curs2->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>

                        <div>
                            <p class="text1"><?= $curs3->diplome; ?>- <b> @<?= $curs3->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs3->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs3->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>

                        <div>
                            <p class="text1"><?= $curs4->diplome; ?> - <b> @<?= $curs4->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs4->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs4->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>

                        <div>
                            <p class="text1"><?= $curs5->diplome; ?> <b> @<?= $curs5->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs5->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs5->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"><?= $curs6->diplome; ?> <b> @<?= $curs6->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs6->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs6->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"> <?= $curs7->diplome; ?><b> @<?= $curs7->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs7->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs7->detail; ?></i>
                            </div>
                            <hr class="ligne1">
                        </div>
                        <div>
                            <p class="text1"> <?= $curs8->diplome; ?><b> @<?= $curs8->lieuxObt; ?></b></p>
                            <div class="training_year">
                                <p class="text1" style="color: #015f9f;"><?= $curs8->anneeObt; ?> -</p>
                                <i class="text1"><?= $curs8->detail; ?></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>