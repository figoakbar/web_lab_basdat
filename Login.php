<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = ("SELECT * FROM user WHERE `username`= '$username' and `password`= '$password'");
    $stmt = $db->prepare($sql);
    

    $params = array(
        ":username" => $username,
        ":password" => $password
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: Home.php");
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
        right: 10%;
        width: 80%;
        right: 10%;
    }
    .form-control{
        width: 80%;
        right: 10%;
    }

    .btn{
        margin-right: 20%;
        background-color: #FB6E3B;
        border: 3px solid #FB6E3B;

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
    .signUp{
        padding-left: 5%;
        padding-top: 3%;
    }

</style>
<body>

<div class="grid">
			<div class="grid-left">
                <div class="container">
                    <img src="photo-1549880338-65ddcdfd017b.jfif" alt="Snow" style="width:100%">
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
                        <form style="width: 20cm;" action="" method='post'> 
                            <h1 style="font-weight: bold;">Login</h1>
                            <div class="form-group">
                                <label  style="font-weight: bold;">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">Password</label>
                                <input type="Password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="login" style="margin-top: 10px; float: right; width: 20%;">Login</button>
                        </form>
                    </div>
                    <div class="signUp">
                        <p>Don't Have an account? <span><a href="Signup.php" style="color: #FB6E3B;">Sign Up</a></span></p>
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