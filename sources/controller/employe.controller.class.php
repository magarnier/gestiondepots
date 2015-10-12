<?php

class Controller_employe {

    private $employe;



    public function __construct(Model_employe $employe) {

        $this->employe = $employe;

    }

    /**
     * List of employees by company id
     * @param $identreprise int Company Id
     *
     * @return <Employe>array $listeEmploye Liste of employees
     */
    public function getEmployeByEntreprise($identreprise) {
    	$listeEmploye = Array();
        $liste = $this->employe->getEmployeByEntreprise($identreprise) ;
        while($emp = $liste->fetch()) {
            $listeEmploye []= new Employe ($emp['idemploye'], $emp['profilgithub'], $emp['nombredepot'], $emp['fkentreprise'], $emp['fkequipe']);
        }

        return  $listeEmploye;
    }

    /**
     * List of employees by team id
     * @param $idequipe int Team Id
     *
     * @return <Employe>array $listeEmploye Liste of employees
     */
    public function getEmployeByEquipe($idequipe) {
        $listeEmploye = Array();
        $liste = $this->employe->getEmployeByEquipe($idequipe) ;
        while($emp = $liste->fetch()) {
            $listeEmploye []= new Employe ($emp['idemploye'], $emp['profilgithub'], $emp['nombredepot'], $emp['fkentreprise'], $emp['fkequipe']);
        }

        return  $listeEmploye;
    }

    /**
     * Update the number of public reposiroty from the GitHub profile of each employees of a company
     * @param $identreprise int Compny Id
     */
    public function updateEmployeByEntreprise($identreprise) {
        
        $liste = $this->employe->getEmployeByEntreprise($identreprise) ;
        while($emp = $liste->fetch()) {
            $employe= new Employe ($emp['idemploye'], $emp['profilgithub'], $emp['nombredepot'], $emp['fkentreprise'], $emp['fkequipe']);
            
            $res = json_decode(get_json ("users/".$employe->getEmployeNom()));

            if (! isset($res->public_repos)) {
                throw new Exception("Nombre d'acces GitHub atteint", 1);
            } else {
                $this->employe->updateDepotEmploye ($res->public_repos, $employe->getEmployeId());
            }       
        }
    }

    /**
     * Update the number of public reposiroty from the GitHub profile of each employees of a team
     * @param $idequipe int Team Id
     */
    public function updateEmployeByEquipe($idequipe) {
        
        $liste = $this->employe->getEmployeByEquipe($idequipe) ;
        while($emp = $liste->fetch()) {
            $employe= new Employe ($emp['idemploye'], $emp['profilgithub'], $emp['nombredepot'], $emp['fkentreprise'], $emp['fkequipe']);
            
            $res = json_decode(get_json ("users/".$employe->getEmployeNom()));

            if (! isset($res->public_repos)) {
                throw new Exception("Nombre d'acces GitHub atteint", 1);
            } else {
                $this->employe->updateDepotEmploye ($res->public_repos, $employe->getEmployeId());
            }       
        }
    }



}

?>
