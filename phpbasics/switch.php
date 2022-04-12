<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Switch Statement</title>
    </head>
    <body>
        <?php
        $color = 'rose';
        switch($color){
            case "blue":
                echo "Color is blue";
                break;
            case "green":
                echo "Color is green";
                break;
            case "yellow":
                echo "Color is yellow";
                break;
            default:
                echo "Color not registered";
                    
        }
        
        ?>
    </body>
</html>