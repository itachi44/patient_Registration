<?php

require 'vendor/autoload.php'; 
require "Classes/ADMIN/gerant.php"; 
require "Classes/ADMIN/gerant_service.php"; 
require "Classes/CLIENT/Client_service.php";

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'); 
$twig = new \Twig\Environment($loader, [
    'cache' =>false, // __DIR__ .'/cache', pour le moment (option dev)
]); 







$service= new GerantService();
$gerants= $service ->findAll();



//rendu du template

echo $twig->render('ADMIN/produits.twig.php', [ 
    'data' =>
    [
        "gerants" => $gerants,

    ],
 
]);

?>