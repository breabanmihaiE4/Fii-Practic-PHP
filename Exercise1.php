<?php
    define("MINIMUM_ARGUMENTS", 3);
    define("FIRST", "first");
    define("SECOND", "second");
    define("THIRD", "third");

    print_r("Exercitiul 1: <br>");

    $numberOfArguments = count($_GET);

    if ($numberOfArguments < MINIMUM_ARGUMENTS) {
        print_r("Nu exista suficiente argumente!");
    } else {
        $arguments = [];

        foreach ($_GET as $key => $argument) {
            $arguments[$key] = $argument;
        }

        $sum = $arguments[FIRST] + $arguments[SECOND] + $arguments[THIRD];
        $difference = $arguments[FIRST] - $arguments[SECOND] - $arguments[THIRD];
        $product = $arguments[FIRST] * $arguments[SECOND] * $arguments[THIRD];
        $division = $arguments[FIRST] / $arguments[SECOND] / $arguments[THIRD];
        $power = $arguments[FIRST] ** $arguments[SECOND] ** $arguments[THIRD];

        print_r("<br>" . "Suma este = " . $sum . "<br>");
        print_r("Diferenta este = " . $difference . "<br>");
        print_r("Produsul este = " . $product . "<br>");
        print_r("Impartirea este = " . $division . "<br>");
        print_r("Ridicarea la putere este = " . $power . "<br>");
    }