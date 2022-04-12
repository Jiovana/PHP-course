<h3>
    <?php
        include_once 'header.php'; //only executes once
        include 'heder.php'; //can execute many times and doesnt stop execution if wrong
        include 'header.php';
        //used to include other php files
        echo "This is main file <br/>";
        
        require 'footer.php'; // stop execution at this length if the file doesnt exist
        //require_once also exists
        ?>
</h3>
