<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <div class="section section1"></div>
      <div class="section section2"></div>
      <div class="section section3"></div>
      <div class="section section4">
        <div class="subsection subsection1"></div>
        <div class="subsection subsection2"></div>
      </div>
      <div class="section section5"></div>
      <div class="section section6"></div>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <!-- <h2><?php //the_title(); ?></h2> -->
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>