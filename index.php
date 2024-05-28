<?php include "header.php"; ?>

<!--Slideshow-->
<div class="wrapper">
    <div class="slider-area">
        <ul class="rslides">
            <li><img src="HomePic.jpg" alt=""slider image></li>
            <li><img src="image2.jpg" alt=""slider image></li>
            <li><img src="image3.jpg" alt=""slider image></li>
            <li><img src="image4.jpg" alt=""slider image></li>
            <li><img src="image5.jpg" alt=""slider image></li>
       
        </ul>
    </div>
 
</div>
<!--script for slideshow-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>

<script>
  $(function() {
    $(".rslides").responsiveSlides({
        speed: 100, auto: true, timeout: 4000,pauseControls: true, prevText: "Previous",nextText: "Next",
        
    });
  });
</script>

<?php include "footer.php"; ?>