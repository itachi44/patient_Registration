<?php
require_once ("Classes/config.php");

class MyDB {

public static function getConnexion(){ 

    try{
$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$connexion=new PDO(DSN,USER,PASSWORD,$options);
    return $connexion;
}
catch(PDOException $e){
printf("Connexion à la base de données impossible : %s\n", $e);
exit(); }
} }



?>