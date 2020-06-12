<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-header-girl.jpg" alt="Happy Girl" class="hero-image">
  <div>
    <h1 class="hero-text Heading">Contact us</h1>
      <br>
      <p class="hero-sub-text">Feel free to get in touch with us if you have any questions, comments or feedback</p>
</div>
    <br>
<div class="container speaker-bg">
    <div class="contact-overlay-title-right"><p>Want to be a Speaker?</p></div>
    <div class="contact-overlay-desc-right"><p><?php the_field('speakertagline'); ?></p>
    <a href="http://wuk.yew.mybluehost.me/speaker-register-form/" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>
<br>
<div class="container healing-smile-bg">
    <div class="contact-overlay-title-right"><p>Healing Smiles</p></div>
    <div class="contact-overlay-desc-right"><p><?php the_field('healingsmilestagline'); ?></p>
    <a href="http://wuk.yew.mybluehost.me/healing-smiles-program/" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>
<br>
<div class="container sponsor-bg">
    <div class="contact-overlay-title-right"><p>Interested in Sponsoring Us?</p></div>
    <div class="contact-overlay-desc-right"><p><?php the_field('sponsortagline'); ?></p>
    <a href="http://wuk.yew.mybluehost.me/sponsor-form/" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>    
<br>
<br>
<br>

<div class="container">
    <h2 class="email-header">Email Us</h2><br>
    <p class="Paragraph">If you have any questions or you are either looking for a mentor or to become a speaker, please send us an email and we will get back to you.</p><br>
    <?php wpforms_display( 291, false, false ); ?>
</div>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>