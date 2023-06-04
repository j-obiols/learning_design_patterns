<?php

     
    require 'strategyInterface.php';

    class ConcreteStrategyAdd implements Strategy {

        public function execute($a, $b) {

            return $a + $b;
        }

    }

?>