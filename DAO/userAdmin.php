<?php

class UserAdmin
{

    public $username;
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function userAdd($a)
    {

        session_start();
            $sql = 'SELECT * FROM user WHERE username=:username';
            $stat = $a->prepare($sql);
            $stat-> bindParam(':username', $this->username, PDO::PARAM_STR);
            
            $stat->execute();

                        //check if email exist
            if($stat->rowCount() > 0){
                            //get the row
                $user = $stat->fetchAll(PDO::FETCH_OBJ);
                foreach ($user as $result) {
                    $id  = $result->id;
                    $name = $result->username;
                    $passe = $result->password;
                     $profil = $result->profil;
                     $cdate = $result->cdate;
                    $udate = $result->udate;
                    if($this->password == $passe){
                        $_SESSION['ID'] = $id;
                        $_SESSION['USERNAME'] = $name;
                        $_SESSION['PROFIL'] = $profil;
                        $_SESSION['CDATE'] = $cdate;
                        $_SESSION['UDATE'] = $udate;
                        if($_SESSION['ID'] != " "){
                            header('location: ../modification.php?profil='.$_SESSION['PROFIL'].' && id='.$_SESSION['ID']);
                        }      
                    }
                    else{
                        echo 'Mot de passe incorrect';
                    }
                }

            }
            else{
                echo 'Utilisateur nexiste pas dans la BD';
                 
            }
                    
		
            /**if ( $stat->rowCont() > 0) {
                $res = $stat->fetchAll();
                foreach ($res as $result) {
                    $id  = $result->id;
                    $name = $result->username;
                    $profil = $result->profil;
                    $cdate = $result->cdate;
                    $udate = $result->udate;
                    var_dump($id);
                    var_dump($name);
                    header('location : ../modification.php');
                }
                session_regenerate_id();
                $_SESSION['ID'] = $id;
                $_SESSION['USERNAME'] = $name;
                $_SESSION['PROFIL'] = $profil;
                $_SESSION['CDATE'] = $cdate;
                $_SESSION['UDATE'] = $udate;
                session_write_close();
                var_dump($_SESSION['ID']);
                header('location : ../modification.php');
                echo "connexion OK";
            }**/
    }
}
?>