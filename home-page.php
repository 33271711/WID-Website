<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div id="my_carousel" class="carousel slide">

        <ol class="carousel-indicators">
            <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my_carousel" data-slide-to="1"></li>
            <li data-target="#my_carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner i">
            <div class="item active">
                <?php $img = get_field('carousel1'); ?>
<?php if( $img ): ?>
      <img class="img-responsive rel-img" alt="<?php esc_attr_e( $img['alt'] ); ?>" src="<?php echo esc_url( $img['url'] ); ?>">
<?php endif; ?>
                </div>

            <div class="item">
                <?php $img = get_field('carousel2'); ?>
<?php if( $img ): ?>
      <img class="img-responsive rel-img" alt="<?php esc_attr_e( $img['alt'] ); ?>" src="<?php echo esc_url( $img['url'] ); ?>">
<?php endif; ?>
            </div>

            <div class="item">
                <?php $img = get_field('carousel3'); ?>
<?php if( $img ): ?>
      <img class="img-responsive rel-img" alt="<?php esc_attr_e( $img['alt'] ); ?>" src="<?php echo esc_url( $img['url'] ); ?>">
<?php endif; ?>
            </div>
            </div>
        <span class="img-overlay"><img src="<?php echo get_template_directory_uri(); ?>/images/home_page-carousel_overlay-white.png" alt="bg" class="carousel-overlay"></span>
        <h1 class="txt-overlay-tagline"><?php the_field('title'); ?></h1>
        <span class="txt-overlay-desc"><?php the_field('tagline'); ?></span>
    <a href='http://wuk.yew.mybluehost.me/contact-us/'><button class="btn-lg" role="button">JOIN US</button></a>
    </div>



    <div class="container-fluid past-event-bg-noround">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-header.jpg" class="left-img">
            </div>
            <div class="col-md-6">
                <div class="Heading" style="margin-left: 2em"> Who We are</div>
                <p class="ParagraphBig"><?php the_field('whoweare'); ?></p><br>
                <span href="http://wuk.yew.mybluehost.me/about-us/" class="btn-lg-ticket" style="margin-left: 25px;"role="button">MORE INFO</span><br><br><br><br><br><br>
            </div>
        </div>
    </div>
<section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="container Heading"> What we do</div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/homeeventsround.jpg" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <br>
                    <p class="memberRole">Feeling bored?</p>
                    <p class="memberNameNoMargin">Come join our events and meetings!</p>
                    <a href="http://wuk.yew.mybluehost.me/events/"><button class="btn-lg-event-center" role="button">EVENTS</button></a><br>
                </div>


                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/homejoinround.jpg" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <br>
                    <p class="memberRole">Become a member today</p>
                        <p class="memberNameNoMargin">Apply for membership</p>
                <span href="<?php the_field('join'); ?>" class="btn-lg-event-center" role="button">JOIN</span><br>
                </div>

                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/homesupportround.jpg" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <br>
                    <p class="memberRole">Need help? Have questions?</p>
                        <p class="memberNameNoMargin">Contact us for more information</p>
                <span href="<?php the_field('contact'); ?>" class="btn-lg-event-center" role="button">SUPPORT</span><br>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
 <div class="container-fluid past-event-bg-noround">
        <div class="row">
                <div class="col-md-7">
                <div class="Heading" style="margin-left: 1em; text-align: left;"> Cup of Coffee Program</div>
                <p class="ParagraphBig" style="margin-left: 3em; text-align: left;"><?php the_field('coffee_cup_text'); ?></p><br>
                <span href="<?php the_field('coffee_cup'); ?>" class="btn-lg-event" style="margin-right: 40px"role="button">MORE INFO</span><br><br>
            </div>
            <div class="col-md-5">

                <img src="<?php echo get_template_directory_uri(); ?>/images/homecupofcoffee.jpg" class="right-img">
            </div>
</div>
        </div>
<div class="container-fluid healing-smile-bg-main">
    <div class="home-overlay-title-right"><p>Healing Smiles Program</p>
    <div class="home-overlay-desc-right"><p>Interested in being a volunteer in <br>
        organisations to support women?</p>
    <a href="<?php the_field('healing_smiles'); ?>" class="btn-lg-contact" role="button" style="color:white;">MORE INFO</a>
    </div></div></div>

    <!—DELETE ALL JAVASCRIPT -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 4000
                })
            });

</script>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>