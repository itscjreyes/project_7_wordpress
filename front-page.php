<?php get_header();  ?>

<div class="main">
  <div class="heroImg" style="background-image: url('<?php echo get_field('hero_image')['url'] ?>')">
    <div class="heroText">
      <strike>
        <h2><?php the_field('full_title')?></h2>
      </strike>
    </div>
  </div>
  <div class="container">

    <div class="content">

      <figure class="section section1" style="background-image: url('<?php echo get_field('largeimg1')['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption1') ?></h5>
          </div>
        </figcaption>
      </figure>

      <figure class="section section2" style="background-image: url('<?php echo get_field('medimg1')['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption3') ?></h5>
          </div>
        </figcaption>
      </figure>

      <figure class="section section3" style="background-image: url('<?php echo get_field('medimg2')['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption4') ?></h5>
          </div>
        </figcaption>
      </figure>

      <div class="section4">
        <div class="wrapper">
          <h2><?php the_field('tagline') ?></h2>
          <p><?php the_field('blurb') ?></p>
        </div>
      </div>

      <div class="section section5">

        <figure class="subsection subsection1" style="background-image: url('<?php echo get_field('smallimg')['url'] ?>')">
          <figcaption>
            <div class="wrapper">
              <h5><?php the_field('caption5') ?></h5>
            </div>
          </figcaption>
        </figure>

        <div class="subsection subsection2"><button><h4><a href="/project7/contact">get in touch</a></h4></button></div>

      </div>

      <figure class="section section6" style="background-image: url('<?php echo get_field('largeimg2')['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption2') ?></h5>
          </div>
        </figcaption>
      </figure>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <!-- <h2><?php //the_title(); ?></h2> -->
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>