<?php get_header();  ?>

<div class="contact">
	<?php $smallHero = get_field('hero_image') ?>
	<div class="smallHero" style="background-image: url('<?php echo $smallHero['url'] ?>')">
				<div class="heroText">
						<strike>
						<h2><?php the_field('full_title')?></h2>
						</strike>
				</div>
		</div>
	<div class="container">

		<div class="content">
			<?php // Start the loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php 
				 
					$location = get_field('location');
					 
					if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				<?php endif; ?>

				<div class="contactInfo">
					<h4><?php bloginfo('name') ?></h4>
					<p><?php the_field('address') ?></p>
					<p><?php the_field('phone_number') ?></p>
					<p><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></p>
				</div>

				<div class="form">
					<?php the_content(); ?>
				</div>

			<?php endwhile; // end the loop?>
		</div> <!-- /,content -->

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>