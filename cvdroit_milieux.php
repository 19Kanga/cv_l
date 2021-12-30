<?php
    require "classes/interet.php";
    require "classes/langue.php";

    $inte1= new Interet('Stack_Overflow_logo.png');
    $inte2= new Interet('sports.png');
    $inte3= new Interet('cake.png');
    $inte4= new Interet('music.jpg');
    $inte5= new Interet('boxing.png');

    $lang1= new Langue('Francais');
    $lang2= new Langue('Anglais');
?>
<div class="autres">
                <div class="point_interet carte">
                    <div>
                        <h3 class="text1">Point d'interets</h3>
                        <i class="text1"> Simple passe temps pour se faire un peux plaisir</i>
                    </div>

                    <div class="entertain">
                        <img src="image/<?= $inte1->nomImage; ?>" alt="">
                        <img src="image/<?= $inte2->nomImage; ?>" alt="">
                        <img src="image/<?= $inte3->nomImage; ?>" alt="">
                        <img src="image/<?= $inte4->nomImage; ?>" alt="">
                        <img src="image/<?= $inte5->nomImage; ?>" alt="">
                    </div>
                </div>

                <div class="langue carte">
                    <div>
                        <h3 class="text1"> Langues</h3>
                        <i class="text1">pratiquees en entreprise</i>
                    </div>

                    <div class="lang">
                        <input type="checkbox" checked>
                        <p><?= $lang1->langue; ?></p>
                    </div>

                    <div class="lang">
                        <input type="checkbox" checked>
                        <p><?= $lang2->langue; ?></p>
                    </div>
                </div>
            </div>