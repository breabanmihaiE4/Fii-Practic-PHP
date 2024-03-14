<?php
// http://localhost/FII-Practic-PHP/Exercise1.php?a=-8&b=6&c=2
 
$urlPage = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "URL-ul paginii este: " . $urlPage . "<br>";
echo "<br>";
 
// Exercitiu 1
print_r("Exercitiul 1: <br>");
 
$numberOfGET = count($_GET);
if ($numberOfGET < 3) {
    print_r("Nu exista suficiente variabile globale GET");
} else {
    $values = [];
    foreach ($_GET as $key => $value) {
        $values[$key] = $value;
    }
 
    $numericPositions = array_values($values);
 
    print_r($numericPositions[0] . "<br>");
    print_r($numericPositions[1] . "<br>");
    print_r($numericPositions[2] . "<br>");
 
    $sumOfFirst3Numbers = $numericPositions[0] + $numericPositions[1] + $numericPositions[2];
    $difOfFirst3Numbers = $numericPositions[0] - $numericPositions[1] - $numericPositions[2];
    $multiplatOfFirst3Numbers = $numericPositions[0] * $numericPositions[1] * $numericPositions[2];
    $divOfFirst3Numbers = $numericPositions[0] / $numericPositions[1] / $numericPositions[2];
    $ridicareLaPutere = $numericPositions[0] ** $numericPositions[1] ** $numericPositions[2];
 
    print_r("Suma primelor 3 elemente este = " . $sumOfFirst3Numbers . "<br>");
    print_r("Diferenta primelor 3 elemente este = " . $difOfFirst3Numbers . "<br>");
    print_r("Produsul primelor 3 elemente este = " . $multiplatOfFirst3Numbers . "<br>");
    print_r("Impartirea primelor 3 elemente este = " . $divOfFirst3Numbers . "<br>");
    print_r("Ridicarea la putere a primelor 3 elemente este = " . $ridicareLaPutere . "<br>");
    print_r(8 / 6 / 5 . "<br>");
    print_r(8 ** 6 . "<br>");
}