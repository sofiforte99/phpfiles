<?php
    session_start();
    session_destroy(); //destruye información de una sesión. 
    if (isset($_COOKIE['email']))
    {    
    $email = $_COOKIE['email'];
    setcookie ('email', $email, time()-1);
    }
    
    echo "Has salido de tu cuenta. Click acá para volver a iniciar sesión <a href = 'login.php'>Iniciar sesión</a>";





?>