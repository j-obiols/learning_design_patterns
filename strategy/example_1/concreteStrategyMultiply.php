<?php



    class ConcreteStrategyMultiply implements Strategy {

        public function execute($a, $b) {

            return $a * $b;
        }

    }

?>