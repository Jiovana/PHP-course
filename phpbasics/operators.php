<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Operators</title>
</head>

<body>
    <h2>
        <?php
            $x = 29;
            $y = 4;
        
        
            echo "1. Addition: ",($x+$y),"<br/>";
            echo "2. Subtraction: ",($x-$y),"<br/>";
            echo "3. Multiplication: ",($x*$y),"<br/>";
            echo "4. Division: ",($x/$y),"<br/>";
            echo "5. Modulus: ",($x%$y),"<br/>";
            
            echo "<br/> Comparison operators <br/>";
           #==,!=,<,>,<=,>=
            if($x!=$y)
                echo "x is not equal to y","<br/>";
            else
                echo "x is equal<br/>";
        
            echo "<br/> increment/decrement operators <br/>";
            $z = 5;
            $z++;
            echo "increment: ", $z, "<br/>";
            
            if($z>=6 OR $z!='')
                echo"z is 6 or is empty", "<br/>";
            else
                echo"z is not 6", "<br/>";
            
            $name = "bob";
            $surname = "tug";
            $full = $name." ".$surname; #or .=
            echo"Full name: ", $full, "<br/>";
        
            echo "<br/> spaceship operator <br/>";
            echo 1<=>1, "<br/>";
            echo 1<=>2, "<br/>";
            echo 2<=>1, "<br/>";
        
                
        ?>
    </h2>
</body>

</html>
