<?php

    include("connect.php");
    if(isset($_POST['signup'])){
        $address = $_POST["address"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $confPass = $_POST["confPass"];

        
        if($password == $confPass){
            $sql = "INSERT INTO user (email,username, password ,address) VALUES ('$email','$username', '$password' ,'$address')";
            $query = mysqli_query($db, $sql) or die(mysqli_error($db));
            if($query){
                echo "<script>alert('Your account was successfully created'); 
                window.location = 'Login.php';</script>";
            } else {
                echo "<script>alert('Try Again!'); 
                window.location = 'Signup.php.php';</script>";
            }
        }
        else{
            echo "<script>alert('Your Password Does Not Matched'); 
                window.location = 'Signup.php';</script>";
            }
    }
?>
    

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travely</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .grid{
        display : grid;
        grid-template-columns: 60% 40%;
    }

    .container {
        position: relative;
        width: 100%;
        padding-left: 0px;
        margin : 0;
    }

    .container img {
        width: 100%;
        height: 100vh;
        padding-left: 0px;
        border-radius : 0px 50px 50px 0px;
    }

    .container .text{
        position: absolute;
        top: 80%;
        left: 40%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        color: white;
        padding: 12px 24px;
    }

    .container .title{
        position: absolute;
        top: 5%;
        left: 10%;
        color: white;
    }

    .navbar{
        top: 3%;
        padding-left: 5%;
        float: right;
    }

    .form{
        padding-top: 50%;
        padding-left: 5%;
        margin-right: 20%;
        right: 10%;
    }
    .form-control{
        width: 80%;
        right: 10%;
    }

    .btn{
        margin-right: 10%;
        background-color: #FB6E3B;
        border: 3px solid #FB6E3B;
        margin-top: 5%;
        width: 90%;

    }
    
    .btn:hover {
        background-color: black;
        border: 3px solid #FB6E3B;
    }

    .form-group input[type="text"]
    {
	border: none;
	border-bottom: 6px solid #FB6E3B;

    }

    .form-group input[type="password"]
    {
        border: none;
        border-bottom: 6px solid #FB6E3B;
    }
    .form-group input[type="email"]
    {
        border: none;
        border-bottom: 6px solid #FB6E3B;
    }

    .login{
        padding-left: 5%;
        padding-top: 3%;
    }

    #inputAddress{
        width: 90%;
    }

</style>
<body>

<div class="grid">
			<div class="grid-left">
                <div class="container">
                    <img src="259516.jpg" alt="Snow" style="width:100%">
                    <h1 class = "text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <h2 class= "title">TRAVELY<h2>
                </div>
			</div>

		  	<div class="grid-right">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        </ul>
                    </div>
                </nav>
                <div class="form">
					<form style="width: 20cm;" action ="" method ='post'>
						<h1 style="font-weight: bold;">Sign Up</h1>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" style="font-weight: bold;">Username</label>
                                        <input type="text" name ='username' class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail" style="font-weight: bold;">Email Address</label>
                                        <input type="email" name ='email' class="form-control" id="inputEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" style="font-weight: bold;">Address</label>
                                    <input type="text" name ='address' class="form-control" id="inputAddress" placeholder="Address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword" style="font-weight: bold;">Password</label>
                                        <input type="password" name = 'password' class="form-control" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPasswordConf" style="font-weight: bold;">Confirmed Password</label>
                                        <input type="password" name='confPass'  class="form-control" id="inputPasswordConf" placeholder="Confirmed Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name='signup'>Sign Up</button>
                                </div>
                    </form>
			    </div>
				<div class="login">
					<p>Already Have an account? <span><a href="Login.php" style="color:#FB6E3B;">Login</a></span></p>
				</div>
            
</div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
    </script>
</body>
</html>