<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<div class="about">
  <div class="container">
	<?php // Start the loop ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="aboutInfo">
		<div class="wrapper">
			<h4>we are <?php bloginfo('name') ?></h4>
			<p><?php the_field('company_info') ?></p>
		</div>
	</div>
	<div class="testimonial">
		<div class="wrapper">
			<p class="quote"><?php the_field('testimonial') ?></p>
			<p class="quoteAuthor"><?php the_field('testimonial_author') ?></p>
		</div>
	</div>
	<div class="team">
		<div class="teamText">
			<h3>who we are</h3>
		</div>
		<figure class="teamImg teamImg1">
			<?php $image1 = get_field('image1') ?>
			<img src="<?php echo $image1['url'] ?>" alt="">
			<figcaption>
				<h5></h5>
				<p class="teamTitle"></p>
			</figcaption>
		</figure>
		<figure class="teamImg teamImg2">
			<?php $image2 = get_field('image2') ?>
			<img src="<?php echo $image2['url'] ?>" alt="">
			<figcaption>
				<h5></h5>
				<p class="teamTitle"></p>
			</figcaption>
		</figure>
		<figure class="teamImg teamImg3">
			<?php $image3 = get_field('image3') ?>
			<img src="<?php echo $image3['url'] ?>" alt="">
			<figcaption>
				<h5></h5>
				<p class="teamTitle"></p>
			</figcaption>
		</figure>
	</div>
	<div class="workBanner">
		<button><h3><a href="/project7/contact">work with us</a></h3></button>
	</div>

	<?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>