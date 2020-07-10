<?php
    include 'connect.php';
    
    $result = mysqli_query($db,"DELETE FROM post WHERE id_post = $_GET[post]");
    if($result){
        echo "<script>alert('Your post was successfully Deleted'); 
        window.location = 'Myposts.php';</script>";
    } else {
        echo "<script>alert('Try Again!'); 
        window.location = 'Myposts.php';</script>";
    }
?>