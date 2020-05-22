<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div id="carousel" class="carousel slide background" data-ride="carousel">
    <h2>Title Text here</h2>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
</div>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>