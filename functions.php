<?php
/**
 * englishcoach functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package englishcoach
 */

if ( ! function_exists( 'englishcoach_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function englishcoach_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on englishcoach, use a find and replace
		 * to change 'englishcoach' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'englishcoach', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-menu' => esc_html__( 'Main Menu', 'englishcoach' ),
		) );
		
		function default_menus(){ ?>
			
			<ul class="centrage">
				<li><a href="<?php echo home_url(); ?>">Hide</a></li>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
			</ul>
		<?php }

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'englishcoach_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'englishcoach_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function englishcoach_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'englishcoach_content_width', 640 );
}
add_action( 'after_setup_theme', 'englishcoach_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function englishcoach_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'englishcoach' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'englishcoach' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'englishcoach_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function englishcoach_scripts() {
	
	
	
	
	wp_enqueue_style( 'englishcoach-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'englishcoach-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'englishcoach-datepicker', get_template_directory_uri() . '/css/datepicker.css' );
	wp_enqueue_style( 'englishcoach-cookiechoices', get_template_directory_uri() . '/css/cookiechoices.css' );
	wp_enqueue_style( 'englishcoach-dpecss', get_template_directory_uri() . '/css/dpe.css' );
	wp_enqueue_style( 'englishcoach-stylecss', get_template_directory_uri() . '/css/style.css' );
	
	wp_enqueue_style( 'englishcoach-style', get_stylesheet_uri() );
	
    
	
	
	
	wp_enqueue_script( 'englishcoach-modernizr', get_template_directory_uri() . '/js/modernizr.js','', '', false );
	wp_enqueue_script( 'englishcoach-front_jquery', get_template_directory_uri() . '/js/front_jquery.js','', '', false );
	wp_enqueue_script( 'englishcoach-dpessdpe', get_template_directory_uri() . '/js/dpe.js','', '', false );
	
	
	wp_enqueue_script( 'englishcoach-dpess', get_template_directory_uri() . '/js/jgo.min.js','', '', true );
	wp_enqueue_script( 'englishcoach-touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js','', '', true );
	wp_enqueue_script( 'englishcoach-fonctions_site', get_template_directory_uri() . '/js/fonctions_site.js','', '', true );
	wp_enqueue_script( 'englishcoach-fancyboxss', get_template_directory_uri() . '/js/jquery.fancybox.js','', '', true );
	wp_enqueue_script( 'englishcoach-datepickeraaa', get_template_directory_uri() . '/js/datepicker.js','', '', true );
	wp_enqueue_script( 'englishcoach-cookiechoicesddd', get_template_directory_uri() . '/js/cookiechoices.js','', '', true );
	wp_enqueue_script( 'englishcoach-custom', get_template_directory_uri() . '/js/custom.js','', '', true );

	

	wp_enqueue_script( 'englishcoach-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'englishcoach_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Theme options file required
 */
	require get_template_directory() . '/inc/options.php';

function wpse_hide_cat_descr() { ?>

    <style type="text/css">
       .term-description-wrap {
           display: none;
       }
    </style>

<?php } 

add_action( 'admin_head-term.php', 'wpse_hide_cat_descr' );

