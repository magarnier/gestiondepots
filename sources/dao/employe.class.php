<?php
class Employe {

    private $idemploye; 
    private $nomemploye; 
    private $nbdepot; 
    private $fkentreprise; 
    private $fkequipe; 

    public function __construct($idemploye, $nomemploye, $nbdepot, $fkentreprise, $fkequipe) {

        $this->idemploye=$idemploye;
        $this->nomemploye=$nomemploye;
        $this->nbdepot=$nbdepot;
        $this->fkentreprise=$fkentreprise;
        $this->fkequipe=$fkequipe;

    }  

    function getEmployeId(){
	    return $this->idemploye;
	}
	function getEmployeNom() {
	    return $this->nomemploye;
	}  
    function getEmployeNbDepot() {
        return $this->nbdepot;
    }  
    function getEmployeEntreprise() {
        return $this->fkentreprise;
    }      
    function getEmployeEquipe() {
        return $this->fkequipe;
    }          
    

}

?>