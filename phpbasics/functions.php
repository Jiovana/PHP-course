<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP functions</title>
</head>

<body>
    <?php
        /*build in functions: 
        strlen, date, gettype, print_r, var_dump, mysql_connect, etc
        */
        function myFunc($param1, $param2 = 10){
            //echo "The age is : $param2";
            return $param1 + $param2;
        }
        echo "Sum is: ", myFunc(10), "<br/>";
    
        function nameAge($name, $age){
            echo "Hello $name, your age is $age <br/>";
        }
        nameAge("Aleph", 26);
        ?>
</body>

</html>
