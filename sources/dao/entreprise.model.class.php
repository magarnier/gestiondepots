<?php

    class Model_entreprise{
        protected $_pdo;
        public function __construct (PDO $pdo) {
            if (!$pdo) throw new InvalidArgumentException("First argument is expected to be a valid PDO instance, NULL given");
            $this->_pdo = $pdo;
        }
        /**
         * Liste of all companies avaiable
         *
         */
        public function getAll () {
            $query = "SELECT * FROM entreprise";
            $stmt = $this->_pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>