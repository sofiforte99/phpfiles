<?php

if (isset($_POST['submit']))
{
    $file = $_FILES['file']; //superglobal: informacion que toma del archivo usado en el formulario
    $fileName = $_FILES['file']['name']; //nombre
    $fileTmpName = $_FILES['file']['tmp_name']; //temporal
    $fileSize = $_FILES['file']['size']; //tamaño
    $fileError = $_FILES['file']['error']; //si hay error
    $fileType = $_FILES['file']['type']; //tipo de archivo

    $fileExt = explode('.',$fileName); //split string 
    $fileActualExt = strtolower(end($fileExt)); //convierte a minúscula. end final del array

    $allowed = array('jpg','jpeg', 'png', 'pdf'); //diferentes archivos permitidos

    if (in_array($fileActualExt, $allowed)) //si esta extension esta dentro del array, funciona
    {
        if ($fileError == 0)            //si no hay error
        {
            if ($fileSize<500000) //menos de estos kb
            {
                $fileNameNew= uniqid('', true). "." .$fileActualExt; //crear unico id por tiempo
                $fileDestination = 'archivos/.'. $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination); //donde se localiza
                header ("Location: files.php?uploadsuccess"); //si se sube
            }
            else
            {
                echo "Tu archivo es muy grande";
            }
        }
        else
        {
            echo "Hubo un error con tu archivo";
        }
    }
    else
    {
        echo "No se pueden subir archivos de este tipo";
    }

}










?>