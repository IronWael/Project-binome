<?php
include "../configdb/db_connector.php";

class User{
    public $repassword;
    public $firstname;
    public $lastname;
    public $password;
    public $email;
    public $adress;
    public $image;


    function insert(){
        
        if (($this->password)==($this->repassword)){
            $base = connect_to_db();
          $requette = "INSERT INTO users values (null,'$this->firstname','$this->lastname','$this->password','$this->email','$this->adress','$this->image','admin')";

          $rowInserted = $base->exec($requette);

            if ($rowInserted == 1) {
                session_start();
                
                $_SESSION['email'] = $this->email ;
                header('location:../views/admins/dashboard.php?fn='.$this->firstname.'&&ln='.$this->lastname.'&&pi='.$this->image);
            } else {
           
                header('location:../views/admins/register.php?error1=true1');
            
            }
        
        
        } else {
            header('location:../views/admins/register.php?error1=true');
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
            $_SESSION['firstname'] = $user->firstname ;
            $_SESSION['lastname'] = $user->lastname ;
            $_SESSION['image'] = $user->image ;
            header('location:../views/admins/dashboard.php?fn='.$user->firstname.'&&ln='.$user->lastname.'&&pi='.$user->image);
        }else{
            header('location:../views/admins/login.php?error=true');
        }

    }
}
