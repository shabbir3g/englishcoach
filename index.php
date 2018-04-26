<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package englishcoach
 */

get_header(); ?>






<div class="centrage">
	<div class="fil-ariane">
	   <a href="<?php echo home_url(); ?>" title="<?php $home_title = get_the_title( get_option('page_on_front') ); echo $home_title ; ?>"><?php  echo $home_title; ?></a> > 
	   <h1><?php wp_title(); ?></h1>
	</div>
	<div class="contenu">
	   <div class="bloc vsy no-margin">
		  <div class="bts--flex pagination">
			 <div class="bts-bloc pagination">
				<span class="nota_bene">Pages : </span>
				<?php the_posts_pagination(array(
					'screen_reader_text'		=> ' ',
				)); ?>
			 </div>
			 <div class="bts-bloc">
				<form action="#" method="post"><input type="hidden" name="type_tri" value="list" /></form>
			 </div>
		  </div>
	   </div>
	   <div class="grille-annonce grille-annonce--l3">
	   
	   
	 



		<?php
		if ( have_posts() ) :

			

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	   
	   
	   
		 
		 
		 
		 
		 
	   </div>
	   <div class="bloc vsy no-margin">
		  <div class="bts--flex pagination">
			 <div class="bts-bloc pagination">
				<span class="nota_bene">Pages : </span>
				
				<?php the_posts_pagination(array(
					'screen_reader_text'		=> ' ',
				)); ?>
				
			 </div>
		  </div>
	   </div>
	   <div class="clear"></div>
	</div>
	<div class="clear"></div>
 </div>
 <div class="clear"></div>
</div>



<?php
get_footer();
