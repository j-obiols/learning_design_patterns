<?php

    require 'context.php';

    $a = 5;
    $b = 2;
    
    //establishing the "addition" context
    $context1 = new Context;

    $context1 -> setStrategy(new concreteStrategyAdd);

    $result1 = $context1 -> executeStrategy($a, $b);

    //establishing the "substraction" context
    $context2 = new Context;

    $context2 -> setStrategy(new concreteStrategySubstract);

    $result2 = $context2 -> executeStrategy($a, $b);

    //establishing the "multiply" context
    $context3 = new Context;

    $context3 -> setStrategy(new ConcreteStrategyMultiply);

    $result3 = $context3 -> executeStrategy($a, $b);

    echo "STRATEGY PATTERN <br> <br>";
    echo "EVERY CONTEXT NEEDS A DIFFERENT STRATEGY. <br> ";
    echo "Define a context class that will allow you to create a context and to set a concrete strategy.<br>
    Define a class for every concrete strategy, each one implementing the strategy interface.<br>
    The context class must have method/s just to call the concrete strategy method/s. <br> <br>";
    echo "a = ".$a.'<br>';
    echo "b = ".$b.'<br> <br>';
    echo "Context 1 <br>";
    echo "Result = ".$result1.'<br> <br>';
    echo "Context 2 <br>";
    echo "Result = ".$result2.'<br> <br>';
    echo "Context 3 <br>";
    echo "Result = ".$result3.'<br>';


?>