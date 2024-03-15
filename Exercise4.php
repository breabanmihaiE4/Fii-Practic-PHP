<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mainMenu.css">
    <title>Exercise4</title>
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
        <div class = "result" style="margin-top: 27%;">
            <?php            
                $names = ["Mihai", "Cristi", "Adrian", "Dani", "Mircea"];
                
                foreach($names as $key => $name) {
                    print_r("The name on the position " . $key . " is " . $name . "<br>");
                }
            ?>
        </div>
    </div>
</div>  
</body>
</html>

