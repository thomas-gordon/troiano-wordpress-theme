<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">

	<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">

			<div class="col-xs-12">
				<!--<a class="site__twitter" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>-->

				<div class="site-header__logo">
					<a href="/" title="Troiano &amp; Associates"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/troiano-logo-header.png" alt="Troiano &amp; Associates"/></a>
				</div>
				<div class="site-navigation">
					<div class="row">
						<div class="col-xs-12">
							<?php wp_nav_menu(
								array(
									'theme_location' 	=> 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'site-nav',
									'menu_id'			=> 'main-menu',
									'menu_class'        => 'list-inline list-unstyled'
								)
							); ?>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php

		//reference:https://wordimpress.com/list-only-sibling-pages-using-wp_list_pages/

		//GET CHILD PAGES IF THERE ARE ANY
		$children = get_pages('child_of='.$post->ID);

		//GET PARENT PAGE IF THERE IS ONE
		$parent = $post->post_parent;

		//DO WE HAVE SIBLINGS?
		$siblings =  get_pages('child_of='.$parent);

		if( count($children) != 0) {
			$args = array(
				'depth' => 1,
				'title_li' => '',
				'child_of' => $post->ID,
				'sort_order' => 'ASC'
			);

		} elseif($parent != 0) {
			$args = array(
				'depth' => 1,
				'title_li' => '',
				'child_of' => $parent,
				'sort_order' => 'ASC'

			);
		}
		//Show pages if this page has more than one sibling
		// and if it has children
		if(!is_null($args))
		{?>
			<div class="section-navigation hidden-xs">
				<ul class="pages-list list-unstyled clearfix">
					<?php wp_list_pages($args);  ?>
				</ul>
			</div>
		<?php } ?>

	</div><!-- .container -->
</header><!-- #masthead -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12">

