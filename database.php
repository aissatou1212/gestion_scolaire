<?php
$_SERVER="localhost";
$_users="root";
$pwd="";
$dbname="scolaire";
$_connexion=mysqli_connect($_SERVER,$_users,$pwd,$dbname);

if(!$_connexion){
    echo "Erreur de connexion";
}else{
    echo "connexion avec succes";
}
?>