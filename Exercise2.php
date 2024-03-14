<?php
print_r("<br> Exercitiul 2: <br>");

$monthIsDecember = date("F") == "December";
$dayIsNearChristmas = date("d") > 20 && date("d") < 26;
    
if ($monthIsDecember && $dayIsNearChristmas) {
    print_r("Happy Christmas!!" . "<br>");
} else {
    print_r("It's not Christmas but be happy and work harder!" . "<br>");
}