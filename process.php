<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 02/04/2016
 * Time: 13:23
 */
include('server.php');

if (isset($_POST['submit'])) {
    if ((empty($_POST['personalName'])) || (empty($_POST['gender'])) || (empty($_POST['power']))) {

        echo "all inputs are required";
    }
    else {
        $personalName = $_POST['personalName'];
        $gender = $_POST['gender'];
        $power = $_POST['power'];

        $sql = "INSERT INTO hero (Name,Gender,Power) VALUES ('$personalName','$gender','$power') ";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.html');
            echo "hero sucessfully created";

        } else {
            echo "Error" . " " . $sql . " " . mysqli_error($conn);
            echo "Error {$sql} " . mysqli_error($conn);
        }
    }
}