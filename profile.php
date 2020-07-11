<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travely</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>
<style>
    .navbar{
        top: 3%;
        padding-left: 5%;
        float: right;
    }

    .title{
        margin: 3%;
    }

    body{
        padding: 0px;
        background-image: url('./images/sunday-river-landscape-4k-5k.jpg');
        background-size:cover;
    }
    .dropdown-item{
        background-color:#fa6c2f;
        color: white;
    }
    .btn{
        background-color: #FB6E3B;
        border: 3px solid #FB6E3B;
    }
    .btn:hover {
        background-color: black;
        border: 3px solid #FB6E3B;
    }
    label{
        color: white;
    }
</style>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Myposts.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">My Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"role="button">
                    <img src="./account.svg" alt="" height="40px" width="40px"></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a class="dropdown-item" href="profile">Profile</a>
                            <a class="dropdown-item" href="Logout.php">logout</a>
                        </div>
                </li>
            </ul>
        </div>
</nav>
    <h2 class= "title">TRAVELY<h2>

<div class="container mt-5" style="font-size: 15px;">
    <div class="row">
        <div class="col-md-4">
            <?php
                include("connect.php");
                $edit_user = $_SESSION['user']['id_user'];
                $data = mysqli_query($db,"SELECT * FROM user WHERE id_user = $edit_user");
                while($row = mysqli_fetch_array($data)){
            ?>

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-5" width="160" src="account.svg" />
                    
                    <h3><?php echo  $row["username"] ?></h3>
                    <p><?php echo $row["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <?php
            include("connect.php");
            $edit_user = $_SESSION['user']['id_user'];
            $data = mysqli_query($db,"SELECT * FROM user WHERE id_user = $edit_user");
            while($row = mysqli_fetch_array($data)){
	    ?>


        <div class="col-md-8">

            <form action="Editprofile.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text"name="username" class="form-control" placeholder="<?php echo  $row["username"] ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text"name="email" class="form-control"  placeholder="<?php echo $row["email"] ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Address</label>
                <input type="text"name="address" class="form-control"  placeholder="<?php echo $row["address"] ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password"name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Confirmed Password</label>
                <input type="password"name="confPass" class="form-control" placeholder="Confirmed Password">
            </div>
            <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
            <button type="submit" class="btn btn-primary" name='edit'>Edit Profile</button>
            </form>
           
        </div>
        <?php
            }
        ?>
    
    </div>
</div>

</body>
</html>