
<?php

require("dataConect.php");

$database = "david";

$link= mysqli_connect($host, $user, $password);

if (mysqli_connect_errno()) {

    echo  "no has podido conectar a la bbdd";

    exit();
}

mysqli_select_db($link, $database) or die ("no esta la BBDD");


mysqli_set_charset($link, $lang);	


require("sql.php");

$query = $sql_login;

$result = mysqli_query($link, $query);

if(mysqli_affected_rows($link) > 0 ){
    echo  "has encontrado ". mysqli_affected_rows($link) .  " registros";
}else {
    echo "No existe el usuario o la contraseña";
}




?>