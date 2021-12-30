<?php

require '../DAO/insertDao.php';
require '../DAO/userAdmin.php';
require '../classes/user.php';
require '../include/connexion.php';
session_start();

if (isset($_POST['adduser'])) {
    if ($_POST['pass1'] == $_POST['passc1']) {
        $a = $_POST['user1'];
        $b = $_POST['pass1'];
        $c = password_hash($_POST['passc1'], PASSWORD_DEFAULT);
        $datec = date('Y/m/d');
        $dateu = '';
        $dated = '';
        $profil = 0;

        $s = new User($a, $b, $c, $datec, $dateu, $dated, $profil);
        $i = new InsertDao();
        $statut = $i->insertUser($dbh, $s->username, $s->pass, $s->hpass, $s->dateC, $s->dateU, $s->dateD, $s->profil);
        if ($statut = true) {
            echo "<script>
                        alert('Nouvelle Utilisateur Enregistre avec success!');
                        window.location='../index.php';
                      </script>";
        } else {
            echo "<script>
                        alert('Erreur d'execution!');
                        window.location='../index.php';
                      </script>";
        }
    } else {
        echo "<script>
                        alert('faudra que le champs mot de passe = champs confirm');
                        window.location='../index.php';
                      </script>";
    }
}

if (isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if(isset($login) && isset($pass)){
        $admin = new UserAdmin($login, $pass);
        $admin->userAdd($dbh);
    }else{
        echo 'Mot de passe ou nom d\'utilisateur incorrect';
    }
}

if (isset($_POST['addProfil'])) {
		if(!empty($_FILES['imag']['name'])){
			if(move_uploaded_file($_FILES['imag']['tmp_name'], '../image/images'.$_FILES['imag']['name'])){
                $a = $_POST['idc'];
                $b = $_POST['nom'];
                $c = $_POST['prenom'];
                $d = $_POST['statut'];
                $e = $_POST['daten'];
                $f = $_POST['stmt'];
                $g = $_POST['ville'];
                $h = $_POST['pays'];
                $i = $_POST['residence'];
                $j = $_POST['tel'];
                $k = $_POST['typetel'];
                $l = $_POST['email'];
                $m = $_POST['typemail'];
                $n = $_FILES['imag']['name'];

                $insert = new InsertDao();
                $statut = $insert->insertProfile($dbh,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n);
                if ($statut = true) {
                    echo "<script>
                                alert('Nouveau Profile Enregistre avec success!');
                                window.location='../modification.php#profil?id='".$a."' && profil='".$a."';
                            </script>";
                } else {
                    echo "<script>
                                alert('Erreur d'execution!');
                                window.location='../modification.php#profil';
                            </script>";
                }
            }else{
                echo "<script>
                                alert('Impossible de charger l'Image!');
                                window.location='../modification.php';
                            </script>";
            }	
		}
        
}