<?php
    include 'dbconnect.php';
     
    if(isset($_POST['btnsave'])){
        $name = $_POST['txtname'];
        $price = $_POST['txtprice'];
        
        //echo "<br/>name: ".$name." - price: ".$price."<br/>";
        
        if(!empty($name && $price)){
            $insert = $pdo->prepare("insert into tbl_product(productname,productprice) values(:name,:price)");
            $insert->bindParam(':name',$name);
            $insert->bindParam(':price',$price);
            $insert->execute();
            if($insert->rowCount()){
                echo'Insert successful<br/>';
            }else{
                echo'Insert failed<br/>';
            }
        }else{
            echo 'Fields are empty<br/>';
        } // this is the end of save button
    }
    if(isset($_POST['btnupdate'])){
        $pname = $_POST['txtname'];
        $pprice = $_POST['txtprice'];
        $pid = $_POST['txtid'];
        if(!empty($pname && $pprice)){
            $update = $pdo->prepare("update tbl_product set productname=:pname,productprice=:pprice where id=".$pid);
            $update->bindParam(':pname',$pname);
            $update->bindParam(':pprice',$pprice);
            $update->execute();
            if($update->rowCount()){
                echo 'Data updated successfully';
            }else{
                echo 'Update fail';
            }
        }else{
            echo "Fields are empty";
        }
        
    } // btn update code end here

   if(isset($_POST['btndelete'])){
       $delete = $pdo->prepare("delete from tbl_product where id=".$_POST['btndelete']);
       $delete->execute();
       if($delete->rowCount()){
           echo 'Data deleted successfully';
       }else{
           echo 'Data delete fail!';
       }
   }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CRUD</title>
</head>

<body>
    <h2>PHP PDO CRUD operations</h2>

    <form action="" method="post">

        <?php
            if(isset($_POST['btnedit'])){
                $select = $pdo->prepare("select * from tbl_product where id=".$_POST['btnedit']);
                $select->execute();
                if($select){
                    $row = $select->fetch(PDO::FETCH_OBJ);
                    
                    echo'
                <p><input type="text" name="txtname" value="'.$row->productname.'"></p>
        <p><input type="text" name="txtprice" value="'.$row->productprice.'"></p>
        <p><input type="hidden" name="txtid" value="'.$row->id.'" ></p>
        <button type="submit" name="btnupdate">UPDATE</button>
        <button type="submit" name="btncancel">CANCEL</button>
                ';
                }
                
                
            }else{
                echo'
                <p><input type="text" name="txtname" placeholder="ProductName"></p>
        <p><input type="text" name="txtprice" placeholder="ProductPrice"></p>
        <p><input type="submit" value="Save" name="btnsave"></p>
                ';
            }
        ?>

        <br><br>
        <table id="producttable" border="1">
            <thead>
                <th>ID</th>
                <th>ProductName</th>
                <th>ProductPrice</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </thead>
            <tbody>
                <?php
            $select = $pdo->prepare("select * from tbl_product");
            $select->execute();

            //echo"<pre>";
            while($row = $select->fetch(PDO::FETCH_OBJ)){
            echo'
            <tr>
            <td>'.$row->id.'</td>
            <td>'.$row->productname.'</td>
            <td>'.$row->productprice.'</td>
            <td><button type="submit" value="'.$row->id.'" name="btnedit">EDIT</button></td>
            <td><button type="submit" value="'.$row->id.'" name="btndelete">DELETE</button></td>      
            </tr>
            ' ;
            }//fetch all data from table
            // $row = $select->fetchAll(PDO::FETCH_OBJ)
            //print_r($row);
            //$row = $select->fetch(PDO::FETCH_OBJ);
            //print_r($row);
            //echo $row[1]."<br>";// fetch_num
            //echo $row['productname']."<br>";// fetch_assoc
            //echo $row->productname."<br>";// fetch_obj 
            ?>
            </tbody>
        </table>

    </form>

    <br>


</body>

</html>
