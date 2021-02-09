<?php
    if (isset($_COOKIE['EMAIL'])) //chequea si no es null
    { 
    $email = $_COOKIE['email'];   
    

    echo "<script>
        document.getElementbyId('email').value='$email';
        alert ($email) 
        </script>"; //toma el elemento con el id del mail

    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!</title>
</head>
<body>
<table>
<h3>Logueate para comenzar</h3>

<form method="post" action="validate.php">
<tr>
    <th>Email</th>
    <td><input type ="text" id="email" name="email"></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type ="password" name ="password"></td>
</tr>
<tr>
<td><input type="checkbox" name ="remember" value ="1">Recordarme</td>
</tr>
<tr>
<td>
<input type = "submit" value ="Login" name = "login">
</td>
</tr>
</form>


</table>
    
</body>
</html>