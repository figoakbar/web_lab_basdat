<?php

    include("connect.php");

    if(isset($_POST['edit'])){

        $id_user = $_POST['id_user'];
        $address = $_POST["address"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $confPass = $_POST["confPass"];
    
        if($password == $confPass){
            $sql = "UPDATE user SET username ='$username ', address='$address', password='$password', email='$email' WHERE id_user = '$id_user'";
            $query = mysqli_query($db, $sql);

            if($query){
                echo "<script>alert('Your account was successfully edited'); 
                window.location = 'Profile.php';</script>";
            } else {
                echo "<script>alert('Try Again!'); 
                window.location = 'Profile.php';</script>";
            }
        }
        else{
            echo "<script>alert('Your Password Does Not Matched'); 
                window.location = 'Profile.php';</script>";
        }
    }
?>