<?php get_header();  ?>

<div class="main">
  <?php $heroImg = get_field('hero_image') ?>
  <div class="heroImg" style="background-image: url('<?php echo $heroImg['url'] ?>')">
    <div class="heroText">
      <strike>
        <h2><?php the_field('full_title')?></h2>
      </strike>
    </div>
  </div>
  <div class="container">

    <div class="content">

      <div class="section4">
        <div class="wrapper">
          <h2><?php the_field('tagline') ?></h2>
          <p><?php the_field('blurb') ?></p>
        </div>
      </div>

      <div class="section section5">

        <?php $smallImg = get_field('smallimg') ?>
        <figure class="subsection subsection1" style="background-image: url('<?php echo $smallImg['url'] ?>')">
          <figcaption>
            <div class="wrapper">
              <h5><?php the_field('caption5') ?></h5>
            </div>
          </figcaption>
        </figure>

        <div class="subsection subsection2"><button><h4><a href="/project7/contact">get in touch</a></h4></button></div>

      </div>

      <?php $largeImg1 = get_field('largeimg1') ?>
      <figure class="section section1" style="background-image: url('<?php echo $largeImg1['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption1') ?></h5>
          </div>
        </figcaption>
      </figure>

      <?php $largeImg2 = get_field('largeimg2') ?>
      <figure class="section section6" style="background-image: url('<?php echo $largeImg2['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption2') ?></h5>
          </div>
        </figcaption>
      </figure>

      <?php $medImg1 = get_field('medimg1') ?>
      <figure class="section section2" style="background-image: url('<?php echo $medImg1['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption3') ?></h5>
          </div>
        </figcaption>
      </figure>

      <?php $medImg2 = get_field('medimg2') ?>
      <figure class="section section3" style="background-image: url('<?php echo $medImg2['url'] ?>')">
        <figcaption>
          <div class="wrapper">
            <h5><?php the_field('caption4') ?></h5>
          </div>
        </figcaption>
      </figure>

    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>