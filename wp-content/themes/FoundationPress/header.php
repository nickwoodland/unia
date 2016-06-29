<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php $phone = of_get_option('contact_telephone'); ?>
<?php $email = of_get_option('contact_email'); ?>
<?php $fb = of_get_option('facebook_page_url'); ?>
<?php $twitter = of_get_option('twitter_profile_url'); ?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

        <div class="row collapse landmark" data-equalizer data-equalize-on="xlarge">
            <div class="columns xlarge-8 xlarge-offset-2 large-12 text-center" data-equalizer-watch>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    				<h1 class="site-title--primary">Unia Opticians</h1>
                </a>
            </div>
            <?php if($twitter || $fb): ?>
                <div class="columns xlarge-2 large-12 header__social" data-equalizer-watch>
                    <?php if($twitter): ?>
                        <a href="<?php echo $twitter; ?>" class="header__social-twitter"><i class="fa fa-3x fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if($fb): ?>
                        <a href="<?php echo $fb; ?>" class="header__social-fb"><i class="fa fa-3x fa-facebook"></i></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="row collapse">


            <div class="columns main-navigation__wrapper xlarge-8 large-12 xlarge-push-2 text-center">
    		    <nav id="site-navigation" class="main-navigation" role="navigation">
    			    <?php foundationpress_primary_nav(); ?>
    		    </nav>
            </div>

            <?php if($email): ?>
                <div class="columns xlarge-2 xlarge-pull-8 small-6 text-left header__email">
                    <a href="mailto:<?php echo $email; ?>">EMAIL US</a>
                </div>
            <?php endif; ?>

            <?php if($phone): ?>
                <div class="columns xlarge-2 small-6 text-right header__phone">
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </div>
            <?php endif; ?>
        </div>

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
