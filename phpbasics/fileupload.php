<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>File upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <p><input type="file" name="myfile"></p>
        <p><input type="submit" value="upload" name="submit"></p>

    </form>
    <?php
            if(isset($_POST['submit'])){         
                $f_name= $_FILES['myfile']['name'];
                $f_tmp = $_FILES['myfile']['tmp_name'];
                
                $f_size = $_FILES['myfile']['size'];
                //end takes last array element
                $f_extension = explode('.',$f_name);
                $f_extension = strtolower(end($f_extension));
                $f_newfile = uniqid().'.'.$f_extension;
                $store = "upload/".$f_newfile;
                
                if($f_extension == 'jpg' || $f_extension == 'png' || $f_extension == 'gif'){
                    echo "File is of correct type<br/>";
                    
                    if($f_size >= 1000000){
                        echo 'Max file should be 1MB<br/>';
                    }else{
                        if(move_uploaded_file($f_tmp, $store))
                            echo 'File '.$f_newfile.'  uploaded!<br/>';
                        
                    }
                    
                }else
                    echo "Only png jpg and gif files allowed<br/>";
                
                
            }
        
        ?>
</body>

</html>
