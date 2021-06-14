<?php

require 'vendor/autoload.php'; 
require "Classes/PATIENT/Patient.php"; 
require "Classes/PATIENT/Patient_service.php";

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'); 
$twig = new \Twig\Environment($loader, [
    'cache' =>false, // __DIR__ .'/cache', pour le moment (option dev)
]); 



//Modèle 




//test requêtes

$serv=new Patient_Service();
$patients= $serv->findAll();



//rendu du template

echo $twig->render("home.twig.php", [ 
    'data' =>
    [
        "patients"=> $patients

    ],
 
]);

?>