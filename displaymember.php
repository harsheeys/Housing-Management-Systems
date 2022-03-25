
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from member ";
        

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);
        $username=$_SESSION["username"];
        $fname=$_SESSION["fname"];
        $lname=$_SESSION["lname"];
        $houseno=$_SESSION["houseno"];
        $blockname=$_SESSION["blockname"];

        echo "$username $fname $lname $houseno $blockname";

    
        ?>
    
    
    
    <?php
	include_once("footer2.php");
?>
    
