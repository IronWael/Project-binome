<?php
session_start();

include "../models/user.php";

if (isset($_GET['event']) && !empty($_GET['event'])) {
    $event = $_GET['event'];

    if ($event == 'register') {
        # code Register
        $user = new User();
        $user->repassword = md5($_POST['repassword']);
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->password = md5($_POST['password']);
        $user->email = $_POST['email'];
        $user->adress = $_POST['adress'];
        $imageName=$_FILES['img']['name'];
        $ext=substr($imageName,strpos($imageName,"."));
        $user->image=generateRandomString().$ext;

        move_uploaded_file($_FILES['img']['tmp_name'],"../assets/image/".$user->image);
        
        $user->insert();
    }
    else if ($event == 'login') {
        $user = new User();

        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);

        $user->login();
        
    }
    else if ($event=='logout') {
        
        session_unset();

        session_destroy();

        header('location:../views/admins/login.php?error=false');
    }
    else{
        echo "You are not allowed !";
    }

}else{
    echo "You are not allowed !";
}
function generateRandomString(){
    $hourouf="012356789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    $charLength=strlen($hourouf);
    $randomString="";
    for($i=0;$i<10;$i++){
        $randomString=$randomString.$hourouf[rand(0,$charLength-1)];
    }
    return $randomString;
}
?>