
<?php
$database = "david";
$inp_User = $_POST["inp_User"];
$inp_password = $_POST["inp_password"];
require("dataConect.php");


$link= mysqli_connect($host, $user, $password);

if (mysqli_connect_errno()) {

    echo  "no has podido conectar a la bbdd";

    exit();
}

mysqli_select_db($link, $database) or die ("no esta la BBDD");


mysqli_set_charset($link, $lang);	




$query = "SELECT `MYUSER_NAME`, `loging`FROM `for_login` WHERE `MYUSER_NAME` = \"$inp_User\" AND `loging` = \"$inp_password\"";
;

$result = mysqli_query($link, $query);

if(mysqli_affected_rows($link) > 0 ){
    echo  " Hola  $inp_User con password $inp_password";

}else {
    echo "No existe el usuario o la contraseña";
}




?>