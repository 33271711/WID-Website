<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div id="my_carousel" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target = "#my_carousel" data-slide-to = "0" class="active"></li>
    <li data-target = "#my_carousel" data-slide-to = "1"></li>
    <li data-target = "#my_carousel" data-slide-to = "2"></li>
  </ol>
  <div class="carousel-inner i">
    <div class="item active">
      <img src="images/f1.jpg" alt = "i1" class="img-responsive rel-img">
    </div>

    <div class="item">
      <img src="images/f2.png" alt = "i2" class="img-responsive rel-img">
    </div>

    <div class="item">
      <img src="images/f3.jpg" alt = "i3" class="img-responsive rel-img">
    </div>
  </div>
</div>
    <span class="img-overlay"><img src="images/home_page-carousel_overlay-white.png" alt = "bg" class="carousel-overlay"></span>
    <span class="txt-overlay-tagline">Here is a title text</span>
    <span class="txt-overlay-desc">Here is a description</span>


<div> Hello World</div>
    
<div class="container-fluid home-section">
  <div class="row">
    <div class="col-md-6">
      Left image
    </div>
    <div class="col-md-6 about-us">
      Right description <br>
        Yes <br>
        Here is one <br>
        More lines so I can see if it works <br>
        Yes it does <br>
        Nice <br>
  </div>
</div>
</div>

<div class="container Heading"> What we do</div>

<div class="container-fluid home-section">
  <div class="row">
    <div class="col-sm-4">Left column</div>
    <div class="col-sm-4">Middle column</div>
    <div class="col-sm-4">Right column</div>
</div>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 about-us">
        <span class="Heading">Cup of Coffee</span><br>
        Yes <br>
        Here is one <br>
        More lines so I can see if it works <br>
        Yes it does <br>
        Nice <br>
    </div>
    <div class="col-md-6 ">
        Right image
  </div>
</div>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>