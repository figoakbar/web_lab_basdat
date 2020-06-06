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

    .left-grid{
        display : grid;
        grid-template-rows :1fr;
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

    .card-text{
        position: absolute;
        top: 80%;
        left: 5%;
        color: white;
        padding: 12px 24px;
    }
    .card-title{
        position: absolute;
        top: 70%;
        left: 3%;
        color: white;
        padding: 12px 24px;
    }
</style>
<body>

<div class="grid">
			<div class="grid-left">
                <div class="container">
                    <img src="7cd6dc7b34af544375336c288aec69da.jpg" alt="Snow" style="width:100%">
                    <h1 class = "text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <h2 class= "title">TRAVELY<h2>
                    <button class="btn">Get Started</button>
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
                            <a class="nav-link" href="#">My Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        </ul>
                        <a class="nav-link"><img src="account.svg" alt="" height="50px" width="50px"></a>
                    </div>
                </nav>
                <h2 class="popular">Popular Destination</h2>
                <div class ="destination">
                    <div class="card text-white">
                        <img class="card-img" src="6994.jpg" alt="Card image">
                        <a href="#"><div class="card-img-overlay">
                            <h5 class="card-title">United States</h5>
                            <p class="card-text">Yellowstone</p>
                        </div></a>
                    </div>
                    <div class="card text-white">
                        <img class="card-img" src="5301.jpg" alt="Card image">
                        <a href="#"><div class="card-img-overlay">
                           <h5 class="card-title">Switzerland</h5>
                            <p class="card-text">Alpen</p>
                        </div></a>
                    </div>
                    <div class="card text-white">
                        <img class="card-img" src="crop.jfif" alt="Card image">
                        <a href="#"><div class="card-img-overlay">
                            <h5 class="card-title">Japan</h5>
                            <p class="card-text">Fuji</p>
                        </div></a>
                    </div>
                </div>
                
            
    
</div>
<script>
      $(document).ready(function(){
        $('.card').hover(
          function(){
            $(this).animate({
              marginTop: "-=1%",
            },200);
          },

          function(){
            $(this).animate({
              marginTop: "0%",
            },200);
          }
        );
      });
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