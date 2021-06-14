<?php

require 'vendor/autoload.php'; 
require "Classes/PATIENT/Patient.php"; 

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'); 
$twig = new \Twig\Environment($loader, [
    'cache' =>false, // __DIR__ .'/cache', pour le moment (option dev)
]); 



$page="home"; //par defaut si pas de sessions ni de cookies
//Modèle 


//$serv1=new ProduitService();
//$suggestions=$serv1->findSuggestions();
//$tv=$serv1->find_TV_AUDIO();
//$appMenag=$serv1->find_APPM();
//$high_tech=$serv1->find_HIGHT();
//$portables=$serv1->find_PORTABLE();



session_start();

//rendu du template

echo $twig->render($page.'.twig.php', [ 
    'data' =>
    [
        //'suggestions'=> $suggestions,
        //'TV_AUDIO' => $tv,
        //'appMenag' => $appMenag,
        //'hightech' => $high_tech,
        //'portables' => $portables,
        //'session'=>$_SESSION,

    ],
 
]);

?>