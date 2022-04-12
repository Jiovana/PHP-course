<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>If-Else statements</title>
    </head>
    <body>
        <?php
        $age = 19;
        if($age>=18){
            echo "<h2>You are eligble for vote</h2>";
        }else if($age>25){
            echo"You can be president!";
        }else
            echo"You are too young to vote";
        
        ?>
    </body>
</html>