<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cookies</title>
    </head>
    <body>
       <h3>
        <?php
           $name = 'VisitCount';
           $content = $_COOKIE['VisitCount']+1;
           $expire = time()+(60*60*24*30); //one month
           
           setcookie($name,$content,$expire);
            echo "Cookies";  
        ?>
        
        <?php
           print_r($_COOKIE);
           ?>
        </h3>
    </body>
</html>