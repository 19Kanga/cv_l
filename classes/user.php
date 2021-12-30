<?php

    class User{
        public $username;
        public $pass;
        public $hpass;
        public $dateC;
        public $dateU;
        public $dateD;
        public $profil;
        public function __construct(
            $username,
            $pass,
            $hpass,
            $dateC,
            $dateU,
            $dateD,
            $profil
        ) {
            $this->username = $username;
            $this->pass = $pass;
            $this->hpass = $hpass;
            $this->dateC = $dateC;
            $this->dateU = $dateU;
            $this->dateD = $dateD;
            $this->profil = $profil;
        }

        /**public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }
        public String setUsername(String $a){
            $this->username=$a;
        }**/


    }
?>