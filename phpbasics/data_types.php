<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Data Types</title>
    </head>
    <body>
       <h2>Data Types</h2>
        <?php
        $x = "String";
        echo $x;
        echo"<br/>";
        var_dump($x);
        
        echo"<br/>";
        
        $y = -1234.5;
        echo $y;
        echo"<br/>";
        var_dump($y);
        
        if($y){
            echo"<br/>true";
        }else {
            echo"<br/>false";
        }
        
        $laptops = array("hp","mac","lenovo");
       // print_r($laptops);
        echo"<br/>";
        echo $laptops[0];
        
        $s=null;
        echo"<br/>";
        var_dump($s);
        ?>
    </body>
</html>