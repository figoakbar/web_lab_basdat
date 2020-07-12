<?php require_once("auth.php"); ?>
<?php include("connect.php"); ?>

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

    .title-image{
            background-image: url('./images/38580.jpg');
            background-size:cover;
    }

    .slogan{
        padding: 5%;
        color: white;
    }

    .popular{
        padding-top: 15%;
        padding-left: 5%;
        color: #363636;
    }

    .destination .card{
        border: none;
    }

    .destination .card-img{
        margin-top: 10%;
        border-radius : 30px;
        width : 200px;
        height: 300px;
    }

    .destination{
        padding-left: 5%;
        right : 10%;
        display : grid;
        grid-template-columns: repeat(3,1fr);
    }

    .profile{
        float: right;
        left : 10%;
    }

    .form-group{
        width: 50%;
        text-align: left;
    }

    form{
        padding-top: 5%;
    }

    .btn{
        width: 100%;
        margin-top: 3%;
        margin-bottom: 3%;
        background-color: #fa6c2f;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        text-align: center;
        margin-top: 5%;
    }

    .btn:hover {
        background-color: black;
        color: white;
    }
    span{
        display: none;
    }

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" Myposts.php?id_user=<?php echo  $_SESSION['user']['id_user'] ?>">My Posts</a>>My Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"role="button">
                    <img src="./account.svg" alt="" height="40px" width="40px"></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="Logout.php">logout</a>
                        </div>
                </li>
            </ul>
                    </div>
                </nav>
    <h2 class= "title">TRAVELY<h2>
    <div class="title-image" style="padding-bottom: 200px; margin: 0px;">
	    <div class="container" style="margin-top: 0px;">
            <h1 class='slogan'>Share Your Experience!</h1>
	    </div>
	</div>
    <?php
        include("connect.php");
        $edit = $_GET["edit"];
        $data = mysqli_query($db,"SELECT * FROM post WHERE id_post = $edit");
        while($row = mysqli_fetch_array($data)){
	?>
    <center>
        <form action ="Prosesedit.php" method ='post'>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Caption</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" value = "<?php echo $row['caption'] ?>" 
                name="caption" rows="3"></textarea>
                <input type="hidden" name="id_post" value="<?php echo $row['id_post']; ?>">
                <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                <button type="submit" class="btn btn-primary" name='post'>Post</button>
            </div>
        </form>
    <center>
    <?php 
        }
    ?>

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