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
			<div class="col-xs-12">
eggs
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
