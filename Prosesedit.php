<?php

    include("connect.php");

        $caption = $_POST['caption'];
        $id_post = $_POST['id_post'];

        $sql = "UPDATE `post` SET `caption`= '$caption' WHERE `id_post` = '$id_post'";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));

        if($query){
            echo "<script>alert('Your post was successfully edited'); 
            window.location = 'Myposts.php';</script>";
        } else {
            echo "<script>alert('Try Again!'); 
            window.location = 'Myposts.php';</script>";
        }
?>