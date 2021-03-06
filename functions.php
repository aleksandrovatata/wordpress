<?php
/**
 * start theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package start_theme
 */

if ( ! function_exists( 'start_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function start_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on start theme, use a find and replace
		 * to change 'start-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'start-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'start-theme' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'start_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'start_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function start_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'start_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'start_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function start_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'start-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'start-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'start_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function start_theme_scripts() {
	wp_enqueue_style( 'start-theme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'start-theme-style-my', get_template_directory_uri().'/css/theme.css' );
	
	wp_enqueue_style( 'start-theme-homepage', get_template_directory_uri().'/css/homepage.css' );
	wp_enqueue_style( 'start-theme-contacts', get_template_directory_uri().'/css/contacts.css' );
	wp_enqueue_style( 'start-theme-laboratorija-melexis', get_template_directory_uri().'/css/laboratorija-melexis.css' );
	wp_enqueue_style( 'start-theme-international-scientific-cooperation', get_template_directory_uri().'/css/international-scientific-cooperation.css' );
	wp_enqueue_style( 'start-theme-osvitni-programy', get_template_directory_uri().'/css/osvitni-programy.css' );
	wp_enqueue_style( 'start-theme-osvitni-starosti', get_template_directory_uri().'/css/starosti.css' );
	wp_enqueue_style( 'start-theme-scientific-school', get_template_directory_uri().'/css/scientific-school.css' );
	wp_enqueue_style( 'start-theme-academic-council', get_template_directory_uri().'/css/academic-council.css' );
	wp_enqueue_style( 'start-theme-scientific-directions', get_template_directory_uri().'/css/scientific-directions.css' );
	wp_enqueue_style( 'start-theme-polozhennja-pro-imenni-stipendii', get_template_directory_uri().'/css/polozhennja-pro-imenni-stipendii.css' );
	wp_enqueue_style( 'start-theme-rozklad', get_template_directory_uri().'/css/rozklad.css');
	wp_enqueue_style( 'start-theme-navchalnij-plan', get_template_directory_uri().'/css/navchalnij-plan.css');
	wp_enqueue_style( 'start-theme-navchalna-dokumentacja', get_template_directory_uri().'/css/navchalna-dokumentacja.css');
	wp_enqueue_style( 'start-theme-diplomas', get_template_directory_uri().'/css/diplomas.css');
	wp_enqueue_style( 'start-theme-projects', get_template_directory_uri().'/css/projects.css');
	wp_enqueue_style( 'start-theme-achievements', get_template_directory_uri().'/css/achievements.css');
	wp_enqueue_style( 'start-theme-list-of-diplomas', get_template_directory_uri().'/css/list-of-diplomas.css');
	wp_enqueue_style( 'start-theme-official-information', get_template_directory_uri().'/css/official-information.css');
	wp_enqueue_style( 'start-theme-istorja-kafedri', get_template_directory_uri().'/css/istorja-kafedri.css');
	wp_enqueue_style( 'start-theme-personal', get_template_directory_uri().'/css/personal.css');
	wp_enqueue_style( 'start-theme-pracevlashtuvannja', get_template_directory_uri().'/css/pracevlashtuvannja.css');
	wp_enqueue_style( 'start-theme-student-publications', get_template_directory_uri().'/css/student-publications.css');
	
	wp_enqueue_style( 'start-theme-footer', get_template_directory_uri().'/css/footer.css' );
	wp_enqueue_style( 'start-theme-header', get_template_directory_uri().'/css/header.css' );
	
	
	wp_enqueue_style( 'start-theme-style-media', get_template_directory_uri().'/css/media.css' );
	wp_enqueue_script( 'start-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'start-theme-homepage', get_template_directory_uri() . '/js/homepage.js');
	wp_enqueue_script( 'start-theme-diploma', get_template_directory_uri() . '/js/list-of-diplomas.js');
	wp_enqueue_script( 'start-theme-expandable-block', get_template_directory_uri() . '/js/expandable-block.js');
	wp_enqueue_script( 'start-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_theme_scripts' );

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

/*if( !defined(THEME_IMG_PATH)){
	define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
   }*/

   if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'main_menu' => 'Главное меню', // 'имя' => 'описание'
		  
		)
	);
}