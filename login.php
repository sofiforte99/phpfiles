<?php

$myemail = "sfcnba@gmail.com";
$mypass = "123456";

if (isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['password'];
$rem = $_POST['remember'];

if ($email == $myemail && $pass == $mypass)
{
    if (isset($_POST['remember']))
    {
    setcookie ('email', $email, time ()+60*60*7);   
    }
    session_start(); //crea sesión o reanuda la actual basada en la opercación post o pasado mediante cookie
    $_SESSION['email'] = $email;
    header("location: welcome.php");
}

else
{
    echo "La contraseña o el email ingresado es inválido. <br> Click aquí para <a href = 'login.php'>regresar al login</a>";
}

}
else
{
    header("location: login.php");
}




?>