<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP loops</title>
    </head>
    <body>
       <h3>
        <?php
            echo "While loop <br/>";
            $x=1;
            while($x <= 10){
                echo $x."<br/>";
                $x++;
            }
        
            echo "<br/> Do While loop <br/>";
            $y=5;
            do{
                echo $y."<br/>";
                $y++;
            }while($y<10);
           
            echo "<br/> For loop <br/>";
            for($x=0; $x<=7; $x++)
                echo "Number is: ".$x."<br/>";
            
            echo "<br/> Foreach loop <br/>";
            $products = array('Apple'=>2.5,'Banana'=>3,'Orange'=>1.5,'Mango'=>3, 'Grapes'=>4);
           
            foreach($products as $name => $value)
                echo $name." => ".$value."<br/>";
        ?>
        </h3>
    </body>
</html>