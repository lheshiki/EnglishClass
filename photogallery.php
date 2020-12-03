<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/photogallery.css">
</head>
<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #730f14;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="home.html" style="font-size: 25px;">Home<span class="sr-only">（現在位置）</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="photogallery.html" style="font-size: 25px;">Photo gallery <span class="sr-only">（現在位置）</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="selfintroduction.html" style="font-size: 25px;">Self-introduction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html" style="font-size: 25px;">Blog</a>
            </li>
          </ul>
        </div>
      </nav>
   </header>
    <main>
        <div class="d-flex justify-content-center p-5">
            <h1 class="title">フォトギャラリー</h1>
        </div>
        <div id="carouselExampleFade" class="slider-container carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="img/155295_s.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em"></text></svg>
              </div>
              <div class="carousel-item">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="img/2592232_s.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em"></text></svg>
              </div>
              <div class="carousel-item">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="img/2592406_s.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em"></text></svg>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="displayPhoto">
            <img class="effect-fade" src="img/155295_s.jpg" alt="">
            <img class="effect-fade" src="img/2592232_s.jpg" alt="">
            <img class="effect-fade" src="img/2592406_s.jpg" alt="">
        </div>
        <div class="displayPhotoLg">
          <img class="effect-fade" src="img/622250_s.jpg" alt="">
          <div>
              <h1>授業の様子</h1>
          </div>
        </div>
          <div class="displayPhoto">
            <img class="effect-fade"src="img/155295_s.jpg" alt="">
            <img class="effect-fade" src="img/2592232_s.jpg" alt="">
            <img class="effect-fade"src="img/2592406_s.jpg" alt="">
         </div>
         <div  class="floatContainer">
           <div class="float-right">
             <img class="effect-fadeL" src="img/155295_s.jpg" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="img/2592232_s.jpg" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="img/2592406_s.jpg" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="img/2592232_s.jpg" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="img/2592406_s.jpg" alt="">
           </div>
        </div>
    </main>
            <!-- footer -->
            <footer>
              <nav class="navbar navbar-expand-lg " style="background-color: #730f14;">              
                  <div class="collapse navbar-collapse justify-content-md-center collapse show" id="navbarsExample08">
                    <ul class="navbar-nav">
                      <li class="nav-item ">
                          <p style="margin-bottom: 0px; text-align: center; background-color: #730f14; padding-bottom: 10px; color: white;">Copyrights ©︎ All Reserved by LAY</p>
                      </li>
                    </ul>
                  </div>
                </nav>
          </footer>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/photogallery.js"></script>
</body>
</html