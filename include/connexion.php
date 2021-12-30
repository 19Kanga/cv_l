<?php

        //declaration des variables de connexion à la bd 
            $dsn="mysql:host=localhost;port=3306;dbname=cvpro";
            $username="root";
            $password="";

        // $bdd= new PDO ("mysql:host=localhost;port=3306;
        // dbname=cv","root","");
        try{
            $dbh=new PDO(
            $dsn,
            $username,
            $password,
            [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]//tableau associatif
        );

        }
        catch(PDOException $ex){
            echo 'connexion echouée:'.$ex->getMessage();
        }


?>