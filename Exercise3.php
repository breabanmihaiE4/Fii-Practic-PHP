<?php
    print_r("Exercitiul 3 <br>");
    print_r("<br>");
    
    $mainFactor = 5;
    for ($secondFactor = 0; $secondFactor <= 10; $secondFactor++) {
        print_r(
            "The result of multiplying "
                . $mainFactor
                . " by "
                . $secondFactor
                . " is equal to "
                . $mainFactor * $secondFactor
                . "<br>"
        );
    }
    print_r("<br>");