<?php
define("USER","root");
define("PATIENT","patient");
define("PASSWORD","root");
define("BASE","BD");
define("TABLE_PATIENT","PATIENT");
define("SERVER","localhost:8889");

define("PATIENT_FIND_ALL","SELECT * from ".PATIENT);

define("PATIENT_FIND_BY_ID","SELECT * from ".PATIENT." WHERE id=:id");

define("PATIENT_ADD","INSERT INTO ".PATIENT." (prenom_PATIENT, nom_PATIENT, age, sexe) VALUES(:prenom, :nom, :age, sexe)");

define("PATIENT_UPDATE","UPDATE ".PATIENT." set prenom_patient=:prenom, nom_patient=:nom, age=:age, age=:age WHERE id_patient=:id"); 

define("PATIENT_DELETE","DELETE FROM ".PATIENT." WHERE id_patient=:id");

?>