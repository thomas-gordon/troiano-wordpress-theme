<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<a class="site-footer__twitter" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>

			<div class="site-footer__logo">
				<a href="/" title="Troiano &amp; Associates"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/troiano-logo-footer.png" alt="Troiano &amp; Associates"/></a>
			</div>
			<div class="site-navigation">
				<div class="row">
					<div class="col-xs-12">
						<?php wp_nav_menu(
							array(
								'theme_location' 	=> 'primary',
								'depth'             => 1,
								'container'         => 'div',
								'container_class'   => 'site-nav',
								'menu_id'			=> 'footer-menu',
								'menu_class'        => 'list-inline list-unstyled'
							)
						); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>