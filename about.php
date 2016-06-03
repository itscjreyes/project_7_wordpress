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
			<i class="fa fa-quote-left"></i>
			<p class="quoteText"><?php the_field('testimonial') ?></p>
			<h5 class="quoteAuthor"><?php the_field('testimonial_author') ?></h5>
		</div>
	</div>
	
	<div class="content">
		<!-- <div class="wrapper"> -->
			<?php the_content(); ?>
		<!-- </div> -->
	</div>

	<div class="team">
		<div class="teamText">
			<h3>who we are</h3>
		</div>
		<figure class="teamImg teamImg1" style="background-image: url('<?php echo get_field('image1')['url'] ?>')">
			<figcaption>
				<div class="wrapper">
					<h5><?php the_field('name1') ?></h5>
					<p class="teamTitle"><?php the_field('title1') ?></p>
				</div>
			</figcaption>
		</figure>
		<figure class="teamImg teamImg2" style="background-image: url('<?php echo get_field('image2')['url'] ?>')">
			<figcaption>
				<div class="wrapper">
					<h5><?php the_field('name2') ?></h5>
					<p class="teamTitle"><?php the_field('title2') ?></p>
				</div>
				</figcaption>
		</figure>
		<figure class="teamImg teamImg3" style="background-image: url('<?php echo get_field('image3')['url'] ?>')">
			<figcaption>
				<div class="wrapper">
					<h5><?php the_field('name3') ?></h5>
					<p class="teamTitle"><?php the_field('title3') ?></p>
				</div>
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