<?php

class View_entreprise {

    private $entreprise;

    public function __construct(Controller_entreprise $entreprise) {

        $this->entreprise = $entreprise;
    }

    /**
     * Display the list of all companies
     *
     */
    public function getEntreprises() {
    	$view ="";
        $listeEntreprise = Array();

        foreach ($this->entreprise->getAll() as $ent) {
            $view .= "<li><a href='index.php?entreprise/".$ent->getEntrepriseId()."'>".$ent->getEntrepriseNom()."</a></li>";
        }
   
    	return $view;
    }

    

}

?>
