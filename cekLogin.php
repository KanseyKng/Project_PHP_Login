<?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    session_start();
    if($username == 'admin' && $password == 123){
        $_SESSION['nama']=$nama;
        $_SESSION['email']=$email;
        header("Location:profil.php");
        exit();


    }else{
        header("Location:form.php?error=1");
        
        exit();

    }

}



?>