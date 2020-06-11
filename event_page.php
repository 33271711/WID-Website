<?php
    /*
    Template Name: Event Page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/eventsheader.jpg" class="hero-image">
  <div>
    <h1 class="event-header-text Heading"><?php the_field('eventheader'); ?></h1>
      <br>
      <p class="event-sub-text"><?php the_field('eventheaderdesc'); ?></p>
      <a href="<?php the_field('ticketlink'); ?>" class="btn-lg-event-header" role="button">BUY TICKETS</a>
  </div>
</div>

<div class="container-fluid past-event-bg-noround">
    <div class="row">
        <br>
        <br>
        <div class="col-md-3 col-md-offset-1"><img scr="<?php echo get_template_directory_uri(); ?>/images/events3.jpg"></div>
        <div class="col-md-7">
            <p class="EventPageTitle" style="text-align: left;">Information</p>
            <p class="EventPageParagraph" style="text-align: left;"><?php the_field('eventdesc1'); ?></p>
            <p class="EventPageDetails">When: <?php the_field('eventtime'); ?>
            <br> Where: <?php the_field('eventlocation'); ?>
            <br> <?php the_field('eventline2'); ?>
            <br> <?php the_field('eventline3'); ?>
            <br> <?php the_field('eventline4'); ?></p>
            <br>
            <br>
        </div>
    </div>
    </div>
<br>
<br>
    <div class="container">
        <div class="about-divider">
            <p class="EventTitle2">Registration: <?php the_field('ticketprice'); ?></p>
            <p class="Paragraph"><?php the_field('discount'); ?></p>
            <br>
            <p class="ParagraphBig"><?php the_field('ticketdescription'); ?>
            <br><br>
                <a href="<?php the_field('ticketlink'); ?>" class="btn-lg-ticket" role="button">BUY TICKETS</a></p>
            <br>
            <br>
        </div>
        <br>
        <br>
    </div>
    <div class="container">
    <h2 class="Title">Speakers</h2>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
	<img src="<?php the_field('speakerimg1'); ?>" alt="Profile1" class="profile">
    <p class="speakerTopic"><?php the_field('speakertopic1'); ?></p>
    <p class="speakerName"><?php the_field('speakername1'); ?></p>
    <p class="speakerCompany"><?php the_field('speakerorg1'); ?></p>
    </div>        
    <div class="col-md-3">
    <img src="<?php the_field('speakerimg2'); ?>" alt="Profile2" class="profile">
    <p class="speakerTopic"><?php the_field('speakertopic2'); ?></p>
    <p class="speakerName"><?php the_field('speakername2'); ?></p>
    <p class="speakerCompany"><?php the_field('speakerorg2'); ?></p>
    </div>
    <div class="col-md-3">
    <img src="<?php the_field('speakerimg3'); ?>" alt="Profile3" class="profile">
    <p class="speakerTopic"><?php the_field('speakertopic3'); ?></p>
    <p class="speakerName"><?php the_field('speakername3'); ?></p>
    <p class="speakerCompany"><?php the_field('speakerorg3'); ?></p> 
    </div>
    <div class="col-md-3">
    <img src="<?php the_field('speakerimg4'); ?>" alt="Profile4" class="profile"> 
    <p class="speakerTopic"><?php the_field('speakertopic4'); ?></p>
    <p class="speakerName"><?php the_field('speakername4'); ?></p>
    <p class="speakerCompany"><?php the_field('speakerorg4'); ?></p>
    </div>
    </div>
    </div>
    <br>
    <br>
<div class="container past-event-bg">
    <h2 class="Title">Need more information?</h2>
    <p class="Paragraph" style="text-align: center">Sign up to get our newsletter for all the latest events and news!</p>
    <a href="" class="btn-lg-event-center" role="button">CONTACT US</a>
<br>
<br>
</div>
<?php get_footer(); ?>