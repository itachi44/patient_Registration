<?php

require_once ("../Classes/PATIENT/Patient.php"); 
require_once ("../Classes/PATIENT/Patient_service.php");
require_once ("../Classes/databaseManager.php");

function getPatients()
  {
    $serv=new Patient_Service();
    $patients= $serv->findAll();   
    header('Content-Type: application/json');
    echo json_encode($patients, JSON_PRETTY_PRINT);
  }


  function getPatient($id)
  {
    if($id != 0)
    {
        $serv=new Patient_Service();
        $patient= $serv->findById($id);
        header('Content-Type: application/json');
        echo json_encode($patient, JSON_PRETTY_PRINT);
    }

  }


?>