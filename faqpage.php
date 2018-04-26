<?php 
get_header();
/*
Template Name: FAQ Page
*/
?> 
         <div class="centrage">
            <div class="fil-ariane">
			   <a href="<?php echo home_url(); ?>" title="<?php $home_title = get_the_title( get_option('page_on_front') ); echo $home_title ; ?>"><?php  echo $home_title; ?></a> > 
			   <h1><?php wp_title(); ?></h1>
			</div>
            <div class="contenu">
            </div>
         </div>
         <div class="bloc--laius vsy ">
            <div class="centrage laiu">
               <div class="bloc blocLaiusContent">
			   
			   
				<?php 

				$top_page_content = get_field('top_page_content');
				
				if($top_page_content):
				
				echo $top_page_content;
				
				
				endif;

					

				?>
			   
                  </div>
               </div>
            </div>
         </div>
         <div class="bloc--gray england">
            <div class="centrage">
               <div class="bloc vsy no-margin">
                  <div class="bts--flex pagination">
                     <div class="bts-bloc">
                        <form action="#" method="post"><input type="hidden" name="type_tri" value="list" /></form>
                     </div>
                  </div>
               </div>
               <div class="grille-annonce">
			   
				<?php 
				
				
				$faq = get_field('faq');
				
				if($faq): 
				
				foreach($faq  as $ask):
				
				?>
			   
                  <div class="ann accordeon vsy">
                     <div class="ann-elem ann-cnt">
                        <div class="ann-titre accordeonTitre">
                           <h2><?php echo $ask['questions']; ?></h2>
                        </div>
                        <div class="accordeonContenu">
                           <div>
                              <div class="ann-desc txt_contenu">
                               <?php echo $ask['answers']; ?>
                              </div>
                              <div class="ann-bts bts--flex">
							   <?php $pagelink =  $ask['read_more'];

								if( $pagelink): ?>
							   
                                 <a class="bt cta picto--cta--droite" style="cursor : pointer" href="<?php echo $pagelink['url']; ?>"><?php echo $pagelink['title']; ?></a>
								 
								 <?php endif; ?>
								 
                              </div>
                              <div class="clear"></div>
                           </div>
                        </div>
                     </div>
                  </div>
				  
				 <?php endforeach; endif; ?>
                  
				  
				  
               </div>
               <div class="bloc vsy no-margin">
                  <div class="bts--flex pagination">
                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
     <?php get_footer(); ?>