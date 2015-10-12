<?php

    class Model_employe{
        protected $_pdo;
        public function __construct (PDO $pdo) {
            if (!$pdo) throw new InvalidArgumentException("First argument is expected to be a valid PDO instance, NULL given");
            $this->_pdo = $pdo;
        }
        /**
         * List of employees by company id
         * @param $identreprise int Company Id
         *
         */
        public function getEmployeByEntreprise ($identrepise) {
            $stmt = $this->_pdo->prepare('SELECT * FROM employe WHERE fkentreprise = :parameter');
            $stmt->bindParam(':parameter', $identrepise, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $stmt;
        }
        /**
         * List of employees by team id
         * @param $idequipe int Team Id
         *
         */
        public function getEmployeByEquipe ($idequipe) {
            $stmt = $this->_pdo->prepare('SELECT * FROM employe WHERE fkequipe = :parameter');
            $stmt->bindParam(':parameter', $idequipe, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $stmt;
        }
        /**
         * Update the number of public depot of an employee
         * @param $depot int Number of depot
         * @param $profil int id employee
         *
         */
        public function updateDepotEmploye ($depot, $profil) {
            $stmt = $this->_pdo->prepare('UPDATE employe SET nombredepot= :depot WHERE idemploye = :profil');
            $stmt->bindParam(':depot', $depot, PDO::PARAM_STR);
            $stmt->bindParam(':profil', $profil, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt;
        }


    }
?>