<?php

    class Model_equipe{
        protected $_pdo;
        public function __construct (PDO $pdo) {
            if (!$pdo) throw new InvalidArgumentException("First argument is expected to be a valid PDO instance, NULL given");
            $this->_pdo = $pdo;
        }
        /**
         * Liste of all teams
         *
         */
        public function getAll () {
            $query = "SELECT * FROM equipe";
            $stmt = $this->_pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>