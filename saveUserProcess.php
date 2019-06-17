<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:53 AM
 */

if (isset($_GET['btn_save'])){
    $inputedName = $_GET['x'];
    $inputedEmail = $_GET['y'];
    $inputedPassword = $_GET['z'];

    //To save data, connect to the DB
    $conn = mysqli_connect("localhost","root","","may_syst");

    //Check if the connection was successful
    if (!$conn){
        echo "Connection failed";
    }else{
        //Proceed to save data to the Db
        //Start by creating the insert query

        $insertQuery = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')";
        //Check if the Insert query is correct
        if (!$insertQuery){
            echo "Error on the insert query";
        }else{
            //Proceed to finally write the data to your Db
            $ingiza = mysqli_query($conn,$insertQuery);
            //Check if the data was saved successfully
            if (!$ingiza){
                echo "Saving failed";
            }else{
                echo "Saved successfully -----> ";
                header('location:saveUser.php');
                echo "<a href='saveUser.php'>Add More people</a>";
            }
        }
    }
}

?>