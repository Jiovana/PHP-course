<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GET POST form</title>
    </head>
    <body> 
         
             
          <h2>POST method:</h2>
          <form action = "" method="post">
              <input type="password" name = "pass" id="">
              <input type="submit" value="submit">
           </form>
       <h3>
        <?php
           //Change to GET or POST accordingly
            if(isset($_POST['pass']))
                echo "Password is ".$_POST['pass']."<br/>";
            else
                echo("Field is empty <br/>");
        
         ?>
        </h3>
    </body>
</html>