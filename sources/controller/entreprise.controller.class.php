<?php

class Controller_entreprise {

    private $entreprise;



    public function __construct(Model_entreprise $entreprise) {

        $this->entreprise = $entreprise;

    }

    
    /**
     * List of all company
     *
     * @return <Entreprise>array $listeEntreprise Liste of companies
     */
    public function getAll() {
    	$listeEntreprise = Array();
        foreach ($this->entreprise->getAll() as  $ent) {
            $listeEntreprise [] = new Entreprise ($ent['identreprise'], $ent['nomentreprise']);
        }
        return  $listeEntreprise;
    }

}

?>
