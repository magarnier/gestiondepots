<?php

class View_employe {

    private $employe;

    

    public function __construct (Controller_employe $employe) {

        $this->employe = $employe;

    }

    /**
     * Display a list of all employees by a company
     * @param $id int company id
     *
     */
    public function getEmployeByEntreprise($id) {
        $view = "Nombre de dépôts : <ul>";
        $listeEmploye = Array();
        $total = 0;
        foreach ($this->employe->getEmployeByEntreprise($id)  as $emp) {
           $view .= "<li>" . $emp->getEmployeNom() . " : " . $emp->getEmployeNbDepot() . "</li>";
           $total += $emp->getEmployeNbDepot();
        }

        $view .= "</ul><hr>Total : " . $total;

        $view .= "&nbsp;&nbsp;<a href='index.php?refreshEntreprise/".$id."' class='glyphicon glyphicon-refresh' title='Importer depuis GitHub'></a>";

    	return $view;
    }

    /**
     * Display a list of all employees by a team
     * @param $id int team id
     *
     */
    public function getEmployeByEquipe($id) {
        $view = "Nombre de dépôts : <ul>";
        $listeEmploye = Array();
        $total = 0;
        foreach ($this->employe->getEmployeByEquipe($id)  as $emp) {
           $view .= "<li>" . $emp->getEmployeNom() . " : " . $emp->getEmployeNbDepot() . "</li>";
           $total += $emp->getEmployeNbDepot();
        }

        $view .= "</ul><hr>Total : " . $total;
        $view .= "&nbsp;&nbsp;<a href='index.php?refreshEquipe/".$id."' class='glyphicon glyphicon-refresh' title='Importer depuis GitHub'></a>";

        return $view;
    }

    /**
     * Update the number of repositories of all employees of a company
     * @param $id int company id
     *
     */
    public function updateEmployeByEntreprise ($id) {
        return $this->employe->updateEmployeByEntreprise($id);
    }

    /**
     * Update the number of repositories of all employees of a team
     * @param $id int team id
     *
     */
    public function updateEmployeByEquipe ($id) {
        return $this->employe->updateEmployeByEquipe($id);
    }

}

?>
