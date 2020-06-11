<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-header-girl.jpg" alt="Happy Girl" class="hero-image">
  <div>
    <h1 class="hero-text Heading">Contact</h1>
      <br>
      <p class="hero-sub-text">Stay Up to Date on News and Event</p>
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

<br>
<div class="container healing-smile-bg">
    <div class="contact-overlay-desc-right"><p>Help us grow by sharing your story with<br>Women in Dentistry</p>
    <a href="" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>
<br>
    <div class="container"><p class="ContactParagraph">Are you interested in giving back to the community on a personal level? Join our clinical team who provide pro-bono dental care and rehabilitation to survivors of domestic violence. This initiative is supported by ADA(WA), ADHF and UWA Dental School.</p></div>
<div class="container speaker-bg">
    <div class="contact-overlay-desc-right"><p>Help us grow by sharing your story with<br>Women in Dentistry</p>
    <a href="" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>
    <br>
    <div class="container"><p class="ContactParagraph">Help inspire our members by sharing your story, knowledge and expertise with us. We welcome speakers from a wide range of backgrounds who speak on topics of relevance to women in our roles in dentistry, family and community.</p></div>
<div class="container sponsor-bg"> 
    <div class="contact-overlay-desc-right"><p>Help us grow by sharing your story with<br>Women in Dentistry</p>
    <a href="" class="btn-lg-contact" role="button">MORE INFO</a></div>
</div>    
<br>
    <div class="container"><p class="ContactParagraph">Women in Dentistry Society (WA) has strong support in the dental community. Our events are well attended and provide fantastic networking and advertising opportunities, as well as a platform to discuss your business with interested individuals. Your support of our events also assists in raising funds for charities, dental scholarships and research.</p></div>
<br>
<br>

<div class="container">
    <h2 class="email-header">Email Us</h2><br>
    <p class="Paragraph">If you have any questions or you are either looking for a mentor or to become a speaker, please send us an email and we will get back to you.</p><br>
    <?php wpforms_display( 291, false, false ); ?>
</div>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>