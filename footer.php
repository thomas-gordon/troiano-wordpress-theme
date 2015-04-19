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

<div class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!--<a class="site__twitter site__twitter--footer" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>-->

				<div class="site-footer__logo">
					<a href="/" title="Troiano &amp; Associates"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/troiano-logo-footer.png" alt="Troiano &amp; Associates"/></a>
				</div>
				<div class="site-navigation site-navigation--footer">
					<div class="row">
						<div class="col-xs-12">
							<?php wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'depth' => 1,
									'container' => 'div',
									'container_class' => 'site-nav',
									'menu_id' => 'footer-menu',
									'menu_class' => 'list-inline list-unstyled'
								)
							); ?>
						</div>
					</div>
					<div class="row text-right">
						<div class="col-xs-12 email-subscription">
							<strong>SUBSCRIBE TO OUR NEWSLETTER</strong>

								<form target="_blank" action="http://troianocpa.us10.list-manage1.com/subscribe" method="GET" class="email-subscription__form">
									<input type="hidden" name="u" value="916a17ad7a0598ee8beddf842">
									<input type="hidden" name="id" value="f7cde58151">
									<input type="email" name="MERGE0" placeholder="Enter your email address" required="required" class="email-subscription__field">
									<button type="submit" class="email-subscription__button pull-right"><i class="fa fa-caret-right"></i></button>
								</form>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


<?php wp_footer(); ?>

</body></html>