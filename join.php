<?php
/*
Template Name: Join Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-header-girl.jpg" alt="Happy Girl" class="hero-image">
  <div>
    <h1 class="hero-text Heading">Join Us Today!</h1>
      <br>
      <p class="hero-sub-text">Ready to be a part of our community?</p>
  </div>
</div>
<div class="container">
    <h2 class="email-header" style="font-size:3em;">Want to be a Member?</h2><br>
    <div class="row">
    <div class="col-md-6 col-md-offset-1">
        <p class="Paragraph">Please fill in the form below and we will get back to you shortly!</p><br>
    <?php wpforms_display( 412, false, false ); ?>
        </div>
        <div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/images/homesupport.jpg" class="img-circle" width="304" height="304"></div>
    </div>
</div>

<div class="container">
    <h2 class="email-header" style="font-size:3em;">Subscribe to Our Newsletter</h2><br>
    <div class="row">
    <div class="col-md-6 col-md-offset-1">
        <p class="Paragraph">You will receive the latest news and events from us.</p><br>
    <?php wpforms_display( 290, false, false ); ?>
        </div>
        <div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/images/homecupofcoffee.jpg" class="img-circle" width="304" height="304"></div>
    </div>
</div>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>