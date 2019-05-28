<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Coffee_Can
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-coffee-can' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="site-branding">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
	            the_custom_logo();
            }
            ?>

            <div class ="title-desc">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			$the_coffee_can_description = get_bloginfo( 'description', 'display' );
			if ( $the_coffee_can_description || is_customize_preview() ) :
				?>
                <p class="site-description"><?php echo $the_coffee_can_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
            </div>
		</div><!-- .site-branding -->
		<?php if ( get_header_image() ) : ?>
            <div id="site-header" class="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            </div>
		<?php endif; ?>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'the-coffee-can' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->



	<div id="content" class="site-content">
