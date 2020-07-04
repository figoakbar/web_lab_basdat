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
        <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Destination</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Caption</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </form>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>


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