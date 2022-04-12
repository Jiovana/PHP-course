<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>String Functions</title>
    </head>
    <body>
       <h2>String Functions</h2>
        <?php
        //strlen()
        $name = "Nicholas";
        echo "lenght of string:";
        echo strlen($name);
        
        //str_word_count()
        $address = "Pinecone Macaron street ";
        echo "<br/>";
        echo str_word_count($address);
        
        //strrev()
        $other = "something";
        echo "<br/>";
        echo strrev($other);
        
        //strpos)variable,'word')
        $another = "baloon green";
        echo "<br/>";
        echo strpos($another,'green');
        
        //str_replace('','',variable)
        $boo = "Hello world";
        echo "<br/>";
        echo str_replace('world','user',$boo);
            

        ?>
    </body>
</html>