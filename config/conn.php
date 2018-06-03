<?php
$db_host = 
$db_user = 
$db_pass = 
$db_name =

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo 'Error. No se pudo conectar a la BBDD '.mysqli_connect_error()
}

?>