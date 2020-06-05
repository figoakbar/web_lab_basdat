<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        border-radius : 0px 30px 30px 0px;
    }

    .container .btn {
        position: absolute;
        top: 60%;
        left: 20%;
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
        float : right;
    }

    .popular{
        padding-top: 15%;
        padding-left: 5%;
        color: #363636;
    }
    .container .destination{
        display : grid;
        grid-template-columns: repeat(3,1fr);

    }

    .destination > img{
        margin-top: 10%;
        border-radius : 30px;
        width : 200px;
        height: 300px;
    }

    .destination{
        padding-left: 5%;
    }

    .destination.london{
        position: absolute;
        top: 5%;
        left: 10%;
        color: white;
    }
</style>
<body>

<div class="grid">
			<div class="grid-left">
                <div class="container">
                    <img src="7cd6dc7b34af544375336c288aec69da.jpg" alt="Snow" style="width:100%">
                    <h1 class = "text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <h2 class= "title">TRAVELY<h2>
                    <button class="btn">Share Your Experience</button>
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
                            <a class="nav-link" href="#">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        </ul>
                    </div>
                </nav>
                <div class="container"> 
                    <h2 class="popular">Popular Destination</h2>
                    <div class ="destination">
                        <img src ="76709-640x360-houses-of-parliament-and-london-eye-on-thames-from-above-640.jpg">
                        <img src ="images.jpg">
                    </div>
                </div>
			</div>
</div>

</body>
</html>