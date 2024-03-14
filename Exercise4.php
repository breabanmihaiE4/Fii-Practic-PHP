<?php
    print_r("Exercitiul 4 <br>");
 
    $names = ["Mihai", "Cristi", "Adrian", "Dani", "Mircea"];
     
    foreach($names as $key => $name) {
        print_r("Numele de pe pozitia " . $key . " este " . $name . "<br>");
    }