<?php

class View_equipe {

    private $equipe;

    

    public function __construct(Controller_equipe $equipe) {

        $this->equipe = $equipe;

    }

    
    /**
     * Display the list of all teams
     *
     */
    public function getEquipes() {
    	$view ="";
        $listeEquipe = Array();
        foreach ($this->equipe->getAll() as  $eq) {
            $view .= "<li><a href='index.php?equipe/".$eq->getEquipeId()."'>".$eq->getEquipeNom()."</a></li>";
        }
   
    	return $view;
    }

    

}

?>
