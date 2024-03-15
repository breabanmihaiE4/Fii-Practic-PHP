<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mainMenu.css">
    <title>Exercise1</title>
</head>
<body>
<div class="container">
    <div class="menu">
        <ul class="menu-content">
            <li><a href="Exercise1.php?<?php echo http_build_query($_GET); ?>"><span class="material-symbols-outlined">1</span><span>Exercise 1</span></a></li>
            <li><a href="Exercise2.php?<?php echo http_build_query($_GET); ?>"><span class="material-symbols-outlined">2</span><span>Exercise 2</span></a></li>
            <li><a href="Exercise3.php?<?php echo http_build_query($_GET); ?>"><span class="material-symbols-outlined">3</span><span>Exercise 3</span></a></li>
            <li><a href="Exercise4.php?<?php echo http_build_query($_GET); ?>"><span class="material-symbols-outlined">4</span><span>Exercise 4</span></a></li>
        </ul>
    </div>
    
    <div class = "card">
        <div class = "result" style="margin-top: 15%;">
            <?php
                define("MINIMUM_ARGUMENTS", 3);
                define("FIRST", "first");
                define("SECOND", "second");
                define("THIRD", "third");

                $numberOfArguments = count($_GET);

                if ($numberOfArguments < MINIMUM_ARGUMENTS) {
                    print_r("Nu exista suficiente argumente!");
                } else {
                    $arguments = [];

                    foreach ($_GET as $key => $argument) {
                        $arguments[$key] = $argument;
                    }

                    print_r("First argument = " . $arguments[FIRST] . "<br>");
                    print_r("Second argument = " . $arguments[SECOND] . "<br>");
                    print_r("Third argument = " . $arguments[THIRD] . "<br>");
                    
                    $sum = $arguments[FIRST] + $arguments[SECOND] + $arguments[THIRD];
                    $difference = $arguments[FIRST] - $arguments[SECOND] - $arguments[THIRD];
                    $product = $arguments[FIRST] * $arguments[SECOND] * $arguments[THIRD];
                    $division = $arguments[FIRST] / $arguments[SECOND] / $arguments[THIRD];
                    $power = $arguments[FIRST] ** $arguments[SECOND] ** $arguments[THIRD];

                    print_r("<br>" . "The sum  is = " . $sum . "<br>");
                    print_r("The difference is = " . $difference . "<br>");
                    print_r("The product is = " . $product . "<br>");
                    print_r("The division is = " . $division . "<br>");
                    print_r("The empower is = " . $power . "<br>");
                }
            ?>
        </div>
    </div>
</div>  
</body>
</html>