<?php

class Controller_equipe {

    private $equipe;



    public function __construct(Model_equipe $equipe) {

        $this->equipe = $equipe;

    }

    /**
     * List of all teams
     *
     * @return <Equipe>array $listeEquipe Liste of teams
     */
    public function getAll() {
    	$listeEquipe = Array();
        foreach ($this->equipe->getAll() as  $eq) {
            $listeEquipe [] = new Equipe ($eq['idequipe'], $eq['nomequipe']);
        }
        return  $listeEquipe;
    }

}

?>
