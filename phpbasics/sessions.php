<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sessions in PHP</title>
    </head>
    <body>
       <h3>
        <?php
       
       
        session_start();
        $name = $_SESSION['name']='Aleph';
        $age = $_SESSION['age']='25';
        $country = $_SESSION['country']='Canada';
        
        ?>
        </h3>
    </body>
</html>