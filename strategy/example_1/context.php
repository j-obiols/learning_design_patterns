<?php
    
    require 'concreteStrategyAdd.php';
    require 'concreteStrategyMultiply.php';
    require 'concreteStrategySubstract.php';

    class Context {

        private $strategy;

        public function setStrategy($strategy) {

            $this -> strategy = $strategy;
        }

        public function executeStrategy($a, $b) {

            return $this -> strategy -> execute($a, $b);

        }

    }

?>