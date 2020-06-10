<?php
/*
Template Name: Home page
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
                    <?php if( get_field('carousel1') ): ?>
                    <img src="<?php the_field('carousel1'); ?>" alt="i1" class="img-responsive rel-img">
                    <?php endif; ?>
            </div>

            <div class="item">
                <?php if( get_field('carousel2') ): ?>
                    <img src="<?php the_field('carousel2'); ?>" alt="i1" class="img-responsive rel-img">
                <?php endif; ?>
            </div>

            <div class="item">
                <?php if( get_field('carousel3') ): ?>
                    <img src="<?php the_field('carousel3'); ?>" alt="i1" class="img-responsive rel-img">
                <?php endif; ?>
            </div>
        </div>
        <span class="img-overlay"><img src="images/home_page-carousel_overlay-white.png" alt="bg" class="carousel-overlay"></span>
        <span class="txt-overlay-tagline">Join us Today</span>
        <span class="txt-overlay-desc">Supporting community for women in dentisty</span>
        <span href="<?php the_field('contact'); ?>" class="btn-lg" role="button">JOIN US</span>
    </div>



    <div class="container-fluid past-event-bg-noround">
        <div class="row">
            <div class="col-md-5">

                <img src="images/aboutus-header.png" class="left-img">
            </div>
            <div class="col-md-6">
                <div class="Heading" style="margin-left: 2em"> Who We are</div>
                <p class="ParagraphBig"><?php the_field('whoweare'); ?></p><br>
                <span href="<?php the_field('about'); ?>" class="btn-lg-ticket" style="margin-left: 25px;"role="button">MORE INFO</span><br><br><br><br><br><br>
            </div>
        </div>
    </div>





<section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="container Heading"> What we do</div>
                <div class="col-md-4">
                    <?php if( get_field('image1') ): ?>
                    <img src="<?php the_field('image1'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <?php endif; ?>
                    <br>
                    <p class="memberRole">Feeling bored?</p>
                    <p class="memberNameNoMargin">Come join our events and meetings!</p>
                    <span href="<?php the_field('events'); ?>" class="btn-lg-event-center" role="button">EVENTS</span><br>
                </div>


                <div class="col-md-4">
                    <?php if( get_field('image2') ): ?>
                    <img src="<?php the_field('image2'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <?php endif; ?>
                    <br>
                    <p class="memberRole">Become a member today</p>
                        <p class="memberNameNoMargin">Apply for membership</p>
                <span href="<?php the_field('join'); ?>" class="btn-lg-event-center" role="button">JOIN</span><br>
                </div>

                <div class="col-md-4">
                    <?php if( get_field('image3') ): ?>
                    <img src="<?php the_field('image3'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="304">
                    <?php endif; ?><br>
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

                <img src="images/aboutus-header.png" class="right-img">
            </div>
</div>
        </div>
<div class="container-fluid healing-smile-bg-main">
    <div class="home-overlay-title-right"><p>Healing Smiles Program</p>
    <div class="home-overlay-desc-right"><p>Interested in being a volunteer in <br>
        organisations to support women?</p>
    <a href="<?php the_field('healing_smiles'); ?>" class="btn-lg-contact" role="button">MORE INFO</a>
    </div></div></div>

    <footer class="container-fluid">
        <div class="row">
            <div class="footer-content">
                <p>CONTACT US AT<br>
                    <a href="admin@womenindentistry.net">admin@womenindentistry.net</a></p>
                <div class="col-md-6 text-center">
                    <img src="images/widlogo.png" alt="widlogo" width="250px">
                </div>
                <div class="col-md-6 text-center hover">
                    <a href="admin@womenindentistry.net"><img src="images/inlogo.png" alt="inlogo"></a>
                    <a href="admin@womenindentistry.net"><img src="images/fblogo.png" alt="fblogo"></a>
                </div>
            </div>
        </div>
        <hr width=100% align=center>
        <div class="footer-content">
            <p style="color:darkgrey;">© 2020 Women In Dentistry Society. All rights reserved.
                <a href="sitemapURL.com">Sitemap</a></p>
        </div>
    </footer>

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