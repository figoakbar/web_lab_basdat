<?php require_once("auth.php"); ?>
<?php include("connect.php"); ?>
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<style type="text/css">
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
        background-image: url('./images/87849.jpg');
        background-size:cover
    }
    .card{
        margin-left: 20%;
        width: 40%;
        margin-top: 3%;
    }
    .card-title{
        color:#fa6c2f;
    }
    .card-text{
        color: #545454;
    }
    .card-header{
        color: white;
        background-color:#fa6c2f;
        margin:0%;
    }
    .row{
        margin-top: 3%;
    }

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href= "Myposts.php?id_user=<?php echo  $_SESSION['user']['id_user'] ?>">My Posts</a>
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
    <div class="row">
        <div class="col-md-11">
            <?php
                $data = $db->query("SELECT `wisata`, `caption`, `username` FROM `post` JOIN 
                `destination` USING (`id_destination`) JOIN `user` USING (`id_user`)  WHERE `id_destination` = $_GET[id_destination]");
                $no = 0;
                while ($row = $data->fetch_array()){
                    $no++;
            ?>
                <div class="card text-white mb-3 bg-light">
                    <div class="card-header">@<?php echo $row['username'] ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['wisata'] ?></h5>
                        <p class="card-text"><?php echo $row['caption'] ?></p>
                    </div>
                </div>
                <?php
                    }
                ?>
        </div>
    </div>    
</body>

</script>
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

</html>