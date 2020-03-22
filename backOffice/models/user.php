<?php
include "../configdb/db_connector.php";

class User{

    public $firstname;
    public $lastname;
    public $password;
    public $email;
    public $adress;
    public $image;


    function insert(){
        $base = connect_to_db();
        $requette = "INSERT INTO users values (null,'$this->firstname','$this->lastname','$this->password','$this->email','$this->adress','$this->image','admin')";

        $rowInserted = $base->exec($requette);



        if ($rowInserted == 1) {

            header('location:../views/admins/dashboard.php?fn='.$this->firstname.'&&ln='.$this->lastname.'&&pi='.$this->image);
        } else {
            echo "SQL Error";
        }
        
    }

    function login(){
        $base = connect_to_db();
        $requette = "SELECT * from users where email ='$this->email' and password='$this->password'";

        $data = $base->query($requette);

        if ($data->rowCount() == 1) {
            session_start();
            $user = $data->fetchObject();
            $_SESSION['email'] = $user->email ;
            header('location:../views/admins/dashboard.php');
        }else{
            header('location:../views/admins/login.php?error=true');
        }

    }
}
