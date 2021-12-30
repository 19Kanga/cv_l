<?php
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
    //$curs6= new Cursus('Baccalaureat','Lycee Technique de Douala Bassa','Juin 2005','Electrotechnique, Mention Bien (Major de centre)');
    //$curs7= new Cursus('Baccalaureat','Lycee Technique de Douala Bassa','Juin 2005','Electrotechnique, Mention Bien (Major de centre)');
    //$curs8= new Cursus('Probatoire','Lycee Bilingue De Bobongo','Juin 2004','Serie D, Mention Bien (Major de centre)');
    //competence.php
	function generateRow($pers,$expe1,$expe2,$inte1,$inte2,$lang1,$lang2,$curs4,$curs5){
		$contents = '';

        $contents .= '
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
            </table>
        	';
            $contents .= '';


      		$contents .= '
                <table border="1" cellspacing="0" cellpadding="2">
                    <tr>
        			    <td align="center" style="font-size:15px;background-color:gray;"><b>Experience Professionel</b></td>
        		    </tr>
      				<tr>
                        <td align="center">
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
                        <td><img src="image/"'.$inte1->nomImage.'" width="25px" height="15px"></td>
                        <td align="center" style="color:blue;">'.$lang1->langue.'<br>'.$lang2->langue.'</td>
                    </tr>
                </table>
      			';
            


		return $contents;
	}
		
	//$parse = parse_ini_file('config.ini', FALSE, INI_SCANNER_RAW);
    $title = "CURICULUM VITALE";

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Result: '.$title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '
      	<h2 align="center">'.$title.'</h2> 
        <body> 
      ';  
   	$content .= generateRow($pers,$expe1,$expe2,$inte1,$inte2,$lang1,$lang2,$curs4,$curs5);  
    $content .= '</body>';  
    $pdf->writeHTML($content);
    $pdf->Output('curiculum.pdf', 'I');

?>