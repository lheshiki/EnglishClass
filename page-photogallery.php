<?php get_header(); ?>
<div class="body">
    <main>
        <div class="d-flex justify-content-center p-5">
            <h1 class="title">フォトギャラリー</h1>
        </div>
        <div id="carouselExampleFade" class="slider-container carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/englishclass1.png"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em"></text></svg>
              </div>
              <div class="carousel-item">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/englishclass2.png"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em"></text></svg>
              </div>
              <div class="carousel-item">
                <img class="slider bd-placeholder-img bd-placeholder-img-lg d-block w-100" style="object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/englishclass3.png"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em"></text></svg>
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
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass4.png" alt="">
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass5.png" alt="">
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass6.png" alt="">
        </div>
        <div class="displayPhotoLg">
          <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass7.png" alt="">
          <div>
              <h1>授業の様子</h1>
          </div>
        </div>
          <div class="displayPhoto">
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass8.png" alt="">
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass9.png" alt="">
            <img class="effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/englishclass10.png" alt="">
         </div>
         <div  class="floatContainer">
           <div class="float-right">
             <img class="effect-fadeL" src="<?php echo get_template_directory_uri(); ?>/img/englishclass11.png" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="<?php echo get_template_directory_uri(); ?>/img/englishclass12.png" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="<?php echo get_template_directory_uri(); ?>/img/englishclass13.png" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="<?php echo get_template_directory_uri(); ?>/img/englishclass14.png" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="<?php echo get_template_directory_uri(); ?>/img/englishclass15.png" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="<?php echo get_template_directory_uri(); ?>/img/englishclass17.png" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="<?php echo get_template_directory_uri(); ?>/img/englishclass18.png" alt="">
           </div>
           <div class="float-left">
             <img class="effect-fadeR" src="<?php echo get_template_directory_uri(); ?>/img/englishclass20.png" alt="">
           </div>
           <div class="float-right">
             <img class="effect-fadeL" src="<?php echo get_template_directory_uri(); ?>/img/englishclass21.png" alt="">
           </div>
        </div>
    </main>
</div>
    <?php get_footer(); ?>