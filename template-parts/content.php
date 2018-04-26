<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package englishcoach
 */

?>
<div class="ann vsy">
 <a class="ann-elem ann-img img--survol img--back ratio" href="<?php the_permalink(); ?>">

	<?php the_post_thumbnail(); ?>
 
 </a>
 <div class="ann-elem ann-cnt">
	<div class="ann-titre">
	   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="ann-desc txt_contenu">
	
	<?php echo wp_trim_words(get_the_content(),22,'</div>
	<div class="ann-bts bts--centre">
	   <a class="bt alt cta picto--cta--droite" style="cursor : pointer" href="'.get_the_permalink().'">En savoir plus</a>
	</div>'); ?>
	   
	
	<div class="clear"></div>
 </div>
</div>