<?php 
get_header();
/*
Template Name: Home Page
*/
?> 
 
 <div class="centrage">
            <div class="fil-ariane">
               <h1><?php echo bloginfo('title'); ?></h1>
            </div>
            <div class="contenu">
            </div>
         </div>
         <div class="diaporama--accueil vsy sl-transition">
		 
			<?php 


			$page_slides = get_field('page_slides');
			
			if($page_slides): 
			
			foreach($page_slides as $slide): 

			?>
		 
		 
            <img src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['title'] ?>" />
			
			
			<?php endforeach; endif; ?>
			
			
			
            <div class="accueil-selector">
               <div class="centrage">
                  <div class="centrage--maxi600 vsy">
                     <h2>
                        <span></span>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="flash home">
            <div class="centrage ">
               <div class="contenu">
                  <div class="grille ancre-intro">
                     <div class="grille-elem grille-grow-3">
					 
					 <?php 
					$home_left_content = get_field('home_left_content');
					if($home_left_content):  
				  
					 echo $home_left_content; 
				  
				 endif; ?>
			  
					 
					 
					 
				
                     </div>
                     <div class="grille-elem grille-grow-2 vsy">
                        <div class="grille-elem-egalise">
                           <div class="grille-elem">
                              <div class="grille-elem-egalise">
                                 <div class="bloc--ton no-padding flash_info vsy">
                                    <span style="cursor:pointer;" onclick="jalik('flash[!]info[#][;]')" class="img img--survol">
									
									<?php 
									
									$right_image_h = get_field('right_image_h');
									
									if($right_image_h):  ?>
									
                                    <img src="<?php echo $right_image_h['url']; ?>" alt="<?php echo $right_image_h['title']; ?>" />
									
									<?php endif; ?>
									
                                    </span>
									
									<?php 
									
									$right_link = get_field('right_link');
									
									if($right_link):  ?>
                                    <h3><a href="<?php echo $right_link['url']; ?>" title="<?php echo $right_link['title']; ?>"><?php echo $right_link['title']; ?></a></h3>
									<?php endif; ?>
									
									
                                    <div class="txt_contenu">
									
									
									<?php 
										$right_text = get_field('right_text');
										if($right_text):  
									  
										 echo $right_text; 
									  
									 endif; ?>
			  
									
                                     
                                    </div>
									<?php 
									
									$right_button = get_field('right_button');
									
									if($right_button):  ?>
                                    <div class="bts--inline">
                                       <a class="bt  alt picto--cta--droite" href="<?php echo $right_button['url']; ?>"><?php echo $right_button['title']; ?></a>
                                    </div>
									<?php endif; ?>
                                 </div>
                              </div>
                           </div>
                           <div class="bloc">
                              <div class="grille">
                                 <div class="grille-elem">
                                    <div class="grille-elem-egalise">
                                       <div class="bloc--blanc adresse" style="text-align:center;">
									   <?php 
									
										$right_bottom_image = get_field('right_bottom_image');
										
										if($right_bottom_image):  ?>
									   
                                          <img src="<?php echo $right_bottom_image['url']; ?>" width="180" style="margin:0 auto">
										<?php endif; ?>
										
										<?php 
									
										$right_bottom_text = get_field('right_bottom_text');
										
										if($right_bottom_text):  ?>
									  <div class="txt_contenu promo">
										 <?php echo $right_bottom_text; ?>
									  </div>
									  <?php endif; ?>
									  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div class="separateur"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="bloc bloc--gray england">
	  
	  
		<?php 


		$homepost = new WP_Query(array(
			'post_type'		=> 'post',
			'posts_per_page'=> 4,
		));


		if($homepost->have_posts()):
		?>
         <div class="centrage">
			<?php 
			
			$blog_title_home = get_field('blog_title_home');
			
			if($blog_title_home): 
			?>
            <h2><?php echo $blog_title_home; ?></h2>
			<?php endif; ?>
			
            <div class="grille-annonce--l4--centre">
               
			   
			   
			   <?php while($homepost->have_posts()): $homepost->the_post(); ?>
			   
               <div class="ann vsy">
                  <a class="ann-elem ann-img img--survol img--back ratio" href=<?php  the_permalink(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/medium/default.jpg" alt="Centre de formation Paris 9ème English Coach - Centre de formation Anglais DIF CPF TOEIC TOEFL Paris DIF CPF Montparnasse - rue de Rennes - 75006 Paris Ecole de langues Institut anglais Paris DIF CPF" />
                  </span>
                  </a>
                  <div class="ann-elem ann-cnt">
                     <div class="ann-titre">
                        <h2><a href="<?php  the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                     </div>
                     <div class="ann-desc txt_contenu">
					 
					 <?php echo wp_trim_words(get_the_content(),10,'</div>
                     <div class="ann-bts bts--centre">
                        <a class="bt cta small picto--cta--droite" style="cursor : pointer" href="'.get_the_permalink().'">En savoir plus</a>
                     </div>'); ?>
                       
                     
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
			   
			   
			<?php endwhile; ?>
			   
			   
            </div>
         </div>
		 
		 <?php endif; ?>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>
      <div class="clear"></div>
	  
	  
	  <?php get_footer(); ?>