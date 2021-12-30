<?php
     require '../include/connexion.php';
     //require '../classes/user.php'; 

            

    class InsertDao {

        
        public function insertUser($h,$a,$b,$c,$d,$e,$f,$g){
            $sql1='SELECT MAX(profil) as nbre FROM user';
            $q = $h->prepare($sql1);
            $q->execute();
            $res=$q->fetchAll(PDO::FETCH_OBJ);
            foreach($res as $result){
                $g= $result->nbre+1;
                $sq='INSERT INTO user (id,username,password,hashpass,cdate,udate,ddate,profil) VALUES (null,:uname,:pass,:hpass,:datec,:dateu,:dated,:profil)';
                $query= $h->prepare($sq);
                $query-> bindParam(':uname', $a, PDO::PARAM_STR);
                $query-> bindParam(':pass', $b, PDO::PARAM_STR);
                $query-> bindParam(':hpass', $c, PDO::PARAM_STR);
                $query-> bindParam(':datec', $d, PDO::PARAM_STR);
                $query-> bindParam(':dateu', $e, PDO::PARAM_STR);
                $query-> bindParam(':dated', $f, PDO::PARAM_STR);
                $query-> bindParam(':profil', $g, PDO::PARAM_STR);
                $query-> execute();
            } 
            return true;        
        } 
        
        public function insertProfile($dh,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
            $sql1='SELECT * FROM profile WHERE id=:idc';
            $q1 = $dh->prepare($sql1);
            $q1-> bindParam(':idc', $a, PDO::PARAM_INT);
            $q1->execute();
            if($q1->rowCount() > 0){
                echo "<script>
                                alert('Ce profile Existe deja et ne Pourait etre Enregistrer par le meme utilisateur!');
                                window.location='../modification.php#profil?id='".$a."' && profil='".$a."';
                            </script>";
            }else{
                $sql='INSERT INTO profile VALUES (:id,:uname,:pname,:statut,:daten,:stmt,:ville,:pays,:resi,:tel,:typetel,:email,:typemail,:image)';
                $query= $dh->prepare($sql);
                    $query-> bindParam(':id', $a, PDO::PARAM_INT);
                    $query-> bindParam(':uname', $b, PDO::PARAM_STR);
                    $query-> bindParam(':pname', $c, PDO::PARAM_STR);
                    $query-> bindParam(':statut', $d, PDO::PARAM_STR);
                    $query-> bindParam(':daten', $e, PDO::PARAM_STR);
                    $query-> bindParam(':stmt', $f, PDO::PARAM_STR);
                    $query-> bindParam(':ville', $g, PDO::PARAM_STR);
                    $query-> bindParam(':pays', $h, PDO::PARAM_STR);
                    $query-> bindParam(':resi', $i, PDO::PARAM_STR);
                    $query-> bindParam(':tel', $j, PDO::PARAM_INT);
                    $query-> bindParam(':typetel', $k, PDO::PARAM_STR);
                    $query-> bindParam(':email', $l, PDO::PARAM_STR);
                    $query-> bindParam(':typemail', $m, PDO::PARAM_STR);
                    $query-> bindParam(':image', $n, PDO::PARAM_STR);
                    $query-> execute();
            } 
            return true;        
        }   
    }
?>