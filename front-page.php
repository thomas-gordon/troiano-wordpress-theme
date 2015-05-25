<?php

get_header(); ?>

<?php /*while ( have_posts() ) : the_post(); */?><!--

	<?php /*get_template_part( 'content', 'page' ); */?>

--><?php /*endwhile; // end of the loop. */?>

</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
</div><!-- close .row -->
</div><!-- close .container -->
</div><!-- close .main-content -->

<section class="home__slider home__slider--mobile visible-xs"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/includes/images/home-slides/front-1.jpg')">
	<div class="home-slide">
		<div class="home-slide__text">We are committed to providing timely, accurate solutions tailored to suit your particular situation.</div>
	</div>
</section>

<section class="home__slider js-slider hidden-xs" data-cycle-slides=".home-slide" data-cycle-timeout="6000">
	<!--
	1225px wide.
	-->
	<div class="home-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/includes/images/home-slides/front-1.jpg')">
		<div class="home-slide__text">We are committed to providing timely, accurate solutions tailored to suit your particular situation.</div>
	</div>
	<div class="home-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/includes/images/home-slides/front-2.jpg')">
		<div class="home-slide__text">We work alongside you to solve problems that arise and help you reach your financial goals.</div>
	</div>
	<div class="home-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/includes/images/home-slides/front-3.jpg')">
		<div class="home-slide__text">We are focused, friendly and offer a wide range of expertise and experience in business, taxation and wealth creation.</div>
	</div>
</section>


<section class="home__options">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-2">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0001_accounting-services.png" alt="Accounting Services" class="img-responsive"/>
					<p>Business Setup<br> and Planning</p>
					<p><a class="btn btn-blue" href="/what-we-do/business-setup-and-planning/">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0002_business-advisory.png" alt="Business Advisory" class="img-responsive"/>
					<p>Tax<br> Services</p>
					<p><a class="btn btn-blue" href="/what-we-do/tax-services/">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0003_tax-services.png" alt="Tax Services" class="img-responsive"/>
					<p>Business<br> Advisory</p>
					<p><a class="btn btn-blue" href="/what-we-do/business-advisory/">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0004_business-setup.png" alt="Business Setup" class="img-responsive"/>
					<p>Accounting<br> Services</p>
					<p><a class="btn btn-blue" href="/what-we-do/accounting-services">Find Out More</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2">
				<div class="home-option">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/home-tile-_0005_superannuation.png" alt="Superannuation" class="img-responsive"/>
					<p>Superannuation<br>&nbsp;</p>
					<p><a class="btn btn-blue" href="/what-we-do/superannuation">Find Out More</a></p>
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
