<?php
class Equipe {

    private $idequipe; 
    private $nomequipe;

    public function __construct($idequipe, $nomequipe) {

        $this->idequipe=$idequipe;
        $this->nomequipe=$nomequipe;

    }  

    function getEquipeId(){
	    return $this->idequipe;
	}
	function getEquipeNom() {
	    return $this->nomequipe;
	}      

}

?>