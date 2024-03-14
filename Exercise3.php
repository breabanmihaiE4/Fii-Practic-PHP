<?php
    print_r("Exercitiul 3 <br>");
    print_r("<br>");
    
    $elementOfMultiplication = 5;
    for ($multiplication = 0; $multiplication <= 10; $multiplication++) {
        print_r(
            "The result of multiplying "
                . $elementOfMultiplication
                . " by "
                . $multiplication
                . " is equal = "
                . $elementOfMultiplication * $multiplication
                . "<br>"
        );
    }
    print_r("<br>");