<?php
    

    class ConcreteStrategySubstract implements Strategy {

        public function execute($a, $b) {

            return $a - $b;
        }

    }

?>