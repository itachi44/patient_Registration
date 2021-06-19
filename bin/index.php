<?php

require 'vendor/autoload.php'; 
require "Classes/PATIENT/Patient.php"; 
require "Classes/PATIENT/Patient_service.php";

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'); 
$twig = new \Twig\Environment($loader, [
    'cache' =>false, // __DIR__ .'/cache', pour le moment (option dev)
]); 


//récupération les données via la méthode POST
if (isset($_POST["first_name"]) && isset($_POST["last_name"])  && isset($_POST["Age"]) && isset($_POST["sexe"])) {
    $nom=$_POST["first_name"];
    $prenom=$_POST["last_name"];
    $age=$_POST["Age"];
    $genre=$_POST["sexe"];
    $serv=new Patient_Service();
    $state=$serv->add($nom,$prenom,$age,$genre);
    }else{
    $nom="";
    $prenom="";
    $age="";
    $genre="";
    
    }
    
    //récupération des patients qui sont déja dans la base
    
    $serv=new Patient_Service();
    $patients= $serv->findAll();
    
    
    




//rendu du template

echo $twig->render("signIn.php", [ 
    'data' =>
    [
        "nom"=>$nom,
        "prenom"=>$prenom,
        "age"=>$age,
        "genre"=>$genre,
        "patients"=> $patients


    ],
 
]);

?>