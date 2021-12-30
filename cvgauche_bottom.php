<?php
    require('classes/competence.php');

    $comp1=new Competence('Developpement Front End','HTML5, SASS, VueJS, Angular',80);
    $comp2=new Competence('Developpement Back End','HTML5, SASS, VueJS, Angular',60);
    $comp3=new Competence('Base de Donnée','MySQL, ORACLE, PostgreSQL, SQLserver',70);
    $comp4=new Competence('Utilisation Des Frameworks','LARAVEL, BOOTSTRAP, SASS, VueJS, Angular',45);
    $comp5=new Competence('Developpement Front End','HTML5, SASS, VueJS, Angular',40);
    $comp6=new Competence('Developpement Front End','HTML5, SASS, VueJS, Angular',65);
?>

<div class="cv_gauche_bottom carte">
            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"> <?php echo $comp1->nomC; ?></h4>
                        <p style="font-size:30px; color:red;">*</p>
                    </div>
                    <p class="text1"> <?php echo $comp1->typeC; ?></p>
                    <div class="progression">
                        <input type="range" value="<?= $comp1->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>

            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"> <?php echo $comp2->nomC; ?></h4>
                        <p style="font-size:30px; color:red;">*</p>
                    </div>
                    <p class="text1"><?= $comp2->typeC ?></p>
                    <div class="progression">
                        <input type="range" value="<?= $comp2->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>

            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"> <?php echo $comp3->nomC; ?></h4>
                        <p style="font-size:30px; color:red;">*</p>
                    </div>
                    <p class="text1"><?php echo $comp3->typeC; ?></p>
                    <div class="progression">
                        <input type="range" value="<?= $comp3->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>

            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"> <?php echo $comp4->nomC; ?></h4>
                        <p style="font-size:30px; color:red;">*</p>
                    </div>
                    <p class="text1"><?= $comp4->typeC; ?></p>
                    <div class="progression">
                        <input type="range" value="<?= $comp4->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>

            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"><?= $comp5->nomC; ?> </h4>
                        <p style="font-size:30px; color:red;">*</p>
                        <!--img src="image/star.png" height="15" width="15" alt=""-->
                    </div>
                    <p class="text1"><?= $comp5->typeC; ?></p>
                    <div class="progression">
                        <input type="range" value="<?= $comp5->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>

            <div class="competence">
                <input type="checkbox" checked>
                <div style="flex: 1;">
                    <div class="competence_dev">
                        <h4 class="text1"> <?= $comp6->nomC; ?></h4>
                        <p style="font-size:30px; color:red;">*</p>
                    </div>
                    <p class="text1"><?= $comp6->typeC; ?></p>
                    <div class="progression">
                        <input type="range" class='rang' value="<?= $comp6->valeur; ?>" max="150" style="width: 385px;">
                    </div>
                </div>
            </div>


        </div>