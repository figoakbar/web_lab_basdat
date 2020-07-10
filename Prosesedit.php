<?php

    include("connect.php");

        $caption = $_POST['caption'];
        $id_post = $_POST['id_post'];
        $id_user = $_POST['id_user'];

        $sql = "UPDATE `post` SET `caption`= '$caption',`id_user`='$id_user' WHERE `id_post` = '$id_post'";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));

        if($query){
            echo "<script>alert('Your post was successfully edited'); 
            window.location = 'Myposts.php';</script>";
        } else {
            echo "<script>alert('Try Again!'); 
            window.location = 'Myposts.php';</script>";
        }
?>