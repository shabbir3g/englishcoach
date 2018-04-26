<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package englishcoach
 */

?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php $favicon_uploader = get_field('favicon_uploader','options'); 

	if($favicon_uploader): ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_uploader['url']; ?>" />
	<?php endif; ?>
	
	
	<?php wp_head(); ?>
	
	<style type="text/css"> 
	
	.footer-contact {
		background: <?php echo get_field('primary_color','options'); ?>;
	}
		.centrage .current-menu-item {
		background: <?php echo get_field('secondary_background_color','options'); ?>;
	}
	nav.nav > ul > li:hover > a, nav.nav > ul > li:hover > span > a, nav.nav > ul > li:hover > span > span, nav.nav > ul > li.active > a, nav.nav > ul > li.active > span > a, nav.nav > ul > li.active > span > span {
		color: #fff;
		background: <?php echo get_field('secondary_background_color','options'); ?>;
	}
	.multi .phone {
		color: <?php echo get_field('primary_color','options'); ?>;
	}
	.space ul {
		background: <?php echo get_field('secondary_background_color','options'); ?>;
	}
	.encart {
		color: <?php echo get_field('primary_color','options'); ?>;
		border-bottom: 3px solid <?php echo get_field('primary_color','options'); ?>;
	}
	nav.nav > ul::before {
		background: <?php echo get_field('primary_color','options'); ?> none repeat scroll 0 0;
		
	}
	nav.nav {
		
		background: <?php echo get_field('primary_color','options'); ?>;
	}
	
	
	</style>
	
  </head>
   <body <?php body_class(); ?> >
      <div class="plan--premier" id="total_site">
         <header class="header">
            <a class="header-bandeau-www" id="www" href="<?php echo home_url(); ?>" title="" id="www">
            <?php echo home_url(); ?></a>
			
			<?php $header_right_image = get_field('header_right_image','options'); ?>
            <div class="header-bandeau" id="bandeau" style='background-image:url("<?php echo  $header_right_image['url']; ?>") ; background-size:  351px auto;  background-repeat:  no-repeat;  background-position:  right top;' >
               <div class="centrage">
                  <div class="header-bandeau-logo " id="logo">
					<?php 
					$logo_uploader = get_field('logo_uploader','options');
					if($logo_uploader):  ?>
                     <a href="<?php echo home_url(); ?>" title="">
                     <img class="" src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" width="160" />
                     </a>
					 <?php endif; ?>
					 
					 
                  </div>
                  <div class="encart">
                    <?php 
					$header_top_left_text = get_field('header_top_left_text','options');
					if($header_top_left_text):  ?>
						<?php echo $header_top_left_text; ?>
					 <?php endif; ?>
                  </div>
                  <nav class="nav">
                     <div id="btMenu"><span></span><span></span><span></span></div>
					 
					 <?php 
						
						wp_nav_menu(array(
							'theme_location'		=> 'menu-menu',
							'menu_class'			=> 'centrage',
							'fallback_cb'			=> 'default_menus',
							'container'				=> '',
						));

					 ?>
                  </nav>
                  <div class="header-bandeau-multi multi">
				  
				  <?php 
					$header_top_right_text = get_field('header_top_right_text','options');
					if($header_top_right_text):  ?>
						<?php echo $header_top_right_text; ?>
					 <?php endif; ?>
				  
                    
                  </div>
               </div>
            </div>
         </header>


