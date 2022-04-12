<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Date function</title>
    </head>
    <body>
       <h3>
        <?php
            //date(format,timestamp);
            date_default_timezone_set('America/Sao_Paulo');
           
            $d1 = date('d/m/y - h : i : s a');
            echo $d1."<br/>";
            
            $d2 = date('D-M-Y');
            echo $d2."<br/>";
            //date ("h : I : s a")
            //date_default_timezone_set
        
        ?>
        </h3>
    </body>
</html>