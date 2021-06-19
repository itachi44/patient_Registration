<?php 

declare(strict_types = 1); //types non modifiables

require_once ("Patient.php"); 
require_once ("../Classes/databaseManager.php");

class Patient_Service { 
protected $db;

function __construct(){

$this->db= MyDB::getConnexion();

} 


public function findAll(){
    $query=$this->db->query(PATIENT_FIND_ALL);
    $result=array();
    foreach ($query as $row){ 
        $patient= new Patient(); 
        $patient->hydrate($row); //on récupère ligne par ligne et on les insère dans un array
         array_push($result, $row);
    }
    return $result; //on renvoie l'array
    }


public function findById(int $id){ 
    try {
    $stmt = $this->db->prepare(PATIENT_FIND_BY_ID); 
    $stmt->execute([':id' => $id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $patient= new Patient();
    $patient->hydrate($result);
    return $result;

    } catch(Exception $e) {
    echo $e;
    return new Patient();
 }
    }


public function add(string $prenom, string $nom, int $age, string $sexe){
        try {
        $this->db->beginTransaction();
        $stmt = $this->db->prepare(PATIENT_ADD);
        $stmt->execute([':prenom' => $prenom,':nom' =>$nom,':age' => $age,':sexe' =>$sexe]);
        $this->db->commit();
        return true;
        } catch(Exception $e) {
        $this->db->rollback(); 
        echo $e;
        return false;
        } 
    }

public function update(int $id, string $nom, string $prenom, int $age, string $sexe ){
        try {
        $this->db->beginTransaction();
        $stmt = $this->db->prepare(PATIENT_UPDATE); $stmt->execute([':id_patient'=>$id,':prenom_patient' => $prenom,':nom_patient' =>
        $nom,':age' => $age,':sexe' => $sexe]); 
        $this->db->commit();
        return true;
        } catch(Exception $e) {
        $this->db->rollback(); 
        echo $e;
        return false ; 
    }
        }
         

public function delete(int $id ){ 
            try {
            $this->db->beginTransaction();
            $stmt = $this->db->prepare(PATIENT_DELETE); 
            $stmt->execute([':id' => $id]);
            $this->db->commit();
            return true;
            } catch(Exception $e) {
                $this->db->rollback();
                echo $e; 
                return false;   
            }
        }
}

?>