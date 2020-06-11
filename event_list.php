<?php
    /*
    Template Name: Event Lists
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-header.jpg" alt="HeaderImg" class="hero-image">
  <div>
    <h1 class="hero-text Heading">Events</h1>
      <br>
      <p class="hero-sub-text">Stay Up to Date on News and Event</p>
  </div>
</div>

<div class="container"><h2 class="Title">Current Events</h2>

<div class="container-fluid event-tab">
     <div class="row event-tab"> 
    <div class="col-md-2 col-md-offset-1"><div class="event-divider"><h4 class="Date"><?php the_field('Date1'); ?></h4></div></div>
    <div class="col-md-5"> 
        
        <h4 class="EventTitle"><?php the_field('EventTitle1'); ?></h4><h4 class="Paragraph"><?php the_field('EventDescription1'); ?></h4>
        <a href="<?php the_field('EventLink1'); ?>" class="btn-lg-event" role="button">MORE INFO</a>
        
         </div>
    <div class="col-md-4"><img src="<?php the_field('eventimg1'); ?>" alt="event1" class="event-img" alt="contact"></div>
    </div>
</div>    
</div>
<br>

    
<div class="container past-event-bg"><h2 class="Title">Past Events</h2>

    <div class="container-fluid past-event-bg">
     <div class="row event-tab"> 
    <div class="col-md-2 col-md-offset-1"><div class="event-divider"><h4 class="Date"><?php the_field('PastEventDate1'); ?></h4></div></div>
    <div class="col-md-5"> 
        
        <h4 class="EventTitle"><?php the_field('PastEventTitle1'); ?></h4><h4 class="Paragraph"><?php the_field('PastEventDescription1'); ?></h4>
        <a href="<?php the_field('PastEventLink1'); ?>" class="btn-lg-event" role="button">MORE INFO</a>
         </div>
    <div class="col-md-4"><img src="<?php the_field('pastevent1'); ?>" alt="EventImg" class="event-img" alt="contact"></div>
    </div>
<br>
<div class="container-fluid past-event-bg">
    <div class="row event-tab"> 
    <div class="col-md-2 col-md-offset-1"><div class="event-divider"><h4 class="Date"><?php the_field('PastEventDate2'); ?></h4></div></div>
    <div class="col-md-5"> 
        
        <h4 class="EventTitle"><?php the_field('PastEventTitle2'); ?></h4><h4 class="Paragraph"><?php the_field('PastEventDescription2'); ?></h4>
        <a href="<?php the_field('PastEventLink2'); ?>" class="btn-lg-event" role="button">MORE INFO</a>
         </div>
        <div class="col-md-4"><img src="<?php the_field('eventimg1'); ?>/images/events3.jpg" alt="EventImg""" class="event-img" alt="contact"></div>
    </div>
    </div>
    <div class="container-fluid past-event-bg">
     <div class="row event-tab"> 
    <div class="col-md-2 col-md-offset-1"><div class="event-divider"><h4 class="Date"><?php the_field('PastEventDate3'); ?></h4></div></div>
    <div class="col-md-5"> 
        
        <h4 class="EventTitle"><?php the_field('PastEventTitle3'); ?></h4><h4 class="Paragraph"><?php the_field('PastEventDescription3'); ?></h4>
        <a href="<?php the_field('PastEventLink3'); ?>" class="btn-lg-event" role="button">MORE INFO</a>
         </div>
        <div class="col-md-4"><img src="<?php the_field('eventimg2'); ?>/images/events2.jpg" alt="EventImg" class="event-img" alt="contact"></div></div>
    </div>
    <div class="container-fluid past-event-bg">
     <div class="row event-tab"> 
    <div class="col-md-2 col-md-offset-1"><div class="event-divider"><h4 class="Date"><?php the_field('PastEventDate4'); ?></h4></div></div>
    <div class="col-md-5"> 
        
        <h4 class="EventTitle"><?php the_field('PastEventTitle4'); ?></h4><h4 class="Paragraph"><?php the_field('PastEventDescription4'); ?></h4>
        <a href="<?php the_field('PastEventLink4'); ?>" class="btn-lg-event" role="button">MORE INFO</a>
         </div>
        <div class="col-md-4"><img src="<?php the_field('eventimg3'); ?>" alt="EventImg" class="event-img" alt="contact"></div>
    </div></div>
    </div>
    </div>
   
    
<br>
<h2 class="Title">Photos</h2>
<!-- Gallery -->
    <div class="modal_centering">
<!-- Trigger the Modal -->
            <img class="modal_image" src="<?php the_field('modalimg1'); ?>" alt="EventImg1" style="width:100%;max-width:280px">
            <img class="modal_image" src="<?php the_field('modalimg2'); ?>" alt="EventImg2" style="width:100%;max-width:280px">
            <img class="modal_image" src="<?php the_field('modalimg3'); ?>" alt="EventImg3" style="width:100%;max-width:280px">
            <img class="modal_image" src="<?php the_field('modalimg4'); ?>" alt="EventImg4" style="width:100%;max-width:280px">
    </div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>
<br>
<div class="container past-event-bg">
    <h2 class="Title">Need more information?</h2>
    <p class="Paragraph" style="text-align: center">Sign up to get our newsletter for all the latest events and news!</p>
    <a href="" class="btn-lg-event-center" role="button">CONTACT US</a>
<br>
<br>
</div>

    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a cap
var img = document.getElementsByClassName('modal_image');
for(var i=0; i<img.length; i++){
var modalImg = document.getElementById("img01");
img[i].addEventListener('click',function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
})
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<?php get_footer(); ?>