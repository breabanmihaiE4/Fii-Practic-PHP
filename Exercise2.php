<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mainMenu.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="menu">
        <ul class="menu-content">
            <li><a href="Exercise1.php"><span class="material-symbols-outlined">1</span><span>Exercise 1</span></a></li>
            <li><a href="Exercise2.php"><span class="material-symbols-outlined">2</span><span>Exercise 2</span></a></li>
            <li><a href="Exercise3.php"><span class="material-symbols-outlined">3</span><span>Exercise 3</span></a></li>
            <li><a href="Exercise4.php"><span class="material-symbols-outlined">4</span><span>Exercise 4</span></a></li>
        </ul>
    </div>

    <div class = "card">
        <div class = "result" style="display: flex; justify-content: center; align-items: center; margin-top: 35%; font-size: 150%;">
            <?php
                $monthIsDecember = date("F") == "December";
                $dayIsNearChristmas = date("d") > 20 && date("d") < 26;
                    
                if ($monthIsDecember && $dayIsNearChristmas) {
                    print_r("Happy Christmas!!" . "<br>");
                } else {
                    print_r("It's not Christmas but be happy and work harder!" . "<br>");
                }
            ?>
        </div>
    </div>
</div>  
</body>
</html>