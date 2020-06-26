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
        float: left;
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
</style>
<body>
    <h2 class= "title">TRAVELY<h2>
    <div class="title-image" style="padding-bottom: 200px; margin: 0px;">
	    <div class="container" style="margin-top: 0px;">
            <h1 class='slogan'>Lorem, ipsum dolor.</h1>
	    </div>
	</div>
    <div class="container-landing-asia">
                    <h2>Asia</h2>
                    <div class="swiper-container md-3">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('bali-beaches-sunset-wallpaper-4.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Indonesia</h5></a>
                                    <p class="desc">Bali</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('Mount Fuji 13-1.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Japan</h5></a>
                                    <p class="desc">Fuji</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('sunset_kauai_hawaii_wallpaper_united_states-1024x768.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">India</h5></a>
                                    <p class="desc">Goa</p>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-image: url('nepal-ebc-gokyo-trekking.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Nepal</h5></a>
                                    <p class="desc">Gokyo Cho lake</p>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-image: url('wp3780780.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">China</h5></a>
                                    <p class="desc">Huanglong</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-landing-europe">
                    <h2>Europe</h2>
                    <div class="swiper-container md-3">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('The-Alps_01_graded-943x531.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Switzerland</h5></a>
                                    <p class="desc">Alpen</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('8d5dfe070eb4a343d60393256292df26.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Montegero</h5></a>
                                    <p class="desc">Durmitor</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('Fairy-Pools-Isle-of-Skye-Photos.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Scotland</h5></a>
                                    <p class="desc">Isle Of Skye</p>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-image: url('bali-beaches-sunset-wallpaper-4.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">Indonesia</h5></a>
                                    <p class="desc">Bali</p>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-image: url('sunset_kauai_hawaii_wallpaper_united_states-1024x768.jpg')">
                                <div class="container">
                                <a href="#"><h5 class="mb-0">India</h5></a>
                                    <p class="desc">Goa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
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