<?php

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
</div><!-- close .row -->
</div><!-- close .container -->
</div><!-- close .main-content -->

<section class="home__options">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0001_accounting-services.png" alt="Accounting Services" class="img-responsive"/>
					<p>Business Setup<br> and Planning</p>
					<p><a class="btn btn-blue" href="#">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0002_business-advisory.png" alt="Business Advisory" class="img-responsive"/>
					<p>Tax<br> Services</p>
					<p><a class="btn btn-blue" href="#">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0003_tax-services.png" alt="Tax Services" class="img-responsive"/>
					<p>Business<br> Advisory</p>
					<p><a class="btn btn-blue" href="#">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0004_business-setup.png" alt="Business Setup" class="img-responsive"/>
					<p>Accounting<br> Services</p>
					<p><a class="btn btn-blue" href="#">Find Out More</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home__locate">

	<div class="home__map" id="js-map"></div>

</section>

<div>
<div>
<div>
<div>
<?php get_footer(); ?>
