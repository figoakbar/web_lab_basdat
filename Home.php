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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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

    .container .btn {
        position: absolute;
        top: 60%;
        left: 21%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #fa6c2f;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        text-align: center;
        width: 200px;
    }

    .container .btn:hover {
        background-color: black;
    }

    .container .text{
        position: absolute;
        top: 50%;
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

    .swiper-container {
    height: 250px;
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

    .container-landing-popular{
        padding-top : 20%;
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
    .carousel{
        width: 80%;
        margin-top: 15%;
    }
    .d-block{
        border-radius: 7%;
        height: 330px;
    }
</style>
<body>

<div class="grid">
			<div class="grid-left">
                <div class="container">
                    <img src="./images/7cd6dc7b34af544375336c288aec69da.jpg" alt="Snow" style="width:100%">
                    <h1 class = "text">Get Ready For Your Journey And Share It With Us.</h1>
                    <h2 class= "title">TRAVELY<h2>
                    <button class="btn" onclick='top.location="Location.php"' >Get Started</button>
                </div>
			</div>

		  	<div class="grid-right">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" Myposts.php?id_user=<?php echo  $_SESSION['user']['id_user'] ?>">My Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            role="button"><img src="./account.svg" alt="" height="40px" width="40px"></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="Logout.php">logout</a>
                                </div>
                        </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-landing-popular">
                    <h2>Popular Destination</h2>
                    <div class="swiper-container md-3">
                        <div class="swiper-wrapper">
                        <?php
                            $data = $db->query("SELECT * FROM `destination` WHERE id_destination < 7");
                            $no = 0;
                            while ($row = $data->fetch_array()){
                                $no++;
                        ?>
                            <div class="swiper-slide" style="background-image: url('<?php echo $row['foto_wisata'] ?>')">
                                <div class="container">
                                <a href="Timeline.php?id_destination=<?php echo $row['id_destination'] ?>"><h5 class="mb-0"><?php echo $row['negara'] ?></h5></a>
                                    <p class="desc"><?php echo $row['wisata'] ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <center>
                        <div id=carouselExampleControls class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="view">
                                        <img class="d-block w-100" src="./images/193174.jpg" alt="First slide">
                                        <div class="mask rgba-black-light"></div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive">Share Your Experience With Us!</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block w-100" src="./images/Free-download-People-Wallpaper-1920x1080-for-your-Desktop-.jpg" alt="Second slide">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Share Your Fun!</h3>
                                        </div>
                                    </div>
                                <div class="carousel-item">
                                    <div class="view">
                                        <img class="d-block w-100" src="./images/photo-1508672019048-805c876b67e2.jpg" alt="Second slide">
                                        <div class="mask rgba-black-light"></div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive">Share Your Stories!</h3>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
                
            
    
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
        var swiper = new Swiper('.swiper-container', {

                slidesPerView: 2.5,
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