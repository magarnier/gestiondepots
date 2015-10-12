<?php
class Entreprise {

    private $identreprise; 
    private $nomentreprise; 

    public function __construct($identreprise, $nomentreprise) {

        $this->identreprise=$identreprise;
        $this->nomentreprise=$nomentreprise;

    }  

    function getEntrepriseId(){
	    return $this->identreprise;
	}
	function getEntrepriseNom() {
	    return $this->nomentreprise;
	}      

}

?>