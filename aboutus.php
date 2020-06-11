<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid">
    <img src="<?php the_field('header'); ?>" alt="Header Image" class="hero-image">
  <div>
    <h1 class="hero-text Heading">About Us</h1>
  </div>
</div>

<!-- Our values Section -->
<div class="blue-container blue-container-content">
<div class="Title">  
<p class="AboutTitle"> Our Values </p>
    </div>
	<p class="AboutParagraph"> <?php the_field('value1'); ?> <br>
    <?php the_field('value2'); ?> <br>
	<?php the_field('value3'); ?> <br> 
	<?php the_field('value4'); ?></p>
    </div>
    
    <!-- What do we do section -->  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
        <div class="about-divider">
        <div class="Heading" style="text-align: left; padding-left: 60px"> What do we do?</div>
    <p class="AboutParagraph2" style="padding-left: 60px">
        <?php the_field('whatwedoPara1'); ?>
        <?php the_field('whatwedoPara2'); ?>
        <?php the_field('whatwedoPara3'); ?>
        </div>
  </div>
          <div class="col-md-6">
         <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-whatdowedo.jpg" alt="What We Do Image" class="left-img">
          </div>
</div>
</div>
    
<br>
<br>
<br>
<!-- Our council section -->   
<div class="container-fluid">
<div class="Title">  
<p> Our Council </p>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
	<img src="<?php the_field('memberImg1'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole1'); ?></p>
    <p class="memberName"><?php the_field('memberName1'); ?></p>
    </div>        
    <div class="col-md-3">
	<img src="<?php the_field('memberImg2'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole2'); ?></p>
    <p class="memberName"><?php the_field('memberName2'); ?></p>
    </div>
    <div class="col-md-3">
	<img src="<?php the_field('memberImg3'); ?>" alt="Profile 2" class="profile">
    <p class="memberRole"><?php the_field('memberRole3'); ?></p>
    <p class="memberName"><?php the_field('memberName3'); ?></p>   
    </div>
    <div class="col-md-3">
	<img src="<?php the_field('memberImg4'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole4'); ?></p>
    <p class="memberName"><?php the_field('memberName4'); ?></p>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
	<img src="<?php the_field('memberImg5'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole5'); ?></p>
    <p class="memberName"><?php the_field('memberName5'); ?></p>
    </div>
    <div class="col-md-4">
	<img src="<?php the_field('memberImg6'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole6'); ?></p>
    <p class="memberName"><?php the_field('memberName6'); ?></p>
    </div>
    <div class="col-md-4">
	<img src="<?php the_field('memberImg7'); ?>" alt="Profile 1" class="profile">
    <p class="memberRole"><?php the_field('memberRole7'); ?></p>
    <p class="memberName"><?php the_field('memberName7'); ?></p>   
    </div>
    </div>
    </div>
    
    
    
<!-- Former Council section -->      
<div class="container-fluid">
    <div class="row">
    <div class="Title">
    <p> Former Council Members</p>
    </div>     
    <div class="col-md-4">
    <div class="EventTitle">    
    <p> Executive Commitee <?php the_field('year1'); ?></p>
        </div>
        <p class="memberName2"><?php the_field('ex1memberName1'); ?></p>
        <p class="memberName2"><?php the_field('ex1memberName2'); ?></p>
        <p class="memberName2"><?php the_field('ex1memberName3'); ?></p>
        <p class="memberName2"><?php the_field('ex1memberName4'); ?></p>    
    </div>
    <div class="col-md-4">
    <div class="EventTitle">
    <p> Executive Commitee <?php the_field('year2'); ?></p>
        </div>
        <p class="memberName2"><?php the_field('ex2memberName1'); ?></p>
        <p class="memberName2"><?php the_field('ex2memberName2'); ?></p>
        <p class="memberName2"><?php the_field('ex2memberName3'); ?></p>
        <p class="memberName2"><?php the_field('ex2memberName4'); ?></p>    
    </div>
    
    <div class="col-md-4">
    <div class="EventTitle">    
    <p> Executive Commitee <?php the_field('year3'); ?></p>
        </div>
        <p class="memberName2"><?php the_field('ex3memberName1'); ?></p>
        <p class="memberName2"><?php the_field('ex3memberName2'); ?></p>
        <p class="memberName2"><?php the_field('ex3memberName3'); ?></p>
        <p class="memberName2"><?php the_field('ex3memberName4'); ?></p>      
    </div>
    </div>
    </div>
    
    <!-- How to contact us section -->
<div class="blue-container blue-container-content">
<div class="Title">  
<p class="AboutTitle">How to contact us</p>  
</div>
	<p class="AboutParagraph"> More information on how to contact us is located within the <a href="">CONTACT</a> page of our website, or just send us an email to ask a question. <br><br> <a href="" class="btn-lg-event-center" role="button">EMAIL</a></p>
    <br>
</div>
<?php get_footer();
/* Tells WordPress to include footer.php */ ?>