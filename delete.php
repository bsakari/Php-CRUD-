<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 9:51 AM
 */

//Conect to the Db
$conn = mysqli_connect("localhost","root","","may_syst");

//Check if the connection was successful
if (!$conn){
    echo "Connection failed";
}else{
    //Proceed by deleting
    //Start by checking if the delete has been clicked

    if (isset($_GET['id_yangu'])){
        $received_id = $_GET['id_yangu'];
        //Create the delete query

        $deleteQuery = "DELETE FROM majina WHERE id=$received_id";

        //Complete by finally deleting

        $delete = mysqli_query($conn,$deleteQuery);

        //Check if deleting was successful

        if (!$delete){
            echo "Deleting failed";
        }else{
            echo "Record deleted successfully";
            header('location:viewUsers.php');
        }
    }
}


?>