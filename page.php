<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package englishcoach
 */

get_header(); ?>

	


<div class="centrage">
	
	<div class="contenu">
	   <div class="page-container">
	   
	   
	 
	

		<?php
		if ( have_posts() ) :

			

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<div class="ann vsy">
				
			<?php  if(the_post_thumbnail()): ?>

	<?php the_post_thumbnail(); ?>
 
 <?php endif; ?>
 <div class="ann-elem ann-cnt">
	<div class="ann-titre">
	   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<?php the_content(); ?>
	   
	
	<div class="clear"></div>
 </div>
</div>
<?php 
			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	   
	   
	   
		 
		 
		 
		 
		 
	   </div>
	   <div class="clear"></div>
	</div>
	<div class="clear"></div>
 </div>
 <div class="clear"></div>
</div>
<?php
get_footer();
