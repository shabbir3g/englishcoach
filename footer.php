<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package englishcoach
 */

?>

	<footer>
         <div class="footer-contact">
            <div class="centrage">
               <div class="space">
			   
			   
				<?php

				$first_text = get_field('first_text','options');
				
				if($first_text):  ?>
                  <ul>
                     <li>
                        <a href="http://www.faster-forward.com/tests/anglais/responses/new" target="_blank" rel="nofollow">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3OS40IDQ3OS40IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NzkuNCA0NzkuNDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01NC45NjcsMjU0LjU3NUw0My4zNSwzMTkuNzQyYy0xLjEzMyw2LjUxNywxLjQxNywxMy4wMzMsNi44LDE2LjcxN2MyLjgzMywyLjI2Nyw2LjUxNywzLjExNyw5LjkxNywzLjExNyAgICBjMi44MzMsMCw1LjY2Ny0wLjU2Nyw3LjkzMy0xLjk4M2w2OC0zNi41NWMxNC43MzMsNjMuNzUsODUuNTY3LDExMi4yLDE3MC4yODMsMTEyLjJjNS45NSwwLDExLjktMC4yODMsMTcuODUtMC44NWw4Ny41NSw0Ny4wMzMgICAgYzIuNTUsMS40MTcsNS4zODMsMS45ODMsNy45MzMsMS45ODNjMy40LDAsNy4wODMtMS4xMzMsOS45MTctMy4xMTdjNS4zODMtMy42ODMsNy45MzMtMTAuMiw2LjgtMTYuNzE3bC0xMS42MTctNjUuMTY3ICAgIGMzNC44NS0yNS43ODMsNTQuNjgzLTYxLjQ4Myw1NC42ODMtOTkuNzMzYzAtNjMuNDY3LTU1LjgxNy0xMTguNzE3LTEzMy43MzMtMTMzLjE2N0MzMzguMyw3My41MjUsMjYzLjc4MywxNy45OTIsMTczLjExNywxNy45OTIgICAgQzc3LjYzMywxNy45OTIsMCw3OS4xOTIsMCwxNTQuNTU4QzAuMjgzLDE5My4wOTIsMjAuMTE3LDIyOS4wNzUsNTQuOTY3LDI1NC41NzV6IE00NDUuNjgzLDI3Ni42NzUgICAgYzAsMjkuNzUtMTcuNTY3LDU4LjA4My00OC40NSw3Ny42MzNjLTUuNjY3LDMuNjgzLTguNzgzLDEwLjQ4My03LjY1LDE3LjI4M2w3LjM2Nyw0MS4zNjdsLTYxLjItMzIuODY3ICAgIGMtMy4xMTctMS43LTYuNTE3LTIuMjY3LTkuOTE3LTEuOTgzYy02LjUxNywwLjU2Ny0xMy4zMTcsMS4xMzMtMTkuNTUsMS4xMzNjLTY5Ljk4MywwLTEyOC4wNjctMzguMjUtMTM3LjctODcuODMzICAgIGMxLjQxNywwLDMuMTE3LDAsNC41MzMsMGM4NS41NjcsMCwxNTYuNjgzLTQ5LjMsMTcwLjU2Ny0xMTMuNjE3QzQwMy40NjcsMTkwLjI1OCw0NDUuNjgzLDIzMC43NzUsNDQ1LjY4MywyNzYuNjc1eiBNMTczLjQsNTIuMjc1ICAgIGM3Ni43ODMsMCwxMzkuMTE3LDQ1LjksMTM5LjExNywxMDIuNTY3UzI1MC4xODMsMjU3LjQwOCwxNzMuNCwyNTcuNDA4Yy02LjIzMywwLTEzLjAzMy0wLjI4My0xOS41NS0xLjEzMyAgICBjLTMuNC0wLjI4My02LjgsMC4yODMtOS45MTcsMS45ODNsLTYxLjIsMzIuODY3bDcuMzY3LTQxLjM2N2MxLjEzMy02LjgtMS43LTEzLjYtNy42NS0xNy4yODMgICAgQzUxLjU2NywyMTIuOTI1LDM0LDE4NC41OTIsMzQsMTU0Ljg0MkMzNC4yODMsOTguNDU4LDk2LjYxNyw1Mi4yNzUsMTczLjQsNTIuMjc1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $first_text['url']; ?>" target="_blank" rel="nofollow">
                       <?php echo $first_text['title']; ?> 
                        </a>
                     </li>
                  </ul>
				<?php endif; ?>
				  
				  
               </div>
               <div class="space Due">
			   
			   
				<?php

				$second_text = get_field('second_text','options');
				
				if($second_text):  ?>
			   
                  <ul>
                     <li>
                        <a href="contact.html" target="_blank" target="_blank" rel="nofollow">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik00Mi41LDIyaC0yNWMtMC41NTIsMC0xLDAuNDQ3LTEsMXMwLjQ0OCwxLDEsMWgyNWMwLjU1MiwwLDEtMC40NDcsMS0xUzQzLjA1MiwyMiw0Mi41LDIyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTE3LjUsMTZoMTBjMC41NTIsMCwxLTAuNDQ3LDEtMXMtMC40NDgtMS0xLTFoLTEwYy0wLjU1MiwwLTEsMC40NDctMSwxUzE2Ljk0OCwxNiwxNy41LDE2eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTQyLjUsMzBoLTI1Yy0wLjU1MiwwLTEsMC40NDctMSwxczAuNDQ4LDEsMSwxaDI1YzAuNTUyLDAsMS0wLjQ0NywxLTFTNDMuMDUyLDMwLDQyLjUsMzB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDIuNSwzOGgtMjVjLTAuNTUyLDAtMSwwLjQ0Ny0xLDFzMC40NDgsMSwxLDFoMjVjMC41NTIsMCwxLTAuNDQ3LDEtMVM0My4wNTIsMzgsNDIuNSwzOHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00Mi41LDQ2aC0yNWMtMC41NTIsMC0xLDAuNDQ3LTEsMXMwLjQ0OCwxLDEsMWgyNWMwLjU1MiwwLDEtMC40NDcsMS0xUzQzLjA1Miw0Niw0Mi41LDQ2eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM4LjkxNCwwSDYuNXY2MGg0N1YxNC41ODZMMzguOTE0LDB6IE0zOS41LDMuNDE0TDUwLjA4NiwxNEgzOS41VjMuNDE0eiBNOC41LDU4VjJoMjl2MTRoMTR2NDJIOC41eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" width="26"/>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $second_text['url']; ?>" target="_blank" rel="nofollow">
                        <?php echo $second_text['title']; ?>
                        </a>
                     </li>
                  </ul>
				  
				<?php endif; ?>
				
               </div>
              
			  <?php 
					$footer_right_copy_right_content = get_field('footer_right_copy_right_content','options');
					if($footer_right_copy_right_content):  
				  
					 echo $footer_right_copy_right_content; 
				  
				 endif; ?>
			  
			  
               <div class="bloc">
                  <div class="adresse">
                  </div>
               </div>
               <div class="grille ftr">
                  <div class="grille-elem">
                     <div class="grille-elem-egalise">
                        <div class="adresse">
						<?php 
							$logo_uploader = get_field('logo_uploader','options');
							if($logo_uploader):  ?>
                           <div class="img">
                              <img src="<?php echo $logo_uploader['url']; ?>" alt="/" />
                           </div>
						<?php endif; ?>
                        <div class="p-contact">
						
						
						<?php 
							$footer_left_text = get_field('footer_left_text','options');
							if($footer_left_text):  
                          
							 echo $footer_left_text; 
						  
						 endif; ?>
						
						   
						

						   
                        </div>
                           <div class="bts bts--centre p-contact"> 
						   <?php 
							$footer_left_button = get_field('footer_left_button','options');
							if($footer_left_button): ?>
                              <a class="bt alt small " href="<?php echo $footer_left_button['url']; ?>" target="_blank"><?php echo $footer_left_button['title']; ?></a>
							  
							<?php endif; ?>
							  
                           </div>
                           <div class="img">   
						   <?php 
							$footer_left_bottom_logo = get_field('footer_left_bottom_logo','options');
							if($footer_left_bottom_logo): ?>
						   
                              <img src="<?php echo $footer_left_bottom_logo['url']; ?>" width="180" style="margin:0 auto">
							<?php endif; ?>
							  
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="grille-elem">
                     <div class="grille-elem-egalise">
                        <div class="bloc">
							<?php 
							$footer_middle_content = get_field('footer_middle_content','options');
							if($footer_middle_content):  
                          
							 echo $footer_middle_content; 
						  
						 endif; ?>
						
                        
                        </div>
                     </div>
                  </div>
                  <div class="grille-elem">
                     <div class="grille-elem-egalise">
                        <div class="bloc">
                           <div class="resal">
						   
							<?php 
								$social_link_title = get_field('social_link_title','options');
								if($social_link_title):  ?> 
							  
								 <h4 style="color:#fff;"><?php echo $social_link_title; ?></h4>
							  
							<?php endif; ?>
						   
						   
							
                             <?php 
								$facebook_url = get_field('facebook_url','options');
								if($facebook_url):  ?> 
								
                              <a href="<?php echo $facebook_url; ?>" alt="/" class="fb" target="_blank">
                              <span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto1174.svg?u=ico_fb.svg&amp;fill=FFFFFF" alt="/" width="20"/></span>
                              </a>
							  <?php endif; ?>
							  
							  <?php 
								$twitter_url = get_field('twitter_url','options');
								if($twitter_url):  ?> 
                              <a href="<?php echo $twitter_url; ?>" alt="/" class="tw" target="_blank">
                              <span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/pictoacfa.svg?u=ico_tw.svg&amp;fill=FFFFFF" alt="/" width="20"/></span>
                              </a>
							 <?php endif; ?>
							  
							  <?php 
								$linkedin_url = get_field('linkedin_url','options');
								if($linkedin_url):  ?> 
                              <a href="<?php echo $linkedin_url; ?>" alt="/" class="linkedin" target="_blank">
                              <span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto8463.svg?u=ico_linkedin.svg&amp;fill=FFFFFF" alt="/" width="20"/></span>
                              </a>
							   <?php endif; ?>
							    <?php 
								$google_plus_url = get_field('google_plus_url','options');
								if($google_plus_url):  ?> 
                              <a href="<?php echo $google_plus_url; ?>" alt="/" class="gplus" target="_blank">
                              <span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/img/interface/picto91ba.svg?u=ico_gplus.svg&amp;fill=FFFFFF" alt="/" width="20"/></span>
                              </a>
							  <?php endif; ?>
                           </div>
                        </div>
                     </div>
                  </div>
				  
				  
				  
               </div>
            </div>
         </div>
         <div class="clear"></div>
        
      </footer>
      
	  <?php wp_footer(); ?>
   </body>
</html>

