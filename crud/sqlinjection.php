<?php
include 'dbconnect.php';

error_reporting(0);
$email=$_POST['email'];

if(isset($email)){
    //this code allows sql injections
//    $sql=$pdo->query("select * from tbl_email where email='$email'");
//    
//    if($sql->rowCount()){
//        echo 'Email matched '.$email;
//    }else{
//        echo 'Wrong email';
//    }
    
    //this code avoids sql injections
    $sql = $pdo->prepare("select * from tbl_email where email=:e");
    $sql->bindParam(':e',$email);
    $sql->execute();
    
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    
    if($row['email']==$email){
        echo'Email matched '.$email;
    }else{
        echo 'Wrong email';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SQL Injection</title>
</head>

<body>
    <h2>SQL Injection</h2>

    <form action="" method="post">
        <p><input type="text" name="email"></p>
        <input type="submit" value="Check email" name="submit">


    </form>

    <br>


</body>

</html>
