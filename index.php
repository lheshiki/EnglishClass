<?php get_header(); ?>
<div class="home_body">
       <br class="iphone ipad">
       <br class="iphone ipad">
       <br class="iphone ipad">
       <br class="iphone ipad">
       <br class="iphone">
       <br class="iphone">
       <br class="iphone">
       <br class="iphone">
       <br class="iphone">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/englishclass1.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/englishclass3.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/englishclass5.png"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <script>
            var mySwiper = new Swiper ('.swiper-container', {
            effect: "fade",
            loop: true,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 5000,
            speed:1000,
            breakpoints: {
                767: {
                slidesPerView: 1,
                spaceBetween: 0
                }
            }
            })
        </script>
        <br class="iphone ipad">
        <br class="iphone ipad">
        <br class="iphone ipad">
        <br class="iphone ipad">
        <br class="iphone">
        <br class="iphone">
        <br class="iphone">
        <br class="iphone">
        <br class="iphone">
        <br class="iphone">
</div>
<?php get_footer(); ?>