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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
            background-image: url('38580.jpg');
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

    .swiper-container {
        height: 250px;
        margin: 0%;
    }

    .swiper-slide {
        display: flex;
        align-items: flex-end;
        background-size: cover;
        border-radius: 7.5%;
        color: white;
    }

    @media screen and (max-width: 990px) {

        .container-landing .container-image {
            border-top-right-radius: 0%;
            border-bottom-right-radius: 0%;
        
        }
    }

    .container-landing-asia{
        padding-top : 7%;
        margin-left:3%;
    }

    .container-landing-europe{
        padding-top: 7%;
        margin-left:3%;
    }

    .mb-0{
        margin-left: 7%;
        color: white;
    }

    .desc{
        margin-left: 7%;
        color:#fa6c2f;
        font-weight: bold;
    }

    h2{
        margin-bottom: 3%;
    }
    
    a:hover{
        text-decoration: none;
    }

    .btn {
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

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"role="button">
                    <img src="./account.svg" alt="" height="40px" width="40px"></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="Logout.php">logout</a>
                        </div>
                </li>
            </ul>
                    </div>
                </nav>
    <h2 class= "title">TRAVELY<h2>
    <div class="title-image" style="padding-bottom: 200px; margin: 0px;">
	    <div class="container" style="margin-top: 0px;">
            <h1 class='slogan'>Lorem, ipsum dolor.</h1>
	    </div>
	</div>
    <div style='text-align: center; padding-top: 5%;'><h1>Choose Your Destination</h1></div>
    <div class="container-landing-asia">
                    <h2>Asia</h2>
                    <div class="swiper-container md-3">
                        <div class="swiper-wrapper">
                        <?php
                            $data = $db->query("SELECT * FROM `destination` WHERE `id_benua` = 1");
                            $no = 0;
                            while ($row = $data->fetch_array()){
                                $no++;
                        ?>
                            <div class="swiper-slide" style="background-image: url('<?php echo $row['foto_wisata'] ?>')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0"><?php echo $row['negara'] ?></h5></a>
                                    <p class="desc"><?php echo $row['wisata'] ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container-landing-europe">
                    <h2>Europe</h2>
                    <div class="swiper-container md-3">
                        <div class="swiper-wrapper">
                        <?php
                            $data = $db->query("SELECT * FROM `destination` WHERE `id_benua` = 2");
                            $no = 0;
                            while ($row = $data->fetch_array()){
                                $no++;
                        ?>
                            <div class="swiper-slide" style="background-image: url('<?php echo $row['foto_wisata'] ?>')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0"><?php echo $row['negara'] ?></h5></a>
                                    <p class="desc"><?php echo $row['wisata'] ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                <center>
                    <button class="btn" onclick='top.location="FormUpload.php"' >Share Your Experience!</button>
                </center>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
        var swiper = new Swiper('.swiper-container', {

                slidesPerView: 4.5,
                spaceBetween: 15,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }

                ,
            }

        );
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

</body>
</html>