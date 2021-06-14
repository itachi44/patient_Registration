<?php
class Patient {
    protected $id_patient;
    protected $nom_patient; 
    protected $prenom_patient; 
    protected $age;
    protected $sexe;

    function __construct()
    {
        $this->id_patient=0; 
        $this->nom_patient="";
        $this->prenom_patient=""; 
        $this->age=0;
        $this->sexe="m"; 
    }

 public function getId(){
     if(isset($this->id_patient)){
        return $this->id_patient;
     }else{
         return 0;
     }
 }

public function getNom(){ 
        return $this->nom_patient;
    }
public function getPrenom(){
    return $this->prenom_patient;
}
public function getAge(){ 
    return $this->age;
}
public function getSexe(){ 
    return $this->sexe;
}



public function setId(string $value){
    settype($value,"integer");
    $this->id_patient=$value; 
}
    public function setNom(string $value){ 
        $this->nom=$value;
    }

    public function setPrenom(string $value){ 
        $this->prenom=$value;
    }

    public function setEmail(string $value){ 
        $this->age=$value;
    }

    public function setAge(string $value){ 
        $this->age=$value;
    }





 public function hydrate(array $data) {
        foreach ($data as $key => $value) {
        $method = 'set'.ucfirst(strtolower($key."")); 
        if (method_exists($this, $method))
        {
             $this->$method($value); 
            }
        }
     }



 }
   
?>