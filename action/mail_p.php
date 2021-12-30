<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("../vendor/autoload.php");
require('../vendor/phpmailer/phpmailer/src/SMTP.php');
require('../vendor/phpmailer/phpmailer/src/Exception.php');
require('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('../classes/personne.php');

    require('../classes/competence.php');
    require('../classes/experience.php');
    require('../classes/interet.php');
    require('../classes/langue.php');
    require('../classes/cursus.php');
    //personne.php
    $pers = new Personne('FOTSO KANGA', 'LIONEL', 'Etudiant', '16 Avril 2000', 'l\'ouest', 'Celibataire', 'New bell', 'Douala', 'Cameroun', '(237) 679032247', 'Mobile, Whatsapp, Telegram', 'lionelfotso413@gmail.com', 'Google, Github, Facebook');
    //experience
    $expe1=new Experience('Chef des projets technologiques','Ets. M DE M','juillet 2019','ce jour','http://mdem.cm','Chef du projet annuaire-universel.cm de l\'ART');
    $expe2=new Experience('Fondateur & DT','Startup ChickDev','juin 2015','ce jour','http://mdem.cm','Réalisation de plusieurs sites web et applications mobiles');
    //$expe3=new Experience('Enseignant','INSTITUT UNIVERSITAIRE DE LA CÔTE','octobre 2011','ce jour','http://mdem.cm','\'Analyse UML & Merise\', \'BD SQL, Oracle et MySQL\', \'Dev ios et Android\', \'BI & BigData Talend DI & Hadoop\', 1, 2, 3, 4 Année ');
    //$expe4=new Experience('Developpeur en chef','Kayroual group','Mai 2013','Juin 2015','http://mdem.cm','Realisation de multiple projets logiciels et web, infographie');
    //$expe5=new Experience('Responsable commerciale','Bao Sarl','Decembre 2012','Juin 2013','http://mdem.cm','Realisation de multiple projets logiciels et web, infographie');
    //interet
    $inte1= new Interet('Stack_Overflow_logo.png');
    $inte2= new Interet('sports.png');
    //$inte3= new Interet('cake.png');
    //$inte4= new Interet('music.jpg');
    //$inte5= new Interet('boxing.png');
    //langue.php
    $lang1= new Langue('Francais');
    $lang2= new Langue('Anglais');
    //cursus_academique.php
    $curs4= new Cursus('Licence professionelle','Douala Institute of Tech.','Octobre 2008','Telecommunication et Reseau');
    $curs5= new Cursus('DEC/BTS','CCNB Dieppe Canada','Septembre 2007','Programmation Appliquee pour internet');
    $curs1= new Cursus('Dipet 2 Electronique','ENSET de Douala','Aout 2016','Gestion d\'eclairage d\'une maison( Android + Adruino)');
    $curs2= new Cursus('Oracle Certified et Associate','Kentnix Sarl','Mars 2009','Oracle Database 11g Administration');
    $curs3= new Cursus('Oracle SQL certified','Kentnix Sarl','Decembre 2008','SQl 2, SQL 3, XML');
    //competence.php
    $comp1=new Competence('Developpement Front End','HTML5, SASS, VueJS, Angular',80);
    $comp2=new Competence('Developpement Back End','HTML5, SASS, VueJS, Angular',60);
    $comp3=new Competence('Base de Donnée','MySQL, ORACLE, PostgreSQL, SQLserver',70);
    if(!empty($_POST['email'])){
        $mail=$_POST['email'];
    }else{
        echo '<script> 
                    alert("Adresse email Vide!"); 
                    window.location="../index.php";
              </script>';
    }
// Passing true enables exceptions.
$phpmailer = new PHPMailer(true);

try {
  // Configure SMTP
  //$phpmailer->SMTPDebug = 2;
  $phpmailer->isSMTP();
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = 'tls';
  // ENV Credentials
  $phpmailer->Host = 'smtp.gmail.com';
  $phpmailer->Username = 'lionelfotso413@gmail.com';
  $phpmailer->Password = 'NARUKOTA13467';
  $phpmailer->Port = 587;
  
  // Mail Headers
  $phpmailer->setFrom("lionelfotso413@gmail.com", "fotso kanga lionel");
  // Change to recipient email. Make sure to use a real email address in your tests to avoid hard bounces and protect your reputation as a sender.
  $phpmailer->addAddress($mail);

  // Message
  $phpmailer->isHTML(true);
  $phpmailer->Subject = "CV DE FOTSO LIONEL CS2I3 DWM";
  $phpmailer->Body    = '
            <table border="1" cellspacing="0" cellpadding="2">
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;background-color:gray;"><b>Profil</b></td>
        		</tr>
        		<tr>
        			<td><b>Nom et Prenom</b></td>
        			<td align="center" style="color:blue;">'.$pers->nom.' '.$pers->prenom.'</td>
        		</tr>
                <tr>
        			<td><b>Statut</b></td>
        			<td align="center" style="color:blue;">'.$pers->statut.'</td>
        		</tr>
                <tr>
        			<td><b>Date de Naissance</b></td>
        			<td align="center" style="color:blue;">'.$pers->dateN.'</td>
        		</tr>
                <tr>
        			<td><b>Origine</b></td>
        			<td align="center" style="color:blue;">'.$pers->region.' '.$pers->pays.'</td>
        		</tr>
                <tr>
        			<td><b>Statut matrimonial</b></td>
        			<td align="center" style="color:blue;">'.$pers->stmt.'</td>
        		</tr>
                <tr>
        			<td><b>Residence</b></td>
        			<td align="center" style="color:blue;">'.$pers->residence.'</td>
        		</tr>
                <tr>
        			<td><b>Ville</b></td>
        			<td align="center" style="color:blue;">'.$pers->ville.' '.$pers->pays.'</td>
        		</tr>
                <tr>
        			<td><b>Telephone</b></td>
        			<td align="center" style="color:blue;">'.$pers->tel.'</td>
        		</tr>
                <tr>
        			<td><b>Type de Numero</b></td>
        			<td align="center" style="color:blue;">'.$pers->typeTel.'</td>
        		</tr>
                <tr>
        			<td><b>Email</b></td>
        			<td align="center" style="color:blue;">'.$pers->mail.'</td>
        		</tr>
                <tr>
        			<td><b>Type de mail</b></td>
        			<td align="center" style="color:blue;">'.$pers->typemail.'</td>
        		</tr>
            
            
                    <tr>
        			    <td align="center" colspan="2" style="font-size:15px;background-color:gray;"><b>Experience Professionel</b></td>
        		    </tr>
      				<tr>
                        <td align="center" colspan="2">
                            <p>'. $expe1->titre.' - <b> @'. $expe1->nomEntreprise.'</b><br>
                            <a style="color:#015f9f";>De '. $expe1->dateDebut.' à '. $expe1->dateFin.' - '. $expe1->site.'</a><br>
                            '.$expe1->detail.'<br>
                            --------------------------------------------------------------------------------------------------</p>
                            <p>'. $expe1->titre.' - <b> @'. $expe1->nomEntreprise.'</b><br>
                            <a style="color:#015f9f";>De '. $expe1->dateDebut.' à '. $expe1->dateFin.' - '. $expe1->site.'</a><br>
                            '.$expe1->detail.'<br>
                            --------------------------------------------------------------------------------------------------</p>
                            <p>'. $expe1->titre.' - <b> @'. $expe1->nomEntreprise.'</b><br>
                            <a style="color:#015f9f";>De '. $expe1->dateDebut.' à '. $expe1->dateFin.' - '. $expe1->site.'</a><br>
                            '.$expe1->detail.'<br>
                            --------------------------------------------------------------------------------------------------</p>
                        </td>
        		    </tr>
                    <tr>
                        <td align="center" style="font-size:15px;background-color:gray;"><b>Interet</b></td>
                        <td align="center" style="font-size:15px;background-color:gray;"><b>Langue</b></td>
                    </tr>
                    <tr>
                        <td><img src="image/"'. $inte1->nomImage .'" alt="'.$inte1->nomImage.'"></td>
                        <td align="center" style="color:blue;">'.$lang1->langue.'<br>'.$lang2->langue.'</td>
                    </tr>
                    <tr>
        			    <td align="center" colspan="2" style="font-size:15px;background-color:gray;"><b>Cursus academique</b></td>
        		    </tr>
      				<tr>
                        <td align="center" colspan="2">
                            <p>'. $curs1->diplome .' - <b> @'. $curs1->lieuxObt .'</b></p>
                                <div>
                                    <p style="color: #015f9f;">'. $curs1->anneeObt .'-</p>
                                    <i>'. $curs1->detail .'</i>
                                </div>
                                <hr>
                            <p>'. $curs2->diplome .' - <b> @'. $curs2->lieuxObt .'</b></p>
                                <div>
                                    <p style="color: #015f9f;">'. $curs2->anneeObt .'-</p>
                                    <i>'. $curs2->detail .'</i>
                                </div>
                                <hr>
                            <p>'. $curs3->diplome .' - <b> @'. $curs3->lieuxObt .'</b></p>
                                <div>
                                    <p style="color: #015f9f;">'. $curs3->anneeObt .'-</p>
                                    <i>'. $curs3->detail .'</i>
                                </div>
                                <br>
                        </td>
                        
        		    </tr>
                    <tr>
        			    <td align="center" colspan="2" style="font-size:15px;background-color:gray;"><b>Compétence</b></td>
        		    </tr>
      				<tr>
                        <td align="center" colspan="2">
                            <p><input type="checkbox" checked> '. $comp1->nomC .' <k style="font-size:35px; color:red;">*</k></p>
                                <div>
                                    <p>'. $comp1->typeC .'</p>
                                    <input type="range" value="'.$comp1->valeur .'" max="100" style="width: 350pxpx;">
                                </div>
                                <hr>
                            <p><input type="checkbox" checked> '. $comp2->nomC .' <k style="font-size:35px; color:red;">*</k></p>
                                <div>
                                    <p>'. $comp2->typeC .'</p>
                                    <input type="range" value="'.$comp2->valeur .'" max="100" style="width: 350pxpx;">
                                </div>
                                <hr>
                            <p><input type="checkbox" checked> '. $comp3->nomC .' <k style="font-size:35px; color:red;">*</k></p>
                                <div>
                                    <p>'. $comp3->typeC .'</p>
                                    <input type="range" value="'.$comp3->valeur .'" max="100" style="width: 350pxpx;">
                                </div>
                                <br>
                        </td>
        		    </tr>
                </table>
            ';
  $phpmailer->AltBody = "Hi!\nTest from Mailer To Go 😊\n";

  // Send the Email
  $phpmailer->send();
  echo "<script> 
                alert('Message Envoye avec Succes!'); 
                window.location='../index.php';
        </script>";
} catch (Exception $e) {
  echo "Message Non envoye. Mailer Error: {$phpmailer->ErrorInfo}";
}