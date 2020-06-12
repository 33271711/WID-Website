<?php
    /*
    Template Name: Normal page
    */
?>


<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid" style="max-height: 400px;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-header.jpg" class="hero-image">
<div>
    <br><br>
<div class="container-fluid">
    <div class="container" style="display: block; margin: auto;">
        <div class="row">
            <section>		
    <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="Title" style="font-size: 4em;" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3> <br> <br>

		<div class="postcontent Paragraph" style="font-size: 1.5em;">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
</section>
           
     </div>
    </div>
  </div>
    <br><br>
    <br><br>
<?php get_footer(); ?>