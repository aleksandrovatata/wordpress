<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start_theme
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class = "logos">
		<div class = "left-logo">
			<div class="logo">
				<a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/stories/logo-cad.png"  alt=""></a></div>
			
			<div class = "text">
				<a href="/" style="text-decoration: none;">Кафедра Системного Проектування</a>
				<p>+380 44 280 87 71<br>м. Київ, вул. Панаса Мирного, 19 (корпус №26)</p>
			</div>
		</div>
		<div class = "right-logo">
			<div>
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/stories/iasalogo.jpg" alt="IASA"></div>
			<div><p>ННК "ІПСА" НТУУ "КПІ ім. І. Сікорського"</p></div>
		</div>
		</div>
		<nav class = "nav" id = "nav">
			
		<?php wp_nav_menu("menu=main_menu"); ?>
		
		</nav>
	
		
	</header><!-- #masthead -->

	
