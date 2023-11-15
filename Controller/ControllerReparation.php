<?php
    require_once "../Service/ServiceReparation.php";
    require_once "../Model/Reparation.php";

class ControllerReparation{

    private ServiceReparation $service;

    public function __construct(){
        $this->service = new ServiceReparation();
    }
    
    public function insertReparation(Reparation $reparation){
        $this->service->insertReparation($reparation);
    }  
    
    public function getReparation(string $id){
        $this->service->getReparation($id);
    }

    public function getService(){
        return $this->service;
    }
}