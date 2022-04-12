<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Explode Implode</title>
    </head>
    <body>
        <?php
            $str='My name is Bob';
            //separates strings into arrays
            $exp = explode(" ",$str);
            echo "<pre>";
            print_r($exp);
            echo "<br/>";
        
            $arr = array('strings','are','cool');
            //converts array to string
            $str2 = implode(" ", $arr);
            echo $str2."<br/>";
        
        ?>
    </body>
</html>