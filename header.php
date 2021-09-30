<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<div class="top-header-holder">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-md-4">
						<div class="logo-holder">
							
								<img src="<?php echo  get_template_directory_uri(); ?>/img/logo.svg" alt="The blackbeach logo" width="273">
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="reservation-holder">
							<div class="contact-holder">
								<a class="phone">
									<i class="fa fa-phone"></i>	
									0897916575
								</a>
								<a class="address">
									<i class="fa fa-map"></i>		
									Lot 757, Ocean Drive, Bunbury
								</a>
								<div class="social-media-holder-tablet">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
								<button class="navbar-toggler md-view" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
									<div class="menu-title">
										Menu
									</div>
									<div class="all-bars">
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>
								</button>
							</div>
							
							<a href="#" class="reservation-btn">Make a Reservation</a>
						</div>
					</div>
					<div class="col-">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="menu-title">
								Menu
							</div>
						</button>
						<div class="social-media-holder">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					

				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
