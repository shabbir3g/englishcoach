<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package englishcoach
 */

get_header(); ?>

	

<div class="centrage">
   <div class="fil-ariane">	<a href="<?php echo home_url(); ?>" title="<?php $home_title = get_the_title( get_option('page_on_front') ); echo $home_title ; ?>"><?php  echo $home_title; ?></a> >
     >
     <?php while(have_posts()): the_post(); ?>
	 
	 <?php the_title(); ?>
	 
	 
	 <?php endwhile; ?>
   </div>
   <div class="contenu">
      <div class="ptwo"></div>
      <div class="fiche">
         <div class="bloc bts--flex">
            <a class="bt vsy minimalist picto--retour" style="cursor : pointer" href="cours-particuliers-prepa-toiec--toefl-1.html" title="Prépa TOIEC- TOEFL">Retour</a>
         </div>
		 
		  <?php while(have_posts()): the_post(); ?>
         <div class="grille">
            <div class="grille-elem">
               <div class="grille-elem-egalise">
                  <div class="bloc">
                     <div class="fiche-img">
                        <a class="img vsy gallery" href="<?php echo get_template_directory_uri(); ?>/img/big/default.jpg">
                       <?php the_post_thumbnail(); ?>
                        </a>
                     </div>
                  </div>
                  <p class="mention vsy">cliquez sur les images pour les agrandir</p>
				  
				  
                  <div class="social fiche-social">
                     <a href="http://facebook.com/sharer/sharer.php?u=<?php echo get_page_link(); ?>" target="_blank"><span class="el"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto69ab.svg?u=ico_fb.svg&amp;fill=ffffff" alt="Partagez sur Facebook" title="Partagez sur Facebook"/></span></a>
                     <a href="http://twitter.com/home?status=<?php echo get_page_link(); ?>" target="_blank"><span class="el"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto8e24.svg?u=ico_tw.svg&amp;fill=ffffff" alt="Twittez" title="Twittez"/></span></a>
                     <a href="https://plus.google.com/share?url=<?php echo get_page_link(); ?>" target="_blank"><span class="el"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto6a67.svg?u=ico_gplus.svg&amp;fill=ffffff" alt="Partagez sur Google+" title="Partagez sur Google+"/></span></a>
                  </div>
               </div>
            </div>
            <div class="grille-elem">
               <div class="grille-elem-egalise">
			   
			   
			  
                  <div class="bloc bloc--transparent home">
                     <h1 class="fiche-titre vsy"><?php the_title(); ?></h1>
                     <div class="separateur"></div>
                     <div class="txt_contenu fiche-desc vsy">
                        <?php the_content(); ?>
                     </div>
                     <div class="bloc--ton encartFiche">
                        <h3>Demande de devis rapide</h3>
                        <div class="grille">
                           <div class="grille-elem">
                              <div class="grille-elem-egalise">
                                 <div class="bloc">
                                    <ul class="adresse">
                                       <li> Aix -Marseille : <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+33491225237">04 91 22 52 37</a></li>
                                       <li> Aix -Marseille : <i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+33676219605">06 76 21 96 05</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="grille-elem">
                              <div class="grille-elem-egalise">
                                 <div class="bloc">
                                    <ul class="adresse">
                                       <li>Paris IDF :<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+33179759798">01 79 75 97 98</a></li>
                                       <li> Paris IDF :<i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+33676219605">06 76 21 96 05</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="bloc bts--flex">
                        <span class="bt alt cta vsy picto--cta" style="cursor : pointer" onclick="jalik('contact[!]311[#][;]')">Contactez-nous</span>
                     </div>
                  </div>
				  
				  
				 
				  
				  
               </div>
            </div>
         </div>
		 
		   <?php endwhile; ?>
      </div>
   </div>
</div>
<div class="inclined fromRight compl"></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>



<?php
get_footer();
