<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Indexed arrays</title>
    </head>
    <body>
       <h2>
        <?php
        echo "Indexed arrays <br/>";
        $products = array('Macbook', 'Galaxy Tab', 'Google Pixel', 'Xiaomi');
        //echo $products;
        print_r($products);
           
        echo "<br/>";
        echo "<br/> Associative arrays <br/>";
        $products = array('Macbook'=>800, 'Galaxy Tab'=>700, 'Google Pixel'=>700);
           
        print_r($products);
           
        echo "<br/>";
        echo "<br/> Multidimensional arrays <br/>";
        
        $products = array('Macbook'=>array('Purchase price'=>500,'Sale price'=>800, 'Category'=>'Computer'), 'Galaxy Tab'=>array('Purchase price'=>400,'Sale price'=>700,'Category'=>'Tablet'), 'Google Pixel'=>array('Purchase price'=>450,'Sale price'=>750,'Category'=>'Mobile'));
           
        print_r($products);
        echo '<br/>',$products['Macbook']['Category'],'<br/>';
           
        ?>
        </h2>
    </body>
</html>