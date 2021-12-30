<?php 
    require('classes/personne.php'); 
?>


<div class="cv_gauche_top carte ">
    <div class="cv_profile">
        <div class="couverture"></div>
        <div class="search_bar">
            <img src="icons/menu.ico" class="search_img">
            <span>Besoin d'un chef projet</span>
            <img src="icons/recher.ico" class="search_img">
            <span>|</span>
            <img src="icons/crois.ico" class="search_img">
        </div>
        <div class="div_pict">
            <img class="pict" src="image/photocv.jpg">
            <div class="profile_elements">
                <?php
                $pers = new Personne('FOTSO KANGA', 'LIONEL', 'Etudiant', '16 Avril 2000', 'l\'ouest', 'Celibataire', 'New bell', 'Douala', 'Cameroun', '(237) 679032247', 'Mobile, Whatsapp, Telegram', 'lionelfotso413@gmail.com', 'Google, Github, Facebook')
                ?>
                <h3 class="pname"><?php echo $pers->nom . ' ' . $pers->prenom; ?></h3>
                <p class="psub"><?php echo $pers->statut; ?></p>
            </div>
        </div>

        <div class="push_btn">
            <?php include('bouton.php'); ?>
        </div>
            
        <!--div class="share">
            <ol>
                <li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
            </ol>
            <div class="push_btn">
                <span class="plus">+</span>
            </div>
        </div-->
    </div>
    
    <div class="contenu">
        <!--personal data content-->
        <div class="cv_info">
            <div class="data">
                <!--date of birth-->
                <img class="birth" src="icons/anive.ico">
                <div class="over_all">
                    <p class="texta"><?php echo 'Nee le ' . $pers->dateN; ?> </p>
                    <p class="texta"><?php echo 'Originaire de ' . $pers->region . ' ' . $pers->pays; ?> </p>
                    <p class="texta"><?php echo $pers->stmt; ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>

            <div class="data">
                <!--Location-->
                <img class="birth" src="icons/map.png">
                <div class="over_all">
                    <p class="texta"><?php echo 'Residant a ' . $pers->residence; ?> </p>
                    <p class="texta"><?php echo $pers->ville . ' - ' . $pers->pays; ?> </p>
                    <p class="texta"><?php echo $pers->pays; ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>

            <div class="data">
                <!--date of birth-->
                <img class="birth" src="icons/tel.png">
                <div class="over_all">
                    <p class="texta"><?php echo $pers->tel; ?></p>
                    <p class="texta"><?php echo $pers->typeTel; ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>

            <div class="data">
                <!--date of birth-->
                <img class="birth" src="icons/mail.png">
                <div class="over_all">
                    <p class="texta"><?php echo $pers->mail; ?></p>
                    <p class="texta"><?php echo $pers->typemail; ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>


        </div>

        <div class="projects">
            <div>
                <p class="texta">+45 PROJETS</p>
            </div>

            <div>
                <p class="texta">+31 PROJETS</p>
            </div>

            <div>
                <p class="texta"> 12ANS D'EXP</p>
            </div>
        </div>

    </div>
    <div class="lign_red">
        <span style=" background-color: rgb(238, 79, 79);"></span>
        <span></span>
        <span></span>
    </div>

</div>
