<?php
declare(strict_types = 1);
require_once ("../Classes/PATIENT/Patient.php"); 
require "../Classes/PATIENT/Patient_service.php";
require_once ("../Classes/databaseManager.php");
require_once ("get.php");


$request_method = $_SERVER["REQUEST_METHOD"]; // on récupère le verbe de la requête


//on fait un switch case selon la method utilisée
switch($request_method)
  {
    case 'GET':
      if(!empty($_GET["id"]))
      {
        // Récupérer un seul patient
        $id = intval($_GET["id"]);
        getPatient($id);
      }
      else
      {
        // Récupérer tous les patients
        getPatients();
      }
      break;
    default:
      // Requête invalide
      header("HTTP/1.0 405 Method Not Allowed");
      break;
  }

?>