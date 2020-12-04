<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnglishHome</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> 
=======
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photogallery.css">
>>>>>>> e94087fbece09da9e0c9dfa16edc6bf665d7833f
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/selfintroduction.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photogallery.css">
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/photogallery.js"></script>
       <!-- ヘッダー -->
       <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #730f14;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
              <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo home_url(); ?>/index.php" style="font-size: 25px;">Home<span class="sr-only">（現在位置）</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo site_url(); ?>/index.php/photogallery/" style="font-size: 25px;">Photo gallery <span class="sr-only">（現在位置）</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url(); ?>/index.php/selfintroduction/" style="font-size: 25px;">Self-introduction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url(); ?>/index.php/blog/" style="font-size: 25px;">Blog</a>
                </li>
              </ul>
            </div>
          </nav>
       </header>